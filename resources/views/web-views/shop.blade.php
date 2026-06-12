@extends('layouts.front-end.app')
@section('title', 'Shop')
@section('main-content')
    <!-- Page Main Content start  -->

    <main>
        <section class="dynamic-page-main-content-section my-3">
            <div class="container">
                <div class="row">

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
                                                <input type="range" class="minRange" min="0" max="1750"
                                                    value="0">

                                                <input type="range" class="maxRange" min="0" max="1750"
                                                    value="1750">
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
                    <div class="col-md-8 col-lg-9 ">
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
                                        <p class="mb-0" style="font-size: 14px;">{{ $products->count() }} Products</p>
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
                                                <input type="range" class="minRange" min="0" max="1750"
                                                    value="0">

                                                <input type="range" class="maxRange" min="0" max="1750"
                                                    value="1750">
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
                            <div class="col-lg-3"></div>
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
                                            @if ($products->count() > 0)

                                                @foreach ($products as $product)
                                                    <div class="col-sm-6 col-md-6 col-lg-3 product-column wow animate__animated animate__zoomIn"
                                                        data-category="category1">
                                                        <div class="product-box product-box-col-2"
                                                            data-category="category1">
                                                            <div class="card border-0 product">
                                                                <div class="product-item border border-dark"
                                                                    data-aos-delay="0.5s">
                                                                    <a
                                                                        href="{{ route('product.details', $product->slug) }}">
                                                                        <img class="card-img-top default-img"
                                                                            src="{{ \App\CPU\ProductManager::product_image_path('thumbnail') }}/{{ $product->thumbnail }}"
                                                                            alt="{{ $product->name }}" />
                                                                        <!-- hover image -->

                                                                        @php
                                                                            $images = json_decode(
                                                                                $product->images,
                                                                                true,
                                                                            );
                                                                        @endphp

                                                                        @if (!empty($images) && isset($images[0]))
                                                                            <img class="card-img-top hover-img"
                                                                                src="{{ \App\CPU\ProductManager::product_image_path('product') }}/{{ $images[0] }}"
                                                                                alt="{{ $product->name }}">
                                                                        @endif
                                                                    </a>

                                                                    @if ($product->discount > 0)
                                                                        <button
                                                                            class="btn btn-sm bg-pink w-25 position-sticky discount-btn">
                                                                            -{{ $product->discount }}%
                                                                        </button>
                                                                    @endif
                                                                    <div class="product-info">
                                                                        <button onclick="addToCart('{{ $product->id }}')"
                                                                            class="add-to-cart btn btn-sm py-2 "
                                                                            data-id="{{ $product->id }}">
                                                                            ADD TO CART
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body px-0">
                                                                    <a href="{{ route('product.details', $product->slug) }}"
                                                                        class="card-title h4 stretched-link">
                                                                        {{ $product->name }}
                                                                    </a>
                                                                    <p class="card-text">
                                                                        @if ($product->discount > 0)
                                                                            <span
                                                                                class="text-decoration-line-through">৳{{ \App\CPU\Helpers::currency_converter($product->unit_price) }}</span>

                                                                            <span
                                                                                class="ms-2">৳{{ \App\CPU\Helpers::currency_converter(
                                                                                    $product->unit_price - \App\CPU\Helpers::get_product_discount($product, $product->unit_price),
                                                                                ) }}</span>
                                                                        @else
                                                                            <span
                                                                                class="ms-2">৳{{ \App\CPU\Helpers::currency_converter($product->unit_price) }}</span>
                                                                        @endif
                                                                    </p>
                                                                    <div class="product-rating-star">
                                                                        ★★★★★
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <h3>Sorry, there are no products in this collection</h3>
                                            @endif


                                        </div>

                                        {{-- Pagination links --}}
                                        <div class="d-flex gap-2 justify-content-end mt-5">
                                            {{ $products->links() }}
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

    <!-- FAQ Accordion -->
@endsection
