@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="{{asset("css/feed/style.css")}}">
@endsection

@section('content')

<!-- Main Content -->
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Create Post -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <img src="/imgs/avatar/3.jpg" class="profile-img me-3">
                        <button class="create-post-btn" data-bs-toggle="modal" data-bs-target="#createPostModal">
                            What's on your mind, Ahmed?
                        </button>
                    </div>
                    <hr class="my-2">
                    <div class="row text-center">
                        <div class="col">
                            <button class="btn btn-light w-100">
                                <i class="bi bi-camera-fill text-danger me-2"></i> Photo
                            </button>
                        </div>
                        <div class="col">
                            <button class="btn btn-light w-100">
                                <i class="bi bi-link-45deg text-primary me-2"></i> Link
                            </button>
                        </div>
                        <div class="col">
                            <button class="btn btn-light w-100">
                                <i class="bi bi-emoji-smile text-warning me-2"></i> Feeling
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Posts -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="d-flex">
                            <img src="/imgs/avatar/2.jpg" class="profile-img me-3">
                            <div>
                                <h5 class="mb-0">Ahmed Bdiwy</h5>
                                <small class="text-muted">2 hours ago · <i class="bi bi-globe"></i></small>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-light rounded-circle">
                                <i class="bi bi-three-dots"></i>
                            </button>
                        </div>
                    </div>

                    <p class="mb-3">Just launched my new portfolio website! Check it out and let me know what you think.
                        #webdevelopment #portfolio</p>

                    <img src="/imgs/test.png" class="img-fluid rounded mb-3 w-100">

                    <!-- Post Actions -->
                    <div class="post-actions">
                        <button class="vote-btn upvote" onclick="vote(this, 1)">
                            <i class="bi bi-arrow-up"></i>
                        </button>
                        <span class="vote-count">42</span>
                        <button class="vote-btn downvote" onclick="vote(this, -1)">
                            <i class="bi bi-arrow-down"></i>
                        </button>
                        <button class="share-btn" onclick="sharePost(this)">
                            <i class="bi bi-repeat"></i>
                        </button>
                        <a href="#" class="btn btn-success ms-auto">Read More</a>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="d-flex">
                            <img src="/imgs/avatar/12.jpg" class="profile-img me-3">
                            <div>
                                <h5 class="mb-0">Jane Smith</h5>
                                <small class="text-muted">5 hours ago · <i class="bi bi-people-fill"></i></small>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-light rounded-circle">
                                <i class="bi bi-three-dots"></i>
                            </button>
                        </div>
                    </div>

                    <p class="mb-3">Beautiful day for hiking! Nature always helps me clear my mind and get new ideas.
                        🏞️ #nature #inspiration</p>

                    <img src="/imgs/test.png" class="img-fluid rounded mb-3 w-100">

                    <!-- Post Actions -->
                    <div class="post-actions">
                        <button class="vote-btn upvote" onclick="vote(this, 1)">
                            <i class="bi bi-arrow-up"></i>
                        </button>
                        <span class="vote-count">128</span>
                        <button class="vote-btn downvote" onclick="vote(this, -1)">
                            <i class="bi bi-arrow-down"></i>
                        </button>
                        <button class="share-btn" onclick="sharePost(this)">
                            <i class="bi bi-repeat"></i>
                        </button>
                        <a href="#" class="btn btn-success ms-auto">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.models.create-post')

@endsection

@section('scripts')
<script src="{{asset("js/feed/main.js")}}"></script>
@endsection