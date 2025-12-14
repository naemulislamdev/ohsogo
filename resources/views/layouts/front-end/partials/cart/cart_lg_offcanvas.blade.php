 <div id="cartOffcanvas_lg" class="product-offcanvas me-3 d-none d-lg-block">
                <div class="cart-wrapper" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightLG"
                    aria-controls="offcanvasRightLG">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    <span
                        class="badge bg-dark rounded-pill cart-badge cart_count">{{ session()->has('cart') ? count(session('cart')) : 0 }}
                    </span>
                </div>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRightLG"
                    aria-labelledby="offcanvasRightLabelLG">
                    <div class="row align-items-start">
                       @include("layouts.front-end.partials.cart.cart_lg_related_products")

                        <div class="col-md-7 product-cart-offcanvas">
                            <div class="offcanvas-header">
                                <h4 class="fw-normal text-dark" id="offcanvasRightLabel">
                                    CART
                                </h4>
                                <button style="background-color: #ddd" type="button"
                                    class="btn-close text-reset rounded-circle" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>

                            <!-- offcanvas body -->
                            <div class="offcanvas-body pt-0 ">
                               @include("layouts.front-end.partials.cart.cart_items")
                            </div>
                        </div>
                    </div>
                </div>
            </div>
