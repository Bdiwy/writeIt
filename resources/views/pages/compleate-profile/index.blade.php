@extends('layouts.app')
@section('hide-navbar', true)
@section('style')
<link rel="stylesheet" href="{{asset("css/compleate-profile/style.css")}}">
@endsection

@section('content')

<body class="bg-light">
    <!-- Progress Bar -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-center mb-4">Complete Your Profile</h2>
                <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" id="profileProgress">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Completion Form -->
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow">
                    <div class="card-body p-5">
                        <!-- Avatar Selection Section -->
                        @include('pages.compleate-profile.avatar')
                        <!-- Personal Information Section -->
                        @include('pages.compleate-profile.personal-info')
                        <!-- Interests Section -->
                        @include('pages.compleate-profile.intersts')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
    @section('scripts')
    <script src="{{asset("js/comleate-profile/main.js")}}"></script>
    @endsection