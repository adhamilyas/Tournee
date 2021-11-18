@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-md-4">

            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">            
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true" class="border-0">&times;</span>
                </button>
              </div>    
            @endif

            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">            
                {{ session('loginError') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>    
            @endif 

            <main class="form-signin">
                <form action="/login" method="post">
                    @csrf

                    <img src="img/{{ $logo }}" alt="" width="200" height="100" class="img-thumbail mb-4 mx-auto d-block">

                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('username') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg text-white" style="background-color: #8CA49E" type="submit">Sign in</button>
                </form>

                <small>
                    Not registered? <a href="/register" class="text-decoration-none">Register here</a>
                </small>
            </main>
        </div>
    </div>

@endsection
