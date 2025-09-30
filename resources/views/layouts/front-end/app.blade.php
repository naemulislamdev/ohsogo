<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title') - {{ config('app.name') }}</title>
        <link
            rel="shortcut icon"
            href="./assets/images/logo/favicon.png"
            type="image/x-icon"
            />
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/bs_customize.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
        <!-- Font Awesome for icons -->
        <link rel="stylesheet" href="assets/css/custom.css" />
        <link rel="stylesheet" href="assets/css/responsive.css" />
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
    <body >
    <!-- Header Start -->
        @include("layouts.front-end.partials.header")
    <!-- Header End -->
        <!-- Main Content Start -->
         <main>
            @yield('main-content')
         </main>
        <!-- Main Content End -->
   <!-- Footer Start -->
   @include('layouts.front-end.partials.footer')
   <!-- Footer End -->

    <!--Bootstrap JS Bundle with Popper -->
    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/owl-extra-code.js"></script>

    <!-- search system -->
    <script>
      $(document).ready(function () {
        $(".search-icon").click(function () {
          $(".search-modal").addClass("active");
          $(".search-box").focus();
        });

        $(".close-btn").click(function () {
          $(".search-modal").removeClass("active");
        });

        $(".search-modal").click(function (e) {
          if (!$(e.target).closest(".search-wrapper").length) {
            $(".search-modal").removeClass("active");
          }
        });
        $(document).keyup(function (e) {
          if (e.key === "Escape") {
            $(".search-modal").removeClass("active");
          }
        });
      });
    </script>
    <!-- Mobile Menu -->
    <script>
      $(document).ready(function () {
        /*mobile menu*/
        $(".menu-icon").on("click", function () {
          $(".mobile-menu").toggleClass("mobile-menu-active");
        });
        $(".mm-ci").on("click", function () {
          $(".mobile-menu").toggleClass("mobile-menu-active");
        });
      });
    </script>
    <script>
      $(document).ready(function () {
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function () {
          $(this)
            .prev(".menu-link")
            .find(".fa-minus")
            .addClass("fa-minus")
            .removeClass("fa-plus");
        });

        // Toggle plus minus icon on show hide of collapse element
        $(".collapse")
          .on("show.bs.collapse", function () {
            $(this)
              .prev(".menu-link")
              .find(".fa-plus")
              .removeClass("fa-plus")
              .addClass("fa-minus");
          })
          .on("hide.bs.collapse", function () {
            $(this)
              .prev(".menu-link")
              .find(".fa-minus")
              .removeClass("fa-minus")
              .addClass("fa-plus");
          });
        /*mobile-menu-click*/
        $(".mmenu-btn").click(function () {
          $(this).toggleClass("menu-link-active");
        });
      });
    </script>
    <script>
      // cart note modal js script
      const modal = document.getElementById("customModal");
      const cartBody = document.querySelector(".product-cart-offcanvas");

      modal.addEventListener("show.bs.modal", function () {
        let backdrop = document.createElement("div");
        backdrop.classList.add("custom-modal-backdrop");
        cartBody.appendChild(backdrop);
      });

      modal.addEventListener("hidden.bs.modal", function () {
        const backdrop = cartBody.querySelector(".custom-modal-backdrop");
        if (backdrop) backdrop.remove();
      });
    </script>
    <script>
      // cart increment decrement buttton script
      document
        .querySelectorAll(".cart-increment-decrement")
        .forEach(function (item) {
          const decrementBtn = item.querySelector(".decrement");
          const incrementBtn = item.querySelector(".increment");
          const showItem = item.querySelector(".showItem");
          const hiddenInput = item.querySelector(".quantity");

          incrementBtn.addEventListener("click", function () {
            let currentValue = parseInt(showItem.textContent);
            currentValue++;
            showItem.textContent = currentValue;
            hiddenInput.value = currentValue;
          });

          decrementBtn.addEventListener("click", function () {
            let currentValue = parseInt(showItem.textContent);
            if (currentValue > 1) {
              currentValue--;
              showItem.textContent = currentValue;
              hiddenInput.value = currentValue;
            }
          });
        });
    </script>
    </body>
</html>
