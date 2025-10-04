@extends('layouts.front-end.app')
@section('title', 'Dynamic Title')
@section('main-content')
    <!-- Page Main Content start  -->
    <main>
        <section class="dynamic-page-main-content-section my-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-title">Makeup</h1>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-md-4 col-lg-3 pe-lg-5">
                        <div class="accordion-item d-none d-md-block">
                            <h2 class="accordion-header" id="headingPriceRange">
                                <button class="accordion-button collapsed px-0" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsePriceRange" aria-expanded="false"
                                    aria-controls="collapsePriceRange">
                                    <div class="range-title">
                                        <h6>Price</h6>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapsePriceRange" class="accordion-collapse collapse show"
                                aria-labelledby="headingPriceRange" data-bs-parent="#priceRangeAccordion">
                                <div class="accordion-body ps-0 py-0">
                                    <p class="mb-2" style="font-weight: 400;">RESET</p>

                                    <div class="price-range">
                                        <div class="d-flex align-items-center justify-content-center mb-1">
                                            <p class="mb-0 position-relative"
                                                style="width:5%; color:#414042; font-size:14px; bottom: -9px">৳</p>
                                            <div class="range-slider ms-2" style="width:95%;">
                                                <div class="slider-track"></div>
                                                <div class="slider-range"></div>
                                                <input type="range" class="minRange" min="0" max="1790"
                                                    value="0">
                                                <input type="range" class="maxRange" min="0" max="1790"
                                                    value="1790">
                                            </div>
                                        </div>
                                        <div class="values d-flex range-values mt-3">
                                            <p>Price:</p>
                                            <div class="d-flex">
                                                <p class="ms-2 minValue"></p>
                                                <p class="ms-2"><i class="fa fa-minus"
                                                        style="color: rgba(65, 64, 66, 0.75);"></i></p>
                                                <p class="ms-2 maxValue"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- price range end  -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9 " style="height: 100vh; overflow-y: scroll; scrollbar-width: none;">
                        <!-- Mobile Product price Range and Sort offcanvas start -->
                        <div class="filter-offcanvas d-block d-md-none">
                            <button class="chekout-cart-btn w-100" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#mobileProductSortOffcanvas" aria-controls="mobileProductSortOffcanvas">
                                <i class="fa fa-filter text-white" aria-hidden="true"></i> FILTER AND SORT
                            </button>

                            <div class="offcanvas offcanvas-end mobile-product-offcanvas" tabindex="-1"
                                id="mobileProductSortOffcanvas" aria-labelledby="mobileProductSortOffcanvasLabel">
                                <div class="offcanvas-header ">
                                    <div class="text-center w-100" id="mobileProductSortOffcanvasLabel">
                                        <h5 style="font-weight: 400; font-size: 14px;">Filter And Sort</h5>
                                        <p class="mb-0" style="font-size: 14px;">34 Products</p>
                                    </div>

                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <!-- Sorting & filtering content body -->
                                    <div class="price-range">
                                        <div class="d-flex align-items-center justify-content-center mb-1">
                                            <p class="mb-0 position-relative"
                                                style="width:5%; color:#414042; font-size:14px;">৳</p>
                                            <div class="range-slider ms-2" style="width:95%;">
                                                <div class="slider-track"></div>
                                                <div class="slider-range"></div>
                                                <input type="range" class="minRange" min="0" max="1790"
                                                    value="0">
                                                <input type="range" class="maxRange" min="0" max="1790"
                                                    value="1790">
                                            </div>
                                        </div>
                                        <div class="values d-flex range-values mt-3">
                                            <p>Price:</p>
                                            <div class="d-flex">
                                                <p class="ms-2 minValue"></p>
                                                <p class="ms-2"><i class="fa fa-minus"
                                                        style="color: rgba(65, 64, 66, 0.75);"></i></p>
                                                <p class="ms-2 maxValue"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- moblie prodouct sort dropdown start -->
                                    <div class="btn-group mt-4">
                                        <button class="btn btn-lg dropdown-toggle sort-by-btn" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            SORT BY
                                        </button>
                                        <ul class="dropdown-menu border-0  pt-3">
                                            <ul class="list-unstyled  mb-0 sort-option-container" id="sortOptions">
                                                <li><button class="btn  p-0 sort-option" data-value="Featured"
                                                        disabled>Featured </button></li>

                                                <li><button class="btn  p-0 sort-option" data-value="BestSelling">Best
                                                        Selling</button></li>

                                                <li><button class="btn  p-0 sort-option" data-value="AtoZ">Alphabetically,
                                                        A-Z</button></li>

                                                <li><button class="btn  p-0 sort-option" data-value="ZtoA">Alphabetically,
                                                        Z-A</button></li>

                                                <li><a class="btn  p-0 sort-option" data-value="LowToHigh">Price, low to
                                                        high</a></li>

                                                <li><button class="btn  p-0 sort-option" data-value="HighToLow">Price,
                                                        high to low</button></li>

                                                <li><button class="btn  p-0 sort-option" data-value="OldToNew">Date, old
                                                        to new</button></li>

                                                <li><button class="btn  p-0 sort-option" data-value="NewToOld">Date, new
                                                        to old</button></li>
                                            </ul>
                                        </ul>
                                    </div>
                                    <!-- moblie prodouct sort dropdown end -->

                                    <div class="d-flex flex-column h-75">
                                        <div class="btn-group mt-auto d-flex">
                                            <button class="chekout-cart-btn w-75 me-3">Apply</button>
                                            <button class="view-cart-btn w-25">Clear</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Product Price Range and Sort offcanvas end -->

                        <div class="row justify-content-between mt-4">
                            <div class="col-lg-3">
                                <div class="btn-group d-none d-md-block">
                                    <button class="btn btn-lg dropdown-toggle sort-by-btn" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        SORT BY
                                    </button>

                                    <ul class="dropdown-menu border-0 w-100 pt-3">
                                        <ul class="list-unstyled  mb-0 sort-option-container" id="sortOptions">
                                            <li><button class="btn  p-0 sort-option" data-value="Featured"
                                                    disabled>Featured </button></li>

                                            <li><button class="btn  p-0 sort-option" data-value="BestSelling">Best
                                                    Selling</button></li>

                                            <li><button class="btn  p-0 sort-option" data-value="AtoZ">Alphabetically,
                                                    A-Z</button></li>

                                            <li><button class="btn  p-0 sort-option" data-value="ZtoA">Alphabetically,
                                                    Z-A</button></li>

                                            <li><button class="btn  p-0 sort-option" data-value="LowToHigh">Price, low to
                                                    high</button></li>

                                            <li><button class="btn  p-0 sort-option" data-value="HighToLow">Price, high to
                                                    low</button></li>

                                            <li><button class="btn  p-0 sort-option" data-value="OldToNew">Date, old to
                                                    new</button></li>

                                            <li><button class="btn  p-0 sort-option" data-value="NewToOld">Date, new to
                                                    old</button></li>
                                        </ul>
                                    </ul>
                                </div>
                                <p style="color: rgba(65, 64, 66, 0.7); font-size: 14px; font-weight: 400;"
                                    class="mb-0 mt-3">34 Products</p>
                            </div>
                            <div class="col-lg-9">
                                <!-- Grid system icon section start -->
                                <div class="row mb-3 align-items-start align-items-lg-end mb-0 grid-icon-box">

                                    <!-- LG device grid controls -->
                                    <div class="grid-controls d-none d-lg-flex">
                                        <button class="grid-btn" data-columns="6" data-category="category1">
                                            <div class="grid-icon"></div>
                                            <div class="grid-icon"></div>
                                        </button>
                                        <button class="grid-btn" data-columns="4" data-category="category1">
                                            <div class="grid-icon"></div>
                                            <div class="grid-icon"></div>
                                            <div class="grid-icon"></div>
                                        </button>
                                        <button class="grid-btn" data-columns="3" data-category="category1">
                                            <div class="grid-icon"></div>
                                            <div class="grid-icon"></div>
                                            <div class="grid-icon"></div>
                                            <div class="grid-icon"></div>
                                        </button>
                                    </div>

                                    <!-- Mobile + Tablet grid controls -->
                                    <div class="grid-controls mobile-grid-controls d-flex d-lg-none">
                                        <!-- 1 column button -->
                                        <button class="grid-btn grid-btn-mobile" data-columns="12"
                                            data-category="category1">
                                            <div class="grid-icon"></div>
                                        </button>

                                        <!-- 2 column button (default active) -->
                                        <button class="grid-btn grid-btn-mobile active" data-columns="6"
                                            data-category="category1">
                                            <div class="grid-icon"></div>
                                            <div class="grid-icon"></div>
                                        </button>
                                    </div>

                                </div>
                                {{-- grid section end  --}}
                            </div>
                        </div>
                        <!-- Grid Products Row start -->
                        <div class="row product-grid">
                            <div class="col-lg-12">
                                <div class="related-products ">
                                    <div class="page-products">

                                        <div class="row mt-5 justify-content-center justify-content-lg-start">
                                            <div class="col-sm-6 col-md-6 col-lg-3 product-column"
                                                data-category="category1">
                                                <div class="product-box product-box-col-2" data-category="category1">
                                                    <div class="card border-0 product">
                                                        <div class="product-item border border-dark">
                                                            <a href="">
                                                                <img class="card-img-top default-img"
                                                                    src="./assets/images/related-product/rltd-1.1.jpg"
                                                                    alt="related product image" />
                                                                <!-- hover image -->
                                                                <img class="card-img-top hover-img"
                                                                    src="./assets/images/related-product/rltd-1.2.jpg"
                                                                    alt="related product image" />
                                                            </a>

                                                            <button
                                                                class="btn btn-sm bg-pink w-25 position-sticky discount-btn">
                                                                -10%
                                                            </button>
                                                            <div class="product-info">
                                                                <button class="add-to-cart btn btn-sm py-2 ">
                                                                    ADD TO CART
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body px-0">
                                                            <a href="" class="card-title h4 stretched-link">
                                                                Skin Cafe 98% Pure and Natural Aloe Vera Gel (240ml)
                                                            </a>
                                                            <p class="card-text">
                                                                <span class="text-decoration-line-through">৳450</span><span
                                                                    class="ms-2">৳352</span>
                                                            </p>
                                                            <div class="product-rating-star">
                                                                ★★★★★
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-3 product-column"
                                                data-category="category1">
                                                <div class="product-box product-box-col-2" data-category="category1">
                                                    <div class="card border-0 product">
                                                        <div class="product-item border border-dark">
                                                            <a href="">
                                                                <img class="card-img-top default-img"
                                                                    src="./assets/images/related-product/rltd-2.1.webp"
                                                                    alt="related product image" />
                                                                <!-- hover image -->
                                                                <img class="card-img-top hover-img"
                                                                    src="./assets/images/related-product/rltd-2.2.webp"
                                                                    alt="related product image" />
                                                            </a>

                                                            <button
                                                                class="btn btn-sm bg-pink w-25 position-sticky discount-btn">
                                                                -10%
                                                            </button>
                                                            <div class="product-info">
                                                                <button class="add-to-cart btn btn-sm py-2 ">
                                                                    ADD TO CART
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body px-0">
                                                            <a href="" class="card-title h4 stretched-link">
                                                                Skin Cafe 98% Pure and Natural Aloe Vera Gel (240ml)
                                                            </a>
                                                            <p class="card-text">
                                                                <span class="text-decoration-line-through">৳450</span><span
                                                                    class="ms-2">৳352</span>
                                                            </p>
                                                            <div class="product-rating-star">
                                                                ★★★★★
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-3 product-column"
                                                data-category="category1">
                                                <div class="product-box product-box-col-2" data-category="category1">
                                                    <div class="card border-0 product">
                                                        <div class="product-item border border-dark">
                                                            <a href="">
                                                                <img class="card-img-top default-img"
                                                                    src="./assets/images/related-product/rltd-3.1.webp"
                                                                    alt="related product image" />
                                                                <!-- hover image -->
                                                                <img class="card-img-top hover-img"
                                                                    src="./assets/images/related-product/rltd-3.2.webp"
                                                                    alt="related product image" />
                                                            </a>

                                                            <button
                                                                class="btn btn-sm bg-pink w-25 position-sticky discount-btn">
                                                                -10%
                                                            </button>
                                                            <div class="product-info">
                                                                <button class="add-to-cart btn btn-sm py-2 ">
                                                                    ADD TO CART
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body px-0">
                                                            <a href="" class="card-title h4 stretched-link">
                                                                Skin Cafe 98% Pure and Natural Aloe Vera Gel (240ml)
                                                            </a>
                                                            <p class="card-text">
                                                                <span class="text-decoration-line-through">৳450</span><span
                                                                    class="ms-2">৳352</span>
                                                            </p>
                                                            <div class="product-rating-star">
                                                                ★★★★★
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-3 product-column"
                                                data-category="category1">
                                                <div class="product-box product-box-col-2" data-category="category1">
                                                    <div class="card border-0 product">
                                                        <div class="product-item border border-dark">
                                                            <a href="">
                                                                <img class="card-img-top default-img"
                                                                    src="./assets/images/related-product/rltd-4.1.webp"
                                                                    alt="related product image" />
                                                                <!-- hover image -->
                                                                <img class="card-img-top hover-img"
                                                                    src="./assets/images/related-product/rltd-4.2.webp"
                                                                    alt="related product image" />
                                                            </a>

                                                            <button
                                                                class="btn btn-sm bg-pink w-25 position-sticky discount-btn">
                                                                -10%
                                                            </button>
                                                            <div class="product-info">
                                                                <button class="add-to-cart btn btn-sm py-2 ">
                                                                    ADD TO CART
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body px-0">
                                                            <a href="" class="card-title h4 stretched-link">
                                                                Skin Cafe 98% Pure and Natural Aloe Vera Gel (240ml)
                                                            </a>
                                                            <p class="card-text">
                                                                <span class="text-decoration-line-through">৳450</span><span
                                                                    class="ms-2">৳352</span>
                                                            </p>
                                                            <div class="product-rating-star">
                                                                ★★★★★
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-3 product-column"
                                                data-category="category1">
                                                <div class="product-box product-box-col-2" data-category="category1">
                                                    <div class="card border-0 product">
                                                        <div class="product-item border border-dark">
                                                            <a href="">
                                                                <img class="card-img-top default-img"
                                                                    src="./assets/images/related-product/rltd-4.1.webp"
                                                                    alt="related product image" />
                                                                <!-- hover image -->
                                                                <img class="card-img-top hover-img"
                                                                    src="./assets/images/related-product/rltd-4.2.webp"
                                                                    alt="related product image" />
                                                            </a>

                                                            <button
                                                                class="btn btn-sm bg-pink w-25 position-sticky discount-btn">
                                                                -10%
                                                            </button>
                                                            <div class="product-info">
                                                                <button class="add-to-cart btn btn-sm py-2 ">
                                                                    ADD TO CART
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body px-0">
                                                            <a href="" class="card-title h4 stretched-link">
                                                                Skin Cafe 98% Pure and Natural Aloe Vera Gel (240ml)
                                                            </a>
                                                            <p class="card-text">
                                                                <span class="text-decoration-line-through">৳450</span><span
                                                                    class="ms-2">৳352</span>
                                                            </p>
                                                            <div class="product-rating-star">
                                                                ★★★★★
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-3 product-column"
                                                data-category="category1">
                                                <div class="product-box product-box-col-2" data-category="category1">
                                                    <div class="card border-0 product">
                                                        <div class="product-item border border-dark">
                                                            <a href="">
                                                                <img class="card-img-top default-img"
                                                                    src="./assets/images/related-product/rltd-4.1.webp"
                                                                    alt="related product image" />
                                                                <!-- hover image -->
                                                                <img class="card-img-top hover-img"
                                                                    src="./assets/images/related-product/rltd-4.2.webp"
                                                                    alt="related product image" />
                                                            </a>

                                                            <button
                                                                class="btn btn-sm bg-pink w-25 position-sticky discount-btn">
                                                                -10%
                                                            </button>
                                                            <div class="product-info">
                                                                <button class="add-to-cart btn btn-sm py-2 ">
                                                                    ADD TO CART
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body px-0">
                                                            <a href="" class="card-title h4 stretched-link">
                                                                Skin Cafe 98% Pure and Natural Aloe Vera Gel (240ml)
                                                            </a>
                                                            <p class="card-text">
                                                                <span class="text-decoration-line-through">৳450</span><span
                                                                    class="ms-2">৳352</span>
                                                            </p>
                                                            <div class="product-rating-star">
                                                                ★★★★★
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-3 product-column"
                                                data-category="category1">
                                                <div class="product-box product-box-col-2" data-category="category1">
                                                    <div class="card border-0 product">
                                                        <div class="product-item border border-dark">
                                                            <a href="">
                                                                <img class="card-img-top default-img"
                                                                    src="./assets/images/related-product/rltd-4.1.webp"
                                                                    alt="related product image" />
                                                                <!-- hover image -->
                                                                <img class="card-img-top hover-img"
                                                                    src="./assets/images/related-product/rltd-4.2.webp"
                                                                    alt="related product image" />
                                                            </a>

                                                            <button
                                                                class="btn btn-sm bg-pink w-25 position-sticky discount-btn">
                                                                -10%
                                                            </button>
                                                            <div class="product-info">
                                                                <button class="add-to-cart btn btn-sm py-2 ">
                                                                    ADD TO CART
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body px-0">
                                                            <a href="" class="card-title h4 stretched-link">
                                                                Skin Cafe 98% Pure and Natural Aloe Vera Gel (240ml)
                                                            </a>
                                                            <p class="card-text">
                                                                <span class="text-decoration-line-through">৳450</span><span
                                                                    class="ms-2">৳352</span>
                                                            </p>
                                                            <div class="product-rating-star">
                                                                ★★★★★
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
                        <!-- Grid Products row end -->
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
    <!-- Page Main Content end -->
    <!-- FAQ Accordion -->
    <div class="container mt-5">
        <h2 class="mb-4">Popular Searches</h2>

        <!-- Bootstrap Accordion -->
        <div class="accordion" id="searchesAccordion">
            <!-- Skincare Category -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSkincare">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSkincare" aria-expanded="false" aria-controls="collapseSkincare">
                        Skincare Products
                    </button>
                </h2>
                <div id="collapseSkincare" class="accordion-collapse collapse" aria-labelledby="headingSkincare"
                    data-bs-parent="#searchesAccordion">
                    <div class="accordion-body">
                        <ul class="list-unstyled">
                            <li><a href="#">face serum products</a></li>
                            <li><a href="#">foaming face wash</a></li>
                            <li><a href="#">buy moisturiser online</a></li>
                            <li><a href="#">day cream</a></li>
                            <li><a href="#">night cream online</a></li>
                            <li><a href="#">brightening eye cream</a></li>
                            <li><a href="#">facial cleanser online</a></li>
                            <li><a href="#">face moisturiser cream</a></li>
                            <li><a href="#">oil free sunscreen</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Makeup Category -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingMakeup">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseMakeup" aria-expanded="false" aria-controls="collapseMakeup">
                        Makeup Products
                    </button>
                </h2>
                <div id="collapseMakeup" class="accordion-collapse collapse" aria-labelledby="headingMakeup"
                    data-bs-parent="#searchesAccordion">
                    <div class="accordion-body">
                        <ul class="list-unstyled">
                            <li><a href="#">tinted lip balm</a></li>
                            <li><a href="#">matte lipstick shades</a></li>
                            <li><a href="#">liquid lipstick online</a></li>
                            <li><a href="#">face concealer</a></li>
                            <li><a href="#">cc cream makeup</a></li>
                            <li><a href="#">buy makeup primer</a></li>
                            <li><a href="#">waterproof eyeliner</a></li>
                            <li><a href="#">eyeshadow palette online</a></li>
                            <li><a href="#">face compact powder</a></li>
                            <li><a href="#">buy makeup highlighter</a></li>
                            <li><a href="#">waterproof mascara</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Haircare Category -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingHaircare">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseHaircare" aria-expanded="false" aria-controls="collapseHaircare">
                        Haircare Products
                    </button>
                </h2>
                <div id="collapseHaircare" class="accordion-collapse collapse" aria-labelledby="headingHaircare"
                    data-bs-parent="#searchesAccordion">
                    <div class="accordion-body">
                        <ul class="list-unstyled">
                            <li><a href="#">buy shampoo online</a></li>
                            <li><a href="#">hair fall control oil</a></li>
                            <li><a href="#">hair serum online</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Body & Fragrance Category -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingBody">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseBody" aria-expanded="false" aria-controls="collapseBody">
                        Body & Fragrance
                    </button>
                </h2>
                <div id="collapseBody" class="accordion-collapse collapse" aria-labelledby="headingBody"
                    data-bs-parent="#searchesAccordion">
                    <div class="accordion-body">
                        <ul class="list-unstyled">
                            <li><a href="#">body lotion online</a></li>
                            <li><a href="#">women’s fragrances</a></li>
                            <li><a href="#">men’s fragrances</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Nail & Tools Category -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingNail">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseNail" aria-expanded="false" aria-controls="collapseNail">
                        Nail & Makeup Tools
                    </button>
                </h2>
                <div id="collapseNail" class="accordion-collapse collapse" aria-labelledby="headingNail"
                    data-bs-parent="#searchesAccordion">
                    <div class="accordion-body">
                        <ul class="list-unstyled">
                            <li><a href="#">nail polish products</a></li>
                            <li><a href="#">waterproof makeup remover</a></li>
                            <li><a href="#">nail polish remover</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ Accordion -->
@endsection
