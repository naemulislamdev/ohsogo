@extends('layouts.front-end.app')
@section('title', 'Home')


@section('main-content')
    <!-- Hero Section -->
    <section class="hero-section ">
        <div class="overflow-hidden mx-auto">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <!-- Carousel Slider -->
                    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="0"
                                class="active"></button>
                            <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="2"></button>
                        </div>
                        <div class="carousel-inner ">
                            <div class="carousel-item active  ">
                                <img src="assets/images/slider/tbanner1.jpg"
                                    class="d-block w-100 wow animate__animated animate__zoomOutLite" data-wow-delay="0.5s"
                                    alt="Makeup Products" />
                            </div>
                            <div class="carousel-item ">
                                <img src="assets/images/slider/tbanner2.jpg"
                                    class="d-block w-100 wow animate__animated animate__zoomOutLite" data-wow-delay="0.5s"
                                    alt="Skincare Products" />
                            </div>
                            <div class="carousel-item ">
                                <img src="assets/images/slider/slider-1.jpg"
                                    class="d-block w-100 wow animate__animated animate__zoomOutLite" data-wow-delay="0.5s"
                                    alt="Hair Care Products" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start benefit section -->
    <section class="benefit-section py-4 py-lg-5 wow animate__animated animate__fadeInUp">
        <div class="container ">
            <div class="row justify-content-center justify-content-lg-between">
                <div class="col-md-6 col-lg-4 wow animate__animated animate__zoomIn"data-wow-duration="1.5s">
                    <div class="benefit-box text-center d-flex align-items-center justify-content-center">
                        <div class="me-3">
                            <img src="assets/images/icon/bf1.png" alt="Original Products" />
                        </div>
                        <div>
                            <h5 class="fw-bold">100% Original</h5>
                            <p>All Products Sourced Directly</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4 mt-md-0 wow animate__animated animate__zoomIn" data-wow-duration="2s">
                    <div class="benefit-box text-center d-flex align-items-center justify-content-center">
                        <div class="me-3">
                            <img src="assets/images/icon/bf2.png" alt="Free Shipping" />
                        </div>
                        <div>
                            <h5 class="fw-bold">Free Shipping</h5>
                            <p>On Orders Above ৳999</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4 mt-lg-0 wow animate__animated animate__zoomIn" data-wow-duration="2s">
                    <div class="benefit-box text-center d-flex align-items-center justify-content-center">
                        <div class="me-3">
                            <img src="assets/images/icon/bf3.png" alt="Easy Returns" />
                        </div>
                        <div>
                            <h5 class="fw-bold">Easy Returns</h5>
                            <p>Hassle-Free Pick-ups & Returns</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end benefit section -->
    <!----Product Section------>
    <section class="product-section py-5">
        <div class="container ">
            <div class="row wow animate__animated animate__fadeInUp">
                <div class="col">
                    <h2 class=" mb-5 section-heading">Peep the Newest Drops!</h2>
                </div>
            </div>

            <div class="owl-carousel related-products product-carosel">
                @foreach ($newDropProducts as $product)
                    <div class="item">
                        <div class="card border-0 product w-100 ">
                            <div class="product-item border border-dark wow animate__animated animate__zoomOutLite">
                                <a href="{{ route('product.details', ['id' => $product->id]) }}"
                                    class="product-img-container ">
                                    <img class="card-img-top product-img"
                                        src="{{ \App\CPU\ProductManager::product_image_path('thumbnail') }}/{{ $product['thumbnail'] }}"
                                        alt="{{ $product['id'] }}" />
                                </a>
                                <button class="btn btn-sm bg-pink position-sticky discount-btn">
                                    -{{ $product['discount'] }}%
                                </button>
                                <div class="product-info">
                                    <button class="add-to-cart">ADD TO CART</button>
                                </div>
                            </div>
                            <div class="card-body px-0">
                                <a href="{{ route('product.details', ['id' => $product->id]) }}"
                                    class="card-title stretched-link h4">
                                    {{ $product['name'] }}
                                </a>
                                <p class="card-text">
                                    <span class="text-decoration-line-through">৳{{ round($product['unit_price']) }}</span>
                                    <span class="ms-2">৳{{ round($product['purchase_price']) }}</span>
                                </p>
                                <div class="product-rating-star">★★★★★</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <a class="chekout-cart-btn text-white" href="{{ route('page') }}">View all</a>
            </div>
        </div>
    </section>
    <!---- End Product Section------>
    <!---- start category Section------>
    <section>
        <div class="container">
            <div class="trending-categories">
                <h2 class="section-heading mb-5 wow animate__animated animate__fadeInUp">TRENDING CATEGORY</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 " data-wow-delay="0.5s">
                        <div class="category-box">
                            <div class="category-image wow animate__animated animate__zoomOutLite">
                                <img src="assets/images/category/cat1.jpg" alt="Men's Grooming" />
                            </div>
                            <div class="category-title">MENS GROOMING</div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 " data-wow-delay="0.5s">
                        <div class="category-box ">
                            <div class="category-image wow animate__animated animate__zoomOutLite">
                                <img src="assets/images/category/cat2.jpg" alt="Korean Beauty" />
                            </div>
                            <div class="category-title">KOREAN BEAUTY</div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 " data-wow-delay="0.5s">
                        <div class="category-box ">
                            <div class="category-image wow animate__animated animate__zoomOutLite">
                                <img src="assets/images/category/cat3.jpg" alt="Babycare" />
                            </div>
                            <div class="category-title">BABYCARE</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---- end category Section------>
    <!---- start combo banner Section------>
    <section>
        <div class="container ">
            <div class="row wow animate__animated animate__fadeInUp">
                <div class="col text-center mb-3">
                    <h1 style="font-size: 48px; font-weight: 400;">COMBOS FOR YOU</h1>
                </div>
            </div>
            <div class="row mt-4 mt-lg-5 ">
                <div class="col-lg-12 ">
                    <div class="combo-img">
                        <a href=""> <img src="assets/images/product-banner/pbanner1.jpg" alt="Combo Image"
                                class="img-fluid wow animate__animated animate__zoomOutLite" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---- end combo banner Section------>
    <!---- start recent drops Section------>
    <div class="recent-drops-section py-5">
        <div class="container ">
            <h2 class="section-heading mb-5 wow animate__animated animate__fadeInUp">RECENT DROPS</h2>

            <div class="row g-4">
                <!-- First Row -->
                <div class="col-md-4 ">
                    <div class="drop-card">
                        <img class="wow animate__animated animate__zoomOutLite" src="assets/images/product-banner/rd1.jpg"
                            alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="drop-card">
                        <img class="wow animate__animated animate__zoomOutLite" src="assets/images/product-banner/rd2.jpg"
                            alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="drop-card">
                        <img class="wow animate__animated animate__zoomOutLite" src="assets/images/product-banner/rd3.jpg"
                            alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>

                <!-- Second Row -->
                <div class="col-md-4 ">
                    <div class="drop-card">
                        <img class="wow animate__animated animate__zoomOutLite" src="assets/images/product-banner/rd4.jpg"
                            alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="drop-card">
                        <img class="wow animate__animated animate__zoomOutLite" src="assets/images/product-banner/rd5.jpg"
                            alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="drop-card">
                        <img class="wow animate__animated animate__zoomOutLite" src="assets/images/product-banner/rd6.jpg"
                            alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---- end recent drops Section------>
    <!---- start recent drops Section------>
    <div class="recent-drops-section py-5">
        <div class="container">
            <h2 class="section-heading text-center mb-5 wow animate__animated animate__fadeInUp">OHSOGO Recommends</h2>

            <div class="row g-4">
                <div class="col-lg-3">
                    <div class="or-img-box">
                        <img class="wow animate__animated animate__zoomOutLite" src="assets/images/product-banner/or1.jpg"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="or-img-box">
                        <img class="wow animate__animated animate__zoomOutLite" src="assets/images/product-banner/or2.jpg"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="or-img-box">
                        <img class="wow animate__animated animate__zoomOutLite" src="assets/images/product-banner/or3.jpg"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="or-img-box">
                        <img class="wow animate__animated animate__zoomOutLite" src="assets/images/product-banner/or4.jpg"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---- end recent drops Section------>
    <!---- start brand Section------>
    <div class="recent-drops-section py-5">
        <div class="container">
            <h2 class="section-heading  mb-5  wow animate__animated animate__fadeInUp">HANDPICKED BRANDS</h2>
            <div class="banner-slider3 owl-carousel owl-theme">
                <div class="item">
                    <div class="brand-card">
                        <img class="wow animate__animated animate__zoomOutLite" src="assets/images/product-banner/rd1.jpg"
                            alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="brand-card">
                        <img class="wow animate__animated animate__zoomOutLite" src="assets/images/product-banner/rd2.jpg"
                            alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="brand-card">
                        <img class="wow animate__animated animate__zoomOutLite" src="assets/images/product-banner/rd3.jpg"
                            alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="brand-card">
                        <img class="wow animate__animated animate__zoomOutLite" src="assets/images/product-banner/rd4.jpg"
                            alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="brand-card">
                        <img class="wow animate__animated animate__zoomOutLite" src="assets/images/product-banner/rd5.jpg"
                            alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="brand-card">
                        <img class="wow animate__animated animate__zoomOutLite" src="assets/images/product-banner/rd6.jpg"
                            alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----end brand Section------>
    <!---- start brand Section------>
    <section class="section py-5">
        <div class="container">
            <h2 class="section-heading mb-5 wow animate__animated animate__fadeInUp">SHOP BY INGREDIENTS</h2>
            <div class="row ">
                <div class="col-md-6 mb-3  wow animate__animated animate__fadeInLeft">
                    <div class="ingredient-card">
                        <img src="assets/images/product-banner/ni1.jpg" alt="Ingredient Image" class="img-fluid" />
                    </div>
                </div>
                <div class="col-md-6 mb-3  wow animate__animated animate__fadeInRight">
                    <div class="ingredient-card">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---- end brand Section------>
    <!---- start brand Section------>
    <section class="section home">
        <div class="container py-lg-5 ">
            <h1 class="text-center mb-5  wow animate__animated animate__fadeInUp">WHAT DO YOU HAVE <strong>CONCERN
                    WITH?</strong></h1>

            <!-- Main Category Tabs -->
            <ul class="nav nav-tabs justify-content-center mb-4  wow animate__animated animate__zoomOutLite"
                id="mainCategoryTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="face-tab" data-bs-toggle="tab" data-bs-target="#face"
                        type="button" role="tab" aria-controls="face" aria-selected="true">
                        FACE
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="skin-tab" data-bs-toggle="tab" data-bs-target="#skin" type="button"
                        role="tab" aria-controls="skin" aria-selected="false">
                        SKIN
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="hair-tab" data-bs-toggle="tab" data-bs-target="#hair" type="button"
                        role="tab" aria-controls="hair" aria-selected="false">
                        HAIR
                    </button>
                </li>
            </ul>

            <div class="text-center mb-5">
                <p style="font-size: 18px"><strong>Select the concern below </strong> to find the Products you need.</p>
            </div>

            <!-- Tab Content -->
            <div class="tab-content" id="mainCategoryTabsContent">
                <!-- Face Tab Content -->
                <div class="tab-pane fade show active" id="face" role="tabpanel" aria-labelledby="face-tab">
                    <!-- Subcategory Tabs for Face -->
                    <ul class="nav nav-tabs mb-4  wow animate__animated animate__zoomOutLite" id="faceSubcategoryTabs"
                        role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="acne-tab" data-bs-toggle="tab" data-bs-target="#acne"
                                type="button" role="tab" aria-controls="acne" aria-selected="true">
                                Acne
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="hyper-tab" data-bs-toggle="tab" data-bs-target="#hyper"
                                type="button" role="tab" aria-controls="hyper" aria-selected="false">
                                Hyperpigmentation
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="ageing-tab" data-bs-toggle="tab" data-bs-target="#ageing"
                                type="button" role="tab" aria-controls="ageing" aria-selected="false">
                                Premature Skin Ageing
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="sun-tab" data-bs-toggle="tab" data-bs-target="#sun"
                                type="button" role="tab" aria-controls="sun" aria-selected="false">
                                Sun Protection
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="circles-tab" data-bs-toggle="tab" data-bs-target="#circles"
                                type="button" role="tab" aria-controls="circles" aria-selected="false">
                                Dark Circles
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="hydration-tab" data-bs-toggle="tab" data-bs-target="#hydration"
                                type="button" role="tab" aria-controls="hydration" aria-selected="false">
                                Hydration
                            </button>
                        </li>
                    </ul>

                    <!-- Subcategory Content for Face -->
                    <div class="tab-content" id="faceSubcategoryTabsContent">
                        <!-- Acne Products -->
                        <div class="tab-pane fade show active" id="acne" role="tabpanel"
                            aria-labelledby="acne-tab">
                            <div class="owl-carousel related-products product-carosel">
                                @foreach ($newDropProducts as $product)
                                    <div class="item">
                                        <div class="card border-0 product w-100">
                                            <div class="product-item border border-dark wow animate__animated animate__zoomOutLite"
                                                data-wow-delay="0.5s">
                                                <a href="{{ route('product.details', ['id' => $product->id]) }}"
                                                    class="product-img-container ">
                                                    <img class="card-img-top product-img" data-wow-delay="0.5s"
                                                        src="{{ \App\CPU\ProductManager::product_image_path('thumbnail') }}/{{ $product['thumbnail'] }}"
                                                        alt="{{ $product['id'] }}" />
                                                </a>
                                                <button class="btn btn-sm bg-pink position-sticky discount-btn">
                                                    -{{ $product['discount'] }}%
                                                </button>
                                                <div class="product-info">
                                                    <button class="add-to-cart">ADD TO CART</button>
                                                </div>
                                            </div>
                                            <div class="card-body px-0">
                                                <a href="{{ route('product.details', ['id' => $product->id]) }}"
                                                    class="card-title stretched-link h4">
                                                    {{ $product['name'] }}
                                                </a>
                                                <p class="card-text">
                                                    <span
                                                        class="text-decoration-line-through">৳{{ round($product['unit_price']) }}</span>
                                                    <span class="ms-2">৳{{ round($product['purchase_price']) }}</span>
                                                </p>
                                                <div class="product-rating-star">★★★★★</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Other subcategories would go here -->
                        <div class="tab-pane fade" id="hyper" role="tabpanel" aria-labelledby="hyper-tab">
                            <!-- Hyperpigmentation products would go here -->
                            <div class="text-center py-5">
                                <h3>Hyperpigmentation Products</h3>
                                <p>Content would load here when tab is selected</p>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="ageing" role="tabpanel" aria-labelledby="ageing-tab">
                            <!-- Premature Skin Ageing products would go here -->
                            <div class="text-center py-5">
                                <h3>Premature Skin Ageing Products</h3>
                                <p>Content would load here when tab is selected</p>
                            </div>
                        </div>

                        <!-- Other subcategory panes would follow the same pattern -->
                    </div>
                </div>

                <!-- Skin Tab Content -->
                <div class="tab-pane fade" id="skin" role="tabpanel" aria-labelledby="skin-tab">
                    <div class="text-center py-5">
                        <h3>SKIN Products</h3>
                        <p>Content would load here when tab is selected</p>
                    </div>
                </div>

                <!-- Hair Tab Content -->
                <div class="tab-pane fade" id="hair" role="tabpanel" aria-labelledby="hair-tab">
                    <div class="text-center py-5">
                        <h3>HAIR Products</h3>
                        <p>Content would load here when tab is selected</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---- end brand Section------>
    <!----Product Section------>
    <section class="product-section  home">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="section-heading mb-5">Recently viewed</h2>
                </div>
            </div>
            <div class="owl-carousel related-products product-carosel">
                @foreach ($newDropProducts as $product)
                    <div class="item">
                        <div class="card border-0 product w-100">
                            <div class="product-item border border-dark wow animate__animated animate__zoomOutLite"
                                data-wow-delay="0.5s">
                                <a href="{{ route('product.details', ['id' => $product->id]) }}"
                                    class="product-img-container">
                                    <img class="card-img-top product-img"
                                        src="{{ \App\CPU\ProductManager::product_image_path('thumbnail') }}/{{ $product['thumbnail'] }}"
                                        alt="{{ $product['id'] }}" />
                                </a>
                                <button class="btn btn-sm bg-pink position-sticky discount-btn">
                                    -{{ $product['discount'] }}%
                                </button>
                                <div class="product-info">
                                    <button class="add-to-cart">ADD TO CART</button>
                                </div>
                            </div>
                            <div class="card-body px-0">
                                <a href="{{ route('product.details', ['id' => $product->id]) }}"
                                    class="card-title stretched-link h4">
                                    {{ $product['name'] }}
                                </a>
                                <p class="card-text">
                                    <span class="text-decoration-line-through">৳{{ round($product['unit_price']) }}</span>
                                    <span class="ms-2">৳{{ round($product['purchase_price']) }}</span>
                                </p>
                                <div class="product-rating-star">★★★★★</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!---- End Product Section------>
    <section class="testimonial-section">
        <div class="container ">
            <h2 class="section-heading wow animate__animated animate__fadeInUp">#BEAUTYBFF SPEAKS</h2>
            <div class="row mt-5">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="slider-wrapper">
                        <!-- Image Slider -->
                        <div class="testimonial-slider ">
                            <div><img src="assets/images/testimonial/customer-1.webp" alt="Skincare Products" /></div>
                            <div><img src="assets/images/testimonial/customer-2.png" alt="Skincare Products" /></div>
                            <div><img src="assets/images/testimonial/customer-3.png" alt="Skincare Products" /></div>
                            <div><img src="assets/images/testimonial/customer-2.png" alt="Skincare Products" /></div>
                        </div>

                        <!-- Dynamic Content -->
                        <div class="testimonial-content text-center">
                            <div class="stars"></div>
                            <p class="testimonial-quote">
                                “”</p>
                            <p class="testimonial-name"></p>
                        </div>
                        <!-- Custom Next/Prev Buttons -->
                        <button class="prev-btn btn btn-danger"><i class="fa fa-chevron-left text-white"
                                aria-hidden="true"></i></button>
                        <button class="next-btn btn btn-danger"><i class="fa fa-chevron-right text-white"
                                aria-hidden="true"></i></button>
                    </div>

                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>
    <section class="faq-section py-2 my-3">
        <div class="container mt-5 mb-5">
            <!-- Bootstrap Accordion -->
            <div class="accordion" id="searchesAccordion">
                <!-- Skincare Category -->
                <div class="accordion-item ">
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
                <div class="accordion-item ">
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
@endsection
