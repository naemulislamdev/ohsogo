{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layouts.front-end.app')
@section('title', 'Accounts')
@section('main-content')
    <!-- Login Form Start -->
    <section class="login-form py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="login-regiter-box">
                        <h3 class="mb-3">Login</h3>
                        <p class="text-muted mb-4">
                            Don't have an account yet?
                            <a class="text-dark" href="{{ route('register') }}">Create account</a>
                        </p>

                        <form class="mt-5" method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email -->
                            <div class="mb-3">
                                <input type="email" name="email" autofocus
                                    class="form-control @error('email')
                                    is-invalid
                                @enderror"
                                    placeholder="Email" value="{{ old('email') }}" />
                                @error('email')
                                    <div class="text-danger small mt-2">{{ ucFirst($message) }}</div>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="mb-2">
                                <input type="password" name="password"
                                    class="form-control @error('password')
                                    is-invalid
                                @enderror"
                                    placeholder="Password" />
                                @error('password')
                                    <div class="text-danger small mt-2">{{ ucFirst($message) }}</div>
                                @enderror
                            </div>
                            <!-- Forgot Password -->
                            <div class="forgot-password mb-3 mt-3">
                                <a href="{{ route('password.request') }}" class="small text-decoration-none">Forgot your
                                    password?</a>
                            </div>
                            <!-- Submit + Return Store -->
                            <div class="d-flex mt-5 flex-column flex-lg-row align-items-start align-items-lg-center">
                                <button type="submit" class="chekout-cart-btn signin-btn">
                                    Sign In
                                </button>
                                <a href="{{ url('/') }}" class="return-store-btn ms-lg-4 mt-4 mt-lg-0">Return Store</a>
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
