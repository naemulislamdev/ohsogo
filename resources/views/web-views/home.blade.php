@extends('layouts.front-end.app')
@section('title', 'Home')
@section('main-content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <!-- Carousel Slider -->
                    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="0"
                                class="active"></button>
                            <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/images/slider/tbanner1.jpg" class="d-block w-100" alt="Makeup Products" />
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/slider/tbanner2.jpg" class="d-block w-100"
                                    alt="Skincare Products" />
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/slider/slider-1.jpg" class="d-block w-100"
                                    alt="Hair Care Products" />
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start benefit section -->
    <section class="benefit-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
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
                <div class="col-md-4 mt-4 mt-sm-0">
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
                <div class="col-md-4 mt-4 mt-sm-0">
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
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="section-title">Peep the Newest Drops!</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="product-card">
                        <a href="#">
                            <div class="discount-badge">−13%</div>
                            <img src="assets/images/product-img/p1.jpg" alt="Product Image" class="product-img" />
                            <div class="product-title">
                                <a href="product_details.html">
                                    <h4>
                                        Zayn & Myza Tea Tree and Salicylic Acid Foaming Face Wash
                                        for Women (100ml) BD
                                    </h4>
                                </a>
                            </div>
                            <div class="price">
                                <span class="old-price">৳ 399</span>
                                <span class="new-price">৳ 349</span>
                            </div>
                            <div class="stars">★★★★★</div>
                            <button class="add-to-cart-btn">ADD TO CART</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="product-card">
                        <a href="product_details.html">
                            <div class="discount-badge">sold</div>
                            <img src="assets/images/product-img/p1.jpg" alt="Product Image" class="product-img" />
                            <div class="product-title">
                                <h4>
                                    Zayn & Myza Tea Tree and Salicylic Acid Foaming Face Wash
                                    for Women (100ml) BD
                                </h4>
                            </div>
                            <div class="price">
                                <span class="old-price">৳ 399</span>
                                <span class="new-price">৳ 349</span>
                            </div>
                            <div class="stars">★★★★★</div>
                            <button class="add-to-cart-btn">ADD TO CART</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="product-card">
                        <a href="product_details.html">
                            <div class="discount-badge">−13%</div>
                            <img src="assets/images/product-img/p1.jpg" alt="Product Image" class="product-img" />
                            <div class="product-title">
                                <h4>
                                    Zayn & Myza Tea Tree and Salicylic Acid Foaming Face Wash
                                    for Women (100ml) BD
                                </h4>
                            </div>
                            <div class="price">
                                <span class="old-price">৳ 399</span>
                                <span class="new-price">৳ 349</span>
                            </div>
                            <div class="stars">★★★★★</div>
                            <button class="add-to-cart-btn">ADD TO CART</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="product-card">
                        <a href="product_details.html">
                            <div class="discount-badge">sold</div>
                            <img src="assets/images/product-img/p1.jpg" alt="Product Image" class="product-img" />
                            <div class="product-title">
                                <h4>
                                    Zayn & Myza Tea Tree and Salicylic Acid Foaming Face Wash
                                    for Women (100ml) BD
                                </h4>
                            </div>
                            <div class="price">
                                <span class="old-price">৳ 399</span>
                                <span class="new-price">৳ 349</span>
                            </div>
                            <div class="stars">★★★★★</div>
                            <button class="add-to-cart-btn">ADD TO CART</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---- End Product Section------>
    <!---- start category Section------>
    <section>
        <div class="container">
            <div class="trending-categories">
                <h2 class="section-title">TRENDING CATEGORY</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="category-box">
                            <div class="category-image">
                                <img src="assets/images/category/cat1.jpg" alt="Men's Grooming" />
                            </div>
                            <div class="category-title">MENS GROOMING</div>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="category-box">
                            <div class="category-image">
                                <img src="assets/images/category/cat2.jpg" alt="Korean Beauty" />
                            </div>
                            <div class="category-title">KOREAN BEAUTY</div>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="category-box">
                            <div class="category-image">
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
        <div class="container">
            <div class="row">
                <div class="col text-center mb-3">
                    <h2>COMBOS FOR YOU</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="combo-img">
                        <img src="assets/images/product-banner/pbanner1.jpg" alt="Combo Image" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---- end combo banner Section------>
    <!---- start recent drops Section------>
    <div class="recent-drops-section py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">RECENT DROPS</h2>

            <div class="row g-4">
                <!-- First Row -->
                <div class="col-md-4">
                    <div class="drop-card">
                        <img src="assets/images/product-banner/rd1.jpg" alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="drop-card">
                        <img src="assets/images/product-banner/rd2.jpg" alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="drop-card">
                        <img src="assets/images/product-banner/rd3.jpg" alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>

                <!-- Second Row -->
                <div class="col-md-4">
                    <div class="drop-card">
                        <img src="assets/images/product-banner/rd4.jpg" alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="drop-card">
                        <img src="assets/images/product-banner/rd5.jpg" alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="drop-card">
                        <img src="assets/images/product-banner/rd6.jpg" alt="" />
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
            <h2 class="section-title text-center mb-5">OHSOGO Recommends</h2>

            <div class="row g-4">
                <div class="col-lg-3">
                    <div class="or-img-box">
                        <img src="assets/images/product-banner/or1.jpg" alt="" />
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="or-img-box">
                        <img src="assets/images/product-banner/or2.jpg" alt="" />
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="or-img-box">
                        <img src="assets/images/product-banner/or3.jpg" alt="" />
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="or-img-box">
                        <img src="assets/images/product-banner/or4.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---- end recent drops Section------>
    <!---- start brand Section------>
    <div class="recent-drops-section py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">HANDPICKED BRANDS</h2>
            <div class="banner-slider3 owl-carousel owl-theme">
                <div class="item">
                    <div class="brand-card">
                        <img src="assets/images/product-banner/rd1.jpg" alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="brand-card">
                        <img src="assets/images/product-banner/rd2.jpg" alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="brand-card">
                        <img src="assets/images/product-banner/rd3.jpg" alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="brand-card">
                        <img src="assets/images/product-banner/rd4.jpg" alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="brand-card">
                        <img src="assets/images/product-banner/rd5.jpg" alt="" />
                        <h4>UP TO 25% OFF</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="brand-card">
                        <img src="assets/images/product-banner/rd6.jpg" alt="" />
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
            <h2 class="section-title text-center mb-5">SHOP BY INGREDIENTS</h2>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="ingredient-card">
                        <img src="assets/images/product-banner/ni1.jpg" alt="Ingredient Image" class="img-fluid" />
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="ingredient-card"></div>
                </div>
            </div>
        </div>
    </section>
    <!---- end brand Section------>
    <!---- start brand Section------>
    <section class="section py-5">
        <div class="container py-5">
            <h1 class="text-center mb-5">WHAT DO YOU HAVE CONCERN WITH?</h1>

            <!-- Main Category Tabs -->
            <ul class="nav nav-tabs justify-content-center mb-4" id="mainCategoryTabs" role="tablist">
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
                <p>Select the concern below to find the Products you need.</p>
            </div>

            <!-- Tab Content -->
            <div class="tab-content" id="mainCategoryTabsContent">
                <!-- Face Tab Content -->
                <div class="tab-pane fade show active" id="face" role="tabpanel" aria-labelledby="face-tab">
                    <!-- Subcategory Tabs for Face -->
                    <ul class="nav nav-tabs mb-4" id="faceSubcategoryTabs" role="tablist">
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
                            <div class="row">
                                <!-- Product 1 -->
                                <div class="col-md-3 mb-3">
                                    <div class="product-card">
                                        <a href="#">
                                            <div class="discount-badge">−13%</div>
                                            <img src="assets/images/product-img/p1.jpg" alt="Product Image"
                                                class="product-img" />
                                            <div class="product-title">
                                                <h4>
                                                    Zayn & Myza Tea Tree and Salicylic Acid Foaming Face
                                                    Wash for Women (100ml) BD
                                                </h4>
                                            </div>
                                            <div class="price">
                                                <span class="old-price">৳ 399</span>
                                                <span class="new-price">৳ 349</span>
                                            </div>
                                            <div class="stars">★★★★★</div>
                                            <button class="add-to-cart-btn">ADD TO CART</button>
                                        </a>
                                    </div>
                                </div>

                                <!-- Product 2 -->
                                <div class="col-md-3 mb-3">
                                    <div class="product-card">
                                        <a href="#">
                                            <div class="discount-badge">−13%</div>
                                            <img src="assets/images/product-img/p1.jpg" alt="Product Image"
                                                class="product-img" />
                                            <div class="product-title">
                                                <h4>
                                                    Zayn & Myza Tea Tree and Salicylic Acid Foaming Face
                                                    Wash for Women (100ml) BD
                                                </h4>
                                            </div>
                                            <div class="price">
                                                <span class="old-price">৳ 399</span>
                                                <span class="new-price">৳ 349</span>
                                            </div>
                                            <div class="stars">★★★★★</div>
                                            <button class="add-to-cart-btn">ADD TO CART</button>
                                        </a>
                                    </div>
                                </div>

                                <!-- Product 3 -->
                                <div class="col-md-3 mb-3">
                                    <div class="product-card">
                                        <a href="#">
                                            <div class="discount-badge">−13%</div>
                                            <img src="assets/images/product-img/p1.jpg" alt="Product Image"
                                                class="product-img" />
                                            <div class="product-title">
                                                <h4>
                                                    Zayn & Myza Tea Tree and Salicylic Acid Foaming Face
                                                    Wash for Women (100ml) BD
                                                </h4>
                                            </div>
                                            <div class="price">
                                                <span class="old-price">৳ 399</span>
                                                <span class="new-price">৳ 349</span>
                                            </div>
                                            <div class="stars">★★★★★</div>
                                            <button class="add-to-cart-btn">ADD TO CART</button>
                                        </a>
                                    </div>
                                </div>

                                <!-- Product 4 -->
                                <div class="col-md-3 mb-3">
                                    <div class="product-card">
                                        <a href="#">
                                            <div class="discount-badge">−13%</div>
                                            <img src="assets/images/product-img/p1.jpg" alt="Product Image"
                                                class="product-img" />
                                            <div class="product-title">
                                                <h4>
                                                    Zayn & Myza Tea Tree and Salicylic Acid Foaming Face
                                                    Wash for Women (100ml) BD
                                                </h4>
                                            </div>
                                            <div class="price">
                                                <span class="old-price">৳ 399</span>
                                                <span class="new-price">৳ 349</span>
                                            </div>
                                            <div class="stars">★★★★★</div>
                                            <button class="add-to-cart-btn">ADD TO CART</button>
                                        </a>
                                    </div>
                                </div>

                                <!-- Product 5 -->
                                <div class="col-md-3 mb-3">
                                    <div class="product-card">
                                        <a href="#">
                                            <div class="discount-badge">−13%</div>
                                            <img src="assets/images/product-img/p1.jpg" alt="Product Image"
                                                class="product-img" />
                                            <div class="product-title">
                                                <h4>
                                                    Zayn & Myza Tea Tree and Salicylic Acid Foaming Face
                                                    Wash for Women (100ml) BD
                                                </h4>
                                            </div>
                                            <div class="price">
                                                <span class="old-price">৳ 399</span>
                                                <span class="new-price">৳ 349</span>
                                            </div>
                                            <div class="stars">★★★★★</div>
                                            <button class="add-to-cart-btn">ADD TO CART</button>
                                        </a>
                                    </div>
                                </div>

                                <!-- Product 6 -->
                                <div class="col-md-3 mb-3">
                                    <div class="product-card">
                                        <a href="#">
                                            <div class="discount-badge">−13%</div>
                                            <img src="assets/images/product-img/p1.jpg" alt="Product Image"
                                                class="product-img" />
                                            <div class="product-title">
                                                <h4>
                                                    Zayn & Myza Tea Tree and Salicylic Acid Foaming Face
                                                    Wash for Women (100ml) BD
                                                </h4>
                                            </div>
                                            <div class="price">
                                                <span class="old-price">৳ 399</span>
                                                <span class="new-price">৳ 349</span>
                                            </div>
                                            <div class="stars">★★★★★</div>
                                            <button class="add-to-cart-btn">ADD TO CART</button>
                                        </a>
                                    </div>
                                </div>
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
    <section class="product-section py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="section-title">Recently viewed</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="product-card">
                        <a href="#">
                            <div class="discount-badge">−13%</div>
                            <img src="assets/images/product-img/p1.jpg" alt="Product Image" class="product-img" />
                            <div class="product-title">
                                <h4>
                                    Zayn & Myza Tea Tree and Salicylic Acid Foaming Face Wash
                                    for Women (100ml) BD
                                </h4>
                            </div>
                            <div class="price">
                                <span class="old-price">৳ 399</span>
                                <span class="new-price">৳ 349</span>
                            </div>
                            <div class="stars">★★★★★</div>
                            <button class="add-to-cart-btn">ADD TO CART</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="product-card">
                        <a href="#">
                            <div class="discount-badge">sold</div>
                            <img src="assets/images/product-img/p1.jpg" alt="Product Image" class="product-img" />
                            <div class="product-title">
                                <h4>
                                    Zayn & Myza Tea Tree and Salicylic Acid Foaming Face Wash
                                    for Women (100ml) BD
                                </h4>
                            </div>
                            <div class="price">
                                <span class="old-price">৳ 399</span>
                                <span class="new-price">৳ 349</span>
                            </div>
                            <div class="stars">★★★★★</div>
                            <button class="add-to-cart-btn">ADD TO CART</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="product-card">
                        <a href="#">
                            <div class="discount-badge">−13%</div>
                            <img src="assets/images/product-img/p1.jpg" alt="Product Image" class="product-img" />
                            <div class="product-title">
                                <h4>
                                    Zayn & Myza Tea Tree and Salicylic Acid Foaming Face Wash
                                    for Women (100ml) BD
                                </h4>
                            </div>
                            <div class="price">
                                <span class="old-price">৳ 399</span>
                                <span class="new-price">৳ 349</span>
                            </div>
                            <div class="stars">★★★★★</div>
                            <button class="add-to-cart-btn">ADD TO CART</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="product-card">
                        <a href="#">
                            <div class="discount-badge">sold</div>
                            <img src="assets/images/product-img/p1.jpg" alt="Product Image" class="product-img" />
                            <div class="product-title">
                                <h4>
                                    Zayn & Myza Tea Tree and Salicylic Acid Foaming Face Wash
                                    for Women (100ml) BD
                                </h4>
                            </div>
                            <div class="price">
                                <span class="old-price">৳ 399</span>
                                <span class="new-price">৳ 349</span>
                            </div>
                            <div class="stars">★★★★★</div>
                            <button class="add-to-cart-btn">ADD TO CART</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---- End Product Section------>
    <section class="testimonial-section">
        <div class="container">
            <h2 class="section-title">BEAUTYBFF SPEAKS</h2>

            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Testimonial 1 -->
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="testimonial-card text-center">
                                    <p class="testimonial-text">
                                        I couldn't be happier with OHSOGO. They consistently
                                        deliver 100% original products with lightning-fast
                                        delivery.
                                    </p>
                                    <div class="divider">*****</div>
                                    <p class="client-name">- Sanjida Toma</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="testimonial-card text-center">
                                    <p class="testimonial-text">
                                        The quality of products from OHSOGO is exceptional. I've
                                        been a loyal customer for years and they never disappoint.
                                    </p>
                                    <div class="divider">*****</div>
                                    <p class="client-name">- Jessica Williams</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="testimonial-card text-center">
                                    <p class="testimonial-text">
                                        Fast delivery and authentic products! OHSOGO is my go-to
                                        for all beauty needs. Highly recommended!
                                    </p>
                                    <div class="divider">*****</div>
                                    <p class="client-name">- Michael Chen</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
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
@endsection
