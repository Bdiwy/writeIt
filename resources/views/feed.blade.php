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
                        
                        <p class="mb-3">Just launched my new portfolio website! Check it out and let me know what you think. #webdevelopment #portfolio</p>
                        
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
                        
                        <p class="mb-3">Beautiful day for hiking! Nature always helps me clear my mind and get new ideas. 🏞️ #nature #inspiration</p>
                        
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

    <!-- Create Post Modal -->
    <div class="modal fade" id="createPostModal" tabindex="-1" aria-labelledby="createPostModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createPostModalLabel">Create Post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex mb-3">
                        <img src="/imgs/avatar/7309681.jpg" class="profile-img me-3">
                        <div>
                            <h6 class="mb-0">Ahmed Bdiwy</h6>
                            <select class="form-select form-select-sm mt-1" style="width: auto; display: inline-block;">
                                <option><i class="bi bi-globe"></i> Public</option>
                                <option><i class="bi bi-people-fill"></i> Friends</option>
                                <option><i class="bi bi-lock-fill"></i> Only me</option>
                            </select>
                        </div>
                    </div>
                    
                    <textarea class="form-control border-0" rows="5" placeholder="What's on your mind?"></textarea>
                    
                    <div class="border rounded p-3 mt-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-2">Add to your post</h6>
                            <div>
                                <button class="btn btn-sm btn-light rounded-circle me-1">
                                    <i class="bi bi-images text-success"></i>
                                </button>
                                <button class="btn btn-sm btn-light rounded-circle me-1">
                                    <i class="bi bi-link-45deg text-primary"></i>
                                </button>
                                <button class="btn btn-sm btn-light rounded-circle me-1">
                                    <i class="bi bi-emoji-smile text-warning"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success w-100">Post</button>
                </div>
            </div>
        </div>
    </div>

    
@endsection

@section('scripts')
<script>
        // Voting functionality
        function vote(button, direction) {
            const card = button.closest('.card');
            const upvoteBtn = card.querySelector('.upvote');
            const downvoteBtn = card.querySelector('.downvote');
            const voteCount = card.querySelector('.vote-count');
            
            // Get current values
            let currentVote = button.classList.contains('active') ? 0 : direction;
            let currentCount = parseInt(voteCount.textContent);
            
            // Remove active classes
            upvoteBtn.classList.remove('active');
            downvoteBtn.classList.remove('active');
            
            // Update based on vote
            if (currentVote === 1) {
                upvoteBtn.classList.add('active');
                voteCount.textContent = currentCount + 1;
            } else if (currentVote === -1) {
                downvoteBtn.classList.add('active');
                voteCount.textContent = currentCount - 1;
            } else {
                // If clicking the same button again (undoing vote)
                if (direction === 1) {
                    voteCount.textContent = currentCount - 1;
                } else {
                    voteCount.textContent = currentCount + 1;
                }
            }
        }
        
        // Share functionality
        function sharePost(button) {
            button.classList.toggle('active');
            alert('Post shared successfully!');
        }
    </script>
@endsection
