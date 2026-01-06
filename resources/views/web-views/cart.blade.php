@extends('layouts.front-end.app')
@section('title', 'Your Shopping Cart')
<style>
    .related-products .product-item {
    height: 300px !important;

}
</style>
@section('main-content')


    <!-- Cart section start -->
    <section class="cart-section">
        @if (session()->has('cart') && count(session()->get('cart')) > 0)
            <div class="cart_details">
                @include("layouts.front-end.partials.cart.cart_details")
            </div>
        @else
            <div class="d-flex justify-content-center flex-column align-items-center" style="height: 80vh">
                <h5>Your cart is currently empty !</h5>
                <a class="mt-3" href="{{ route('collections', 'all') }}">
                    <h5 class="fw-bold">RETURN TO SHOP</h5>
                </a>
            </div>
        @endif

    </section>
    <!-- Cart section end -->


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

@endsection
