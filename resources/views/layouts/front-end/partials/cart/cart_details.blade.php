<div class="container">
                    <div class="d-flex justify-content-between align-items-center pt-5">
                        <h1 style="font-size: 33px; font-weight: 800;">CART</h1>
                        <a style="font-size: 16px; font-weight: 400; text-transform: uppercase; color: #414042;"
                            href="{{ route('collections', 'all') }}">Return
                            to shop</a>
                    </div>
                </div>
                <!-- cart-box-details for lg device -->
                <div class="container py-5 cart-box-container d-none d-md-block">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="50%" scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th class="text-end" scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (session()->has('cart') && count(session()->get('cart')) > 0)
                                    @foreach (session()->get('cart') as $id => $cartItem)
                                        <tr>
                                            <!-- Product image + title -->
                                            <td>
                                                <div class="product-content d-flex ">
                                                    <img src="{{ \App\CPU\ProductManager::product_image_path('thumbnail') }}/{{ $cartItem['thumbnail'] }}"
                                                        class="rounded me-3" alt="Product">
                                                    <h5>{{ $cartItem['name'] }}</h5>
                                                </div>
                                            </td>

                                            <!-- Price -->

                                            <td class="item-price">
                                                @php
                                                    $item_price = $cartItem['unit_price'] - $cartItem['discount'];

                                                @endphp
                                                <span>৳ {{ \App\CPU\Helpers::currency_converter($item_price) }}</span>
                                            </td>
                                            <!-- Quantity -->
                                            <td>
                                                <div
                                                    class="d-flex align-items-center  gap-3 table-quantity cart-increment-decrement">
                                                    <button onclick="decrementQuantity({{ $id }})"
                                                        class="decrement"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            class="bi bi-dash" viewBox="0 0 16 16">
                                                            <path
                                                                d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                                        </svg></button>
                                                    <span id="qty_{{ $id }}" class="showItem"
                                                        style="color: #414042;">{{ $cartItem['quantity'] }}</span>
                                                    <input type="hidden" name="quantity" class="quantity">
                                                    <button onclick="incrementQuantity({{ $id }})"
                                                        class="increment"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            class="bi bi-plus" viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                                        </svg></i></button>
                                                </div>
                                            </td>

                                            <!-- Total + Delete -->
                                            <td class="d-flex flex-column justify-content-end align-items-end">
                                                @php
                                                    $total_price =
                                                        ($cartItem['unit_price'] - $cartItem['discount']) *
                                                        $cartItem['quantity'];
                                                @endphp

                                                <span class="item-price">৳
                                                    {{ \App\CPU\Helpers::currency_converter($total_price) }}</span>
                                                <button onclick="removeFromCart({{ $id }})" title="Remove"
                                                    style="color: #414042;" class="border-0 bg-transparent mt-3 text-muted">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                @endif


                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- moblie cart product details or info -->
                <div class="container mobile-cart-product-details my-5 d-block d-md-none">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="cart-list-title d-flex justify-content-between align-items-center">
                                <p>Product</p>
                                <p>Total</p>
                            </div>
                            @foreach (session()->get('cart') as $id => $cartItem)
                                <div class="product-content d-flex align-items-center mb-4">
                                    <div class="d-flex " style="width: 70%">
                                        <div style="width: 30%">
                                            <img src="{{ \App\CPU\ProductManager::product_image_path('thumbnail') }}/{{ $cartItem['thumbnail'] }}"
                                                class="rounded me-3" alt="{{ $cartItem['name'] }}" style="max-width: 100%">

                                        </div>
                                        <div style="width: 70%" class="ms-1 d-flex flex-column  gap-2 ">
                                            <h5 style="font-size: 15px; font-weight: 400; line-height: 20px;">
                                                {{ $cartItem['name'] }}</h5>

                                            <div
                                                class="d-flex align-items-center gap-3 cart-increment-decrement  cart-increment-decrement">
                                                <button onclick="decrementQuantity({{ $id }})" class="decrement"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor" class="bi bi-dash"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                                    </svg></button>
                                                <input type="hidden" name="quantity" class="quantity">
                                                <span class="showItem"
                                                    style="color: #414042;">{{ $cartItem['quantity'] }}</span>
                                                <button onclick="incrementQuantity({{ $id }})" class="increment"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor" class="bi bi-plus"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                                    </svg></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="width: 30%" class="d-flex flex-column justify-content-end align-items-end">
                                        @php
                                            $total_price =
                                                ($cartItem['unit_price'] - $cartItem['discount']) *
                                                $cartItem['quantity'];
                                        @endphp
                                        <span class="item-price" style="color: #f1729f;">৳ {{ \App\CPU\Helpers::currency_converter($total_price) }}</span>
                                        <button title="Remove" style="color: #414042;"
                                            class="border-0 bg-transparent mt-3 text-muted align-self-end">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Order Note and subtotal section start -->
                <div class="order-note-subtotal">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="order-note">
                                    <label class="form-label">Add a note to your order</label>
                                    <textarea placeholder="How can we help you ?" class="form-control" name="order-none" name="order_note" id=""></textarea>
                                </div>
                            </div>
                            <div class="col-lg-9 text-center text-lg-end">
                                <div class="order-total-checkout mt-5 mt-lg-0">
                                    @php
                                        $sub_total = 0;
                                        $cartItems = session()->get('cart', []);

                                        foreach ($cartItems as $cartItem) {
                                            $unit_price = $cartItem['unit_price'];
                                            $discount = $cartItem['discount'];

                                            $sub_total += ($unit_price - $discount) * $cartItem['quantity'];
                                        }
                                    @endphp


                                    <h6>Subtotal ৳ {{ \App\CPU\Helpers::currency_converter($sub_total) }} BDT</h6>
                                    <p>Taxes and shipping calculated at checkout</p>
                                    <div class="btn-container mt-3 ms-auto">
                                        <a style="color: #fff;" href="{{ route('product.checkout') }}"
                                            class="chekout-cart-btn text-center w-100 py-3">CHECK OUT </a>
                                        <h6 style="font-size: 14px;" class="free-shiping-txt shipping-gradient  mt-2 ">
                                            You are eligible for free shipping.
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Order note and subtotal section end -->
