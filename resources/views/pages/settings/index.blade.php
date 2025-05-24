@extends('layouts.app')

@section('content')
       <!-- Profile Content -->
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Your Profile</h1>
        <div class="row">
            <!-- Account Preview -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h3 class="mb-0">Account Details</h3>
                    </div>
                    <div class="card-body text-center">
                        <img src="{{Auth::user()->avatar_url}}" class="rounded-circle mb-3" alt="Profile Avatar" style="width: 100px; height: 100px;">
                        <div class="d-flex justify-content-center">
                            <strong>Username:&nbsp;</strong>
                            <p id="updateUsreName"> {{Auth::user()->name}}</p>
                        </div>
                        <div class="d-flex justify-content-center">
                                <strong>Email:&nbsp;</strong>
                                <p id="updateEmail"> {{Auth::user()->email}}</p>
                        </div>
                        <div class="d-flex justify-content-center">
                                <strong>Joined:&nbsp;</strong>
                                <p> {{Auth::user()->created_at->format("Y m d")}}</p>
                        </div>                        
                    </div>
                </div>
            </div>

            <!-- Update/Delete Form -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h3 class="mb-0">Update Your Details</h3>
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="avatar" class="form-label">Profile Avatar</label>
                                <input type="file" class="form-control" id="avatar" accept="image/*">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" value="{{Auth::user()->name}}" placeholder="Enter new username">
                                <div class="invalid-feedback">Please provide a valid username.</div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" value="{{Auth::user()->email}}" placeholder="Enter new email">
                                <div class="invalid-feedback">Please provide a valid email.</div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter new password">
                            </div>
                            <button type="submit" class="btn btn-success w-100 mb-3">Update Profile</button>
                        </form>
                        <button class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete Account</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Account Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete your account? This action cannot be undone.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{asset("js/settings/main.js")}}"></script>
@endsection