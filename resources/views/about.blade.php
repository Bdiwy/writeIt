@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <div class="container py-5" style="min-height: 80vh;">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- About Writeit Section -->
                <div class="card mb-4">
                    <div class="card-header bg-success text-white text-center">
                        <h3>About Writeit</h3>
                    </div>
                    <div class="card-body">
                        <p class="lead">
                            Writeit is a platform designed for sharing ideas, stories, and knowledge. Whether you're passionate about technology, lifestyle, or learning, Writeit connects readers with quality content created by a vibrant community of writers.
                        </p>
                        <p>
                            Our mission is to foster creativity and inspire meaningful conversations. With Writeit, you can explore a variety of topics, share your own stories, and engage with others through votes, shares, and discussions.
                        </p>
                        <div class="text-center">
                            <a href="{{ url('/') }}" class="btn btn-success">Explore Now</a>
                        </div>
                    </div>
                </div>

                <!-- About the Developer Section -->
                <div class="card">
                    <div class="card-header bg-success text-white text-center">
                        <h3>About the Developer</h3>
                    </div>
                    <div class="card-body">
                        <p class="lead">
                            Hi, I'm Ahmed Bdiwy, the creator of Writeit.
                        </p>
                        <p>
                            I'm a passionate Backend Developer specializing in PHP, Laravel, and system optimization. I built Writeit to create a space where people can share their ideas and connect through meaningful content. My focus is on crafting efficient web solutions with a seamless user experience.
                        </p>
                        <p>
                            Feel free to connect with me on social media to learn more about my work or to share your feedback on Writeit!
                        </p>
                        <div class="text-center">
                            <a href="https://x.com/bdiwy_" class="btn btn-outline-success me-2" target="_blank">
                                <i class="bi bi-twitter-x"></i> X
                            </a>
                            <a href="https://instagram.com/bdiwy_" class="btn btn-outline-success me-2" target="_blank">
                                <i class="bi bi-instagram"></i> Instagram
                            </a>
                            <a href="https://linkedin.com/in/ahmed-bdiwy" class="btn btn-outline-success me-2" target="_blank">
                                <i class="bi bi-linkedin"></i> LinkedIn
                            </a>
                            <a href="https://github.com/bdiwy" class="btn btn-outline-success" target="_blank">
                                <i class="bi bi-github"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection