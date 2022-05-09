<!DOCTYPE html>
<html lang="en">

<head>
  @include('includes.head')

  <!-- Main Style -->
  <link rel="stylesheet" href="/assets/css/responsive.css" />
</head>
@php
$dataCategory = \App\Models\Category::all();
@endphp

<body>
  <div id="ec-overlay"><span class="loader_img"></span></div>

  @include('includes.header')

  <!-- Ec login page -->
  <section class="ec-page-content section-space-p">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="section-title">
            <h2 class="ec-title">Log In</h2>
            <p class="sub-title mb-3">Best place to buy and sell digital products</p>
          </div>
        </div>
        <div class="ec-login-wrapper">
          <div class="ec-login-container">
            <div class="ec-login-form">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <span class="ec-login-wrap">
                  <label>Email Address*</label>
                  <input type="text" name="email" placeholder="Enter your email add..." :value="old('email')" required
                    value="{{ __('Email') }}" />
                </span>
                <span class="ec-login-wrap">
                  <label>Password*</label>
                  <input type="password" name="password" placeholder="Enter your password" required />
                </span>
                <span class="ec-login-wrap ec-login-fp">
                  <label><a href="{{ route('password.request') }}">
                      {{ __('Forgot your password?') }}
                    </a></label>
                </span>
                <span class="ec-login-wrap ec-login-btn">
                  <button class="btn btn-primary" type="submit"
                    style="background: #00ac39; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">Login</button>
                  <a href="register.html" class="btn btn-secondary">Register</a>
                  {{-- Login with Google --}}
                  <div class="flex items-center justify-end mt-2">
                    <a href="{{ url('auth/google') }}"
                      style="background: #c01010; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                      Login with Google
                    </a>
                  </div>
                  {{-- Login with Facebook --}}
                  <div class="flex items-center justify-end mt-2">
                    <a href="{{ url('auth/facebook') }}"
                      style="background: #3B5499; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                      Login with Facebook
                    </a>
                  </div>
                </span>
              </form>
            </div>
          </div>
          <div class="text-center">
            @if (session('status'))
              <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- <x-guest-layout>
    <x-jet-authentication-card>
      <x-slot name="logo">
        <x-jet-authentication-card-logo />
      </x-slot>

      <x-jet-validation-errors class="mb-4" />

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
          <x-jet-label for="email" value="{{ __('Email') }}" />
          <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
            autofocus />
        </div>

        <div class="mt-4">
          <x-jet-label for="password" value="{{ __('Password') }}" />
          <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
            autocomplete="current-password" />
        </div>

        <div class="block mt-4">
          <label for="remember_me" class="flex items-center">
            <x-jet-checkbox id="remember_me" name="remember" />
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
          </label>
        </div>

        <div class="flex items-center justify-end mt-4">
          @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
              {{ __('Forgot your password?') }}
            </a>
          @endif

          <x-jet-button class="ml-4">
            {{ __('Log in') }}
          </x-jet-button>
        </div>
      </form>
    </x-jet-authentication-card>
  </x-guest-layout> --}}

  @include('includes.footer')

</body>

</html>
