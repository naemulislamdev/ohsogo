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
    <section class="faq-section">
        <div class="container mt-5 mb-5">
            <!-- Bootstrap Accordion -->
            <div class="accordion" id="searchesAccordion">
                <!-- Skincare Category -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSkincare">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSkincare" aria-expanded="false" aria-controls="collapseSkincare">
                            <span class="accordion-title">Popular Searches</span>
                        </button>
                    </h2>
                    <div id="collapseSkincare" class="accordion-collapse collapse" aria-labelledby="headingSkincare"
                        data-bs-parent="#searchesAccordion">
                        <div class="accordion-body popular-search">
                            <ul class="list-unstyled">
                                <li><a href="#">Makeup Products</a></li>
                                <li><a href="#">Face Primer</a></li>
                                <li><a href="#">Makeup Foundation</a></li>
                                <li><a href="#">Compact Powder</a></li>
                                <li><a href="#">BB Cream</a></li>
                                <li><a href="#">Highlighter Makeup</a></li>
                                <li><a href="#">Makeup Remover</a></li>
                                <li><a href="#">Makeup Setting Spray </a></li>
                                <li><a href="#">Eye Kajal</a></li>
                                <li><a href="#">Waterproof Mascara</a></li>
                                <li><a href="#">Eyeshadow Palette</a></li>
                                <li><a href="#">Eyebrow Pencil</a></li>
                                <li><a href="#">Eyelashes</a></li>
                                <li><a href="#">Lipstick</a></li>
                                <li><a href="#">Matte Lipstick</a></li>
                                <li><a href="#">Liquid Lipstick</a></li>
                                <li><a href="#">Lip Tint</a></li>
                                <li><a href="#">Nail Polish</a></li>
                                <li><a href="#">Nail Polish Remover</a></li>
                                <li><a href="#">Concealer</a></li>
                                <li><a href="#">Contour</a></li>
                                <li><a href="#">Blush</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--More Info-->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingMakeup">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseMakeup" aria-expanded="false" aria-controls="collapseMakeup">
                            <span class="accordion-title">More Information</span>
                        </button>
                    </h2>
                    <div id="collapseMakeup" class="accordion-collapse collapse" aria-labelledby="headingMakeup"
                        data-bs-parent="#searchesAccordion">
                        <div class="accordion-body">
                            <div class="more-info">
                                <h4>Ohsogo: The Best Collection of Makeup Products Online in Bangladesh </h4>
                                <p>Makeup is an excellent form of self-expression for all women. Whether you are a bold,
                                    daring personality that loves sporting red hues and colorful nail tips or a subtle, shy
                                    character that loves a natural, luminous look with blushy cheeks, wearing makeup in your
                                    unique style sets you apart from the crowd! </p>
                                <p> At Ohsogo, we offer a selection of makeup & skincare products developed by the most
                                    revered cosmetic brands from across the globe. From high-quality face makeup products to
                                    vibrant eye makeup products & bold lip makeup products, you can pick from a vast array
                                    of beauty products while shopping at our online store. Whether you’re looking for makeup
                                    brands that offer products with a long-wear formula, or those that provide
                                    chemical-free, skin-friendly products, we’ve got it all! Flaunt a flawless, glowing
                                    makeup look everywhere by using exclusive makeup products from Ohsogo!</p>
                                <h5> Indulge in a variety of makeup products at Ohsogo </h5>
                                <p> Leaving everything aside, women love variety. While shopping for clothes, or beauty
                                    products, women love having a vast assortment to shop from. At Ohsogo, you can browse
                                    through our colossal online collection of makeup products to make an informed decision &
                                    buy products that not only suit your preference but also your skin’s needs!
                                </p>
                                <p> Face makeup products: Create a seamless, glowing base for your makeup with face makeup
                                    products like primer, foundation, concealer, compact, blush, highlighter, and much more.
                                </p>
                                <p> Eye makeup products: Create a deep, intense eye look with eye makeup products such as
                                    kajal, mascara, eyeshadow, and eyebrow enhancers to captivate everyone with your
                                    enticing eyes! </p>
                                <p> Lip makeup products: Sport the perfect pout for every occasion with our collection of
                                    lip makeup products, including matte & creamy lipstick, liquid lipstick & lip tints.
                                </p>
                                <p> Nail products: Besides face makeup, we also offer you a wide collection of nail polishes
                                    & removers to maintain bright, vibrant & healthy nails! </p>
                                <h5>Buy Exclusive Makeup Products Online at Ohsogo </h5>
                                <p> At Ohsogo, we’ve designed a one-stop destination for all your cosmetics & skincare
                                    needs. Enhance your makeup collection with select products formulated by the most
                                    esteemed & preferred brands worldwide to create a makeup look that flaunts your natural
                                    charm & beauty! </p>
                                <h5 class="my-4"> FAQs </h5>
                                <p>1. Is there a proper order for applying makeup? What is it? </p>
                                <p>While you can easily buy several makeup products online, it is essential to know the
                                    application process. Following a proper order of applying makeup products is the best
                                    way to enjoy makeup that lasts all day long while also protecting your skin health. The
                                    best order to apply makeup products is:- </p>
                                <ul style="list-style: decimal">
                                    <li>Set a base by using a makeup primer. </li>
                                    <li>Use a foundation that suits your skin type and tone. </li>
                                    <li>Use a concealer to conceal dark spots, acne & dark under eyes. </li>
                                    <li>Use a compact powder to set your liquid makeup products. </li>
                                    <li>Use various eye makeup products such as eye shadow, kajal, liner, and mascara to
                                        create an eye look. </li>
                                    <li>Use a pretty blush or bronzer to add color to your cheeks. </li>
                                    <li>Wear a bold pout by applying matte or velvety lipstick. </li>
                                    <li> Complete your look with a setting spray to keeps your makeup intact all day. </li>
                                </ul>
                                <ul class="mt-3 mb-5" style="list-style: decimal">
                                    <li>How To Prevent An Oily Face After Applying Makeup?</li>
                                </ul>
                                <p>Everyone has a different skin tone and skin type. While many of us have normal skin,
                                    several others have combination, sensitive or oily skin that can turn your face oily
                                    after applying makeup. If you find your T-zone or other areas of your face getting oily
                                    after applying cosmetic products, make sure to follow these few tips:- </p>
                                <ul style="list-style: decimal">
                                    <li>Never forget to use a makeup primer that shrinks your pores for a more seamless look
                                        that does not get oily throughout the day. </li>
                                    <li>Always use powder makeup products to set and mattify your liquid products such as
                                        foundation and concealer. </li>
                                    <li>Opt for makeup products that have a mattifying formula than a creamy texture to
                                        control oil build-up. </li>
                                    <li>Use a setting spray to keep the makeup intact all day. </li>
                                    <li>Lightly pat your face with a compact every few hours when you find your face turning
                                        oily. </li>
                                </ul>
                                <ul style="list-style: ">
                                    <li>
                                        Which makeup products should women splurge on the most? </li>
                                </ul>
                                <p>At Ohsogo, we offer a wide assortment of premium-quality beauty & cosmetic products
                                    online. Whether you are looking for skincare products that fix all your skin issues, or
                                    you’re looking for makeup products that give you a flawless complexion, women across
                                    Bangladesh can splurge on a variety of makeup products such as foundation, concealer,
                                    primer, eye makeup, liquid lipstick, nail paints, and much more, at our online store.
                                </p>
                                <ul style="list-style: decimal">
                                    <li>Can I wear makeup every day? How do I stop it from slipping off? </li>
                                </ul>
                                <p>Yes, you can enjoy a flawless makeup look every day. While it feels great to wear makeup
                                    every morning, it can slip off during the day. To ensure that your makeup look stays
                                    intact, indulge in makeup products that have a long-lasting formula. You can also use a
                                    setting spray from esteemed brands that set your makeup in place which doesn’t allow it
                                    to budge all day. Lastly, you can touch up your face with makeup products such as
                                    compacts to instantly fix your look. </p>
                                <ul style="list-style: decimal">
                                    <li>What makeup products do you need for a full face makeup? </li>
                                </ul>
                                <p>Enjoy creating a bold, full face makeup look every day with these essential beauty
                                    products that you can find shopping online at Ohsogo! </p>
                                <ul class="ps-0 ms-0">
                                    <li>Face makeup products: Primer, foundation, concealer, compact, blush, highlighter.
                                    </li>
                                    <li>Eye makeup products: Kajal, mascara, eyeshadow, eyebrow enhancers. </li>
                                    <li>Lip makeup products: Lipstick, liquid lipstick. </li>
                                    <li>Makeup setting spray. </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Accordion -->
@endsection
