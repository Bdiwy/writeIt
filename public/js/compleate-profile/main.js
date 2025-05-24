let filename = null;
let selectedInterests = null;
let personalData = null;

document.querySelectorAll('.avatar-option').forEach(avatar => {
    avatar.addEventListener('click', function () {
        document.querySelectorAll('.avatar-option').forEach(a => a.classList.remove('selected'));
        this.classList.add('selected');
        const src = this.getAttribute('src');
        filename = src.substring(src.lastIndexOf('/') + 1);
    });
});

document.querySelectorAll('.interest-tag').forEach(tag => {
    tag.addEventListener('click', function () {
        this.classList.toggle('selected');
    });
});

function nextSection(currentId, nextId) {
    document.getElementById(currentId).classList.remove('active');
    document.getElementById(nextId).classList.add('active');

    if (currentId === 'interestsSection') {
        selectedInterests = getSelectedInterests();
    } else if (currentId === 'personalSection') {
        personalData = getPersonalData();
    }

    updateProgressBar(nextId);
}

function prevSection(currentId, prevId) {
    document.getElementById(currentId).classList.remove('active');
    document.getElementById(prevId).classList.add('active');
    updateProgressBar(prevId);
}

function updateProgressBar(currentSection) {
    let progress = 25;
    if (currentSection === 'personalSection') progress = 50;
    if (currentSection === 'interestsSection') progress = 75;
    if (currentSection === 'reviewSection') progress = 100;
    document.getElementById('profileProgress').style.width = progress + '%';
}

function getSelectedInterests() {
    let selectedTags = document.querySelectorAll('.interest-tag.selected');
    return Array.from(selectedTags).map(tag => tag.textContent.trim());
}

function getPersonalData() {
    const gender = document.querySelector('select[name="gender"]').value;
    const age = document.querySelector('input[name="age"]').value;
    const bio = document.querySelector('textarea[name="bio"]').value;

    return {
        gender,
        age,
        bio
    };
}

function showModalWithMessage(ModalId , MessageElementById , Message){
        $(MessageElementById).text(Message);
        $(ModalId).modal('show');
}

function completeProfile() {
    selectedInterests = getSelectedInterests();
    const profileData = {
        filename,
        selectedInterests,
        personalData,
    };

    fetch('/api/complete-profile', {
        method: 'POST',
        credentials: 'same-origin', 
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
        body: JSON.stringify(profileData)
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            showModalWithMessage("#successModal","#SuccessMessageElementById","Profile completed successfully!");
            window.location = "/";
        } else {
            showModalWithMessage("#faildModal","#FaildMessageElementById","Something went wrong.");
        }
    })
    .catch(err => {
        console.error(err);
        showModalWithMessage("#faildModal","#FaildMessageElementById","Failed to send data.");
    });
}
