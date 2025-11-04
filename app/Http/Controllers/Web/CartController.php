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
    public function variant_price(Request $request)
    {
        $product = Product::find($request->id);
        $str = '';
        $quantity = 0;
        $price = 0;

        if ($request->has('color')) {
            $str = Color::where('code', $request['color'])->first()->name;
        }

        foreach (json_decode(Product::find($request->id)->choice_options) as $key => $choice) {
            if ($str != null) {
                $str .= '-' . str_replace(' ', '', $request[$choice->name]);
            } else {
                $str .= str_replace(' ', '', $request[$choice->name]);
            }
        }

        if ($str != null) {
            $count = count(json_decode($product->variation));
            for ($i = 0; $i < $count; $i++) {
                if (json_decode($product->variation)[$i]->type == $str) {
                    $tax = Helpers::tax_calculation(json_decode($product->variation)[$i]->price, $product['tax'], $product['tax_type']);
                    $discount = Helpers::get_product_discount($product, json_decode($product->variation)[$i]->price);
                    $price = json_decode($product->variation)[$i]->price - $discount + $tax;
                    $quantity = json_decode($product->variation)[$i]->qty;
                }
            }
        } else {
            $tax = Helpers::tax_calculation($product->unit_price, $product['tax'], $product['tax_type']);
            $discount = Helpers::get_product_discount($product, $product->unit_price);
            $price = $product->unit_price - $discount + $tax;
            $quantity = $product->current_stock;
        }

        return [
            'price' => \App\CPU\Helpers::currency_converter($price * $request->quantity),
            'discount' => \App\CPU\Helpers::currency_converter($discount),
            'tax' => \App\CPU\Helpers::currency_converter($tax),
            'quantity' => $quantity
        ];
    }

    // public function addToCartOnSession(Request $request)
    // {
    //     $product = Product::find($request->id);
    //     $data = array();
    //     $data['id'] = $product->id;
    //     $str = '';
    //     $variations = [];
    //     $price = 0;
    //     //chek if out of stock
    //     if ($product['current_stock'] < $request['quantity']) {
    //         return response()->json([
    //             'data' => 0
    //         ]);
    //     }
    //     //check the color enabled or disabled for the product
    //     if ($request->has('color')) {
    //         //dd($request['color']);
    //         $data['color'] = $request['color'];
    //         $str = Color::where('code', $request['color'])->first()->name;
    //         //dd($str);
    //         $variations['color'] = $str;
    //     }
    //     //Gets all the choice values of customer choice option and generate a string like Black-S-Cotton
    //     foreach (json_decode(Product::find($request->id)->choice_options) as $key => $choice) {
    //         $data[$choice->name] = $request[$choice->name];
    //         $variations[$choice->title] = $request[$choice->name];
    //         if ($str != null) {
    //             $str .= '-' . str_replace(' ', '', $request[$choice->name]);
    //         } else {
    //             $str .= str_replace(' ', '', $request[$choice->name]);
    //         }
    //     }
    //     $data['variations'] = $variations;
    //     $data['variant'] = $str;
    //     if ($request->session()->has('cart')) {
    //         if (count($request->session()->get('cart')) > 0) {
    //             foreach ($request->session()->get('cart') as $key => $cartItem) {
    //                 if ($cartItem['id'] == $request['id'] && $cartItem['variant'] == $str) {
    //                     return response()->json([
    //                         'data' => 1
    //                     ]);
    //                 }
    //             }
    //         }
    //     }
    //     //Check the string and decreases quantity for the stock
    //     if ($str != null) {
    //         $count = count(json_decode($product->variation));
    //         for ($i = 0; $i < $count; $i++) {
    //             if (json_decode($product->variation)[$i]->type == $str) {
    //                 $price = json_decode($product->variation)[$i]->price;
    //                 if (json_decode($product->variation)[$i]->qty < $request['quantity']) {
    //                     return response()->json([
    //                         'data' => 0
    //                     ]);
    //                 }
    //             }
    //         }
    //     } else {
    //         $price = $product->unit_price;
    //     }

    //     $tax = ($price * $product->tax) / 100;
    //     $shipping_id = 1;
    //     $shipping_cost = 0;

    //     $data['quantity'] = $request['quantity'];
    //     $data['shipping_method_id'] = $shipping_id;
    //     $data['price'] = $price;
    //     $data['tax'] = $tax;
    //     $data['slug'] = $product->slug;
    //     $data['name'] = $product->name;
    //     $data['discount'] = Helpers::get_product_discount($product, $price);
    //     $data['shipping_cost'] = $shipping_cost;
    //     $data['thumbnail'] = $product->thumbnail;

    //     if ($request->session()->has('cart')) {
    //         $cart = $request->session()->get('cart', collect([]));
    //         $cart->push($data);
    //     } else {
    //         $cart = collect([$data]);
    //         $request->session()->put('cart', $cart);
    //     }

    //     session()->forget('coupon_code');
    //     session()->forget('coupon_discount');

    //     return response()->json([
    //         'data' => $data,
    //         'status' => 'success',
    //         'count' => session()->has('cart') ? count(session()->get('cart')) : 0
    //     ]);
    // }

    public function addToCartOnSession(Request $request)
    {
        $request->dd();
        $product = Product::find($request->id);

        if (!$product) {
            return response()->json(['status' => 'error', 'message' => 'Product not found']);
        }

        // Out of stock check
        if ($product->current_stock < $request->quantity) {
            return response()->json(['status' => 'error', 'message' => 'Out of stock']);
        }

        $data = [];
        $data['id'] = $product->id;
        $data['quantity'] = $request->quantity;
        $data['slug'] = $product->slug;
        $data['name'] = $product->name;
        $data['thumbnail'] = $product->thumbnail;

        $variantString = '';
        $variations = [];

        // Color check
        if ($request->has('color') && $request->color) {
            $colorName = Color::where('code', $request->color)->value('name');
            $variations['Color'] = $colorName;
            $variantString = $colorName;
            $data['color'] = $request->color;
        }

        // Choice options
        if (!empty($product->choice_options)) {
            foreach (json_decode($product->choice_options) as $choice) {
                $value = $request->get($choice->name);
                $variations[$choice->title] = $value;
                $variantString .= ($variantString ? '-' : '') . str_replace(' ', '', $value);
                $data[$choice->name] = $value;
            }
        }

        $data['variations'] = $variations;
        $data['variant'] = $variantString;

        // Check duplicate product in cart
        $cart = collect(session('cart', []));
        foreach ($cart as $item) {
            if ($item['id'] == $product->id && $item['variant'] == $variantString) {
                return response()->json(['status' => 'exists', 'message' => 'Already in cart']);
            }
        }

        // Price setup
        $price = $product->unit_price;
        if (!empty($variantString) && !empty($product->variation)) {
            foreach (json_decode($product->variation) as $variant) {
                if ($variant->type === $variantString) {
                    $price = $variant->price;
                    if ($variant->qty < $request->quantity) {
                        return response()->json(['status' => 'error', 'message' => 'Not enough stock']);
                    }
                }
            }
        }

        $data['price'] = $price;
        $data['tax'] = ($price * $product->tax) / 100;
        $data['discount'] = \App\CPU\Helpers::get_product_discount($product, $price);
        $data['shipping_cost'] = 0;

        // Store in session
        $cart->push($data);
        session(['cart' => $cart]);
        session()->forget(['coupon_code', 'coupon_discount']);

        return response()->json([
            'status' => 'success',
            'message' => 'Product added to cart',
            'count' => $cart->count(),
            'data' => $data
        ]);
    }


    public function subdomainOrdernow($id)
    {
        $request = request();
        $quantity = 1;
        $product = Product::find($id);
        $data = array();
        $data['id'] = $product->id;
        $str = '';
        $variations = [];
        $price = 0;
        //chek if out of stock
        if ($product['current_stock'] < $quantity) {
            return response()->json([
                'data' => 0
            ]);
        }

        //Check the string and decreases quantity for the stock
        if ($str != null) {
            $count = count(json_decode($product->variation));
            for ($i = 0; $i < $count; $i++) {
                if (json_decode($product->variation)[$i]->type == $str) {
                    $price = json_decode($product->variation)[$i]->price;
                    if (json_decode($product->variation)[$i]->qty < $quantity) {
                        return response()->json([
                            'data' => 0
                        ]);
                    }
                }
            }
        } else {
            $price = $product->unit_price;
        }

        $tax = ($price * $product->tax) / 100;
        $shipping_id = 1;
        $shipping_cost = 0;

        $data['quantity'] = $quantity;
        $data['shipping_method_id'] = $shipping_id;
        $data['price'] = $price;
        $data['tax'] = $tax;
        $data['slug'] = $product->slug;
        $data['name'] = $product->name;
        $data['discount'] = Helpers::get_product_discount($product, $price);
        $data['shipping_cost'] = $shipping_cost;
        $data['thumbnail'] = $product->thumbnail;

        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart', collect([]));
            $cart->push($data);
        } else {
            $cart = collect([$data]);
            $request->session()->put('cart', $cart);
        }

        session()->forget('coupon_code');
        session()->forget('coupon_discount');
        return redirect()->route('shop-cart');
    }

    public function updateNavCart()
    {
        return view('web-views.product-checkout');
    }

    //removes from Cart

    public function removeFromCart(Request $request)
    {
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart', collect([]));
            $cart->forget($request->key);
            $request->session()->put('cart', $cart);
        }

        session()->forget('coupon_code');
        session()->forget('coupon_discount');
        session()->forget('shipping_method_id');

        return view('web-views.cart');
    }
    public function totalCartCount()
    {
        $data = session()->has('cart') ? count(session()->get('cart')) : 0;
        return $data;
    }

    //updated the quantity for a cart item
    public function updateQuantity(Request $request)
    {
        $status = 1;
        $qty = 0;
        $cart = $request->session()->get('cart', collect([]));
        $cart = $cart->map(function ($object, $key) use ($request, &$status, &$qty) {
            if ($key == $request->key) {
                $product = Product::find($object['id']);
                $count = count(json_decode($product->variation));
                if ($count) {
                    for ($i = 0; $i < $count; $i++) {
                        if (json_decode($product->variation)[$i]->type == $object['variant']) {
                            if (json_decode($product->variation)[$i]->qty < $request->quantity) {
                                $status = 0;
                                $qty = $object['quantity'];
                            } else {
                                $object['quantity'] = $request->quantity;
                            }
                        }
                    }
                } else if ($product['current_stock'] < $request->quantity) {
                    $status = 0;
                    $qty = $object['quantity'];
                } else {
                    $object['quantity'] = $request->quantity;
                }
            }
            return $object;
        });

        if ($status == 0) {
            return response()->json([
                'data' => $status,
                'qty' => $qty,
            ]);
        }

        $request->session()->put('cart', $cart);

        session()->forget('coupon_code');
        session()->forget('coupon_discount');

        return view('web-views.cart');
    }
}
