@extends('layouts.app')

@section('title', 'Shoepi')

@section('content')

@extends('layouts.app')

@section('title', 'Login')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white text-center bg-primary"><h2>Login Shoepi</h2></div>
                <div class="card-body">
                    <form class="form-signin" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
