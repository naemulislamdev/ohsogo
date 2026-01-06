<style>
    .cart-badge {
        position: absolute;
        top: -9px;
        right: -7px;
    }
</style>
<div class="order-summary-accordion mt-4 mb-4 d-block d-lg-none">
    <div class="accordion" id="orderSummaryAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSummary">
                <button class="accordion-button d-flex justify-content-between align-items-center" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseSummary" aria-expanded="false"
                    aria-controls="collapseSummary">
                    @php
                        $sub_total = 0;
                        $cartItems = session()->get('cart', []);

                        foreach ($cartItems as $cartItem) {
                            $unit_price = $cartItem['unit_price'];
                            $discount = $cartItem['discount'];

                            $sub_total += ($unit_price - $discount) * $cartItem['quantity'];
                        }
                    @endphp
                    <span class="text-dark fw-bold">Order Summary</span>
                    <span class="ms-auto fw-bold">৳{{ \App\CPU\Helpers::currency_converter($sub_total) }} BDT</span>
                </button>
            </h2>
            <div id="collapseSummary" class="accordion-collapse collapse hide" aria-labelledby="headingSummary"
                data-bs-parent="#orderSummaryAccordion">
                <div class="accordion-body border-top">
                    <div>
                        <div class="all-checkout">
                            @if (session()->has('cart') && count(session()->get('cart')) > 0)
                                @foreach (session()->get('cart') as $id => $cartItem)
                                    <div class="cart-dtls-item mt-4">
                                        <div class="checkout-cart-item row">
                                            <div class="product-image position-relative col-2 p-0">
                                                <img class=" border rounded-3"
                                                    src="{{ \App\CPU\ProductManager::product_image_path('thumbnail') }}/{{ $cartItem['thumbnail'] }}"
                                                    alt="{{ $cartItem['name'] }}" />
                                                <span
                                                    class="bg-secondary badge badge-secondary rounded-pill cart-badge">{{ $cartItem['quantity'] }}</span>
                                            </div>
                                            <div class="product-name col-6 pe-0">
                                                <h6>
                                                    {{ $cartItem['name'] }}
                                                </h6>



                                            </div>
                                            <div class="product-price col-4 my-0 pe-0">
                                                @php
                                                    $total_price =
                                                        ($cartItem['unit_price'] - $cartItem['discount']) *
                                                        $cartItem['quantity'];
                                                @endphp
                                                <h6>৳ {{ \App\CPU\Helpers::currency_converter($total_price) }}</h6>
                                            </div>
                                        </div>
                                        <!-- mobile mini accordion -->
                                        {{-- @if ($cartItem['quantity'] > 1)
                                            <div class="mini-accordion ms-5">
                                                <div class="accordion multiple-product-accordion mt-2"
                                                    id="accordionPanelsStayOpenExample-{{ $cartItem['id'] }}">

                                                    <div class="accordion-item border-0">

                                                        <h2 class="accordion-header"
                                                            id="panelsStayOpen-heading-{{ $cartItem['id'] }}">

                                                            <button id="totalSingleItemOne-{{ $cartItem['id'] }}"
                                                                class="accordion-button collapsed p-0" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapse-{{ $cartItem['id'] }}"
                                                                aria-expanded="false"
                                                                aria-controls="panelsStayOpen-collapse-{{ $cartItem['id'] }}">
                                                                Show items
                                                            </button>

                                                        </h2>

                                                        <div id="panelsStayOpen-collapse-{{ $cartItem['id'] }}"
                                                            class="accordion-collapse collapse"
                                                            aria-labelledby="panelsStayOpen-heading-{{ $cartItem['id'] }}"
                                                            data-bs-parent="#accordionPanelsStayOpenExample-{{ $cartItem['id'] }}">

                                                            <div class="accordion-body">
                                                                <div class="sub-product d-flex">
                                                                    <img style="height: 50px; width: 50px;"
                                                                        src="{{ \App\CPU\ProductManager::product_image_path('thumbnail') }}/{{ $cartItem['thumbnail'] }}"
                                                                        alt="{{ $cartItem['name'] }}">

                                                                    <p style="font-size: 12px; font-weight: 600;"
                                                                        class="mb-0 ms-3">
                                                                        {{ $cartItem['quantity'] }} ×
                                                                        {{ $cartItem['name'] }}
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif --}}
                                    </div>
                                @endforeach
                            @endif

                            {{-- <div class="cart-item" id="cart-item-{{ $id }}">
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
                                                 $total_price =
                                                     ($cartItem['unit_price'] - $cartItem['discount']) *
                                                     $cartItem['quantity'];
                                             @endphp
                                             <h5>৳ {{ \App\CPU\Helpers::currency_converter($total_price) }}
                                             </h5>
                                         </div>
                                     </div>
                                     <button onclick="removeFromCart({{ $id }})" title="Remove Cart"
                                         style="width: 50px; height: 50px"
                                         class="border-0 bg-white cart-item-remove-icon position-absolute">
                                         <img width="20px" src="{{ asset('assets') }}/images/icon/close-x.svg"
                                             alt="" />
                                     </button>
                                 </div>
                             </div> --}}
                        </div>
                        <div class="checkout-summary mt-4">
                            <div class="discount-code">
                                <form action="" class="d-flex">
                                    <div class="form-floating">
                                        <input class="form-control discountInput" type="text" name="discount-code"
                                            id="discount_code" placeholder="Discount Code">
                                        <label for="discount_code">Discount Code</label>
                                    </div>
                                    <button type="submit" class="ms-3 border border-2 btn btn-light btn-lg applyBtn"
                                        disabled>Apply</button>
                                </form>
                            </div>
                            <div class="price-info">
                                <div class="order-summary mt-4">
                                    <div class="d-flex justify-content-between mb-2">
                                        @php
                                            $sub_total = 0;
                                            $cartItems = session()->get('cart', []);

                                            foreach ($cartItems as $cartItem) {
                                                $unit_price = $cartItem['unit_price'];
                                                $discount = $cartItem['discount'];

                                                $sub_total += ($unit_price - $discount) * $cartItem['quantity'];
                                            }
                                        @endphp
                                        <span>Subtotal · {{$cartItem['quantity']}} items</span>
                                        <span>৳{{ \App\CPU\Helpers::currency_converter($sub_total) }} BDT</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Shipping</span>
                                        <span>Free</span>
                                    </div>

                                    <div class="d-flex justify-content-between fw-bold mt-3">
                                        <span class="fs-5">Total</span>
                                        <span><span class="bdt-txt">(BDT)</span>
                                            ৳{{ \App\CPU\Helpers::currency_converter($sub_total) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
