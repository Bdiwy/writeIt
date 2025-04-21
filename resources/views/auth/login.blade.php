@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <div class="container justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card mt-5">
                    <div class="card-header bg-success text-white text-center">
                        <h3>Login to Writeit</h3>
                    </div>
                    <div class="card-body">
                        <!-- Display Errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Login Form -->
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter your password" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Login</button>
                        </form>
                        <p class="mt-3 text-center">
                            Don’t have an account? <a href="{{ route('register') }}">Register here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection