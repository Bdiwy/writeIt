    <!-- Create Post Modal -->
    <div class="modal fade" id="createPostModal" tabindex="-1" aria-labelledby="createPostModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createPostModalLabel">Create Post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex mb-3">
                        <img src="{{auth()->user()->avatar_url}}" class="profile-img me-3">
                        <div>
                            <h6 class="mb-0">{{auth()->user()->name}}</h6>
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