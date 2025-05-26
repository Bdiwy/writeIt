<div class="col-md-6 mb-4">
    <div class="card">
        <div class="card-header bg-success text-white">
            <h3 class="mb-0">Update Your Details</h3>
        </div>
        <div class="card-body">
            <form class="updateForm" enctype="multipart/form-data">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <div class="mb-3">
                    <label for="avatar" class="form-label">Profile Avatar</label>
                    <input type="file" name="avatar" class="form-control" id="avatar" accept="image/*">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{auth()->user()->name}}" placeholder="Enter new name">
                    <div class="invalid-feedback nameMessageError">Please provide a valid name.</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{auth()->user()->email}}" placeholder="Enter new email">
                    <div class="invalid-feedback emailMessageError">Please provide a valid email.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">New Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter new password">
                </div>
                <button type="submit" class="btn btn-success w-100 mb-3" id="submitButton">Update Profile</button>
            </form>
            <button class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete Account</button>
        </div>
    </div>
</div>