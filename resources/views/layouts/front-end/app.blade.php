<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <meta name="_token" content="{{ csrf_token() }}">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title> @yield('title') - {{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('storage/company') }}/{{ $web_config['fav_icon']->value }}"
        type="image/x-icon" />


    <link rel="stylesheet" href="{{ asset('assets') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bs_customize.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/xzoom.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/custom.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/slick/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.min.css">

    <style>
        :root {
            --primary-color: #ff6b6b;
            --secondary-color: #ff8e8e;
            --dark-color: #333;
            --light-color: #f8f9fa;
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 2rem;
            color: var(--primary-color);
        }

        .hero-section {

            margin-bottom: 30px;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 20px;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 30px;
        }

        .carousel-item img {
            border-radius: 10px;
            height: 100%;
            object-fit: cover;
        }

        .carousel-indicators button {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin: 0 5px;
        }

        .hero-section .carousel-control-prev {
            left: 0;
        }

        .hero-section .carousel-control-next {
            right: 0;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .carousel-item img {
                object-fit: contain;
            }
        }

        a,
        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        span,
        input,
        i,
        div {
            font-family: "Avenir", sans-serif;
            color: #414042;
        }

        .carousel-indicators [data-bs-target] {
            width: 50px;
            height: 4px;
            border-radius: 2px;
            background-color: #000;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            opacity: .3;
        }

        .carousel-indicators .active {
            opacity: 1;
        }
    </style>
</head>

<body>
    <!-- Header Start -->
    @if (!request()->is('product-checkout'))
        @include('layouts.front-end.partials.header')
    @endif

    <!-- Header End -->
    <!-- Main Content Start -->
    <main>
        @yield('main-content')
    </main>
    <!-- Main Content End -->
    <!-- Footer Start -->
    @if (!request()->is('product-checkout'))
        @include('layouts.front-end.partials.footer')
    @endif

    <!-- Footer End -->

    <!--Bootstrap JS Bundle with Popper -->
    <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets') }}/js/owl-extra-code.js"></script>
    <script src="{{ asset('assets') }}/js/xzoom.min.js"></script>
    <script src="{{ asset('assets') }}/slick/slick.min.js"></script>
    <script src="{{ asset('assets') }}/js/wow.min.js"></script>
    <script>
        // $(document).ready(function() {
        //     updateCart();
        // });

        function addToCart(product_id, redirect_to_checkout = false) {
            let token = "{{ csrf_token() }}";

            $.ajax({
                url: "{{ route('cart.add') }}",
                method: "POST",
                data: {
                    id: product_id,
                    _token: token
                },
                success: function(response) {
                    if (response.status === 'success') {
                        toastr.success(response.message);
                        updateCart();

                        if (redirect_to_checkout) {
                            window.location.href = "{{ route('product.checkout') }}";
                        }
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function() {
                    toastr.error("Something went wrong!");
                }
            });
        }

        function buyNow(product_id) {
            addToCart(product_id, true);
        }
    </script>
    <script>
        new WOW().init();
    </script>
    <script>
        // ingredients item hover change image content
        $(document).ready(function() {
            const firstItem = $('.ingredient-list li:first');
            const img = $('#ingredient-image');
            const desc = $('#desc-text');

            const defaultImg = firstItem.data('img');
            const defaultText = firstItem.data('text');

            img.attr('src', defaultImg);
            desc.text(defaultText);

            $('.ingredient-list li').on('mouseenter click', function() {
                $('.ingredient-list h4').removeClass('active');
                $(this).find('h4').addClass('active');

                const newImg = $(this).data('img');
                const newText = $(this).data('text');

                img.attr('src', newImg);
                desc.text(newText);
            });
        });
    </script>



    {{-- owl carosel for product slide --}}

    <script>
        $(document).ready(function() {
            const owl = $('.owl-carousel');
            owl.owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                margin: 40,
                responsiveClass: true,
                nav: true,
                navText: [
                    '<i class="fa fa-chevron-left text-white"></i>',
                    '<i class="fa fa-chevron-right text-white"></i>'
                ],
                smartSpeed: 500,
                responsive: {
                    0: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 4
                    }
                },
                onInitialized: function(event) {
                    if (event.item.count <= 1) {
                        $('.owl-nav').show();
                    }
                }
            });

            if ($('.owl-carousel .owl-item').length <= 1) {
                $('.owl-carousel .owl-nav').show();
            }
        });
    </script>
    <!-- Script for search system -->
    <script>
        $(document).ready(function() {

            // Open modal for any search icon (desktop + mobile both)
            $(document).on("click", ".search-icon", function() {
                const parent = $(this).closest("div");
                const modal = parent.find(".search-modal");
                modal.addClass("active");
                modal.find(".search-box").focus();
            });

            // Close modal (common)
            $(document).on("click", ".close-btn", function() {
                $(this).closest(".search-modal").removeClass("active");
            });

            // Click outside to close
            $(document).on("click", ".search-modal", function(e) {
                if (!$(e.target).closest(".search-wrapper").length) {
                    $(this).removeClass("active");
                }
            });

            // ESC key to close
            $(document).on("keyup", function(e) {
                if (e.key === "Escape") {
                    $(".search-modal").removeClass("active");
                }
            });
        });
    </script>
    <!-- Script for Mobile Menu -->
    <script>
        $(document).ready(function() {
            /*mobile menu*/
            $(".menu-icon").on("click", function() {
                $(".mobile-menu").toggleClass("mobile-menu-active");
            });
            $(".mm-ci").on("click", function() {
                $(".mobile-menu").toggleClass("mobile-menu-active");
            });
        });
    </script>
    {{-- script for Mobile Dropdown open and down --}}
    <script>
        $(document).ready(function() {
            // Add minus icon for collapse element which is open by default
            $(".collapse.show").each(function() {
                $(this)
                    .prev(".menu-link")
                    .find(".fa-minus")
                    .addClass("fa-minus")
                    .removeClass("fa-plus");
            });

            // Toggle plus minus icon on show hide of collapse element
            $(".collapse")
                .on("show.bs.collapse", function() {
                    $(this)
                        .prev(".menu-link")
                        .find(".fa-plus")
                        .removeClass("fa-plus")
                        .addClass("fa-minus");
                })
                .on("hide.bs.collapse", function() {
                    $(this)
                        .prev(".menu-link")
                        .find(".fa-minus")
                        .removeClass("fa-minus")
                        .addClass("fa-plus");
                });
            /*mobile-menu-click*/
            $(".mmenu-btn").click(function() {
                $(this).toggleClass("menu-link-active");
            });
        });
    </script>


    {{-- Script cart product increment and decrement --}}
    <script>
        // cart increment decrement buttton script
        document
            .querySelectorAll(".cart-increment-decrement")
            .forEach(function(item) {
                const decrementBtn = item.querySelector(".decrement");
                const incrementBtn = item.querySelector(".increment");
                const showItem = item.querySelector(".showItem");
                const hiddenInput = item.querySelector(".quantity");

                incrementBtn.addEventListener("click", function() {
                    let currentValue = parseInt(showItem.textContent);
                    currentValue++;
                    showItem.textContent = currentValue;
                    hiddenInput.value = currentValue;
                });

                decrementBtn.addEventListener("click", function() {
                    let currentValue = parseInt(showItem.textContent);
                    if (currentValue > 1) {
                        currentValue--;
                        showItem.textContent = currentValue;
                        hiddenInput.value = currentValue;
                    }
                });
            });
    </script>
    <script>
        const priceSlider = document.getElementById("price");
        const priceValue = document.getElementById("price-value");

        priceSlider.addEventListener("input", () => {
            priceValue.textContent = priceSlider.value;
        });
    </script>

    <script>
        // Dynamicsort option select and active color
        document.querySelectorAll(".sort-option").forEach(button => {
            button.addEventListener("click", function() {

                document.querySelectorAll(".sort-option").forEach(btn => btn.disabled = false);
                this.disabled = true;
                document.getElementById("currentSort").textContent = this.textContent;

            });
        });
    </script>

    <!-- Script for Price Range slider -->
    <script>
        document.querySelectorAll(".price-range").forEach(wrapper => {
            const minRange = wrapper.querySelector(".minRange");
            const maxRange = wrapper.querySelector(".maxRange");
            const rangeHighlight = wrapper.querySelector(".slider-range");

            const minValue = wrapper.querySelector(".minValue");
            const maxValue = wrapper.querySelector(".maxValue");

            // Create bubbles for this slider
            const minBubble = document.createElement("span");
            minBubble.className = "value-bubble";
            wrapper.querySelector(".range-slider").appendChild(minBubble);

            const maxBubble = document.createElement("span");
            maxBubble.className = "value-bubble";
            wrapper.querySelector(".range-slider").appendChild(maxBubble);

            function updateRange() {
                let minVal = parseInt(minRange.value);
                let maxVal = parseInt(maxRange.value);

                if (minVal > maxVal - 5) minVal = maxVal - 5;
                if (maxVal < minVal + 5) maxVal = minVal + 5;

                minRange.value = minVal;
                maxRange.value = maxVal;

                const percent1 = (minVal / minRange.max) * 100;
                const percent2 = (maxVal / maxRange.max) * 100;

                // Highlight update
                rangeHighlight.style.left = percent1 + "%";
                rangeHighlight.style.width = (percent2 - percent1) + "%";

                // Values update
                minValue.textContent = "৳ " + minVal;
                maxValue.textContent = "৳ " + maxVal;

                // Bubble update
                minBubble.style.left = `calc(${percent1}% + (${8 - percent1 * 0.15}px))`;
                minBubble.textContent = "৳ " + minVal;

                maxBubble.style.left = `calc(${percent2}% + (${8 - percent2 * 0.15}px))`;
                maxBubble.textContent = "৳ " + maxVal;
            }

            function activateSlider(slider, bubble) {
                slider.classList.add("active");
                bubble.style.display = "block";
            }

            function deactivateSlider(slider, bubble) {
                slider.classList.remove("active");
                bubble.style.display = "none";
            }

            // Events
            minRange.addEventListener("input", updateRange);
            maxRange.addEventListener("input", updateRange);

            minRange.addEventListener("mousedown", () => activateSlider(minRange, minBubble));
            minRange.addEventListener("mouseup", () => deactivateSlider(minRange, minBubble));
            minRange.addEventListener("touchstart", () => activateSlider(minRange, minBubble));
            minRange.addEventListener("touchend", () => deactivateSlider(minRange, minBubble));

            maxRange.addEventListener("mousedown", () => activateSlider(maxRange, maxBubble));
            maxRange.addEventListener("mouseup", () => deactivateSlider(maxRange, maxBubble));
            maxRange.addEventListener("touchstart", () => activateSlider(maxRange, maxBubble));
            maxRange.addEventListener("touchend", () => deactivateSlider(maxRange, maxBubble));

            // Init
            updateRange();
        });
    </script>
    {{-- script for enable "Apply" button (red) when discount input has value, --}}
    <script>
        //script for enable "Apply" button (red) when discount input has value,
        $(document).ready(function() {
            $(".discountInput").on("input", function() {
                let value = $(this).val().trim();

                if (value !== "") {
                    $(".applyBtn")
                        .removeClass("btn-light")
                        .addClass("btn-danger")
                        .prop("disabled", false);
                } else {
                    $(".applyBtn")
                        .removeClass("btn-danger")
                        .addClass("btn-light")
                        .prop("disabled", true);
                }
            });
        });
    </script>
    {{-- product checkout scroll hint button script --}}
    <script>
        // product checkout scroll hint button script
        $(document).ready(function() {
            let $container = $(".all-checkout-container");
            let $scrollHint = $(".scroll-hint");

            if ($container[0].scrollHeight > $container[0].clientHeight) {
                $scrollHint.show();
            } else {
                $scrollHint.hide();
            }

            $container.on("scroll", function() {
                if ($(this).scrollTop() > 11) {
                    $scrollHint.addClass("hide");
                } else {
                    $scrollHint.removeClass("hide");
                }
            });
        });
    </script>
    {{-- script for mini two accordion hide show text --}}
    <script>
        // script for mini two accordion hide show text
        const btn1 = document.getElementById('totalSingleItemOne');
        const btn2 = document.getElementById('totalSingleItemTwo');
        const acc1 = document.getElementById('panelsStayOpen-collapseOne');
        const acc2 = document.getElementById('panelsStayOpen-collapseTwo');

        acc1.addEventListener('shown.bs.collapse', function() {
            btn1.textContent = "Hide 8 items";
        });

        acc1.addEventListener('hidden.bs.collapse', function() {
            btn1.textContent = "Show 8 items";
        });
        //
        acc2.addEventListener('shown.bs.collapse', function() {
            btn2.textContent = "Hide 8 items";
        });

        acc2.addEventListener('hidden.bs.collapse', function() {
            btn2.textContent = "Show 8 items";
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let collapseEl = document.querySelector(".writeReviewCollapse");
            let btnText = document.querySelector(".review-btn-txt-changeable");
            let status = false;

            btnText.addEventListener("click", function() {
                status = !status;
                if (status) {
                    this.textContent = "CANCEL A REVIEW";
                } else {
                    this.textContent = "WRITE A REVIEW";
                }
            });
        });
    </script>

    {{-- new grid view script --}}
    <script>
        // lg device grid system
        $(document).ready(function() {
            $(".grid-btn").on("click", function() {
                var columns = $(this).data("columns");
                var category = $(this).data("category");

                // lg device column change
                $('.product-column[data-category="' + category + '"]')
                    .removeClass("col-lg-2 col-lg-3 col-lg-4 col-lg-6")
                    .addClass("col-lg-" + columns);

                $(".grid-btn[data-category='" + category + "']").removeClass("active");
                $(this).addClass("active");

                // product box class update
                $('.product-box[data-category="' + category + '"]')
                    .removeClass("product-box-col-2 product-box-col-3 product-box-col-4 product-box-col-6")
                    .addClass("product-box-col-" + columns);
            });
        });

        // mobile / md grid system
        $(document).ready(function() {
            // 🔹 Default set according to active button
            $(".grid-btn-mobile.active").each(function() {
                var columns = $(this).data("columns");
                var category = $(this).data("category");

                $('.product-column[data-category="' + category + '"]')
                    .removeClass("col-6 col-12 col-md-6 col-md-12")
                    .addClass("col-" + columns + " col-md-" + columns);

                $('.product-box[data-category="' + category + '"]')
                    .removeClass("product-box-col-6 product-box-col-12")
                    .addClass("product-box-col-" + columns);
            });

            // 🔹 On button click
            $(".grid-btn-mobile").on("click", function() {
                var columns = $(this).data("columns");
                var category = $(this).data("category");

                // sm & md device column change
                $('.product-column[data-category="' + category + '"]')
                    .removeClass("col-6 col-12 col-md-6 col-md-12")
                    .addClass("col-" + columns + " col-md-" + columns);

                $(".grid-btn-mobile[data-category='" + category + "']").removeClass("active");
                $(this).addClass("active");

                // product box class update
                $('.product-box[data-category="' + category + '"]')
                    .removeClass("product-box-col-6 product-box-col-12")
                    .addClass("product-box-col-" + columns);
            });
        });
    </script>
    <!-- zoom view image -->
    <script>
        $(document).ready(function() {
            $(".xzoom, .xzoom-gallery").xzoom({
                position: "right",
                offset: 0,
                lensShape: "square",
                lensSize: 200,
                title: false,
            });
        });
        /* calling script */
    </script>
    <script>
        $(document).ready(function() {
            const testimonials = [{
                    quote: "I couldn't be happier with OHSOGO. They consistently deliver 100% original products with lightning-fast delivery.",
                    name: "– Sanjida Toma",
                    rating: 5
                },
                {
                    quote: "I've always received exceptional service from OHSOGO with the best prices, making it my top choice for all my beauty needs",
                    name: "– Shilpi Akter",
                    rating: 4
                },
                {
                    quote: "OHSOGO is my go-to for exclusive brands and 100% original products that never disappoint",
                    name: "– Tawsia Ramy",
                    rating: 3
                },
                {
                    quote: "I've always received exceptional service from OHSOGO with the best prices, making it my top choice for all my beauty needs",
                    name: "– Shilpi Akter",
                    rating: 4
                }
            ];

            const $slider = $('.testimonial-slider');

            // Initialize Slick slider
            $slider.slick({
                centerMode: true,
                centerPadding: '0',
                slidesToShow: 3,
                autoplay: true,
                autoplaySpeed: 2500,
                arrows: false,
                infinite: true,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        centerMode: true
                    }
                }]
            });

            // Update testimonial content
            function updateContent(index) {
                const current = testimonials[index % testimonials.length]; // safeguard
                const fullStars = '<i class="fa fa-star"></i>'.repeat(current.rating);
                const emptyStars = '<i class="fa fa-star-o"></i>'.repeat(5 - current.rating);

                $('.testimonial-quote, .testimonial-name, .stars').css('opacity', 0);

                setTimeout(() => {
                    $('.testimonial-quote').text(`“${current.quote}”`).css('opacity', 1);
                    $('.testimonial-name').text(current.name).css('opacity', 1);
                    $('.stars').html(fullStars + emptyStars).css('opacity', 1);
                }, 200);
            }

            // Initial load
            updateContent(0);

            // On slide change
            $slider.on('afterChange', function(event, slick, currentSlide) {
                updateContent(currentSlide);
            });

            // next/prev buttons
            $('.next-btn').click(function() {
                $slider.slick('slickNext');
            });
            $('.prev-btn').click(function() {
                $slider.slick('slickPrev');
            });
        });
    </script>
    <script>
        window.addEventListener("pageshow", function(event) {
            if (event.persisted) {
                window.location.reload();
            }
        });
    </script>
    <script>
        // add to cart
        // Add product to cart with stock validation
        public

        function addToCart(Request $request) {
            $product = Product::find($request - > id); // Find product by ID

            // Check if product exists
            if (!$product) {
                return response() - > json(['status' => 'error', 'message' => 'Product not found!']);
            }

            // Check stock availability
            if ($product - > stock <= 0) {
                return response() - > json(['status' => 'error', 'message' => 'Out of stock!']);
            }

            // Get current cart session
            $cart = session() - > get('cart', []);
            // Calculate discount price if applicable
            $discountPrice = 0;
            if ($product - > discount_price > 0) {
                if ($product - > discount_type == 'percentage') {
                    $discountPrice = $product - > price - ($product - > price * $product - > discount / 100);
                }
                elseif($product - > discount_type == 'fixed') {
                    $discountPrice = $product - > discount_price;
                }
            }

            // If product already in cart, increase quantity
            if (isset($cart[$product - > id])) {
                if ($cart[$product - > id]['quantity'] >= $product - > stock) {
                    return response() - > json(['status' => 'error', 'message' => 'Not enough stock available!']);
                }
                $cart[$product - > id]['quantity'] += 1;
            } else {
                // Add new product to cart
                $cart[$product - > id] = [
                    'name' => $product - > name,
                    'price' => $product - > price,
                    'discount' => $discountPrice,
                    'thumbnail' => $product - > thumbnail,
                    'quantity' => 1,
                    'stock' => $product - > stock
                ];
            }

            // Save back to session
            session() - > put('cart', $cart);

            return response() - > json([
                'status' => 'success',
                'message' => $product - > name.
                ' added to cart successfully!',
                'cart' => $cart
            ]);
        }

        public

        function getCartItems() {
            $cart = session() - > get('cart', []);
            return response() - > json($cart);
        }

        public

        function removeCartItem(Request $request) {
            $cart = session() - > get('cart', []);

            if (isset($cart[$request - > id])) {
                unset($cart[$request - > id]);
                session() - > put('cart', $cart);
            }

            return response() - > json([
                'status' => 'success',
                'message' => 'Item removed from cart!',
                'cart' => $cart
            ]);
        }
        public

        function updateCart(Request $request) {
            $cart = session() - > get('cart', []);
            $product = Product::find($request - > id);

            if (!$product) {
                return response() - > json(['status' => 'error', 'message' => 'Product not found!']);
            }

            if (isset($cart[$request - > id])) {
                if ($request - > action == "increase") {
                    if ($cart[$request - > id]['quantity'] >= $product - > stock) {
                        return response() - > json(['status' => 'error', 'message' => 'Not enough stock available!']);
                    }
                    $cart[$request - > id]['quantity'] += 1;
                }
                elseif($request - > action == "decrease") {
                    if ($cart[$request - > id]['quantity'] > 1) {
                        $cart[$request - > id]['quantity'] -= 1;
                    } else {
                        unset($cart[$request - > id]); // Remove item if quantity is 0
                    }
                }
            }

            session() - > put('cart', $cart);

            $subtotal = collect($cart) - > sum(function($item) {
                $price = $item['discount'] > 0 ? $item['discount'] : $item[
                    'price']; // Check if discount is available
                return $price * $item['quantity']; // Multiply by quantity
            });

            return response() - > json([
                'status' => 'success',
                'message' => 'Cart updated successfully!',
                'cart' => $cart,
                'subtotal' => $subtotal,
                'total' => $subtotal
            ]);
        }
    </script>


</body>

</html>
