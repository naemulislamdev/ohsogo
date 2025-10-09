<style>
    .shipping-box {

        height: 100%;
        width: 100%;
        padding: 1rem 1.25rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .shipping-box input[type="radio"] {
        accent-color: #000;

    }
</style>
@extends('layouts.front-end.app')
@section('title', 'Product-checkout')
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
                                <a href="#" class="text-dark"><i class="fa fa-shopping-bag"></i></a>
                            </div>

                            <!-- Mobile Order Summary Accordion Start -->
                            <div class="order-summary-accordion mt-4 mb-4 d-block d-lg-none">
                                <div class="accordion" id="orderSummaryAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSummary">
                                            <button
                                                class="accordion-button d-flex justify-content-between align-items-center"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseSummary"
                                                aria-expanded="false" aria-controls="collapseSummary">
                                                <span class="text-dark fw-bold">Order Summary</span>
                                                <span class="ms-auto fw-bold">৳1,395.00</span>
                                            </button>
                                        </h2>
                                        <div id="collapseSummary" class="accordion-collapse collapse hide"
                                            aria-labelledby="headingSummary" data-bs-parent="#orderSummaryAccordion">
                                            <div class="accordion-body border-top">
                                                <div>
                                                    <div class="all-checkout">
                                                        <div class="cart-dtls-item">
                                                            <div class="checkout-cart-item row">
                                                                <div class="product-image position-relative col-2 p-0">
                                                                    <img class=" border rounded-3"
                                                                        src="./assets/images/product-img/showergel_128x128.avif"
                                                                        alt="product image" />
                                                                    <span class="badge rounded-pill cart-badge">3</span>
                                                                </div>
                                                                <div class="product-name col-7">
                                                                    <h6>
                                                                        Zayn & Myza Age Defense Retinol & Niacinamide Shower
                                                                        Gel - 200ml
                                                                    </h6>
                                                                </div>
                                                                <div class="product-price col-3">
                                                                    <h6>৳199.00</h6>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="cart-dtls-item mt-4">
                                                            <div class="checkout-cart-item row">
                                                                <div class="product-image position-relative col-2 p-0">
                                                                    <img class=" border rounded-3"
                                                                        src="./assets/images/product-img/Zayn_Myza_3x_Vitamin_E_Moisturizing_Cream_50gm_-_B1G1_128x128.avif"
                                                                        alt="product image" />
                                                                    <span class="badge rounded-pill cart-badge">4</span>
                                                                </div>
                                                                <div class="product-name col-7">
                                                                    <h6>
                                                                        Zayn & Myza Moisture Boost Hyaluronic Acid
                                                                        Moisturizing Cream with 3x Vitamin E (50gm) - B1G1
                                                                    </h6>

                                                                    <!-- mobile mini accordion -->
                                                                    <div class="mini-accordion">
                                                                        <div class="accordion multiple-product-accordion mt-2"
                                                                            id="accordionPanelsStayOpenExample">
                                                                            <div class="accordion-item border-0">
                                                                                <h2 class="accordion-header"
                                                                                    id="panelsStayOpen-headingOne">
                                                                                    <button id="totalSingleItemOne"
                                                                                        class="accordion-button collapsed p-0"
                                                                                        type="button"
                                                                                        data-bs-toggle="collapse"
                                                                                        data-bs-target="#panelsStayOpen-collapseOne"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="panelsStayOpen-collapseOne">
                                                                                        Show 8 items
                                                                                    </button>
                                                                                </h2>
                                                                                <div id="panelsStayOpen-collapseOne"
                                                                                    class="accordion-collapse collapse"
                                                                                    aria-labelledby="panelsStayOpen-headingOne"
                                                                                    data-bs-parent="#accordionPanelsStayOpenExample">
                                                                                    <div class="accordion-body">
                                                                                        <div class="sub-product d-flex">
                                                                                            <img style="height: 50px; width: 50px;"
                                                                                                src="./assets/images/product-img/Zayn_Myza_3x_Vitamin_E_Moisturizing_Cream_50gm_-_B1G1_128x128.avif"
                                                                                                alt="product image">
                                                                                            <p style="font-size: 12px; font-weight: 600;"
                                                                                                class="mb-0 ms-3">
                                                                                                8 × Zayn & Myza Moisture
                                                                                                Boost Hyaluronic Acid
                                                                                                Moisturizing
                                                                                                Cream with 3x Vitamin E
                                                                                                (50gm)
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="product-price col-3">
                                                                    <h6>৳599.00</h6>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="cart-dtls-item mt-4">
                                                            <div class="checkout-cart-item row">
                                                                <div class="product-image position-relative col-2 p-0">
                                                                    <img class=" border rounded-3"
                                                                        src="./assets/images/product-img/Zayn_Myza_3x_Vitamin_E_Moisturizing_Cream_50gm_-_B1G1_128x128.avif"
                                                                        alt="product image" />
                                                                    <span class="badge rounded-pill cart-badge">4</span>
                                                                </div>
                                                                <div class="product-name col-7">
                                                                    <h6>
                                                                        Zayn & Myza Moisture Boost Hyaluronic Acid
                                                                        Moisturizing Cream with 3x Vitamin E (50gm) - B1G1
                                                                    </h6>
                                                                </div>
                                                                <div class="product-price col-3">
                                                                    <h6>৳599.00</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-dtls-item mt-4">
                                                            <div class="checkout-cart-item row">
                                                                <div class="product-image position-relative col-2 p-0">
                                                                    <img class=" border rounded-3"
                                                                        src="./assets/images/product-img/Zayn_Myza_3x_Vitamin_E_Moisturizing_Cream_50gm_-_B1G1_128x128.avif"
                                                                        alt="product image" />
                                                                    <span class="badge rounded-pill cart-badge">4</span>
                                                                </div>
                                                                <div class="product-name col-7">
                                                                    <h6>
                                                                        Zayn & Myza Moisture Boost Hyaluronic Acid
                                                                        Moisturizing Cream with 3x Vitamin E (50gm) - B1G1
                                                                    </h6>
                                                                </div>
                                                                <div class="product-price col-3">
                                                                    <h6>৳599.00</h6>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="checkout-summary mt-4">
                                                        <div class="discount-code">
                                                            <form action="" class="d-flex">
                                                                <div class="form-floating">
                                                                    <input class="form-control discountInput"
                                                                        type="text" name="discount-code"
                                                                        id="discount_code" placeholder="Discount Code">
                                                                    <label for="discount_code">Discount Code</label>
                                                                </div>
                                                                <button type="submit"
                                                                    class="ms-3 border border-2 btn btn-light btn-lg applyBtn"
                                                                    disabled>Apply</button>
                                                            </form>
                                                        </div>
                                                        <div class="price-info">
                                                            <div class="order-summary mt-4">
                                                                <div class="d-flex justify-content-between mb-2">
                                                                    <span>Subtotal · 5 items</span>
                                                                    <span>৳1,395.00</span>
                                                                </div>
                                                                <div class="d-flex justify-content-between mb-2">
                                                                    <span>Shipping</span>
                                                                    <span>Free</span>
                                                                </div>

                                                                <div class="d-flex justify-content-between fw-bold mt-3">
                                                                    <span class="fs-5">Total</span>
                                                                    <span><span class="bdt-txt">(BDT)</span>
                                                                        ৳1,395.00</span>
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
                            <!-- Order Summary Accordion End -->

                            <!-- Contact -->
                            <div class="d-flex justify-content-between mt-3">
                                <h5 class="h5">Contact</h5>
                                <a class="text-decoration-underline text-dark" href="#">Sign in</a>
                            </div>

                            <!-- Checkout Form -->
                            <div class="checkout-form mt-2">
                                <form action="">
                                    <!-- Email -->
                                    <div class="email-info">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="email_phone"
                                                id="email_phone" placeholder="name@example.com">
                                            <label class="text-muted" for="email_phone">Email or mobile phone
                                                number</label>
                                        </div>

                                        {{-- <div class="mt-2 d-flex align-items-center">
                                            <input type="checkbox" class="form-check-input border" id="check-email" />
                                            <label for="check-email" class="form-label mb-0 ms-2 mt-1">
                                                Email me with news and offers
                                            </label>
                                        </div> --}}
                                        <p style="font-size: 12px; font-weight: 400; color: #707070; line-height: 18px"
                                            class="mt-3">You
                                            may receive text
                                            messages
                                            related to order confirmation and shipping updates.
                                            Reply STOP to unsubscribe. Reply HELP for help. Message frequency varies. Msg &
                                            data rates may apply. View our <a
                                                style="color: inherit; text-decoration: underline"
                                                href="{{ route('privacy') }}">Privacy
                                                Policy</a> and <a style="color: inherit; text-decoration: underline"
                                                href="{{ route('terms') }}">Terms & Service.</a></p>
                                    </div>

                                    <!-- Delivery -->
                                    <div class="deliver-info mt-3">
                                        <h5>Delivery</h5>

                                        <!-- Country -->
                                        <div class="form-floating">

                                            <select class="form-select form-select-lg" name="country" id="country">
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="United Arab Emirates">
                                                    United Arab Emirates
                                                </option>
                                            </select>
                                            <label class="mb-3 " for="country">Country/Region</label>
                                        </div>

                                        <!-- Name -->
                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <div class="form-floating">
                                                    <input class="form-control " type="text" name="first-name"
                                                        id="first-name" placeholder="First name" />
                                                    <label class="text-muted" for="first-name">First name</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mt-3 mt-lg-0">
                                                <div class="form-floating">
                                                    <input class="form-control " type="text" name="last-name"
                                                        id="last-name" placeholder="Last name" />
                                                    <label class="text-muted" for="last-name">Last name</label>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- Address -->
                                        <div class="mt-3">
                                            <div class="form-floating">
                                                <input class="form-control " type="text" name="address"
                                                    id="address" placeholder="Address" />
                                                <label for="address">Address</label>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="form-floating">
                                                <input class="form-control " type="text" name="apartment"
                                                    id="appartment" placeholder="Apartment, suite, etc. (optional)" />
                                                <label for="appartment">Apartment, suite, etc. (optional)</label>
                                            </div>
                                        </div>

                                        <!-- City & UAE City -->
                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <div class="form-floating">
                                                    <input class="form-control " type="text" name="city"
                                                        id="city" placeholder="City" />
                                                    <label for="city">City</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mt-3 mt-lg-0">
                                                <div class="form-floating">
                                                    <input class="form-control" type="text" name="post_code"
                                                        id="post_code" placeholder="Postal code (option)">
                                                    <label>Postal code (option)</label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Phone -->
                                        <div class="mt-3">
                                            <div class="form-floating">
                                                <input class="form-control form-select-lg" type="tel" name="phone"
                                                    id="phone" placeholder="Phone" />
                                                <label for="phone">Phone</label>
                                            </div>
                                        </div>

                                        <!-- Save Info -->
                                        <div class="mt-3 d-flex align-items-center">
                                            <input type="checkbox" class="form-check-input border" id="save-info" />
                                            <label for="save-info" class="form-label mb-0 ms-2 mt-1">
                                                Save this information for next time
                                            </label>
                                        </div>
                                        <div class="mt-2 d-flex align-items-center">
                                            <input type="checkbox" class="form-check-input border"
                                                id="text-news-offer" />
                                            <label for="text-news-offer" class="form-label mb-0 ms-2 mt-1">
                                                Text me with news and offers
                                            </label>
                                        </div>

                                        <!-- Shipping -->
                                        <div class="mt-4 shipping">
                                            <h6>Shipping Method</h6>
                                            <div class="d-flex bg-light justify-content-between rounded-2">
                                                <div>
                                                    <h6>Free</h6>
                                                    <p class="mb-0">Made to order</p>
                                                </div>
                                                <div>
                                                    <h6>Free</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Address Select -->
                                        <div class="select-address mt-4">
                                            <div class="row ">
                                                <div class="col-lg-4">

                                                    <div class="form-floating">
                                                        <select class="form-select form-select-lg" name="division"
                                                            id="division">
                                                            <option>Select</option>
                                                            <option value="Dhaka">Dhaka</option>
                                                            <option value="Barishal">Barishal</option>
                                                            <option value="Chitagong">Chitagong</option>
                                                            <option value="Rajshahi">Rajshahi</option>
                                                            <option value="Sylhet">Sylhet</option>
                                                            <option value="Rangpur">Rangpur</option>
                                                            <option value="Khulna">Khulna</option>
                                                        </select>
                                                        <label for="division">Division</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mt-3  mt-lg-0">
                                                    <div class="form-floating">
                                                        <select class="form-select form-select-lg" name="district"
                                                            id="district">
                                                            <option>Select</option>
                                                            <option value="Patuakhli">Patuakhli</option>
                                                            <option value="Barishal">Barishal</option>
                                                            <option value="Barguna">Barguna</option>
                                                            <option value="Bhola">Bhola</option>
                                                            <option value="Jhalokathi">Jhalokathi</option>
                                                            <option value="Pirojpur">Pirojpur</option>
                                                        </select>
                                                        <label for="district">District</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mt-3 mt-lg-0">
                                                    <div class="form-floating">
                                                        <select class="form-select form-select-lg" name="upazila"
                                                            id="upazila">
                                                            <option>Select</option>
                                                            <option value="Patuakhli Sadar">Patuakhli Sadar</option>
                                                            <option value="Bauphal">Bauphal</option>
                                                            <option value="Dashmina">Dashmina</option>
                                                            <option value="Dumki">Dumki</option>
                                                            <option value="Galachipa">Galachipa</option>
                                                            <option value="Mirzagonj">Mirzagonj</option>
                                                        </select>
                                                        <label for="upazila">Upazila</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Payment -->
                                        <div class="payment-info mt-4">
                                            <h4>Payment</h4>
                                            <p>All transactions are secure and encrypted.</p>
                                            <!-- payment accordion -->
                                            <div class="accordion  border-0" id="accordionExample">
                                                <div class="accordion-item border">
                                                    <div class="accordion-header" id="headingOne">

                                                        <div class="accordion-button p-0 d-flex justify-content-between align-items-center show"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">


                                                            <label class="shipping-box">
                                                                <input class="form-check-input" checked type="radio"
                                                                    name="payment_method" value="" onchange="">
                                                                <span class="d-inline-block ms-1 mt-1 text-dark ">
                                                                    SSLCOMMERZ</span>
                                                                <div class="ms-auto">
                                                                    <img src="./assets/images/logo/visa.svg"
                                                                        alt="">
                                                                    <img src="./assets/images/logo/mastercard.svg"
                                                                        alt="">
                                                                    <img src="./assets/images/logo/american-express.svg"
                                                                        alt="">
                                                                    <div class="d-inline-block position-relative paymentTwo-box">
                                                                        <span
                                                                            class="btn btn-light py-0 border payment-2btn">+2</span>
                                                                            <div class="d-flex justify-content-between align-items-center gap-1 bg-dark px-3 py-2 rounded-2 payment-hover-item" >
                                                                                <img src="./assets/images/logo/diners_club.svg" alt="diners club">
                                                                                <img src="./assets/images/logo/unionpay.svg" alt="unionpay">
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

                                                <div class="accordion-item border">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button p-0 acc-btn-2 collapsed"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                                            aria-controls="collapseTwo">

                                                            <label class="shipping-box">
                                                                <input class="form-check-input" type="radio"
                                                                    name="payment_method" value="">
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
                                            </div>
                                            <div class="billing-address mt-4">
                                                <h6>Billing address</h6>
                                                <!-- billing address accordion -->
                                                <div class="accordion border-0" id="billingAccordion">
                                                    <!-- Cash On Delivery -->
                                                    <div class="accordion-item border">
                                                        <h2 class="accordion-header" id="billingHeadingTwo">
                                                            <button class="accordion-button collapsed p-0" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#billingCollapseTwo" aria-expanded="false"
                                                                aria-controls="billingCollapseTwo">

                                                                <label class="shipping-box">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="billing_method_id" value=""
                                                                        onchange="
                                                                        ">
                                                                    <span class="d-inline-block mt-1 text-dark ">Same as
                                                                        shipping address</span>
                                                                </label>
                                                            </button>
                                                        </h2>
                                                        <div id="billingCollapseTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="billingHeadingTwo"
                                                            data-bs-parent="#billingAccordion">
                                                            <div class="accordion-body p-0">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- SSLCOMMERZ Payment -->
                                                    <div class="accordion-item border">
                                                        <h2 class="accordion-header" id="billingHeadingOne">
                                                            <div class="accordion-button d-flex  align-items-center p-0"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#billingCollapseOne" aria-expanded="true"
                                                                aria-controls="billingCollapseOne">

                                                                <label class="shipping-box">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="billing_method_id" value=""
                                                                        onchange="">
                                                                    <span
                                                                        class="d-inline-block mt-1 text-dark fw-normal">Use
                                                                        a different billing address</span>
                                                                </label>
                                                            </div>
                                                        </h2>
                                                        <div id="billingCollapseOne"
                                                            class="accordion-collapse collapse hide"
                                                            aria-labelledby="billingHeadingOne"
                                                            data-bs-parent="#billingAccordion">
                                                            <div class="accordion-body ">
                                                                <div class="different-billing-address-form">
                                                                    <div>
                                                                        <div class="form-floating">
                                                                            <select name="" id=""
                                                                                class="form-select">
                                                                                <option value="">----</option>
                                                                                <option value="Bangladesh">Bangladesh
                                                                                </option>
                                                                                <option value="India">India</option>
                                                                                <option value="Nepal">Nepal</option>
                                                                                <option value="Bhutan">Bhutan</option>
                                                                                <option value="Srilanka">Srilanka</option>
                                                                                <option value="Pakistan">Pakistan</option>
                                                                            </select>
                                                                            <label>Country/Region</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-6">
                                                                            <input class="form-control" type="text"
                                                                                name="first-name"
                                                                                placeholder="First name">
                                                                        </div>
                                                                        <div class="col-lg-6 mt-3 mt-lg-0">
                                                                            <input class="form-control" type="text"
                                                                                name="last-name" placeholder="Last name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-3">
                                                                        <input class="form-control" type="text"
                                                                            name="address" placeholder="Address">
                                                                    </div>
                                                                    <div class="mt-3">
                                                                        <input class="form-control" type="text"
                                                                            name="appertment"
                                                                            placeholder="Appertment, suite, etc. (optional)">
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-6">
                                                                            <input class="form-control" type="text"
                                                                                name="city" placeholder="City">
                                                                        </div>
                                                                        <div class="col-lg-6 mt-3 mt-lg-0">
                                                                            <input class="form-control" type="text"
                                                                                name="postal-code"
                                                                                placeholder="Postal Code">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-3">
                                                                        <input class="form-control" type="text"
                                                                            name="phone" placeholder="Phone">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <button type="submit" class="btn btn-lg btn-danger w-100 my-4">Pay
                                                Now</button>
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
                        <div class="cart-dtls-item">
                            <div class="checkout-cart-item row">
                                <div class="product-image position-relative col-2 p-0">
                                    <img class=" border rounded-3"
                                        src="./assets/images/product-img/showergel_128x128.avif" alt="product image" />
                                    <span class="badge rounded-pill cart-badge">3</span>
                                </div>
                                <div class="product-name col-8">
                                    <h6>
                                        Zayn & Myza Age Defense Retinol & Niacinamide Shower Gel - 200ml
                                    </h6>
                                </div>
                                <div class="product-price col-2">
                                    <h6>৳199.00</h6>
                                </div>
                            </div>

                        </div>
                        <div class="cart-dtls-item mt-4">
                            <div class="checkout-cart-item row">
                                <div class="product-image position-relative col-2 p-0">
                                    <img class=" border rounded-3"
                                        src="./assets/images/product-img/Zayn_Myza_3x_Vitamin_E_Moisturizing_Cream_50gm_-_B1G1_128x128.avif"
                                        alt="product image" />
                                    <span class="badge rounded-pill cart-badge">4</span>
                                </div>
                                <div class="product-name col-8">
                                    <h6>
                                        Zayn & Myza Moisture Boost Hyaluronic Acid Moisturizing Cream with 3x Vitamin E
                                        (50gm) - B1G1
                                    </h6>
                                    <div class="mini-accordion">
                                        <div class="accordion  multiple-product-accordion mt-2"
                                            id="accordionPanelsStayOpenExample m-0">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                    <button id="totalSingleItemTwo"
                                                        class="totalSingleItems accordion-button collapsed p-0"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                                                        aria-controls="panelsStayOpen-collapseTwo">
                                                        Show 8 items
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseTwo"
                                                    class=" accordion-collapse collapse hide"
                                                    aria-labelledby="panelsStayOpen-headingOne">
                                                    <div class="accordion-body">
                                                        <div class="sub-product d-flex ">
                                                            <img style="height: 50px; width: 50px;"
                                                                src="./assets/images/product-img/Zayn_Myza_3x_Vitamin_E_Moisturizing_Cream_50gm_-_B1G1_128x128.avif"
                                                                alt="product image">
                                                            <p style="font-size: 12px; font-weight: 600;"
                                                                class="mb-0 ms-3">8 × Zayn & Myza Moisture Boost Hyaluronic
                                                                Acid Moisturizing Cream with 3x Vitamin E (50gm)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-price col-2">
                                    <h6>৳599.00</h6>
                                </div>
                            </div>

                        </div>
                        <div class="cart-dtls-item mt-4">
                            <div class="checkout-cart-item row">
                                <div class="product-image position-relative col-2 p-0">
                                    <img class=" border rounded-3"
                                        src="./assets/images/product-img/Zayn_Myza_3x_Vitamin_E_Moisturizing_Cream_50gm_-_B1G1_128x128.avif"
                                        alt="product image" />
                                    <span class="badge rounded-pill cart-badge">4</span>
                                </div>
                                <div class="product-name col-8">
                                    <h6>
                                        Zayn & Myza Moisture Boost Hyaluronic Acid Moisturizing Cream with 3x Vitamin E
                                        (50gm) - B1G1
                                    </h6>
                                </div>
                                <div class="product-price col-2">
                                    <h6>৳599.00</h6>
                                </div>
                            </div>
                        </div>
                        <div class="cart-dtls-item mt-4">
                            <div class="checkout-cart-item row">
                                <div class="product-image position-relative col-2 p-0">
                                    <img class=" border rounded-3"
                                        src="./assets/images/product-img/Zayn_Myza_3x_Vitamin_E_Moisturizing_Cream_50gm_-_B1G1_128x128.avif"
                                        alt="product image" />
                                    <span class="badge rounded-pill cart-badge">4</span>
                                </div>
                                <div class="product-name col-8">
                                    <h6>
                                        Zayn & Myza Moisture Boost Hyaluronic Acid Moisturizing Cream with 3x Vitamin E
                                        (50gm) - B1G1
                                    </h6>
                                </div>
                                <div class="product-price col-2">
                                    <h6>৳599.00</h6>
                                </div>
                            </div>
                        </div>

                        <button class="scroll-hint">Scroll for more items <i class="fas fa-arrow-down    "></i></button>
                    </div>
                    <div class="checkout-summary mt-4">
                        <div class="discount-code">
                            <form class="d-flex">
                                <div class="form-floating w-75">
                                    <input class="form-control discountInput" type="text" id="discount_code"
                                        name="discount-code" placeholder="Discount Code">
                                    <label for="discount_code">Discount Code</label>
                                </div>
                                <button class="ms-3 border border-2 btn btn-light btn-lg applyBtn" disabled>Apply</button>

                            </form>
                        </div>
                        <div class="price-info">
                            <div class="order-summary mt-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Subtotal · 5 items</span>
                                    <span>৳1,395.00</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Shipping</span>
                                    <span>Free</span>
                                </div>

                                <div class="d-flex justify-content-between fw-bold mt-3">
                                    <span class="fs-5">Total</span>
                                    <span><span class="bdt-txt">(BDT)</span> ৳1,395.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
