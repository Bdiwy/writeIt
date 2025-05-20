<div class="form-section" id="personalSection">
    <h4 class="mb-4">Personal Information</h4>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Gender</label>
            <select class="form-select" name="gender">
                <option selected disabled>Select your gender</option>
                <option value="m">Male</option>
                <option value="f">Female</option>
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Age</label>
            <input type="number" class="form-control" name="age" min="13" max="120">
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Bio (Optional)</label>
        <textarea class="form-control" rows="3" name="bio" placeholder="Tell us about yourself..."></textarea>
    </div>
    <div class="d-flex justify-content-between mt-4">
        <button class="btn btn-outline-secondary"
            onclick="prevSection('personalSection', 'avatarSection')">Back</button>
        <button class="btn btn-success" onclick="nextSection('personalSection', 'interestsSection')">Next</button>
    </div>
</div>