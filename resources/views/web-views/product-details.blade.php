<style>
    .btn-check:focus+.btn,
    .btn:focus {
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgb(0, 0, 0, 0.25);
    }

    .form-control:focus {
        color: #212529;
        background-color: #fff;
        border-color: #212529;
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgba(33, 37, 41, 0.25);
    }

    section.related-products .product-item {
        height: 300px !important;
    }
</style>


@extends('layouts.front-end.app')

@section('title', 'Product-details')
@section('main-content')
    <!-- Main product -->
    <section class="main-product">
        <div class="container">
            <nav class="breadcrumb my-5">
                <a class="breadcrumb-item text-dark font-weight-bold" href="/">HOME /</a>
            </nav>
            <div class="row mt-4">
                <div class="col-12 col-md-6">
                    <div class="xzoom-container">
                        <!-- Main Product Image -->
                        <img class="xzoom d-block w-100" id="xzoom-default"
                            src="{{ \App\CPU\ProductManager::product_image_path('thumbnail') }}/{{ $product['thumbnail'] }}"
                            xoriginal="{{ \App\CPU\ProductManager::product_image_path('thumbnail') }}/{{ $product['thumbnail'] }}" />

                        <!-- Thumbnail Images -->
                        <div class="xzoom-thumbs mt-3">
                            <a href="{{ asset('assets') }}/images/product-img/product-1.avif">
                                <img class="xzoom-gallery" width="100"
                                    src="{{ asset('assets') }}/images/product-img/product-1.avif"
                                    xpreview="{{ asset('assets') }}/images/product-img/product-1.avif" />
                            </a>
                            <a href="{{ asset('assets') }}/images/product-img/product-2.avif">
                                <img class="xzoom-gallery" width="100"
                                    src="{{ asset('assets') }}/images/product-img/product-2.avif"
                                    xpreview="{{ asset('assets') }}/images/product-img/product-2.avif" />
                            </a>
                            <a href="{{ asset('assets') }}/images/product-img/product-3.avif">
                                <img class="xzoom-gallery" width="100"
                                    src="{{ asset('assets') }}/images/product-img/product-3.avif"
                                    xpreview="{{ asset('assets') }}/images/product-img/product-3.avif" />
                            </a>
                            <a href="{{ asset('assets') }}/images/product-img/product-4.avif">
                                <img class="xzoom-gallery" width="100"
                                    src="{{ asset('assets') }}/images/product-img/product-4.avif"
                                    xpreview="{{ asset('assets') }}/images/product-img/product-4.avif" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 product-info">
                    <h3 class="product-heading">

                        {{ $product->name }}
                    </h3>
                    <div class="product-rating">★★★★★</div>
                    <div class="product-price d-flex gap-3">
                        <h2 class="text-decoration-line-through">৳{{ round($product->unit_price) }}</h2>
                        <h2 class="text-pink">৳{{ round($product->purchase_price) }}</h2>
                    </div>
                    <div class="product-form-buttons">
                        <button class="btn btn-block w-100 details-add-to-cart">
                            ADD TO CART
                        </button>
                        <button class="btn btn-block btn-outline-secondary w-100 mt-3">
                            BUY IT NOW
                        </button>

                        <div class="share-btn mt-4 mb-3">
                            <button class="bg-transparent border-0">
                                <i class="fa fa-sign-out" aria-hidden="true"></i> Share
                            </button>
                        </div>
                        <div class="product-description">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item bg-transparent">
                                    <h2 class="accordion-header bg-transparent" id="headingOne">
                                        <button class="accordion-button" style="border: none" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            <span class="desc-text">Description</span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse border-0"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body border-0">
                                            <div class="description-details">
                                                <p>
                                                    <strong class="d-block">What it is</strong>
                                                    Skin Cafe 100% Natural Rosemary Essential Oil is
                                                    formulated with 100% pure rosemary oil. It is a one
                                                    stop solution for all problems. It‚Äôs a
                                                    multi-purpose oil that can diminish dandruff,
                                                    increase the hair regrowth and darkness as well.
                                                    This essential oil can reduce joint pain, headache,
                                                    stomach cramps, constipation, and so forth.
                                                    Moreover, it can be used as mouthwash to improve
                                                    oral health. It can also be used as air freshener,
                                                    mosquito repellent and cleaning spray.

                                                    <strong class="d-block">What is it does:</strong>
                                                    <br />
                                                    ¬†
                                                    <br />
                                                    <strong class="d-block">For Skin:</strong>
                                                    Skin Cafe 100% Natural Rosemary Essential Oil can
                                                    help reduce the appearance of dark spots and
                                                    blemishes on the skin by massaging it into the face.
                                                    balances the natural oils of the skin. Skin Cafe
                                                    100% Natural Rosemary Essential Oil provides your
                                                    face with the nutrients it needs, whether it has dry
                                                    or oilier skin. gives the skin a moisturizing and
                                                    moistened feeling. This rosemary essential oil's
                                                    anti-inflammatory qualities aid in reducing skin
                                                    edema and puffiness. Additionally, it lessens acne,
                                                    soothes the skin, and aids in burn recovery.

                                                    <strong class="d-block">For Hair:</strong>
                                                    Rosemary essential oil from Skin Cafe is 100 percent
                                                    natural and helps with alopecia. Its
                                                    anti-inflammatory effects, ability to encourage
                                                    nerve growth, and improved circulation offer
                                                    thinning hair new life and thicker locks. The
                                                    essential oil's antifungal property aids in reducing
                                                    dandruff and addresses hyperactive fungal activity
                                                    in the scalp. Over time, it may turn lighter hair
                                                    darker. By simply ensuring that the hair follicles
                                                    have enough melanin pigment, the health of the scalp
                                                    is improved. As a result, the hair fibers naturally
                                                    darken.

                                                    <strong class="d-block">For Health and Body:</strong>
                                                    Skin Cafe 100% Natural Rosemary Essential Oil
                                                    reduces pain, soothes inflammation, eliminates
                                                    headaches and strengthens the immune system. Through
                                                    massage, this oil stimulates circulation, which
                                                    allows the body to better absorb nutrients from
                                                    food. Breathing rosemary oil may help to focus and
                                                    remember information and reduce stress level. It is
                                                    a natural disinfectant that can help remove bad oral
                                                    bacteria that causes cavities, bad breath, plaque
                                                    buildup, and other minor dental issues.

                                                    <strong class="d-block">Others:</strong>
                                                    The 100% natural rosemary essential oil from Skin
                                                    Cafe can be used as a cleaning spray, insect
                                                    repellant, and air freshener. What factors account
                                                    for the rising use of rosemary essential oil?
                                                    Rosemary essential oil serves a variety of purposes.
                                                    This essential oil promotes good health by enhancing
                                                    concentration and memory, preventing hair loss,
                                                    reducing pain and inflammation, warding off some
                                                    insects, and reducing stress.

                                                    <strong class="d-block">Disclaimer</strong>

                                                    For external use only. Avoid direct contact with
                                                    eyes and mouth. Store it in a cool and dry place
                                                    away from sunlight. If irritation occurs,
                                                    discontinue use.
                                                    <br />
                                                    ¬†
                                                    <br />
                                                </p>
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
    </section>
    <section class="product-review mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="mb-3">Customer Reviews</h2>
                    <div class="product-rating">★★★★★</div>
                    <p class="mb-1">5.00 out of 5</p>
                    <p class="mb-0">Based on 1 review</p>
                </div>
                <div class="col-md-9 mt-4 mt-sm-4 mt-md-0">
                    <div class="row border-bottom pb-3">
                        <div class="col-5 col-sm-3">
                            <div class="user-ratting">
                                <div class="product-rating">★★★★★</div>
                                <p>09/17/2024</p>
                                <div class="customer-info d-flex gap-2">
                                    <div class="bg-light p-2 px-3">
                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                    </div>
                                    <p class="user-name">S.D.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-7 col-sm-9">
                            <div class="user-comment">
                                <h4>Good</h4>
                                <p>I mix this with almond oil.. And it work nicely</p>
                            </div>
                        </div>
                    </div>
                    <div class="row border-bottom pb-3 mt-4">
                        <div class="col-5 col-sm-3">
                            <div class="user-ratting">
                                <div class="product-rating">★★★★★</div>
                                <p>09/17/2024</p>
                                <div class="customer-info d-flex gap-2">
                                    <div class="bg-light p-2 px-3">
                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                    </div>
                                    <p class="user-name">S.D.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-7 col-sm-9">
                            <div class="user-comment">
                                <h4>Good</h4>
                                <p>I mix this with almond oil.. And it work nicely</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="write-review my-5">
        <div class="accordion" id="accordionExample2">
            <div class="accordion-item bg-transparent">
                <div id="collapseTwo" class="accordion-collapse collapse border-0" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample2">
                    <div class="accordion-body border-0 writeReviewCollapse">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-md-12 text-center">
                                <h3>Write Review</h3>
                                <form class="review-form">
                                    <div class="review-star my-3">
                                        <label class="form-label">Ratting</label>
                                        <input class="rating" type="hidden" value="" />
                                        <div class="simple-rating star-rating mt-3">
                                            <i class="fa fa-star" data-rating="1"></i>
                                            <i class="fa fa-star" data-rating="2"></i>
                                            <i class="fa fa-star" data-rating="3"></i>
                                            <i class="fa fa-star-o" data-rating="4"></i>
                                            <i class="fa fa-star-o" data-rating="5"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="review-title">Review Title</label>
                                        <input class="form-control" type="text" name="review-title" id="review-title"
                                            autofocus="true" placeholder="Give your review a title" required />
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="review-content">Review content</label>
                                        <textarea class="form-control" name="review-content" id="review-content" cols="20" rows="5"
                                            placeholder="Start writing here..." required></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="upload-file">Picture/Video (optional)</label>
                                        <input type="file" class="form-control" name="upload-file" id="upload-file"
                                            required />
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="display-name">Display name (displayed publicly like
                                            John
                                            Smith)</label>
                                        <input class="form-control" type="text" name="display-name" id="display-name"
                                            placeholder="Display Name" required />
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="email">Email address</label>
                                        <input class="form-control" type="email" name="email" id="email"
                                            required />
                                    </div>
                                    <div class="mb-4">
                                        <p class="w-75 mx-auto">
                                            How we use your data: We'll only contact you about the
                                            review you left, and only if necessary. By submitting
                                            your review, you agree to Judge.me's
                                            <a class="link-primary" href="">terms</a>,
                                            <a class="link-primary" href="">privacy</a> and
                                            <a class="link-primary" href="">content</a> policies.
                                        </p>
                                    </div>
                                    <div>
                                        <button id="review-btn" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo"
                                            class="btn btn-outline-light text-dark border border-1 px-5 border-dark">
                                            Cancel Review
                                        </button>
                                        <button type="submit"
                                            class="btn btn-secondary review-submit-btn mt-4 mt-sm-0 mt-md-0 mt-lg-0">
                                            Submit Review
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6 col-md-12"></div>
                        </div>
                    </div>
                </div>
                <h2 class="accordion-header bg-transparent text-center" id="headingTwo">
                    <button id="review-btn" class="write-review-btn review-btn-txt-changeable" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        WRITE A REVIEW
                    </button>
                </h2>
            </div>
        </div>
    </section>
    <section class="related-products">
        <div class="container">
            <h2 class="h1 text-center my-4">You May Also Like</h2>
            <div class="row mt-5">
                <div class="col-6 col-sm-6 col-lg-3 pe-md-5">
                    <div class="card border-0 product w-100">
                        <div class="product-item border border-dark">
                            <a href="">
                                <img class="card-img-top default-img"
                                    src="{{ asset('assets') }}/images/related-product/rltd-1.2.jpg"
                                    alt="related product image" />
                                <!-- hover image -->
                                <img class="card-img-top hover-img"
                                    src="{{ asset('assets') }}/images/related-product/rltd-1.1.jpg"
                                    alt="related product image" />
                            </a>

                            <button class="btn btn-sm bg-pink w-25 position-sticky discount-btn">
                                -10%
                            </button>
                            <div class="product-info">
                                <button class="add-to-cart">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="card-body px-0">
                            <a href="" class="card-title stretched-link h4">
                                Skin Cafe 98% Pure and Natural Aloe Vera Gel (240ml)
                            </a>
                            <p class="card-text">
                                <span class="text-decoration-line-through">৳450</span><span class="ms-2">৳352</span>
                            </p>
                            <div class="product-rating-star">★★★★★</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3  mt-sm-0  pe-md-5">
                    <div class="card border-0 product">
                        <div class="product-item border border-dark">
                            <a href="">
                                <img class="card-img-top default-img"
                                    src="{{ asset('assets') }}/images/related-product/rltd-2.1.webp"
                                    alt="related product image" />
                                <!-- hover image -->
                                <img class="card-img-top hover-img"
                                    src="{{ asset('assets') }}/images/related-product/rltd-2.2.webp"
                                    alt="related product image" />
                            </a>

                            <button class="btn btn-sm bg-pink w-25 position-sticky discount-btn">
                                -10%
                            </button>
                            <div class="product-info">
                                <button class="add-to-cart btn btn-sm py-2">
                                    ADD TO CART
                                </button>
                            </div>
                        </div>
                        <div class="card-body px-0">
                            <a href="" class="card-title h4 stretched-link">
                                Skin Cafe 98% Pure and Natural Aloe Vera Gel (240ml)
                            </a>
                            <p class="card-text">
                                <span class="text-decoration-line-through">৳450</span><span class="ms-2">৳352</span>
                            </p>
                            <div class="product-rating-star">★★★★★</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3 mt-4 mt-md-4 mt-lg-0 pe-md-5">
                    <div class="card border-0 product">
                        <div class="product-item border border-dark">
                            <a href="">
                                <img class="card-img-top default-img"
                                    src="{{ asset('assets') }}/images/related-product/rltd-3.1.webp"
                                    alt="related product image" />
                                <!-- hover image -->
                                <img class="card-img-top hover-img"
                                    src="{{ asset('assets') }}/images/related-product/rltd-3.2.webp"
                                    alt="related product image" />
                            </a>

                            <button class="btn btn-sm bg-pink w-25 position-sticky discount-btn">
                                -10%
                            </button>
                            <div class="product-info">
                                <button class="add-to-cart btn btn-sm py-2">
                                    ADD TO CART
                                </button>
                            </div>
                        </div>
                        <div class="card-body px-0">
                            <a href="" class="card-title h4 stretched-link">
                                Skin Cafe 98% Pure and Natural Aloe Vera Gel (240ml)
                            </a>
                            <p class="card-text">
                                <span class="text-decoration-line-through">৳450</span><span class="ms-2">৳352</span>
                            </p>
                            <div class="product-rating-star">★★★★★</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3 mt-4 mt-md-4 mt-lg-0 pe-md-5">
                    <div class="card border-0 product">
                        <div class="product-item border border-dark">
                            <a href="">
                                <img class="card-img-top default-img"
                                    src="{{ asset('assets') }}/images/related-product/rltd-4.1.webp"
                                    alt="related product image" />
                                <!-- hover image -->
                                <img class="card-img-top hover-img"
                                    src="{{ asset('assets') }}/images/related-product/rltd-4.2.webp"
                                    alt="related product image" />
                            </a>

                            <button class="btn btn-sm bg-pink w-25 position-sticky discount-btn">
                                -10%
                            </button>
                            <div class="product-info">
                                <button class="add-to-cart btn btn-sm py-2">
                                    ADD TO CART
                                </button>
                            </div>
                        </div>
                        <div class="card-body px-0">
                            <a href="" class="card-title h4 stretched-link">
                                Skin Cafe 98% Pure and Natural Aloe Vera Gel (240ml)
                            </a>
                            <p class="card-text">
                                <span class="text-decoration-line-through">৳450</span><span class="ms-2">৳352</span>
                            </p>
                            <div class="product-rating-star">★★★★★</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer accordion -->
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
