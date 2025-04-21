@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <div class="container justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card mt-5">
                    <div class="card-header bg-success text-white text-center">
                        <h3>Create a Writeit Account</h3>
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

                        <!-- Register Form -->
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your name" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Create a password" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Sign Up</button>
                        </form>
                        <p class="mt-3 text-center">
                            Already have an account? <a href="{{ route('login') }}">Login here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection