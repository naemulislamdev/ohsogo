@extends('layouts.front-end.app')
@section('title', 'Cart')
@section('main-content')
    <!-- Cart section start -->
    <section class="cart-section">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center pt-5">
                <h1 style="font-size: 33px; font-weight: 800;">CART</h1>
                <a style="font-size: 16px; font-weight: 400; text-transform: uppercase; color: #414042;" href="">Return
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
                        <tr>
                            <!-- Product image + title -->
                            <td>
                                <div class="product-content d-flex ">
                                    <img src="./assets/images/product-img/Combo_09f0db7e-9c15-421f-a7d7-075c5ce14ebf.avif"
                                        class="rounded me-3" alt="Product">
                                    <h5>Zayn & Myza Complete Vitamin C Glow Combo</h5>
                                </div>
                            </td>

                            <!-- Price -->
                            <td class="item-price">৳999</td>

                            <!-- Quantity -->
                            <td>
                                <div class="d-flex align-items-center  gap-3 table-quantity cart-increment-decrement">
                                    <button class="decrement"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                        </svg></button>
                                    <span class="showItem" style="color: #414042;">3</span>
                                    <input type="hidden" name="quantity" class="quantity">
                                    <button class="increment"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                        </svg></i></button>
                                </div>
                            </td>

                            <!-- Total + Delete -->
                            <td class="d-flex flex-column justify-content-end align-items-end">
                                <span class="item-price">৳4500</span>
                                <button title="Remove" style="color: #414042;"
                                    class="border-0 bg-transparent mt-3 text-muted">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <!-- Product image + title -->
                            <td>
                                <div class="product-content d-flex ">
                                    <img src="./assets/images/product-img/showergel_128x128.avif" class="rounded me-3"
                                        alt="Product">
                                    <h5>Zayn & Myza Complete Vitamin C Glow Combo</h5>
                                </div>
                            </td>

                            <!-- Price -->
                            <td class="item-price">৳745</td>

                            <!-- Quantity -->
                            <td>
                                <div class="d-flex align-items-center  gap-3 table-quantity cart-increment-decrement">
                                    <button class="decrement"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                        </svg></button>
                                    <span class="showItem" style="color: #414042;">3</span>
                                    <input type="hidden" name="quantity" class="quantity">
                                    <button class="increment"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                        </svg></i></button>
                                </div>
                            </td>

                            <!-- Total + Delete -->
                            <td class="d-flex flex-column justify-content-end align-items-end">
                                <span class="item-price">৳4500</span>
                                <button title="Remove" style="color: #414042;"
                                    class="border-0 bg-transparent mt-3 text-muted">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <!-- Product image + title -->
                            <td>
                                <div class="product-content d-flex ">
                                    <img src="./assets/images/product-img/Zayn_Myza_3x_Vitamin_E_Moisturizing_Cream_50gm_-_B1G1_128x128.avif"
                                        class="rounded me-3" alt="Product">
                                    <h5>Zayn & Myza Complete Vitamin C Glow Combo</h5>
                                </div>
                            </td>

                            <!-- Price -->
                            <td class="item-price">৳999</td>

                            <!-- Quantity -->
                            <td>
                                <div class="d-flex align-items-center  gap-3 table-quantity cart-increment-decrement">
                                    <button class="decrement"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                        </svg></button>
                                    <span class="showItem" style="color: #414042;">3</span>
                                    <input type="hidden" name="quantity" class="quantity">
                                    <button class="increment"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                        </svg></i></button>
                                </div>
                            </td>

                            <!-- Total + Delete -->
                            <td class="d-flex flex-column justify-content-end align-items-end">
                                <span class="item-price">৳4500</span>
                                <button title="Remove" style="color: #414042;"
                                    class="border-0 bg-transparent mt-3 text-muted">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- moblie cart product details or info -->
        <div class="container mobile-cart-product-details my-5 d-block d-md-none">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="cart-list-title d-flex justify-content-between align-items-center">
                        <p>Product</p>
                        <p>Total</p>
                    </div>
                    <div class="product-content d-flex align-items-center mb-4">
                        <div class="d-flex ">
                            <div>
                                <img src="./assets/images/product-img/Combo_09f0db7e-9c15-421f-a7d7-075c5ce14ebf.avif"
                                    class="rounded me-3 w-75" alt="Product">

                            </div>
                            <div class="ms-1 d-flex flex-column  gap-3 ">
                                <h5 style="font-size: 15px; font-weight: 400; line-height: 20px;">Zayn & Myza Complete
                                    Vitamin C Glow Combo</h5>

                                <div
                                    class="d-flex align-items-center gap-3 cart-increment-decrement  cart-increment-decrement">
                                    <button class="decrement"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                        </svg></button>
                                    <input type="hidden" name="quantity" class="quantity">
                                    <span class="showItem" style="color: #414042;">3</span>
                                    <button class="increment"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                        </svg></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column justify-content-end align-items-end">
                            <span class="item-price" style="color: #f1729f;">৳4500</span>
                            <button title="Remove" style="color: #414042;"
                                class="border-0 bg-transparent mt-3 text-muted align-self-end">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-content d-flex align-items-center mb-4">
                        <div class="d-flex ">
                            <div>
                                <img src="./assets/images/product-img/Combo_09f0db7e-9c15-421f-a7d7-075c5ce14ebf.avif"
                                    class="rounded me-3 w-75" alt="Product">

                            </div>
                            <div class="ms-1 d-flex flex-column  gap-3 ">
                                <h5 style="font-size: 15px; font-weight: 400; line-height: 20px;">Zayn & Myza Complete
                                    Vitamin C Glow Combo</h5>

                                <div
                                    class="d-flex align-items-center gap-3 cart-increment-decrement  cart-increment-decrement">
                                    <button class="decrement"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                        </svg></button>
                                    <input type="hidden" name="quantity" class="quantity">
                                    <span class="showItem" style="color: #414042;">3</span>
                                    <button class="increment"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                        </svg></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column justify-content-end align-items-end">
                            <span class="item-price" style="color: #f1729f;">৳4500</span>
                            <button title="Remove" style="color: #414042;"
                                class="border-0 bg-transparent mt-3 text-muted align-self-end">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-content d-flex align-items-center mb-4">
                        <div class="d-flex ">
                            <div>
                                <img src="./assets/images/product-img/Combo_09f0db7e-9c15-421f-a7d7-075c5ce14ebf.avif"
                                    class="rounded me-3 w-75" alt="Product">

                            </div>
                            <div class="ms-1 d-flex flex-column  gap-3 ">
                                <h5 style="font-size: 15px; font-weight: 400; line-height: 20px;">Zayn & Myza Complete
                                    Vitamin C Glow Combo</h5>

                                <div
                                    class="d-flex align-items-center gap-3 cart-increment-decrement  cart-increment-decrement">
                                    <button class="decrement"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                        </svg></button>
                                    <input type="hidden" name="quantity" class="quantity">
                                    <span class="showItem" style="color: #414042;">3</span>
                                    <button class="increment"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                        </svg></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column justify-content-end align-items-end">
                            <span class="item-price" style="color: #f1729f;">৳4500</span>
                            <button title="Remove" style="color: #414042;"
                                class="border-0 bg-transparent mt-3 text-muted align-self-end">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </section>
    <!-- Cart section end -->
    <!-- Order Note and subtotal section start -->
    <section class="order-note-subtotal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="order-note">
                        <label class="form-label">Add a note to your order</label>
                        <textarea placeholder="How can we help you ?" class="form-control" name="order-none" name="order_note"
                            id=""></textarea>
                    </div>
                </div>
                <div class="col-lg-9 text-center text-lg-end">
                    <div class="order-total-checkout mt-5 mt-lg-0">
                        <h6>Subtotal ৳2,895 BDT</h6>
                        <p>Taxes and shipping calculated at checkout</p>
                        <div class="btn-container mt-3 ms-auto">
                            <a style="color: #fff;" href="product_checkout.html"
                                class="chekout-cart-btn text-center w-100 py-3">CHECK OUT </a>
                            <h6 style="font-size: 14px;" class="free-shiping-txt shipping-gradient  mt-2 ">
                                You are eligible for free shipping.
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Order note and subtotal section end -->

    <!-- Related Product section start -->
    <section class="related-products ">
        <div class="container">
            <h2 class="h1 text-center my-4">You May Also Like</h2>
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 col-lg-3 pe-md-5">
                    <div class="card border-0 product w-100">
                        <div class="product-item border border-dark">
                            <a href="product_details.html">
                                <img class="card-img-top default-img" src="./assets/images/related-product/rltd-1.2.jpg"
                                    alt="related product image" />
                                <!-- hover image -->
                                <img class="card-img-top hover-img" src="./assets/images/related-product/rltd-1.1.jpg"
                                    alt="related product image" />
                            </a>

                            <button class="btn btn-sm bg-pink w-25 position-sticky discount-btn">
                                -10%
                            </button>
                            <div class="product-info">
                                <button class="add-to-cart">
                                    ADD TO CART
                                </button>
                            </div>
                        </div>
                        <div class="card-body px-0">
                            <a href="product_details.html" class="card-title stretched-link h4">
                                Skin Cafe 98% Pure and Natural Aloe Vera Gel (240ml)
                            </a>
                            <p class="card-text">
                                <span class="text-decoration-line-through">৳450</span><span class="ms-2">৳352</span>
                            </p>
                            <div class="product-rating-star">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-sm-0 pe-md-5">
                    <div class="card border-0 product">
                        <div class="product-item border border-dark">
                            <a href="product_details.html">
                                <img class="card-img-top default-img" src="./assets/images/related-product/rltd-2.1.webp"
                                    alt="related product image" />
                                <!-- hover image -->
                                <img class="card-img-top hover-img" src="./assets/images/related-product/rltd-2.2.webp"
                                    alt="related product image" />
                            </a>

                            <button class="btn btn-sm bg-pink w-25 position-sticky discount-btn">
                                -10%
                            </button>
                            <div class="product-info">
                                <button class="add-to-cart btn btn-sm py-2 ">
                                    ADD TO CART
                                </button>
                            </div>
                        </div>
                        <div class="card-body px-0">
                            <a href="product_details.html" class="card-title h4 stretched-link">
                                Skin Cafe 98% Pure and Natural Aloe Vera Gel (240ml)
                            </a>
                            <p class="card-text">
                                <span class="text-decoration-line-through">৳450</span><span class="ms-2">৳352</span>
                            </p>
                            <div class="product-rating-star">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-md-4 mt-lg-0 pe-md-5">
                    <div class="card border-0 product">
                        <div class="product-item border border-dark">
                            <a href="product_details.html">
                                <img class="card-img-top default-img" src="./assets/images/related-product/rltd-3.1.webp"
                                    alt="related product image" />
                                <!-- hover image -->
                                <img class="card-img-top hover-img" src="./assets/images/related-product/rltd-3.2.webp"
                                    alt="related product image" />
                            </a>

                            <button class="btn btn-sm bg-pink w-25 position-sticky discount-btn">
                                -10%
                            </button>
                            <div class="product-info">
                                <button class="add-to-cart btn btn-sm py-2 ">
                                    ADD TO CART
                                </button>
                            </div>
                        </div>
                        <div class="card-body px-0">
                            <a href="product_details.html" class="card-title h4 stretched-link">
                                Skin Cafe 98% Pure and Natural Aloe Vera Gel (240ml)
                            </a>
                            <p class="card-text">
                                <span class="text-decoration-line-through">৳450</span><span class="ms-2">৳352</span>
                            </p>
                            <div class="product-rating-star">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-md-4 mt-lg-0 pe-md-5">
                    <div class="card border-0 product">
                        <div class="product-item border border-dark">
                            <a href="product_details.html">
                                <img class="card-img-top default-img" src="./assets/images/related-product/rltd-4.1.webp"
                                    alt="related product image" />
                                <!-- hover image -->
                                <img class="card-img-top hover-img" src="./assets/images/related-product/rltd-4.2.webp"
                                    alt="related product image" />
                            </a>

                            <button class="btn btn-sm bg-pink w-25 position-sticky discount-btn">
                                -10%
                            </button>
                            <div class="product-info">
                                <button class="add-to-cart btn btn-sm py-2 ">
                                    ADD TO CART
                                </button>
                            </div>
                        </div>
                        <div class="card-body px-0">
                            <a href="product_details.html" class="card-title h4 stretched-link">
                                Skin Cafe 98% Pure and Natural Aloe Vera Gel (240ml)
                            </a>
                            <p class="card-text">
                                <span class="text-decoration-line-through">৳450</span><span class="ms-2">৳352</span>
                            </p>
                            <div class="product-rating-star">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product section end -->
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
