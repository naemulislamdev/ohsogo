@extends('layouts.front-end.app')
@section('title', 'Checkout')
@push('styles')
    <style>
        .shipping-section {
            padding: 1rem 0;
        }

        .shipping-section h6 {
            font-size: 15px;
            font-weight: 500;
            color: var(--color-text-primary);
            margin: 0 0 14px;
        }

        .shipping-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .shipping-box {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 16px;
            border: 1.5px solid #dee2e6;
            border-radius: 10px;
            cursor: pointer;
            transition: border-color 0.18s, background 0.18s;
            background: #ffffff;
            position: relative;
            user-select: none;
        }

        .shipping-box:hover {
            border-color: #adb5bd;
            background: #f8f9fa;
        }

        .shipping-box.selected {
            border-color: #185FA5;
            background: #E6F1FB;
        }

        .shipping-box input[type="radio"] {
            display: none;
        }

        .radio-dot {
            width: 18px;
            height: 18px;
            border-radius: 50%;
            border: 2px solid #adb5bd;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: border-color 0.18s;
        }

        .shipping-box.selected .radio-dot {
            border-color: #185FA5;
        }

        .radio-inner {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #185FA5;
            display: none;
        }

        .shipping-box.selected .radio-inner {
            display: block;
        }

        .shipping-info {
            flex: 1;
            min-width: 0;
        }

        .shipping-title {
            font-size: 13.5px;
            font-weight: 500;
            color: #212529;
            display: block;
        }

        .shipping-cost {
            font-size: 13px;
            color: #185FA5;
            font-weight: 500;
            display: block;
            margin-top: 2px;
        }

        .shipping-box.selected .shipping-cost {
            color: #0C447C;
        }

        .shipping-badge {
            position: absolute;
            top: -1px;
            right: 10px;
            font-size: 10px;
            font-weight: 500;
            background: #185FA5;
            color: #fff;
            padding: 2px 8px;
            border-radius: 0 0 6px 6px;
            display: none;
            text-transform: capitalize;
        }

        .shipping-box.selected .shipping-badge {
            display: block;
        }

        /* Responsive */
        @media (max-width: 576px) {
            .shipping-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endpush
@section('main-content')
    <section class="product-checkout-section overflow-hidden">
        <div class="row">
            <!-- Customer Info & Payment -->
            <div class="col-lg-6 customer-info-and-payment section-scroll">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"><!-- empty block --></div>
                        <div class="col-lg-9">
                            <!-- Logo & Cart -->
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="/">
                                    <img class="logo" src="./assets/images/logo/logo_High_Res_Mob_x320.avif"
                                        alt="OHSOGO Logo" />
                                </a>
                                <a href="{{ route('product.cart') }}" class="text-dark"><i
                                        class="fa fa-shopping-bag"></i></a>
                            </div>

                            <!-- Mobile Order Summary Accordion Start -->
                            @include('layouts.front-end.partials.mobile_checkout_accordion')
                            <!-- Order Summary Accordion End -->

                            <!-- Checkout Form -->
                            <div class="checkout-form mt-2">
                                <form action="{{ route('order.store') }}" method="POST">
                                    @csrf

                                    <!-- Delivery -->
                                    <div class="deliver-info mt-3">
                                        <h5>Delivery</h5>

                                        <!-- Name -->
                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <div class="form-floating">
                                                    <input class="form-control @error('f_name') is-invalid @enderror"
                                                        value="{{ old('f_name') }}" type="text" name="f_name"
                                                        id="first-name" placeholder="First name" />
                                                    <label class="text-muted" for="first-name">First name</label>
                                                    @error('f_name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="col-lg-6 mt-3 mt-lg-0">
                                                <div class="form-floating">
                                                    <input
                                                        class="form-control @error('l_name')
                                                is-invalid
                                            @enderror"
                                                        value="{{ old('l_name') }}" type="text" name="l_name"
                                                        id="last-name" placeholder="Last name" />
                                                    <label class="text-muted" for="last-name">Last name</label>
                                                    @error('l_name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                            </div>
                                        </div>


                                        <div class="mt-3">
                                            <div class="form-floating">
                                                <input class="form-control " value="{{ old('email') }}" type="email"
                                                    name="email" id="email" placeholder="Email" />
                                                <label for="email">Email</label>
                                            </div>
                                        </div>

                                        <!-- Phone -->
                                        <div class="mt-3">
                                            <div class="form-floating">
                                                <input
                                                    class="form-control  @error('phone')
                                                is-invalid
                                            @enderror"
                                                    value="{{ old('phone') }}" type="tel" name="phone" id="phone"
                                                    placeholder="Phone" />
                                                <label for="phone">Phone</label>
                                                @error('phone')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Address -->
                                        <div class="mt-3">
                                            <div class="form-floating">
                                                <input
                                                    class="form-control  @error('address')
                                                is-invalid
                                            @enderror"
                                                    value="{{ old('address') }}" type="text" name="address"
                                                    id="address" placeholder="Address" />
                                                <label for="address">Address</label>
                                                @error('address')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Shipping -->
                                        <div class="mt-4 shipping">
                                            <h6>Shipping Method</h6>
                                            <div class="row">
                                                @foreach (\App\Model\ShippingMethod::where(['status' => 1])->get() as $shipping)
                                                    <div class="col-md-6">
                                                        <label class="shipping-box"
                                                            onclick="selectShipping(this, {{ $shipping['id'] }})">
                                                            <span class="shipping-badge">selected</span>
                                                            <input type="radio" name="shipping_method"
                                                                class="shipping-method" id="shipping_{{ $shipping['id'] }}"
                                                                data-cost="{{ \App\CPU\Helpers::currency_converter2($shipping['cost']) }}"
                                                                value="{{ $shipping['id'] }}">
                                                            <div class="radio-dot">
                                                                <div class="radio-inner"></div>
                                                            </div>
                                                            <div class="shipping-info">
                                                                <span
                                                                    class="shipping-title">{{ $shipping['title'] }}</span>
                                                                <span
                                                                    class="shipping-cost">{{ \App\CPU\Helpers::currency_converter($shipping['cost']) }}</span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                        <!-- Payment -->
                                        <div class="payment-info mt-4">
                                            <h4>Payment</h4>
                                            <p>All transactions are secure and encrypted.</p>
                                            <!-- payment accordion -->
                                            <div class="accordion  border-0" id="accordionExample">
                                                <div class="accordion-item border">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button p-0 acc-btn-2 collapsed"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                                            aria-controls="collapseTwo">

                                                            <label class="shipping-box">
                                                                <input class="form-check-input" type="radio" checked
                                                                    name="payment_method" value="Cash On Delivery">
                                                                <span class="d-inline-block mt-1 text-dark ">Cash On
                                                                    Delivery</span>
                                                            </label>
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body acc-body-2">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border">
                                                    <div class="accordion-header" id="headingOne">

                                                        <div class="accordion-button p-0 d-flex justify-content-between align-items-center show"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">


                                                            <label class="shipping-box">
                                                                <input class="form-check-input" value="SSLCOMMERZ"
                                                                    type="radio" name="payment_method">
                                                                <span class="d-inline-block ms-1 mt-1 text-dark ">
                                                                    SSLCOMMERZ</span>
                                                                <div class="ms-auto">
                                                                    <img src="./assets/images/logo/visa.svg"
                                                                        alt="">
                                                                    <img src="./assets/images/logo/mastercard.svg"
                                                                        alt="">
                                                                    <img src="./assets/images/logo/american-express.svg"
                                                                        alt="">
                                                                    <div
                                                                        class="d-inline-block position-relative paymentTwo-box">
                                                                        <span
                                                                            class="btn btn-light py-0 border payment-2btn">+2</span>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center gap-1 bg-dark px-3 py-2 rounded-2 payment-hover-item">
                                                                            <img src="./assets/images/logo/diners_club.svg"
                                                                                alt="diners club">
                                                                            <img src="./assets/images/logo/unionpay.svg"
                                                                                alt="unionpay">
                                                                            <div class="triangle"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div id="collapseOne" class="accordion-collapse collapse hide"
                                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body text-center">
                                                            <img style="width: 150px;"
                                                                src="./assets/images/icon/card-icon.png" alt="">
                                                            <p class="mb-0 mt-3">After clicking “Pay now”, you will be
                                                                redirected to SSLCOMMERZ to complete your purchase securely.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <button type="submit" class="btn btn-lg btn-danger w-100 my-4">Complete
                                                Order</button>
                                        </div>

                                        <div class="important-links">
                                            <div class="border-top ">
                                                <nav class="mt-2">
                                                    <ul style="list-style: none"
                                                        class="ps-0 ms-0 d-flex flex-column flex-lg-row justify-content-center justify-content-lg-around text-center text-lg-start">
                                                        <li class="d-inline"><a
                                                                class="small text-dark text-decoration-underline fw-light d-block"
                                                                href="{{ route('shipping') }}">Shipping</a></li>
                                                        <li class="d-inline"><a
                                                                class="small text-dark text-decoration-underline fw-light d-block"
                                                                href="">Refund Policy </a></li>
                                                        <li class="d-inline"><a
                                                                class="small text-dark text-decoration-underline fw-light d-block"
                                                                href="{{ route('privacy') }}">Privacy Policy</a></li>
                                                        <li class="d-inline"><a
                                                                class="small text-dark text-decoration-underline fw-light d-block"
                                                                href="{{ route('terms') }}">Terms of Service</a></li>
                                                        <li class="d-inline"><a
                                                                class="small text-dark text-decoration-underline fw-light d-block"
                                                                href="{{ route('contact') }}">Contact</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Checkout Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cart Details -->
            <div class="col-lg-6 section-scroll checkout-cart-details d-none d-lg-block">
                <div class="container">
                    <div class="all-checkout-container">
                        @if (session()->has('cart') && count(session()->get('cart')) > 0)
                            @foreach (session()->get('cart') as $id => $cartItem)
                                <div class="cart-dtls-item mb-3">
                                    <div class="checkout-cart-item row">
                                        <div class="product-image position-relative col-2 p-0">
                                            <img class=" border rounded-3"
                                                src="{{ \App\CPU\ProductManager::product_image_path('thumbnail') }}/{{ $cartItem['thumbnail'] }}"
                                                alt="product image" />
                                            <span class="badge rounded-pill cart-badge">{{ $cartItem['quantity'] }}</span>
                                        </div>
                                        <div class="product-name col-8">
                                            <h6>
                                                {{ $cartItem['name'] }}
                                            </h6>
                                        </div>
                                        <div class="product-price col-2">
                                            @php
                                                $total_price =
                                                    ($cartItem['unit_price'] - $cartItem['discount']) *
                                                    $cartItem['quantity'];
                                            @endphp
                                            <h6>৳ {{ \App\CPU\Helpers::currency_converter($total_price) }}</h6>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="text-center mt-3">
                                <i style="font-size: 40px !important;" class="fa fa-shopping-bag fa-4x"
                                    aria-hidden="true"></i>
                                <h3 class="my-3">Your Cart is Empty!</h3>
                                <a href="" class="btn btn-secondary">Return to Shop</a>
                            </div>
                        @endif


                        <button class="scroll-hint">
                            Scroll down for more items
                        </button>
                    </div>
                    <div class="checkout-summary mt-4">
                        <div class="discount-code">
                            <form class="d-flex add_coupon" method="POST">
                                @csrf
                                <div class="form-floating w-75">
                                    <input class="form-control discountInput" type="text" id="discount_code"
                                        name="discount_code" placeholder="Discount Code">
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
                                    <span>Subtotal · {{ count(session()->get('cart')) }} items</span>
                                    <span>৳ {{ \App\CPU\Helpers::currency_converter($sub_total) }}</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Shipping</span>
                                    <span>Free</span>
                                </div>

                                <div class="d-flex justify-content-between fw-bold mt-3">
                                    <span class="fs-5">Total</span>
                                    <span><span class="bdt-txt">(BDT)</span>
                                        {{ \App\CPU\Helpers::currency_converter($sub_total) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        function selectShipping(el, id) {
            // UI update
            document.querySelectorAll('.shipping-box').forEach(b => b.classList.remove('selected'));
            el.classList.add('selected');
            el.querySelector('input[type=radio]').checked = true;

            // তোমার existing AJAX call
            set_shipping_id(id);
        }

        function set_shipping_id(id) {
            @foreach (session()->get('cart') as $key => $item)
                let key = '{{ $key }}';
                @break
            @endforeach
            $.get({
                url: '{{ url('/') }}/customer/set-shipping-method',
                dataType: 'json',
                data: {
                    id: id,
                    key: key
                },
                beforeSend: function() {
                    $('#loading').show();
                },
                success: function(data) {
                    if (data.status == 1) {
                        toastr.success('Shipping area is selected', {
                            CloseButton: true,
                            ProgressBar: true
                        });
                        $('.summary-cart').empty().html(data.html);
                        // setInterval(function () {
                        //     location.reload();
                        // }, 2000);
                    } else {
                        toastr.error('Choose proper shipping area.', {
                            CloseButton: true,
                            ProgressBar: true
                        });
                    }
                },
                complete: function() {
                    $('#loading').hide();
                },
            });
        }
    </script>
    <script>
        // product checkout scroll hint button script
        $(document).ready(function() {
            let $container = $(".all-checkout-container");
            let $scrollHint = $(".scroll-hint");

            if ($container[0].scrollHeight > $container[0].clientHeight) {
                $scrollHint.show();
            } else {
                $scrollHint.hide();
            }

            $container.on("scroll", function() {
                if ($(this).scrollTop() > 11) {
                    $scrollHint.addClass("hide");
                } else {
                    $scrollHint.removeClass("hide");
                }
            });
        });
    </script>
    <script>
        const checkbox = document.getElementById('text-news-offer');
        const inputBox = document.getElementById('extra-input-box');

        checkbox.addEventListener('change', function() {
            if (this.checked) {
                inputBox.style.display = 'block';
            } else {
                inputBox.style.display = 'none';
            }
        });
    </script>
    <script>
        $(document).ready(function() {

            function toggleCountryFields() {
                let country = $('#country').val();

                if (country === 'Bangladesh') {
                    $('#postalCodeBox').removeClass('d-none');
                    $('#emirateBox').addClass('d-none');
                } else if (country === 'United Arab Emirates') {
                    $('#postalCodeBox').addClass('d-none');
                    $('#emirateBox').removeClass('d-none');
                }
            }

            // On page load
            toggleCountryFields();

            // On change
            $('#country').on('change', function() {
                toggleCountryFields();
            });

        });
    </script>
    <script>
        document.getElementById('phone').addEventListener('input', function() {
            const phoneInput = this.value;
            const phoneFeedback = document.getElementById('phoneFeedback');
            const regex = /^(01[3-9]\d{8})$/;

            if (phoneInput === '') {
                phoneFeedback.textContent = '';
            } else if (!regex.test(phoneInput)) {
                phoneFeedback.classList.add('text-danger');
                phoneFeedback.textContent = 'Please enter a valid Bangladeshi phone number (e.g. 0171XXXXXXX)';
            } else {
                phoneFeedback.textContent = 'Valid phone number!';
                phoneFeedback.classList.remove('text-danger');
                phoneFeedback.classList.add('text-success');
            }
        });

        // Also validate when the field loses focus
        document.getElementById('phone').addEventListener('blur', function() {
            const phoneInput = this.value;
            const phoneFeedback = document.getElementById('phoneFeedback');
            const regex = /^(01[3-9]\d{8})$/;

            if (phoneInput === '') {
                phoneFeedback.textContent = 'Phone number is required';
            } else if (!regex.test(phoneInput)) {
                phoneFeedback.textContent = 'Please enter a valid Bangladeshi phone number (e.g. 0171XXXXXXX)';
            }
        });
    </script>
@endpush
