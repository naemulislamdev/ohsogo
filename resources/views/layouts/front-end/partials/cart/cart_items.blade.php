<div class="cart-offcanva">
    @if (session()->has('cart') && count(session()->get('cart')) > 0)
        <h6 class="free-shiping-txt shipping-gradient">
            You are eligible for free shipping.
        </h6>

        <div class="cart-added-products">
            <div id="cartAddedItems">
                @if (session()->has('cart') && count(session()->get('cart')) > 0)
                    @foreach (session()->get('cart') as $id => $cartItem)
                        <div class="cart-item" id="cart-item-{{ $id }}">
                            <div class="cart-img">
                                <a href="">
                                    <img src="{{ \App\CPU\ProductManager::product_image_path('thumbnail') }}/{{ $cartItem['thumbnail'] }}"
                                        alt="{{ $cartItem['name'] }}" />
                                </a>
                            </div>
                            <div class="cart-item-product-info ms-3">
                                <a href="">
                                    {{ $cartItem['name'] }}
                                    
                                </a>
                                <div
                                    class="cart-item-quantity_price mt-4 d-flex justify-content-between align-items-center">
                                    <div class="cart-item-quantity cart-increment-decrement">
                                        <button onclick="decrementQuantity({{ $id }})" class="decrement">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                        <p id="qty_{{ $id }}" class="mb-0 mx-2 showItem itemQuantity">
                                            {{ $cartItem['quantity'] }}</p>
                                        <input type="hidden" name="quantity" class="quantity" />
                                        <button onclick="incrementQuantity({{ $id }})" class="increment">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>

                                    <div class="cart-item-rate">
                                        @php
                                            $discounted_price =
                                                $cartItem['unit_price'] -
                                                \App\CPU\Helpers::get_product_discount_for_cart(
                                                    $cartItem,
                                                    $cartItem['unit_price'],
                                                );
                                            $total_price = $discounted_price * $cartItem['quantity'];


                                        @endphp
                                        <h5>৳ {{ \App\CPU\Helpers::currency_converter($total_price) }}</h5>
                                    </div>
                                </div>
                                <button onclick="removeFromCart({{ $id }})" title="Remove Cart"
                                    style="width: 50px; height: 50px"
                                    class="border-0 bg-white cart-item-remove-icon position-absolute">
                                    <img width="20px" src="{{ asset('assets') }}/images/icon/close-x.svg"
                                        alt="" />
                                </button>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-center mt-3">
                        <i style="font-size: 40px !important;" class="fa fa-shopping-bag fa-4x" aria-hidden="true"></i>
                        <h3 class="my-3">Your Cart is Empty!</h3>
                        <a href="" class="btn btn-secondary">Return to Shop</a>
                    </div>
                @endif
            </div>
            @include('layouts.front-end.partials.cart.cart_sm_related_products')
        </div>

        <!-- Subtotal -->
        <div class="sub-total-info">
            <div class="row align-items-center justify-content-between">
                <div class="col-6">
                    <div class="sub-total-txt">
                        <h5>Subtotal</h5>
                    </div>
                </div>
                <div class="col-6">
                    <div class="sub-total-price text-end">

                        <h5>৳ 2895 BDT</h5>

                    </div>
                </div>
            </div>
            <p>Taxes and shipping calculated at checkout</p>
        </div>
        <!-- Checkout / View Cart buttons -->
        <div class="two-btn mt-5 row">
            <div class="col-lg-6">
                <a href="{{ route('product.checkout') }}" class="chekout-cart-btn w-100 text-white text-center">Check
                    Out</a>
            </div>
            <div class="col-lg-6">
                <a href="{{ route('product.cart') }}" class="view-cart-btn w-100 text-center">View
                    Cart</a>
            </div>
        </div>
    @else
        <div class="text-center mt-5">
            <p style="font-size: 20px; font-weight: 400; line-height: 26px;">Your Cart is currently empty!</p>
            <a href="{{ route('collections', 'all') }}">
                <h5 style="font-weight: 600; font-size: 17px; text-transform: uppercase;">Return to Shop</h5>
            </a>
        </div>
    @endif

</div>
