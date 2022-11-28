@extends('layouts.register')

@section('title')
    <title>Jobie - {{ $title ?? '' }} Registration</title>
@endsection

@section('register_form')
    <div class="text-center mb-3">
        <a href="/{{ strtolower($title) }}"><img src="{{asset('assets/images/logo-full.png')}}" alt=""></a>
    </div>
    <h4 class="text-center mb-4 text-white">Sign up your account</h4>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
    @endif
    <form action="/user/register" method="POST" >
        @csrf
        <div class="form-group">
            <label class="mb-1 text-white"><strong>Firstname</strong></label>
            <input type="text" name="firstname" class="form-control" placeholder="firstname" autofocus>
        </div>
        <div class="form-group">
            <label class="mb-1 text-white"><strong>Lastname</strong></label>
            <input type="text" name="lastname" class="form-control" placeholder="lastname">
        </div>
        <div class="form-group">
            <label class="mb-1 text-white"><strong>Email</strong></label>
            <input type="email" name="email" class="form-control" placeholder="hello@example.com">
        </div>
        <div class="form-group">
            <label class="mb-1 text-white"><strong>Password (6 or more characters)</strong></label>
            <div class=" input-group">
                <input type="password" name="password" class="form-control" placeholder="******" min="6">
                <span class="input-group-text cursor-pointer">
                    <i class="fa fa-eye-slash" id="eye"
                    onclick="
                        
                        if(this.parentElement.previousElementSibling.type == 'password'){
                            this.classList.remove('fa-eye')
                            this.classList.add('fa-eye-slash')
                            this.parentElement.previousElementSibling.type = 'text'
                            //alert(this.parentElement.previousElementSibling.type)
                        }else{
                            this.classList.remove('fa-eye-slash')
                            this.classList.add('fa-eye')
                            this.parentElement.previousElementSibling.type = 'password'
                        }
                    "
                    ></i></span>
            </div>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn bg-white text-primary btn-block">Sign me up</button>
        </div>
    </form>
    <div class="new-account mt-3">
        <p class="text-white">Already have an account? <a class="text-white" href="/{{ strtolower($title) }}/login">Sign in</a></p>
    </div>
    
@endsection
