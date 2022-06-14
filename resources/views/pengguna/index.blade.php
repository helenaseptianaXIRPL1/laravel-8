@extends('layouts.main2')
@section('container')

<div id="card">
    <div id="card-content">
        <div id="card-title">

          @if(session()->has('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

        @if(session()->has('LoginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('LoginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

        <main class="form-signin">
            <form action="/login" method="post">
                @csrf
              <h1 class="h3 mb-5 mt-3 fw-normal text-center"><i class="bi bi-person-circle"></i>Login</h1>

              <div class="form-floating mt-4">
                <input type="email" name="email" class="form-control @error('email')
                is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="form-floating mt-3">
                <input type="password" name="password"  class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>


              <button class="w-100 btn btn-lg btn-success mt-3" type="submit">Login</button>

            </form>
            <small class="d-block text-center mt-5">Not registered? <a href="/register">Register Now!</a></small>
          </main>

    </div>
</div>
@endsection
