<!-- Navigation -->
@php
    // first 3 main category
    $categoriesFirst3 = DB::table('categories')->orderBy('priority', 'asc')->take(3)->get();
    // last 3 main category
    $categoriesLast3 = DB::table('categories')->orderBy('priority', 'asc')->skip(3)->take(6)->get();
    // mobile main category
    $categories = DB::table('categories')->orderBy('priority', 'asc')->get();

    // dd(session()->get('cart'))

@endphp


<!-- Start Header & Navigation Section -->
<header id="header">

    <div class="container">
        <div class="row py-2 py-lg-3">
            {{-- desktop search --}}
            <div class="col-md-2 d-none d-lg-block header-icon">
                <i class="fa fa-search search-icon cursor-pointer"></i>

                <!-- modal -->
                <div class="search-modal">
                    <div class="search-wrapper">
                        <i class="fa fa-search"></i>
                        <input type="text" class="search-box" placeholder="Search" />
                        <i class="fa fa-times close-btn"></i>
                    </div>
                </div>
            </div>


            <div class=" col-lg-3">
                <nav class="navbar">
                    <div class="menu-area">
                        <ul>
                            @foreach ($categoriesFirst3 as $category)
                                <li class="dd-btn1">
                                    <a href="{{ route('collections', $category->slug) }}"> {{ $category->name }} <i
                                            class="fa fa-angle-down"></i></a>
                                    {{-- subcategory dropdown  --}}
                                    <div class="dropdown-menu1">
                                        @php
                                            $subcategories = \App\Models\SubCategory::where(
                                                'category_id',
                                                $category->id,
                                            )->get();
                                        @endphp

                                        <ul>
                                            @foreach ($subcategories as $subcat)
                                                <li class="dd-btn2">
                                                    <a href="{{ route('collections', $subcat->slug) }}">
                                                        <span>{{ $subcat->name }}</span>
                                                        @php
                                                            $totalChildCat = \App\Models\SubSubCategory::where(
                                                                'sub_category_id',
                                                                $subcat->id,
                                                            )
                                                                ->get()
                                                                ->count();
                                                        @endphp
                                                        @if ($totalChildCat > 0)
                                                            <i class="fa fa-angle-right float-right mt-1"></i>
                                                    </a>
                                            @endif

                                            <div class="dropdown-menu2">
                                                @php
                                                    $sub_subcategories = \App\Models\SubSubCategory::where(
                                                        'sub_category_id',
                                                        $subcat->id,
                                                    )->get();

                                                @endphp
                                                <ul class="w-nav-list level_3">
                                                    @foreach ($sub_subcategories as $sub_subcat)
                                                        <li class="dd-btn3">
                                                            <a
                                                                href="{{ route('collections', $sub_subcat->slug) }}">{{ $sub_subcat->name }}</a>

                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    </li>
                    @endforeach
                    </ul>


            </div>
            <i class="fa fa-bars menu-icon"></i>

            <a class="d-block d-lg-none" style="margin-left: 20px; margin-top: 12px;" href="{{ url('/') }}">
                <img style="width: 100px"src="{{ asset('storage/company') . '/' . $web_config['web_logo']->value }}"
                    onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}" alt="logo">
            </a>
            {{-- moblile search --}}
            <div class="d-block d-lg-none mt-2">
                <i class="fa fa-search search-icon cursor-pointer"></i>

                <!-- modal -->
                <div class="search-modal">
                    <div class="search-wrapper">
                        <i class="fa fa-search"></i>
                        <input type="text" class="search-box" placeholder="Search" />
                        <i class="fa fa-times close-btn"></i>
                    </div>
                </div>
            </div>
            {{-- Mobile offcanvas start --}}
            @include("layouts.front-end.partials.cart.cart_sm_offcanvas")
            {{-- Mobile offcanvas end --}}
            </nav>
        </div>
        <div class="col-lg-2 text-center">
            <a href="{{ url('/') }}" class="navbar-brand">
                <img class="header-logo" src="{{ asset('storage/company') . '/' . $web_config['web_logo']->value }}"
                    onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}" alt="" />
            </a>
        </div>
        <div class="col-lg-4">
            <div class="menu-area">
                <ul>
                    @foreach ($categoriesLast3 as $category)
                        <li class="dd-btn1">
                            <a href="{{ route('collections', $category->slug) }}"> {{ $category->name }} <i
                                    class="fa fa-angle-down"></i></a>
                            {{-- subcategory dropdown  --}}
                            <div class="dropdown-menu1">
                                @php
                                    $subcategories = \App\Models\SubCategory::where(
                                        'category_id',
                                        $category->id,
                                    )->get();
                                @endphp

                                <ul>
                                    @foreach ($subcategories as $subcat)
                                        <li class="dd-btn2">
                                            <a href="{{ route('collections', $subcat->slug) }}">
                                                <span>{{ $subcat->name }}</span>
                                                @php
                                                    $totalSubSubCat = \App\Models\SubSubCategory::where(
                                                        'sub_category_id',
                                                        $subcat->id,
                                                    )
                                                        ->get()
                                                        ->count();

                                                @endphp
                                                @if ($totalSubSubCat)
                                                    <i class="fa fa-angle-right float-right mt-1"></i>
                                            </a>
                                    @endif

                                    <div class="dropdown-menu2">
                                        @php
                                            $sub_subcategories = \App\Models\SubSubCategory::where(
                                                'sub_category_id',
                                                $subcat->id,
                                            )->get();

                                        @endphp
                                        <ul class="w-nav-list level_3">
                                            @foreach ($sub_subcategories as $sub_subcat)
                                                <li class="dd-btn3">
                                                    <a
                                                        href="{{ route('collections', $sub_subcat->slug) }}">{{ $sub_subcat->name }}</a>

                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            </li>
            @endforeach
            </ul>
        </div>
    </div>
    <div class="col-lg-1">
        <div class="header-icon d-flex justify-content-between gap-5 align-items-center">

            <a class="d-none d-lg-block" href="{{ route('login') }}"><i class="fa fa-user-o"
                    aria-hidden="true"></i></a>
                {{-- Lg device offcanvas --}}
                @include("layouts.front-end.partials.cart.cart_lg_offcanvas")

            {{-- lg device offcanvas --}}
        </div>
    </div>
    </div>
    </div>
</header>
<!--end header-->
<!--start mobile menu-->
<div class="mobile-menu ">
    <div class="mm-logo" style="background: #fff; padding: 0.6875rem 1.125rem">
        <a href="{{ url('/') }}">
            <img style="width: 50%" src="{{ asset('storage/company') . '/' . $web_config['web_logo']->value }}"
                onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}" alt="" />
        </a>
        <div class="mm-cross-icon">
            <i class="fa fa-times mm-ci"></i>
        </div>
    </div>
    <div class="mm-menu">
        <div class="accordion " id="accordionExample">
            <div class="menu-box">
                <div class="menu-link">
                    <a class="text-uppercase" href="{{ url('/') }}"><i class="fa fa-ptab3 mr-2"></i> Home</a>

                </div>
            </div>
            @foreach ($categories as $category)
                <div class="menu-box">
                    <div class="menu-link" id="heading{{ $category->id }}">
                        <a class="mmenu-btn menu-link-active text-uppercase" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse{{ $category->id }}" aria-expanded="true">
                            {{ $category->name }} <i class="fa fa-plus"></i>
                        </a>
                    </div>
                    <div id="collapse{{ $category->id }}" class="menu-body collapse"
                        aria-labelledby="heading{{ $category->id }}" data-bs-parent="#accordionExample">
                        <div class="card-body">
                            @php
                                $subcategories = \App\Models\SubCategory::where('category_id', $category->id)->get();
                            @endphp
                            @foreach ($subcategories as $subcat)
                                <ul>
                                    <li class="mega-dd-btn-2">
                                        <a data-bs-toggle="collapse" href="#category{{ $subcat->id }}"
                                            role="button" aria-expanded="false"
                                            aria-controls="category{{ $subcat->id }}" class="collapsed">
                                            {{ $subcat->name }}
                                            <i class="fa fa-angle-down float-right mt-1"></i>
                                        </a>
                                        <div class="collapse" id="category{{ $subcat->id }}">
                                            <div class="card card-body scroll-div-dist">
                                                @php
                                                    $sub_subcategories = \App\Models\SubSubCategory::where(
                                                        'sub_category_id',
                                                        $subcat->id,
                                                    )->get();
                                                @endphp
                                                @foreach ($sub_subcategories as $sub_subCat)
                                                    <ul class="mega-item">
                                                        <li class="mega-dd-btn-2">
                                                            <a data-bs-toggle="collapse" href="#subCategory1"
                                                                role="button" aria-expanded="false"
                                                                aria-controls="subCategory1" class="collapsed">
                                                                {{ $sub_subCat->name }}

                                                            </a>

                                                        </li>
                                                    </ul>
                                                @endforeach

                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            @endforeach

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="mt-5 ps-2">
        <a class="border btn text-uppercase" href="{{ route('login') }}">Log in <i class="fa fa-user-o"
                aria-hidden="true"></i></a>
    </div>
</div>


<!--end mobile menu-->
