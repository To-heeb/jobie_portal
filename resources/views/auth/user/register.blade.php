@extends('layouts.register')

@section('title')
    <title>Jobie - {{ $title ?? '' }} Registration</title>
@endsection
@section('register_form')
    <div class="text-center mb-3">
        <a href="/{{ strtolower($title) }}"><img src="public/assets/images/logo-full.png" alt=""></a>
    </div>
    <h4 class="text-center mb-4 text-white">Sign up your account</h4>
    <form action="">
        <div class="form-group">
            <label class="mb-1 text-white"><strong>Username</strong></label>
            <input type="text" class="form-control" placeholder="username">
        </div>
        <div class="form-group">
            <label class="mb-1 text-white"><strong>Email</strong></label>
            <input type="email" class="form-control" placeholder="hello@example.com">
        </div>
        <div class="form-group">
            <label class="mb-1 text-white"><strong>Password</strong></label>
            <input type="password" class="form-control" value="Password">
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn bg-white text-primary btn-block">Sign me up</button>
        </div>
    </form>
    <div class="new-account mt-3">
        <p class="text-white">Already have an account? <a class="text-white" href="/{{ strtolower($title) }}/login">Sign in</a></p>
    </div>
@endsection
