<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') - {{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/logo/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bs_customize.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/xzoom.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/custom.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css">
    <style>
        :root {
            --primary-color: #ff6b6b;
            --secondary-color: #ff8e8e;
            --dark-color: #333;
            --light-color: #f8f9fa;
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 32px;
            color: var(--primary-color);
        }

        .hero-section {
            background: linear-gradient(135deg, #fff5f5 0%, #fff 100%);
            padding: 3.125rem 0;
            margin-bottom: 1.875rem;
        }

        .hero-title {
            font-size: 56px;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 1.25rem;
        }

        .hero-subtitle {
            font-size: 19.2px;
            color: #666;
            margin-bottom: 1.875rem;
        }

        .carousel-item img {
            border-radius: 0.625rem;
            height: 25rem;
            object-fit: cover;
        }

        .carousel-indicators button {
            width: 0.625rem;
            height: 0.625rem;
            border-radius: 50%;
            margin: 0 0.3125rem;
        }

        @media (max-width: 48rem) {
            .hero-title {
                font-size: 40px;
            }

            .carousel-item img {
                height: 15.625rem;
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
    {{-- owl carosel  --}}
    <script>
        $(document).ready(function() {
            const owl = $('.owl-carousel');
            owl.owlCarousel({
                loop: false,
                margin: 40,
                responsiveClass: true,
                nav: true,
                navText: [
                    '<i class="fa fa-chevron-left text-white"></i>',
                    '<i class="fa fa-chevron-right text-white "></i>'
                ],
                smartSpeed: 400,
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
                }
            });

            function updateNavState() {
                const currentIndex = owl.find('.owl-item.active').first().index();
                const totalItems = owl.find('.owl-item').length;
                const itemsPerPage = owl.find('.owl-item.active').length;

                // prev disable
                if (currentIndex === 0) {
                    $('.owl-prev').addClass('disabled');
                } else {
                    $('.owl-prev').removeClass('disabled');
                }

                // next disable
                if (currentIndex + itemsPerPage >= totalItems) {
                    $('.owl-next').addClass('disabled');
                } else {
                    $('.owl-next').removeClass('disabled');
                }
            }

            // init and on change update state
            updateNavState();
            owl.on('changed.owl.carousel', updateNavState);
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
    {{-- Script for Cart Note Modal Box open --}}
    <script>
        // cart note modal js script
        const modal = document.getElementById("customModal");
        const cartBody = document.querySelector(".product-cart-offcanvas");

        modal.addEventListener("show.bs.modal", function() {
            let backdrop = document.createElement("div");
            backdrop.classList.add("custom-modal-backdrop");
            cartBody.appendChild(backdrop);
        });

        modal.addEventListener("hidden.bs.modal", function() {
            const backdrop = cartBody.querySelector(".custom-modal-backdrop");
            if (backdrop) backdrop.remove();
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
                zoomWidth: 100,
                zoomHeight: 100,
                position: "right",
                offset: 0,
                lens: true,
                lensShape: "square",
                lensSize: 0,
                title: false,
            });
        });
    </script>
</body>

</html>
