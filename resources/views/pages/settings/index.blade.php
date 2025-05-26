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
                        <img src="{{auth()->user()->avatar_url}}" class="rounded-circle mb-3" alt="Profile Avatar" style="width: 100px; height: 100px;">
                        <div class="d-flex justify-content-center">
                            <strong>Username:&nbsp;</strong>
                            <p id="updateUsreName"> {{auth()->user()->name}}</p>
                        </div>
                        <div class="d-flex justify-content-center">
                                <strong>Email:&nbsp;</strong>
                                <p id="updateEmail"> {{auth()->user()->email}}</p>
                        </div>
                        <div class="d-flex justify-content-center">
                                <strong>Joined:&nbsp;</strong>
                                <p> {{auth()->user()->created_at->format("Y m d")}}</p>
                        </div>                        
                    </div>
                </div>
            </div>

            <!-- Update/Delete Form -->
            @include('pages.settings.form')
        </div>
    </div>

    @include('components.modals.success-model')
    @include('components.modals.faild-model')
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
<script src="{{asset("js/settings/submit-form.js")}}"></script>
@endsection