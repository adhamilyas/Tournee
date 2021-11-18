@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-registration">
                <form action="/register" method="post">
                    @csrf

                    <img src="img/{{ $logo }}" alt="" width="200" height="100"
                        class="img-thumbail mb-4 mx-auto d-block">

                    <div class="form-floating">
                        <input type="text" name="username" class="form-control rounded-top @error('username') is-invalid @enderror" id="username" placeholder="XXX" value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username') 
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="XXX" value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name') 
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email') 
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                            placeholder="Password">
                        <label for="password">Password</label>
                        @error('password') 
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg text-white mt-2" style="background-color: #0F4C75"
                        type="submit">Register</button>
                </form>

                <small>
                    Already have an account? <a href="/login" class="text-decoration-none">Sign in here</a>
                </small>
            </main>
        </div>
    </div>

@endsection
