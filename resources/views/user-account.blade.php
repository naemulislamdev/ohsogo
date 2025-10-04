@extends('layouts.front-end.app')
@section('title', 'User Dashboard')
@section('main-content')

    {{-- <div class="row text-end">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-primary" type="submit" class="dropdown-item">
                <i class="fas fa-sign-out-alt"></i> {{ __('Log Out') }}
            </button>
        </form>
    </div> --}}
    <section>
        <div class="container">
            <div class="row text-center mt-5 mb-2">
                <h1 style="font-size: 48px; font-weight: 400; line-height: 62px">Account</h1>
            </div>
            <div class="row">
                <div class="row text-center">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn bg-transparent" type="submit" class="dropdown-item">
                            <i class="fas fa-sign-out-alt"></i> {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-3">
                    <h3>Order history</h3>
                    <p class="mt-4">You haven't placed any orders yet.</p>
                </div>
                <div class="col-lg-3"></div>
                <div class="col-lg-3"></div>
                <div class="col-lg-3">
                    <h4>Account details</h4>
                    <p>{{ Auth::user()->f_name . ' ' . Auth::user()->l_name }}</p>
                    <p>Bangladesh</p>
                    <div class="mt-4">
                        <a href="">
                            <h5 class="text-uppercase fw-bold">View addresses (1)</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
