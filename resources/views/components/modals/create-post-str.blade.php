<div class="card mb-4">
    <div class="card-body">
        <div class="d-flex mb-3">
            <img src="{{auth()->user()->avatar_url}}" class="profile-img me-3">
            <button class="create-post-btn" data-bs-toggle="modal" data-bs-target="#createPostModal">
                What's on your mind, {{auth()->user()->name}}?
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