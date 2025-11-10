<?php

namespace App\Http\Controllers\Web;


use App\CPU\CartManager;
use App\CPU\Helpers;
use App\Http\Controllers\Controller;
use App\Model\Cart;
use App\Model\Color;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CartController extends Controller
{
    // Add product to cart with stock validation
    public function addToCart(Request $request)
    {
        $product = Product::find($request->id); // Find product by ID

        // Check if product exists
        if (!$product) {
            return response()->json(['status' => 'error', 'message' => 'Product not found!']);
        }

        // Check stock availability
        if ($product->current_stock <= 0) {
            return response()->json(['status' => 'error', 'message' => 'Out of stock!']);
        }

        // Get current cart session
        $cart = session()->get('cart', []);
        // Calculate discount price if applicable
        $discountPrice = 0;
        if ($product->discount_price > 0) {
            if ($product->discount_type == 'percentage') {
                $discountPrice = $product->price - ($product->price * $product->discount / 100);
            } elseif ($product->discount_type == 'fixed') {
                $discountPrice = $product->discount_price;
            }
        }


        // If product already in cart, increase quantity
        if (isset($cart[$product->id])) {
            if ($cart[$product->id]['quantity'] >= $product->current_stock) {
                return response()->json(['status' => 'error', 'message' => 'Not enough stock available!']);
            }
            $cart[$product->id]['quantity'] += 1;
            return response()->json(['status' => 'info', 'message' => 'Already card added you!']);
        } else {
            // Add new product to cart
            $cart[$product->id] = [
                'name' => $product->name,
                'price' => $product->price,
                'discount' => $discountPrice,
                'thumbnail' => $product->thumbnail,
                'quantity' => 1,
                'current_stock' => $product->current_stock
            ];
        }

        // Save back to session
        session()->put('cart', $cart);

        return response()->json([
            'status' => 'success',
            'message' => $product->name . ' added to cart successfully!',
            'cart' => $cart,
            'count' => count($cart)

        ]);
    }

    public function getCartItems()
    {
        $cart = session()->get('cart', []);
        return response()->json($cart);
    }

    public function removeCartItem(Request $request)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$request->id])) {
            unset($cart[$request->id]);
            session()->put('cart', $cart);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Item removed from cart!',
            'cart' => $cart
        ]);
    }
    public function updateCart(Request $request)
    {
        $cart = session()->get('cart', []);
        $product = Product::find($request->id);

        if (!$product) {
            return response()->json(['status' => 'error', 'message' => 'Product not found!']);
        }

        if (isset($cart[$request->id])) {
            if ($request->action == "increase") {
                if ($cart[$request->id]['quantity'] >= $product->current_stock) {
                    return response()->json(['status' => 'error', 'message' => 'Not enough stock available!']);
                }
                $cart[$request->id]['quantity'] += 1;
            } elseif ($request->action == "decrease") {
                if ($cart[$request->id]['quantity'] > 1) {
                    $cart[$request->id]['quantity'] -= 1;
                } else {
                    unset($cart[$request->id]); // Remove item if quantity is 0
                }
            }
        }

        session()->put('cart', $cart);

        $subtotal = collect($cart)->sum(function ($item) {
            $price = $item['discount'] > 0 ? $item['discount'] : $item['price']; // Check if discount is available
            return $price * $item['quantity']; // Multiply by quantity
        });

        return response()->json([
            'status' => 'success',
            'message' => 'Cart updated successfully!',
            'cart' => $cart,
            'subtotal' => $subtotal,
            'total' => $subtotal
        ]);
    }
}
