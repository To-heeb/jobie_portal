@extends('layouts.login')
@section('title')
    <title>Jobie - {{ $title ?? '' }} Login</title>
@endsection
@section('login_form')
    <div class="text-center mb-3">
        <a href="/{{ strtolower($title) }}"><img src="{{ asset('assets/images/logo-full.png') }}" alt=""></a>
    </div>
    <h4 class="text-center mb-4 text-white">Sign in your account</h4>
    <form action="">
        <div class="form-group">
            <label class="mb-1 text-white"><strong>Email</strong></label>
            <input type="email" class="form-control" value="hello@example.com">
        </div>
        <div class="form-group">
            <label class="mb-1 text-white"><strong>Password</strong></label>
            <input type="password" class="form-control" value="Password">
        </div>
        <div class="form-row d-flex justify-content-between mt-4 mb-2">
            <div class="form-group">
            <div class="custom-control custom-checkbox ms-1 text-white">
                    <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                    <label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
                </div>
            </div>
            <div class="form-group">
                <a class="text-white" href="page_forgot_password.html">Forgot Password?</a>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn bg-white text-primary btn-block">Sign Me In</button>
        </div>
    </form>
    <div class="new-account mt-3">
        <p class="text-white">Don't have an account? <a class="text-white" href="/{{ strtolower($title) }}/register">Sign up</a></p>
    </div>
@endsection