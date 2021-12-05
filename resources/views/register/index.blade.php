@extends('login.layout')

@section('title')
    Register
@endsection

@section('container')
<main class="form-signin">
    <form action="/register" method="post">
      @csrf
      <img class="mb-4" src="{{ asset('img/artgoogle.png') }}" alt="" width="100">
      <h1 class="h3 mb-3 fw-normal">Register</h1>
  
      <p class="text-center mb-3"><a href="/" class="text-decoration-none back"><i class="bi bi-chevron-double-left"></i></i> Back to homepage</a></p>
  
      <div class="form-floating mb-3">
        <input type="text" class="form-control @error('name')is-invalid @enderror" name="name" id="name" placeholder="enter your name" required value="{{ old('name') }}">
        <label for="name">Name</label>
        @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror        
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control @error('username')is-invalid @enderror" name="username" id="username" placeholder="enter your username" required value="{{ old('username') }}">
        <label for="username">Username</label>
        @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror   
      </div>
      <div class="form-floating mb-3">
        <input type="email" class="form-control @error('email')is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
        <label for="email">Email</label>
        @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror   
      </div>
      <div class="form-floating mb-4">
        <input type="password" class="form-control @error('password')is-invalid @enderror" name="password" id="password" placeholder="Password">
        <label for="password">Password</label>
        @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror   
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </form>
      <smal class="d-block text-center mt-3">Already registered?
          <a href="/login" class="text-decoration-none" style="color: #3283cfda;">Login Now!</a>
      </small>                  
</main>
@endsection