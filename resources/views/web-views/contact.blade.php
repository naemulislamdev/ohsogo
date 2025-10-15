@extends('layouts.front-end.app')
@section('title', 'Contact Us')
@section('main-content')
    <!-- Contact Us Section Start -->
    <section class="contact-us-section">
        <div class="contact-top-container border-bottom my-5 pb-5">
            <div class="container">
                <div class="contactQ-row row">
                    <div class="col-lg-12">
                        <h4>Can we help?</h4>
                        <p>Reach us for any Questions and Suggestions</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-main-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-heading mb-5">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="contact-form">
                            <form action="">
                                <div class="mb-3">
                                    <input autofocus class="form-control" type="text" name="name" id="name"
                                        placeholder="Name" />
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" type="email" name="email" id="email"
                                        placeholder="Email" />
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" type="tel" name="phone-number" id="phone"
                                        placeholder="Phone Number" />
                                </div>
                                <div class="mb-4">
                                    <textarea style="resize: none" class="form-control" name="comment" id="commet" rows="5" placeholder="Comment"></textarea>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="chekout-cart-btn py-3">
                                        Send Message
                                    </button>
                                </div>
                                <div class="mt-4">
                                    <p>
                                        This site is protected by hCaptcha and the hCaptcha
                                        <a style="color: #414042" href="">Privacy Policy</a> and
                                        <a style="color: #414042" href="">Terms of Service</a>
                                        apply.
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 ps-lg-5 mt-4 mt-lg-0">
                        <div class="contact-support">
                            <h5>Customer service</h5>
                            <a href="mailto:support@ohsogo.com">support@ohsogo.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-address">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-7 address-card-column">
                        <div class="card text-start address-box wow animate__animated animate__fadeInUp">
                            <div class="card-body">
                                <h2 class="card-title">Our Office</h2>
                                <p class="card-text m-0 my-3">
                                    Bond Center (Level 5), House # 71,cRoad # 11, Block # D,
                                    Banani,Dhaka-1213, Bangladesh
                                </p>
                                <div class="phone">
                                    <ul class="ps-3">
                                        <li>
                                            <a style="color: #414042" href="tel:+08000552211">
                                                08000552211 (Toll Free)</a>
                                        </li>
                                        <li>
                                            <a style="color: #414042" href="tel:+09612554411">
                                                09612554411</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Section End -->
@endsection
