<div id="cartOffcanvas_sm" class="product-offcanvas me-3 d-block d-lg-none mt-2">
                <div class="cart-wrapper cursor-pointer" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight" style="cursor: pointer">
                    <i class="fa fa-shopping-bag cursor-pointer" aria-hidden="true"></i>
                    <span
                        class="badge bg-dark rounded-pill cart-badge cart_count">{{ session()->has('cart') ? count(session('cart')) : 0 }}
                    </span>
                </div>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="row align-items-start">


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
                            <div class="offcanvas-body pt-0">
                               @include("layouts.front-end.partials.cart.cart_items")
                            </div>
                        </div>
                    </div>
                </div>
            </div>
