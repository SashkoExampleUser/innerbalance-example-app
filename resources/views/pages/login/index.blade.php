@extends('layouts::base')

@section('title', 'Login | Inner Balance')

@push('styles')
@include('pages::login.parts.styles')
@endpush

@section('header')
@include('pages::login.parts.header')
@endsection

@section('main')
    <main role="main">
        <form
            id="login_form"
            method="POST"
            role="form"
            action="{{ route('auth') }}"
            class=" px-6 py-[72px] h-full"
        >
            @csrf
            <div class="w-full mx-auto max-w-[672px]">
                <h1
                    class="text-212529 font-[Poppins] text-[24px] md:text-[48px] leading-[32px] md:leading-[60px] text-center capitalize font-medium">
                    Login
                </h1>

                <div class="w-full max-w-[400px] mx-auto mt-10 relative flex flex-col gap-3">
                    <input
                        placeholder="Email address"
                        id="email"
                        class="input-field-custom"
                        type="email"
                        name="login"
                        value="{{ @old('login') }}"
                        required
                        @if (empty(@old('login')))
                        autofocus
                        @endif
                    >
                    <input
                        placeholder="Password"
                        id="password"
                        class="input-field-custom"
                        type="password"
                        name="password"
                        required
                        min="8"
                        @if (!empty(@old('login')))
                        autofocus
                        @endif
                    >
                    <a
                        class="text-right px-6 font-[Poppins] text-[14px] font-medium text-212529 opacity-[0.7]"
                        href="https://innerbalance.com/forgot-password"
                    >Forgot Password?</a>
                </div>

                @if ($errors->any())
                    <p class="text-212529 mt-2 font-[Poppins] text-center">We can’t find your account, please check your email
                    and password. If you don’t have an account, please register.</p>
                @endif

                <button
                    type="submit"
                    class="cursor-pointer flex items-center justify-center bg-505a42 min-h-[51px] px-5 rounded-[50px] shrink-0 gap-1.5 w-full max-w-[400px] mx-auto mt-8"
                >
                    <span class="!text-[16px] progress-continue-button min-w-[62px]">
                        Log in
                    </span>
                </button>
            </div>
        </form>
    </main>
@endsection

@section('footer')
@endsection
