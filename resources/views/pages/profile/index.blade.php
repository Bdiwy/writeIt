@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{asset('css/profile-view/style.css')}}">
@endsection

@section('content')
        <!-- User Profile Section -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="{{auth()->user()->avatar_url}}" class="rounded-circle mb-3" alt="Profile Image" style="width: 150px; height: 150px;">
                        <h2 class="card-title">{{auth()->user()->name}}</h2>
                        <p class="card-text text-muted">Member since {{auth()->user()->created_at->format('y m d')}}</p>
                        
                        <!-- Readers (Followers) and Writers (Following) Stats -->
                        <div class="stats-container">
                            <div class="stat-item" data-bs-toggle="modal" data-bs-target="#readersModal">
                                <div class="stat-number">1.2K</div>
                                <div class="stat-label">Readers</div>
                            </div>
                            <div class="stat-item" data-bs-toggle="modal" data-bs-target="#writersModal">
                                <div class="stat-number">45</div>
                                <div class="stat-label">Writers</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">28</div>
                                <div class="stat-label">Posts</div>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-center gap-3 mb-3">
                            <button class="btn btn-success">Follow</button>
                            <button class="btn btn-outline-success">Message</button>
                        </div>
                        
                        <p class="card-text"><strong>Contact:</strong> {{auth()->user()->email}}</p>
                        <p class="card-text"><strong>Social:</strong> <a href="#" class="text-success">Twitter</a> | <a href="#" class="text-success">Instagram</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- User's Blog Posts -->
        <h1 class="mb-4 text-center">{{auth()->user()->name}}'s Posts</h1>
        <div class="row">
            <div class="col-md-12">
                <!-- Post 1 -->
                <div class="card mb-4">
                    <img src="/imgs/test.png" class="card-img-top img-fluid mx-auto d-block" alt="Blog Post Image" style="max-width: 50%;">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="/imgs/avatar/7309681.jpg" class="rounded-circle me-2" alt="Author Avatar" style="width: 50px; height: 50px;">
                            <div>
                                <h2 class="card-title mb-0">First Blog Post</h2>
                                <small class="text-muted">By Jane Doe - April 1, 2025</small>
                            </div>
                        </div>
                        <p class="card-text">This post now has an image! Bootstrap's card component is super flexible.</p>
                        <a href="#" class="btn btn-success">Read More</a>
                    </div>
                </div>
                <!-- Post 2 -->
                <div class="card mb-4">
                    <img src="/imgs/hero-section/back.jpg" class="card-img-top img-fluid mx-auto d-block" alt="Blog Post Image" style="max-width: 50%;">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="/imgs/avatar/7309681.jpg" class="rounded-circle me-2" alt="Author Avatar" style="width: 50px; height: 50px;">
                            <div>
                                <h2 class="card-title mb-0">Exploring Nature</h2>
                                <small class="text-muted">By Jane Doe - April 2, 2025</small>
                            </div>
                        </div>
                        <p class="card-text">A journey through the wilderness with stunning views.</p>
                        <a href="#" class="btn btn-success">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Readers Modal -->
    <div class="modal fade" id="readersModal" tabindex="-1" aria-labelledby="readersModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="readersModalLabel">Jane's Readers</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <img src="/imgs/avatar/7309681.jpg" class="rounded-circle me-3" width="50" height="50">
                            <div>
                                <h6 class="mb-0">John Smith</h6>
                                <small class="text-muted">Writer & Reader</small>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <img src="/imgs/avatar/7309681.jpg" class="rounded-circle me-3" width="50" height="50">
                            <div>
                                <h6 class="mb-0">Alice Johnson</h6>
                                <small class="text-muted">Reader</small>
                            </div>
                        </a>
                        <!-- More readers would be listed here -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Writers Modal -->
    <div class="modal fade" id="writersModal" tabindex="-1" aria-labelledby="writersModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="writersModalLabel">Writers Jane Follows</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <img src="/imgs/avatar/7309681.jpg" class="rounded-circle me-3" width="50" height="50">
                            <div>
                                <h6 class="mb-0">Mark Twain</h6>
                                <small class="text-muted">Professional Writer</small>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <img src="/imgs/avatar/7309681.jpg" class="rounded-circle me-3" width="50" height="50">
                            <div>
                                <h6 class="mb-0">Ernest Hemingway</h6>
                                <small class="text-muted">Novelist</small>
                            </div>
                        </a>
                        <!-- More writers would be listed here -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
   <!-- Pagination -->
    <nav aria-label="Blog post pagination">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                </a>
            </li>
            <li class="page-item active" style="background-color: green"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#" style="color: green">2</a></li>
            <li class="page-item"><a class="page-link" href="#"style="color: green" >3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">»</span>
                </a>
            </li>
        </ul>
    </nav>
@endsection