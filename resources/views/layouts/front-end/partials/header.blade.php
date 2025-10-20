<!-- Navigation -->
@php
    $categoriesFirst3 = Illuminate\Support\Facades\DB::table('categories')->take(3)->get();
    $categoriesLast3 = Illuminate\Support\Facades\DB::table('categories')->skip(3)->take(6)->get();
    $categories = Illuminate\Support\Facades\DB::table('categories')->get();

@endphp

<!-- Start Header & Navigation Section -->
<header id="header">
    <div class="container">
        <div class="row py-2 py-lg-3">
            {{-- desktop search --}}
            <div class="col-md-2 d-none d-lg-block header-icon">
                <i class="fa fa-search search-icon cursor-pointer"></i>

                <!-- modal -->
                <div class="search-modal">
                    <div class="search-wrapper">
                        <i class="fa fa-search"></i>
                        <input type="text" class="search-box" placeholder="Search" />
                        <i class="fa fa-times close-btn"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <nav class="navbar">
                    <div class="menu-area">
                        <ul>
                            @foreach ($categoriesFirst3 as $category)
                                <li class="dd-btn1">
                                    <a href="{{ route('page') }}"> {{ $category->name }} <i
                                            class="fa fa-angle-down"></i></a>
                                    {{-- subcategory dropdown  --}}
                                    <div class="dropdown-menu1">
                                        <ul>
                                            <li class="dd-btn2">
                                                <a href="category.html">
                                                    <span> Hari Tools</span>
                                                    <i class="fa fa-angle-right float-right mt-1"></i></a>

                                                <div class="dropdown-menu2">
                                                    <ul class="w-nav-list level_3">
                                                        <li class="dd-btn3">
                                                            <a href="#">Hair cutting<i
                                                                    class="fa fa-angle-right float-right mt-1"></i></a>
                                                            <div class="dropdown-menu3">
                                                                <ul class="w-nav-list level_3">
                                                                    <li><a href="#">Child manue</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dd-btn2">
                                                <a href="#"><i class="fa fa-long-arrow-right"></i> Face Makup
                                                    <i class="fa fa-angle-right float-right mt-1"></i></a>
                                                <div class="dropdown-menu2">
                                                    <ul>
                                                        <li><a href="#">Makup one</a></li>
                                                        <li><a href="#">Makup two</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dd-btn2">
                                                <a href="#"><i class="fa fa-long-arrow-right"></i>Face & Body
                                                    Care<i class="fa fa-angle-right float-right mt-1"></i></a>
                                            </li>
                                            <li class="dd-btn2">
                                                <a href="#"><i class="fa fa-long-arrow-right"></i>Lip Beauty<i
                                                        class="fa fa-angle-right float-right mt-1"></i></a>
                                            </li>
                                            <li class="dd-btn2">
                                                <a href="#"><i class="fa fa-long-arrow-right"></i>Hari Care<i
                                                        class="fa fa-angle-right float-right mt-1"></i></a>
                                            </li>
                                            <li class="dd-btn2">
                                                <a href="#"><i class="fa fa-long-arrow-right"></i>Clothing<i
                                                        class="fa fa-angle-right float-right mt-1"></i></a>
                                            </li>
                                            <li class="dd-btn2">
                                                <a href="#"><i class="fa fa-long-arrow-right"></i>Eye Makeup<i
                                                        class="fa fa-angle-right float-right mt-1"></i></a>
                                            </li>
                                            <li class="dd-btn2">
                                                <a href="#"><i class="fa fa-long-arrow-right"></i>Jewellery<i
                                                        class="fa fa-angle-right float-right mt-1"></i></a>
                                            </li>
                                            <li class="dd-btn2">
                                                <a href="#"><i class="fa fa-long-arrow-right"></i>Ladies Bag<i
                                                        class="fa fa-angle-right float-right mt-1"></i></a>
                                            </li>
                                            <li class="dd-btn2">
                                                <a href="#"><i class="fa fa-long-arrow-right"></i>Saree<i
                                                        class="fa fa-angle-right float-right mt-1"></i></a>
                                            </li>
                                            <li class="dd-btn2">
                                                <a href="#"><i class="fa fa-long-arrow-right"></i>Cosmetics<i
                                                        class="fa fa-angle-right float-right mt-1"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <i class="fa fa-bars menu-icon"></i>
                    <a class="d-block d-lg-none" style="margin-left: 20px; margin-top: 12px;"
                        href="{{ url('/') }}">
                        <img style="width: 100px"src="assets/images/logo/logo_High_Res_Mob_x320.avif" alt="logo">
                    </a>
                    {{-- moblile search --}}
                    <div class="d-block d-lg-none mt-2">
                        <i class="fa fa-search search-icon cursor-pointer"></i>

                        <!-- modal -->
                        <div class="search-modal">
                            <div class="search-wrapper">
                                <i class="fa fa-search"></i>
                                <input type="text" class="search-box" placeholder="Search" />
                                <i class="fa fa-times close-btn"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product-offcanvas me-3 d-block d-lg-none mt-2">
                        <div class="cart-wrapper" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                            aria-controls="offcanvasRight">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            <span class="badge bg-dark rounded-pill cart-badge">3</span>
                        </div>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="row align-items-start">
                                <div class="suggested-product col-md-5 ps-3 d-none d-sm-block">
                                    <div class="ps-4 pt-3">
                                        <h3>You may also like</h3>

                                        <div class="suggested-product-item row align-items-start mb-4">
                                            <div class="suggested-img col-3 px-0">
                                                <a href="">
                                                    <img src="{{ asset('assets') }}/images/related-product/ChatGPTImageJul31_2025_04_14_18PM.avif"
                                                        alt="product image" />
                                                </a>
                                            </div>
                                            <div class="suggested-product-details col-9">
                                                <div class="suggeted-title">
                                                    <a href="">
                                                        <h5>
                                                            Zayn & Myza Brightening Vitamin C Exfoliating
                                                            Face Wash (100ml) - Pack of 02
                                                        </h5>
                                                    </a>
                                                </div>
                                                <div class="suggested-price">
                                                    <h6>
                                                        <span
                                                            class="d-inline-block text-decoration-line-through">৳450</span>
                                                        ৳319
                                                    </h6>
                                                </div>
                                                <div class="suggested-cart">
                                                    <a href="" title="Add to Cart"><img
                                                            src="{{ asset('assets') }}/images/icon/parcel.png"
                                                            alt="bag icon" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="suggested-product-item row align-items-start mb-4">
                                            <div class="suggested-img col-3 px-0">
                                                <a href="">
                                                    <img src="{{ asset('assets') }}/images/related-product/ChatGPTImageJul31_2025_04_14_18PM.avif"
                                                        alt="product image" />
                                                </a>
                                            </div>
                                            <div class="suggested-product-details col-9">
                                                <div class="suggeted-title">
                                                    <a href="">
                                                        <h5>
                                                            Zayn & Myza Brightening Vitamin C Exfoliating
                                                            Face Wash (100ml) - Pack of 02
                                                        </h5>
                                                    </a>
                                                </div>
                                                <div class="suggested-price">
                                                    <h6>
                                                        <span
                                                            class="d-inline-block text-decoration-line-through">৳450</span>
                                                        ৳319
                                                    </h6>
                                                </div>
                                                <div class="suggested-cart">
                                                    <a href="" title="Add to Cart"><img
                                                            src="{{ asset('assets') }}/images/icon/parcel.png"
                                                            alt="bag icon" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="suggested-product-item row align-items-start mb-4">
                                            <div class="suggested-img col-3 px-0">
                                                <a href="">
                                                    <img src="{{ asset('assets') }}/images/related-product/Combo_09f0db7e-9c15-421f-a7d7-075c5ce14ebf.avif"
                                                        alt="product image" />
                                                </a>
                                            </div>
                                            <div class="suggested-product-details col-9">
                                                <div class="suggeted-title">
                                                    <a href="">
                                                        <h5>
                                                            Zayn & Myza Brightening Vitamin C Exfoliating
                                                            Face Wash (100ml) - Pack of 02
                                                        </h5>
                                                    </a>
                                                </div>
                                                <div class="suggested-price">
                                                    <h6>
                                                        <span
                                                            class="d-inline-block text-decoration-line-through">৳450</span>
                                                        ৳319
                                                    </h6>
                                                </div>
                                                <div class="suggested-cart">
                                                    <a href="" title="Add to Cart"><img
                                                            src="{{ asset('assets') }}/images/icon/parcel.png"
                                                            alt="bag icon" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="suggested-product-item row align-items-start mb-4">
                                            <div class="suggested-img col-3 px-0">
                                                <a href="">
                                                    <img src="{{ asset('assets') }}/images/related-product/zmniacinamidefw.avif"
                                                        alt="product image" />
                                                </a>
                                            </div>
                                            <div class="suggested-product-details col-9">
                                                <div class="suggeted-title">
                                                    <a href="">
                                                        <h5>
                                                            Zayn & Myza Brightening Vitamin C Exfoliating
                                                            Face Wash (100ml) - Pack of 02
                                                        </h5>
                                                    </a>
                                                </div>
                                                <div class="suggested-price">
                                                    <h6>
                                                        <span
                                                            class="d-inline-block text-decoration-line-through">৳450</span>
                                                        ৳319
                                                    </h6>
                                                </div>
                                                <div class="suggested-cart">
                                                    <a href="" title="Add to Cart"><img
                                                            src="{{ asset('assets') }}/images/icon/parcel.png"
                                                            alt="bag icon" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-7 product-cart-offcanvas">
                                    <div class="offcanvas-header">
                                        <h4 class="fw-normal text-dark" id="offcanvasRightLabel">
                                            CART
                                        </h4>
                                        <button style="background-color: #ddd" type="button"
                                            class="btn-close text-reset rounded-circle" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>

                                    <!-- offcanvas body -->
                                    <div class="offcanvas-body pt-0">
                                        <h6 class="free-shiping-txt shipping-gradient">
                                            You are eligible for free shipping.
                                        </h6>

                                        <div class="cart-added-products">
                                            <div class="cart-item">
                                                <div class="cart-img">
                                                    <a href="">
                                                        <img src="{{ asset('assets') }}/images/product-img/showergel_128x128.avif"
                                                            alt="product image" />
                                                    </a>
                                                </div>
                                                <div class="cart-item-product-info ms-3">
                                                    <a href="">
                                                        Zayn & Myza Age Defense Retinol & Niacinamide
                                                        Shower Gel - 200ml
                                                    </a>
                                                    <div
                                                        class="cart-item-quantity_price mt-4 d-flex justify-content-between align-items-center">
                                                        <div class="cart-item-quantity cart-increment-decrement">
                                                            <button class="decrement">
                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                            <p class="mb-0 mx-2 showItem">3</p>
                                                            <input type="hidden" name="quantity" class="quantity" />
                                                            <button class="increment">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                        <div class="cart-item-rate">
                                                            <h5>৳199</h5>
                                                        </div>
                                                    </div>
                                                    <button title="Remove Cart"
                                                        class="border-0 bg-transparent cart-item-remove-icon position-absolute">
                                                        <img width="20px"
                                                            src="{{ asset('assets') }}/images/icon/close-x.svg"
                                                            alt="" />
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="cart-item">
                                                <div class="cart-img">
                                                    <a href="">
                                                        <img src="{{ asset('assets') }}/images/product-img/Zayn_Myza_Vitamin_C_Brightening_Shower_Gel_-_Vaitamin_128x128.avif"
                                                            alt="product image" />
                                                    </a>
                                                </div>
                                                <div class="cart-item-product-info ms-3">
                                                    <a href="">
                                                        Zayn & Myza Age Defense Retinol & Niacinamide
                                                        Shower Gel - 200ml
                                                    </a>
                                                    <div
                                                        class="cart-item-quantity_price mt-4 d-flex justify-content-between align-items-center">
                                                        <div class="cart-item-quantity cart-increment-decrement">
                                                            <button class="decrement">
                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                            <p class="mb-0 mx-2 showItem">3</p>
                                                            <input type="hidden" name="quantity" class="quantity" />
                                                            <button class="increment">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                        <button title="Remove Cart"
                                                            class="border-0 bg-transparent cart-item-remove-icon position-absolute">
                                                            <img width="20px"
                                                                src="{{ asset('assets') }}/images/icon/close-x.svg"
                                                                alt="" />
                                                        </button>
                                                        <div class="cart-item-rate">
                                                            <h5>৳199</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-item">
                                                <div class="cart-img">
                                                    <a href="">
                                                        <img src="{{ asset('assets') }}/images/product-img/Zayn_Myza_3x_Vitamin_E_Moisturizing_Cream_50gm_-_B1G1_128x128.avif"
                                                            alt="product image" />
                                                    </a>
                                                </div>
                                                <div class="cart-item-product-info ms-3">
                                                    <a href="">
                                                        Zayn & Myza Age Defense Retinol & Niacinamide
                                                        Shower Gel - 200ml
                                                    </a>
                                                    <div
                                                        class="cart-item-quantity_price mt-4 d-flex justify-content-between align-items-center">
                                                        <div class="cart-item-quantity cart-increment-decrement">
                                                            <button class="decrement">
                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                            <p class="mb-0 mx-2 showItem">3</p>
                                                            <input type="hidden" name="quantity" class="quantity" />
                                                            <button class="increment">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                        <button title="Remove Cart"
                                                            class="border-0 bg-transparent cart-item-remove-icon position-absolute">
                                                            <img width="20px"
                                                                src="{{ asset('assets') }}/images/icon/close-x.svg"
                                                                alt="" />
                                                        </button>
                                                        <div class="cart-item-rate">
                                                            <h5>৳199</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Mobile Related Products -->
                                            <div class="sm-related-product-section d-block d-md-none">
                                                <h6>You may also like</h6>
                                                <div class="related-row-scroll mt-4">
                                                    <div class="suggested-product-item row align-items-start">
                                                        <div class="suggested-img col-3 px-0">
                                                            <a href="">
                                                                <img src="{{ asset('assets') }}/images/related-product/ChatGPTImageJul31_2025_04_14_18PM.avif"
                                                                    alt="product image" />
                                                            </a>
                                                        </div>
                                                        <div class="suggested-product-details col-9">
                                                            <div class="suggeted-title">
                                                                <a href="">
                                                                    <h5>
                                                                        Zayn & Myza Brightening Vitamin C
                                                                        Exfoliating Face Wash (100ml) - Pack of
                                                                        02
                                                                    </h5>
                                                                </a>
                                                            </div>
                                                            <div class="suggested-price">
                                                                <h6>
                                                                    <span
                                                                        class="d-inline-block text-decoration-line-through">৳450</span>
                                                                    ৳319
                                                                </h6>
                                                            </div>
                                                            <div class="suggested-cart">
                                                                <a href="" title="Add to Cart"><img
                                                                        src="{{ asset('assets') }}/images/icon/parcel.png"
                                                                        alt="bag icon" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="suggested-product-item row align-items-start">
                                                        <div class="suggested-img col-3 px-0">
                                                            <a href="">
                                                                <img src="{{ asset('assets') }}/images/related-product/ChatGPTImageJul31_2025_04_14_18PM.avif"
                                                                    alt="product image" />
                                                            </a>
                                                        </div>
                                                        <div class="suggested-product-details col-9">
                                                            <div class="suggeted-title">
                                                                <a href="">
                                                                    <h5>
                                                                        Zayn & Myza Brightening Vitamin C
                                                                        Exfoliating Face Wash (100ml) - Pack of
                                                                        02
                                                                    </h5>
                                                                </a>
                                                            </div>
                                                            <div class="suggested-price">
                                                                <h6>
                                                                    <span
                                                                        class="d-inline-block text-decoration-line-through">৳450</span>
                                                                    ৳319
                                                                </h6>
                                                            </div>
                                                            <div class="suggested-cart">
                                                                <a href="" title="Add to Cart"><img
                                                                        src="{{ asset('assets') }}/images/icon/parcel.png"
                                                                        alt="bag icon" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="suggested-product-item row align-items-start">
                                                        <div class="suggested-img col-3 px-0">
                                                            <a href="">
                                                                <img src="{{ asset('assets') }}/images/related-product/Combo_09f0db7e-9c15-421f-a7d7-075c5ce14ebf.avif"
                                                                    alt="product image" />
                                                            </a>
                                                        </div>
                                                        <div class="suggested-product-details col-9">
                                                            <div class="suggeted-title">
                                                                <a href="">
                                                                    <h5>
                                                                        Zayn & Myza Brightening Vitamin C
                                                                        Exfoliating Face Wash (100ml) - Pack of
                                                                        02
                                                                    </h5>
                                                                </a>
                                                            </div>
                                                            <div class="suggested-price">
                                                                <h6>
                                                                    <span
                                                                        class="d-inline-block text-decoration-line-through">৳450</span>
                                                                    ৳319
                                                                </h6>
                                                            </div>
                                                            <div class="suggested-cart">
                                                                <a href="" title="Add to Cart"><img
                                                                        src="{{ asset('assets') }}/images/icon/parcel.png"
                                                                        alt="bag icon" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="suggested-product-item row align-items-start">
                                                        <div class="suggested-img col-3 px-0">
                                                            <a href="">
                                                                <img src="{{ asset('assets') }}/images/related-product/zmniacinamidefw.avif"
                                                                    alt="product image" />
                                                            </a>
                                                        </div>
                                                        <div class="suggested-product-details col-9">
                                                            <div class="suggeted-title">
                                                                <a href="">
                                                                    <h5>
                                                                        Zayn & Myza Brightening Vitamin C
                                                                        Exfoliating Face Wash (100ml) - Pack of
                                                                        02
                                                                    </h5>
                                                                </a>
                                                            </div>
                                                            <div class="suggested-price">
                                                                <h6>
                                                                    <span
                                                                        class="d-inline-block text-decoration-line-through">৳450</span>
                                                                    ৳319
                                                                </h6>
                                                            </div>
                                                            <div class="suggested-cart">
                                                                <a href="" title="Add to Cart"><img
                                                                        src="{{ asset('assets') }}/images/icon/parcel.png"
                                                                        alt="bag icon" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Note button -->
                                        <div class="note-modal-box text-center mt-5 mb-4">
                                            <button class="border-0 bg-transparent text-uppercase fw-normal"
                                                style="font-size: 12px" data-bs-toggle="modal"
                                                data-bs-target="#customModal">
                                                <i class="fa fa-pencil" aria-hidden="true"></i> Note
                                            </button>
                                        </div>

                                        <!-- Custom Modal -->
                                        <div class="modal fade" id="customModal" tabindex="-1"
                                            data-bs-backdrop="false">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header border-0">
                                                        <h6 class="modal-title">
                                                            Order special instructions
                                                        </h6>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body pt-0">
                                                        <textarea class="form-control" rows="3" name="cart-note"></textarea>
                                                        <button class="chekout-cart-btn w-100 mt-3">
                                                            Apply
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
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
                                                        <h5>৳2,196 BDT</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>Taxes and shipping calculated at checkout</p>
                                        </div>
                                        <!-- Checkout / View Cart buttons -->
                                        <div class="two-btn mt-5 row">
                                            <div class="col-lg-6">
                                                <a href="{{ route('product.checkout') }}"
                                                    class="chekout-cart-btn w-100 text-white text-center">Check
                                                    Out</a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="{{ route('product.cart') }}"
                                                    class="view-cart-btn w-100 text-center">View
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-2 text-center">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <img class="header-logo" src="{{ asset('assets') }}/images/logo/top-logo.png" alt="" />
                </a>
            </div>
            <div class="col-lg-4">
                <nav class="navbar">
                    <div class="menu-area">
                        <ul>
                            @foreach ($categoriesLast3 as $category)
                                <li class="dd-btn1">
                                    <a href="{{ route('page') }}"> {{ $category->name }} <i
                                            class="fa fa-angle-down"></i></a>
                                    {{-- hover subcategory dropdown --}}
                                    <div class="dropdown-menu1">
                                        <ul>
                                            <li class="dd-btn2">
                                                <a href="category.html">
                                                    <span> Hari Tools</span>
                                                    <i class="fa fa-angle-right float-right mt-1"></i></a>

                                                <div class="dropdown-menu2">
                                                    <ul class="w-nav-list level_3">
                                                        <li class="dd-btn3">
                                                            <a href="#">Hair cutting<i
                                                                    class="fa fa-angle-right float-right mt-1"></i></a>
                                                            <div class="dropdown-menu3">
                                                                <ul class="w-nav-list level_3">
                                                                    <li><a href="#">Child manue</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dd-btn2">
                                                <a href="#"><i class="fa fa-long-arrow-right"></i> Face Makup
                                                    <i class="fa fa-angle-right float-right mt-1"></i></a>
                                                <div class="dropdown-menu2">
                                                    <ul>
                                                        <li><a href="#">Makup one</a></li>
                                                        <li><a href="#">Makup two</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dd-btn2">
                                                <a href="#"><i class="fa fa-long-arrow-right"></i>Face & Body
                                                    Care<i class="fa fa-angle-right float-right mt-1"></i></a>
                                            </li>
                                            <li class="dd-btn2">
                                                <a href="#"><i class="fa fa-long-arrow-right"></i>Lip Beauty<i
                                                        class="fa fa-angle-right float-right mt-1"></i></a>
                                            </li>
                                            <li class="dd-btn2">
                                                <a href="#"><i class="fa fa-long-arrow-right"></i>Hari Care<i
                                                        class="fa fa-angle-right float-right mt-1"></i></a>
                                            </li>
                                            <li class="dd-btn2">
                                                <a href="#"><i class="fa fa-long-arrow-right"></i>Clothing<i
                                                        class="fa fa-angle-right float-right mt-1"></i></a>
                                            </li>
                                            <li class="dd-btn2">
                                                <a href="#"><i class="fa fa-long-arrow-right"></i>Eye Makeup<i
                                                        class="fa fa-angle-right float-right mt-1"></i></a>
                                            </li>
                                            <li class="dd-btn2">
                                                <a href="#"><i class="fa fa-long-arrow-right"></i>Jewellery<i
                                                        class="fa fa-angle-right float-right mt-1"></i></a>
                                            </li>
                                            <li class="dd-btn2">
                                                <a href="#"><i class="fa fa-long-arrow-right"></i>Ladies Bag<i
                                                        class="fa fa-angle-right float-right mt-1"></i></a>
                                            </li>
                                            <li class="dd-btn2">
                                                <a href="#"><i class="fa fa-long-arrow-right"></i>Saree<i
                                                        class="fa fa-angle-right float-right mt-1"></i></a>
                                            </li>
                                            <li class="dd-btn2">
                                                <a href="#"><i class="fa fa-long-arrow-right"></i>Cosmetics<i
                                                        class="fa fa-angle-right float-right mt-1"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-lg-1">
                <div class="header-icon d-flex justify-content-between gap-5 align-items-center">

                    <a class="d-none d-lg-block" href="{{ route('login') }}"><i class="fa fa-user-o"
                            aria-hidden="true"></i></a>

                    <div class="product-offcanvas me-3 d-none d-lg-block">
                        <div class="cart-wrapper" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightLG"
                            aria-controls="offcanvasRightLG">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            <span class="badge bg-dark rounded-pill cart-badge">3</span>
                        </div>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRightLG"
                            aria-labelledby="offcanvasRightLabelLG">
                            <div class="row align-items-start">
                                <div class="suggested-product col-md-5 ps-3 d-none d-sm-block">
                                    <div class="ps-4 pt-3">
                                        <h3>You may also like</h3>

                                        <div class="suggested-product-item row align-items-start mb-4">
                                            <div class="suggested-img col-3 px-0">
                                                <a href="">
                                                    <img src="{{ asset('assets') }}/images/related-product/ChatGPTImageJul31_2025_04_14_18PM.avif"
                                                        alt="product image" />
                                                </a>
                                            </div>
                                            <div class="suggested-product-details col-9">
                                                <div class="suggeted-title">
                                                    <a href="">
                                                        <h5>
                                                            Zayn & Myza Brightening Vitamin C Exfoliating
                                                            Face Wash (100ml) - Pack of 02
                                                        </h5>
                                                    </a>
                                                </div>
                                                <div class="suggested-price">
                                                    <h6>
                                                        <span
                                                            class="d-inline-block text-decoration-line-through">৳450</span>
                                                        ৳319
                                                    </h6>
                                                </div>
                                                <div class="suggested-cart">
                                                    <a href="" title="Add to Cart"><img
                                                            src="{{ asset('assets') }}/images/icon/parcel.png"
                                                            alt="bag icon" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="suggested-product-item row align-items-start mb-4">
                                            <div class="suggested-img col-3 px-0">
                                                <a href="">
                                                    <img src="{{ asset('assets') }}/images/related-product/ChatGPTImageJul31_2025_04_14_18PM.avif"
                                                        alt="product image" />
                                                </a>
                                            </div>
                                            <div class="suggested-product-details col-9">
                                                <div class="suggeted-title">
                                                    <a href="">
                                                        <h5>
                                                            Zayn & Myza Brightening Vitamin C Exfoliating
                                                            Face Wash (100ml) - Pack of 02
                                                        </h5>
                                                    </a>
                                                </div>
                                                <div class="suggested-price">
                                                    <h6>
                                                        <span
                                                            class="d-inline-block text-decoration-line-through">৳450</span>
                                                        ৳319
                                                    </h6>
                                                </div>
                                                <div class="suggested-cart">
                                                    <a href="" title="Add to Cart"><img
                                                            src="{{ asset('assets') }}/images/icon/parcel.png"
                                                            alt="bag icon" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="suggested-product-item row align-items-start mb-4">
                                            <div class="suggested-img col-3 px-0">
                                                <a href="">
                                                    <img src="{{ asset('assets') }}/images/related-product/Combo_09f0db7e-9c15-421f-a7d7-075c5ce14ebf.avif"
                                                        alt="product image" />
                                                </a>
                                            </div>
                                            <div class="suggested-product-details col-9">
                                                <div class="suggeted-title">
                                                    <a href="">
                                                        <h5>
                                                            Zayn & Myza Brightening Vitamin C Exfoliating
                                                            Face Wash (100ml) - Pack of 02
                                                        </h5>
                                                    </a>
                                                </div>
                                                <div class="suggested-price">
                                                    <h6>
                                                        <span
                                                            class="d-inline-block text-decoration-line-through">৳450</span>
                                                        ৳319
                                                    </h6>
                                                </div>
                                                <div class="suggested-cart">
                                                    <a href="" title="Add to Cart"><img
                                                            src="{{ asset('assets') }}/images/icon/parcel.png"
                                                            alt="bag icon" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="suggested-product-item row align-items-start mb-4">
                                            <div class="suggested-img col-3 px-0">
                                                <a href="">
                                                    <img src="{{ asset('assets') }}/images/related-product/zmniacinamidefw.avif"
                                                        alt="product image" />
                                                </a>
                                            </div>
                                            <div class="suggested-product-details col-9">
                                                <div class="suggeted-title">
                                                    <a href="">
                                                        <h5>
                                                            Zayn & Myza Brightening Vitamin C Exfoliating
                                                            Face Wash (100ml) - Pack of 02
                                                        </h5>
                                                    </a>
                                                </div>
                                                <div class="suggested-price">
                                                    <h6>
                                                        <span
                                                            class="d-inline-block text-decoration-line-through">৳450</span>
                                                        ৳319
                                                    </h6>
                                                </div>
                                                <div class="suggested-cart">
                                                    <a href="" title="Add to Cart"><img
                                                            src="{{ asset('assets') }}/images/icon/parcel.png"
                                                            alt="bag icon" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-7 product-cart-offcanvas">
                                    <div class="offcanvas-header">
                                        <h4 class="fw-normal text-dark" id="offcanvasRightLabel">
                                            CART
                                        </h4>
                                        <button style="background-color: #ddd" type="button"
                                            class="btn-close text-reset rounded-circle" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>

                                    <!-- offcanvas body -->
                                    <div class="offcanvas-body pt-0">
                                        <h6 class="free-shiping-txt shipping-gradient">
                                            You are eligible for free shipping.
                                        </h6>

                                        <div class="cart-added-products">
                                            <div class="cart-item">
                                                <div class="cart-img">
                                                    <a href="">
                                                        <img src="{{ asset('assets') }}/images/product-img/showergel_128x128.avif"
                                                            alt="product image" />
                                                    </a>
                                                </div>
                                                <div class="cart-item-product-info ms-3">
                                                    <a href="">
                                                        Zayn & Myza Age Defense Retinol & Niacinamide
                                                        Shower Gel - 200ml
                                                    </a>
                                                    <div
                                                        class="cart-item-quantity_price mt-4 d-flex justify-content-between align-items-center">
                                                        <div class="cart-item-quantity cart-increment-decrement">
                                                            <button class="decrement">
                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                            <p class="mb-0 mx-2 showItem">3</p>
                                                            <input type="hidden" name="quantity" class="quantity" />
                                                            <button class="increment">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                        <div class="cart-item-rate">
                                                            <h5>৳199</h5>
                                                        </div>
                                                    </div>
                                                    <button title="Remove Cart"
                                                        class="border-0 bg-transparent cart-item-remove-icon position-absolute">
                                                        <img width="20px"
                                                            src="{{ asset('assets') }}/images/icon/close-x.svg"
                                                            alt="" />
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="cart-item">
                                                <div class="cart-img">
                                                    <a href="">
                                                        <img src="{{ asset('assets') }}/images/product-img/Zayn_Myza_Vitamin_C_Brightening_Shower_Gel_-_Vaitamin_128x128.avif"
                                                            alt="product image" />
                                                    </a>
                                                </div>
                                                <div class="cart-item-product-info ms-3">
                                                    <a href="">
                                                        Zayn & Myza Age Defense Retinol & Niacinamide
                                                        Shower Gel - 200ml
                                                    </a>
                                                    <div
                                                        class="cart-item-quantity_price mt-4 d-flex justify-content-between align-items-center">
                                                        <div class="cart-item-quantity cart-increment-decrement">
                                                            <button class="decrement">
                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                            <p class="mb-0 mx-2 showItem">3</p>
                                                            <input type="hidden" name="quantity" class="quantity" />
                                                            <button class="increment">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                        <button title="Remove Cart"
                                                            class="border-0 bg-transparent cart-item-remove-icon position-absolute">
                                                            <img width="20px"
                                                                src="{{ asset('assets') }}/images/icon/close-x.svg"
                                                                alt="" />
                                                        </button>
                                                        <div class="cart-item-rate">
                                                            <h5>৳199</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-item">
                                                <div class="cart-img">
                                                    <a href="">
                                                        <img src="{{ asset('assets') }}/images/product-img/Zayn_Myza_3x_Vitamin_E_Moisturizing_Cream_50gm_-_B1G1_128x128.avif"
                                                            alt="product image" />
                                                    </a>
                                                </div>
                                                <div class="cart-item-product-info ms-3">
                                                    <a href="">
                                                        Zayn & Myza Age Defense Retinol & Niacinamide
                                                        Shower Gel - 200ml
                                                    </a>
                                                    <div
                                                        class="cart-item-quantity_price mt-4 d-flex justify-content-between align-items-center">
                                                        <div class="cart-item-quantity cart-increment-decrement">
                                                            <button class="decrement">
                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                            <p class="mb-0 mx-2 showItem">3</p>
                                                            <input type="hidden" name="quantity" class="quantity" />
                                                            <button class="increment">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                        <button title="Remove Cart"
                                                            class="border-0 bg-transparent cart-item-remove-icon position-absolute">
                                                            <img width="20px"
                                                                src="{{ asset('assets') }}/images/icon/close-x.svg"
                                                                alt="" />
                                                        </button>
                                                        <div class="cart-item-rate">
                                                            <h5>৳199</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Mobile Related Products -->
                                            <div class="sm-related-product-section d-block d-md-none">
                                                <h6>You may also like</h6>
                                                <div class="related-row-scroll mt-4">
                                                    <div class="suggested-product-item row align-items-start">
                                                        <div class="suggested-img col-3 px-0">
                                                            <a href="">
                                                                <img src="{{ asset('assets') }}/images/related-product/ChatGPTImageJul31_2025_04_14_18PM.avif"
                                                                    alt="product image" />
                                                            </a>
                                                        </div>
                                                        <div class="suggested-product-details col-9">
                                                            <div class="suggeted-title">
                                                                <a href="">
                                                                    <h5>
                                                                        Zayn & Myza Brightening Vitamin C
                                                                        Exfoliating Face Wash (100ml) - Pack of
                                                                        02
                                                                    </h5>
                                                                </a>
                                                            </div>
                                                            <div class="suggested-price">
                                                                <h6>
                                                                    <span
                                                                        class="d-inline-block text-decoration-line-through">৳450</span>
                                                                    ৳319
                                                                </h6>
                                                            </div>
                                                            <div class="suggested-cart">
                                                                <a href="" title="Add to Cart"><img
                                                                        src="{{ asset('assets') }}/images/icon/parcel.png"
                                                                        alt="bag icon" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="suggested-product-item row align-items-start">
                                                        <div class="suggested-img col-3 px-0">
                                                            <a href="">
                                                                <img src="{{ asset('assets') }}/images/related-product/ChatGPTImageJul31_2025_04_14_18PM.avif"
                                                                    alt="product image" />
                                                            </a>
                                                        </div>
                                                        <div class="suggested-product-details col-9">
                                                            <div class="suggeted-title">
                                                                <a href="">
                                                                    <h5>
                                                                        Zayn & Myza Brightening Vitamin C
                                                                        Exfoliating Face Wash (100ml) - Pack of
                                                                        02
                                                                    </h5>
                                                                </a>
                                                            </div>
                                                            <div class="suggested-price">
                                                                <h6>
                                                                    <span
                                                                        class="d-inline-block text-decoration-line-through">৳450</span>
                                                                    ৳319
                                                                </h6>
                                                            </div>
                                                            <div class="suggested-cart">
                                                                <a href="" title="Add to Cart"><img
                                                                        src="{{ asset('assets') }}/images/icon/parcel.png"
                                                                        alt="bag icon" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="suggested-product-item row align-items-start">
                                                        <div class="suggested-img col-3 px-0">
                                                            <a href="">
                                                                <img src="{{ asset('assets') }}/images/related-product/Combo_09f0db7e-9c15-421f-a7d7-075c5ce14ebf.avif"
                                                                    alt="product image" />
                                                            </a>
                                                        </div>
                                                        <div class="suggested-product-details col-9">
                                                            <div class="suggeted-title">
                                                                <a href="">
                                                                    <h5>
                                                                        Zayn & Myza Brightening Vitamin C
                                                                        Exfoliating Face Wash (100ml) - Pack of
                                                                        02
                                                                    </h5>
                                                                </a>
                                                            </div>
                                                            <div class="suggested-price">
                                                                <h6>
                                                                    <span
                                                                        class="d-inline-block text-decoration-line-through">৳450</span>
                                                                    ৳319
                                                                </h6>
                                                            </div>
                                                            <div class="suggested-cart">
                                                                <a href="" title="Add to Cart"><img
                                                                        src="{{ asset('assets') }}/images/icon/parcel.png"
                                                                        alt="bag icon" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="suggested-product-item row align-items-start">
                                                        <div class="suggested-img col-3 px-0">
                                                            <a href="">
                                                                <img src="{{ asset('assets') }}/images/related-product/zmniacinamidefw.avif"
                                                                    alt="product image" />
                                                            </a>
                                                        </div>
                                                        <div class="suggested-product-details col-9">
                                                            <div class="suggeted-title">
                                                                <a href="">
                                                                    <h5>
                                                                        Zayn & Myza Brightening Vitamin C
                                                                        Exfoliating Face Wash (100ml) - Pack of
                                                                        02
                                                                    </h5>
                                                                </a>
                                                            </div>
                                                            <div class="suggested-price">
                                                                <h6>
                                                                    <span
                                                                        class="d-inline-block text-decoration-line-through">৳450</span>
                                                                    ৳319
                                                                </h6>
                                                            </div>
                                                            <div class="suggested-cart">
                                                                <a href="" title="Add to Cart"><img
                                                                        src="{{ asset('assets') }}/images/icon/parcel.png"
                                                                        alt="bag icon" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Note button -->
                                        <div class="note-modal-box text-center mt-5 mb-4">
                                            <button class="border-0 bg-transparent text-uppercase fw-normal"
                                                style="font-size: 12px" data-bs-toggle="modal"
                                                data-bs-target="#customModal">
                                                <i class="fa fa-pencil" aria-hidden="true"></i> Note
                                            </button>
                                        </div>

                                        <!-- Custom Modal -->
                                        <div class="modal fade" id="customModal" tabindex="-1"
                                            data-bs-backdrop="false">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header border-0">
                                                        <h6 class="modal-title">
                                                            Order special instructions
                                                        </h6>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body pt-0">
                                                        <textarea class="form-control" rows="3" name="cart-note"></textarea>
                                                        <button class="chekout-cart-btn w-100 mt-3">
                                                            Apply
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
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
                                                        <h5>৳2,196 BDT</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>Taxes and shipping calculated at checkout</p>
                                        </div>
                                        <!-- Checkout / View Cart buttons -->
                                        <div class="two-btn mt-5 row">
                                            <div class="col-lg-6">
                                                <a href="{{ route('product.checkout') }}"
                                                    class="chekout-cart-btn w-100 text-white text-center">Check
                                                    Out</a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="{{ route('product.cart') }}"
                                                    class="view-cart-btn w-100 text-center">View
                                                    Cart</a>
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
    </div>
</header>
<!--end header-->
<!--start mobile menu-->
<div class="mobile-menu ">
    <div class="mm-logo" style="background: #fff; padding: 0.6875rem 1.125rem">
        <a href="{{ url('/') }}">
            <img style="width: 50%" src="{{ asset('assets') }}/images/logo/logo_High_Res_Mob_x320.avif"
                alt="" />
        </a>
        <div class="mm-cross-icon">
            <i class="fa fa-times mm-ci"></i>
        </div>
    </div>
    <div class="mm-menu">
        <div class="accordion " id="accordionExample">
            <div class="menu-box">
                <div class="menu-link">
                    <a class="text-uppercase" href="{{ url('/') }}"><i class="fa fa-ptab3 mr-2"></i> Home</a>

                </div>
            </div>
            @foreach ($categories as $category)
                <div class="menu-box">
                    <div class="menu-link" id="headingOne">
                        <a class="mmenu-btn menu-link-active text-uppercase" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true">
                            {{ $category->name }} <i class="fa fa-plus"></i>
                        </a>
                    </div>
                    <div id="collapseOne" class="menu-body collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li class="mega-dd-btn-2">
                                    <a data-bs-toggle="collapse" href="#category1" role="button"
                                        aria-expanded="false" aria-controls="category1" class="collapsed">
                                        Face & Body Care
                                        <i class="fa fa-angle-down float-right mt-1"></i>
                                    </a>
                                    <div class="collapse" id="category1">
                                        <div class="card card-body scroll-div-dist">
                                            <ul class="mega-item">
                                                <li class="mega-dd-btn-2">
                                                    <a data-bs-toggle="collapse" href="#subCategory1" role="button"
                                                        aria-expanded="false" aria-controls="subCategory1"
                                                        class="collapsed">
                                                        Face & Body Care
                                                        <i class="fa fa-angle-down float-right mt-1"></i>
                                                    </a>
                                                    <div class="collapse" id="subCategory1">
                                                        <div class="card card-body scroll-div-dist">
                                                            <ul class="mega-item">
                                                                <li><a href="#">Face Makeup</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="mega-dd-btn-2">
                                    <a data-bs-toggle="collapse" href="#subCategory2" role="button"
                                        aria-expanded="false" aria-controls="subCategory2" class="collapsed">
                                        Hari Tools<i class="fa fa-angle-down float-right mt-1"></i>
                                    </a>
                                    <div class="collapse" id="subCategory2">
                                        <div class="card card-body scroll-div-dist">
                                            <ul class="mega-item">
                                                <li><a href="#">Hari catting</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-long-arrow-right"></i>Lip Beauty
                                        <i class="fa fa-angle-right float-right mt-1"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-long-arrow-right"></i>Hari Care
                                        <i class="fa fa-angle-right float-right mt-1"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-long-arrow-right"></i>Clothing
                                        <i class="fa fa-angle-right float-right mt-1"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-long-arrow-right"></i>Eye Makeup
                                        <i class="fa fa-angle-right float-right mt-1"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-long-arrow-right"></i>Jewellery
                                        <i class="fa fa-angle-right float-right mt-1"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-long-arrow-right"></i>Ladies Bag
                                        <i class="fa fa-angle-right float-right mt-1"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-long-arrow-right"></i>Saree
                                        <i class="fa fa-angle-right float-right mt-1"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-long-arrow-right"></i>Cosmetics
                                        <i class="fa fa-angle-right float-right mt-1"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="menu-box">
                <div class="menu-link" id="headingFive">
                    <a class="mmenu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                        Vendor<i class="fa fa-plus"></i>
                    </a>
                </div>
                <div id="collapseFive" class="collapse menu-body" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li>
                                <a href="{{ route('login') }}"><i class="fa fa-long-arrow-right"></i>Login</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">
                                    <i class="fa fa-long-arrow-right"></i>Register
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="mt-5 ps-2">
        <a class="border btn text-uppercase" href="{{ route('login') }}">Log in <i class="fa fa-user-o"
                aria-hidden="true"></i></a>
    </div>
</div>


<!--end mobile menu-->
