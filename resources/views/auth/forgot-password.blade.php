{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('layouts.front-end.app')
@section('title', 'Forgot Password')
@section('main-content')
    <!-- Login Form Start -->
    <section class="forgot-password-form py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="login-regiter-box">
                        <h3 class="mb-3">Reset your password</h3>
                        <p style="font-size: 15px" class="mb-4 small text-dark">
                            We will send you an email to reset your password
                        </p>

                        <form class="mt-5" action="{{ route('password.email') }}" method="POST">
                            @csrf
                            <!-- Email -->
                            <div class="mb-3">
                                <input type="email" name="email" autofocus
                                    class="form-control @error('email')
                                    is-invalid
                                @enderror"
                                    placeholder="Email" />
                                @error('email')
                                    <div class="text-danger small mt-2">{{ ucWords($message) }}</div>
                                @enderror
                            </div>

                            <!-- Submit + Return Store -->
                            <div class="d-flex mt-5 flex-column flex-lg-row align-items-start align-items-lg-center">
                                <button type="submit" class="chekout-cart-btn signin-btn">
                                    Submit
                                </button>
                                <a href="{{ route('login') }}" class="return-store-btn ms-lg-4 mt-4 mt-lg-0">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </section>
    <!-- Login Form End -->
@endsection
