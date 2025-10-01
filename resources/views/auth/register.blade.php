{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layouts.front-end.app')
@section('title', 'Create Accounts')
@section('main-content')
    <!-- Register Form Start -->
    <section class="register-form py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="login-regiter-box">
                        <h3 class="mb-3">Create Account</h3>

                        <form class="mt-5" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="f_name" value="{{ old('f_name') }}" autofocus
                                    class="form-control  @error('f_name') is-invalid  @enderror" placeholder="First name" />
                                @error('f_name')
                                    <div class="text-danger small mt-2">{{ ucFirst($message) }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input type="text" name="l_name"
                                    class="form-control  @error('l_name') is-invalid  @enderror" value="{{ old('l_name') }}"
                                    placeholder="Last name" />
                                @error('l_name')
                                    <div class="text-danger mt-2 small">{{ ucFirst($message) }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="tel" name="phone"
                                    class="form-control @error('phone') is-invalid  @enderror" value="{{ old('phone') }}"
                                    placeholder="Phone number (+880 2 1234567)" />
                                @error('phone')
                                    <div class="text-danger mt-2 small">{{ ucFirst($message) }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid  @enderror" placeholder="Email"
                                    value="{{ old('email') }}" />
                                @error('email')
                                    <div class="text-danger mt-2 small">{{ ucFirst($message) }}</div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid  @enderror" placeholder="Password" />
                                @error('password')
                                    <div class="text-danger mt-2 small">{{ ucFirst($message) }}</div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <input type="password" name="password_confirmation"
                                    class="form-control @error('password') is-invalid  @enderror"
                                    placeholder="Confirm Password" />

                            </div>

                            <!-- Submit + Return Store -->
                            <div class="d-flex mt-5 flex-column flex-lg-row align-items-start align-items-lg-center">
                                <button type="submit" class="chekout-cart-btn signin-btn">
                                    CREATE
                                </button>
                                <a href="{{ url('/') }}" class="return-store-btn ms-lg-4 mt-4 mt-lg-0">Return
                                    Store</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </section>
    <!-- register Form End -->
@endsection
