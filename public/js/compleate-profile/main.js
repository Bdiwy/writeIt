let filename = null ;
let selectedInterests = null ;
let personalData= null ;

document.querySelectorAll('.avatar-option').forEach(avatar => {
    avatar.addEventListener('click', function() {
        document.querySelectorAll('.avatar-option').forEach(a => a.classList.remove('selected'));
        this.classList.add('selected');
        const src = this.getAttribute('src');
        filename = src.substring(src.lastIndexOf('/') + 1);
    });
});

document.querySelectorAll('.interest-tag').forEach(tag => {
        tag.addEventListener('click', function() {
            this.classList.toggle('selected');
        });
});

function nextSection(currentId, nextId) {
        document.getElementById(currentId).classList.remove('active');
        document.getElementById(nextId).classList.add('active');
        if(currentId === 'interestsSection') {
            selectedInterests = getSelectedInterests();
        }else if (currentId === 'personalSection') {
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
        document.getElementById('profileProgress').style.width = progress + '%';
}

function getSelectedInterests() {
        const selectedTags = document.querySelectorAll('.interest-tag.selected');
        const interests = Array.from(selectedTags).map(tag => tag.textContent.trim());
        return interests; 
}
    
function completeProfile() {
        const profileData = {
                filename,
                selectedInterests,
                personalData,
            };

        fetch('/api/complete-profile', {
                method: 'POST',
                headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(profileData)
        })
        .then(res => res.json())
        .then(data => {
            if(data.success) {
                alert('Profile completed successfully!');
                    window.location = "/";
            } else {
                alert('Something went wrong.');
            }
        })
        .catch(err => {
                console.error(err);
                alert('Failed to send data.');
        });
}