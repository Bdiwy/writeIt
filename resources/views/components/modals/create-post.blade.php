<!-- Create Post Modal -->
<div class="modal fade" id="createPostModal" tabindex="-1" aria-labelledby="createPostModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createPostModalLabel">Create Post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="createPostForm">
                    @csrf
                    <div class="modal-body">
                        <div class="d-flex mb-3">
                            <img src="{{auth()->user()->avatar_url}}" class="profile-img me-3">
                            <div>
                                <h6 class="mb-0">{{auth()->user()->name}}</h6>
                                <select name="status" class="form-select form-select-sm mt-1" style="width: auto; display: inline-block;">
                                    <option value="p"><i class="bi bi-globe"></i> Public</option>
                                    <option value="f"><i class="bi bi-people-fill"></i> Friends</option>
                                    <option value="o"><i class="bi bi-lock-fill"></i> Only me</option>
                                </select>
                            </div>
                        </div>

                        <textarea name="body" class="form-control border-0" rows="5" placeholder="What's on your mind?" required></textarea>

                        <div class="border rounded p-3 mt-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-2">Add to your post</h6>
                                <div>
                                    <button type="button" class="btn btn-sm btn-light rounded-circle me-1">
                                        <i class="bi bi-images text-success"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-light rounded-circle me-1">
                                        <i class="bi bi-link-45deg text-primary"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-light rounded-circle me-1">
                                        <i class="bi bi-emoji-smile text-warning"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success w-100">Post</button>
                    </div>
                </form>
            </div>
        </div>
</div>

@push('scripts')
<script>
document.getElementById('createPostForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const form = this;
    const submitButton = form.querySelector('button[type="submit"]');
    const originalButtonText = submitButton.innerHTML;
    
    // Disable submit button and show loading state
    submitButton.disabled = true;
    submitButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Posting...';
    
    // Get form data
    const formData = new FormData(form);
    
    // Send AJAX request
    fetch('{{ route("posts.store") }}', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Close modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('createPostModal'));
            modal.hide();
            
            // Reset form
            form.reset();
            
            // Show success message
            alert(data.message);
            
            // Optionally refresh the page or update the posts list
            window.location.reload();
        } else {
            throw new Error(data.message || 'Something went wrong');
        }
    })
    .catch(error => {
        alert(error.message);
    })
    .finally(() => {
        // Re-enable submit button and restore original text
        submitButton.disabled = false;
        submitButton.innerHTML = originalButtonText;
    });
});
</script>
@endpush