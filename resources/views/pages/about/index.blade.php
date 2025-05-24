@extends('layouts.app')

@section('content')

<!-- About Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h1 class="text-center mb-4">About Writeit</h1>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">
                    <strong>Writeit</strong> is a modern social media platform focused on content sharing and community
                    engagement. Our goal is to create a space where creativity, opinions, and ideas can flourish.
                </p>
                <ul>
                    <li>User profiles & authentication</li>
                    <li>Interactive content feeds</li>
                    <li>Mobile-friendly design with dark mode</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{asset("imgs/logo-cover.png")}}" alt="Writeit logo" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Team / Contact -->
<section class="py-5">
    <div class="container text-center">
        <h2>Meet the Creator</h2>
        <p class="mb-1">Ahmed Bdiwy</p>
        <p>
            <a href="mailto:deve.ahmed.bdiwy@gmail.com" class="btn btn-outline-primary btn-sm me-2">
                <i class="bi bi-envelope-fill"></i> Email
            </a>
            <a href="{{url('https://twitter.com/bdiwy_')}}" target="_blank" class="btn btn-outline-info btn-sm">
                <i class="bi bi-twitter"></i> Twitter
            </a>
        </p>
    </div>
</section>

@endsection