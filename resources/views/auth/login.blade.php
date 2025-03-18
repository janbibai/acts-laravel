@extends('base')
@section('title', 'Login')



<div class="container">
    <h2>Login</h2>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form id="for" method="POST" action="{{ route('auth.login')}}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control" placeholder="enter your email" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control" placeholder="enter your password" required>
        </div>

        <button type="submit" class="btn btn-success">Login</button>
    </form>
</div>