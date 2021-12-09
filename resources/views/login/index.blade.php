@extends('login.layout')

@section('title')
   Login 
@endsection

@section('container')   
<main class="form-signin">
        <img class="mb-4" src="{{ asset('img/artgoogle.png') }}" alt="" width="100">
        <h1 class="h3 mb-3 fw-normal">Login</h1>
        <p class="text-center mb-3"><a href="/" class="text-decoration-none back"><i class="bi bi-chevron-double-left"></i></i> Back to homepage</a></p>
        
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
          </svg>

        @if (session()->has('success'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
                {{ session('success') }}
            </div>
        </div>
        @endif

        @if (session()->has('loginError'))
        <div class="alert alert-danger  d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
                {{ session('loginError') }}
            </div>
        </div>
        @endif
        <form action="/login" method="post">
        @csrf
        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" autofocus placeholder="email" value="{{ old('email') }}" required>
            <label for="email">Email</label>
            @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-check mb-3 mr-1">
            <input class="form-check-input" type="checkbox" value="" onclick="myFunction()" id="password">
            <p class="py-0" style="margin-right: 160px">Show password</p>
        </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    </form>
        <smal class="d-block text-center mt-3">Not registered?
            <a href="/register" class="text-decoration-none" style="color: #3283cfda;">Register Now!</a>
        </small>                  
</main>
<script>
  function myFunction() {
      var x = document.getElementById("password");
      if (x.type === "password") {
          x.type = "text";
      } else {
          x.type = "password";
      }
  }
</script>
@endsection
