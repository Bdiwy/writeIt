let filename = null ;
let selectedInterests = null ;
let personalData= null ;
// Avatar selection
    document.querySelectorAll('.avatar-option').forEach(avatar => {
        avatar.addEventListener('click', function() {
            document.querySelectorAll('.avatar-option').forEach(a => a.classList.remove('selected'));
            this.classList.add('selected');
            filename = src.substring(src.lastIndexOf('/') + 1);
        });
    });
    // Interest selection
    document.querySelectorAll('.interest-tag').forEach(tag => {
        tag.addEventListener('click', function() {
            this.classList.toggle('selected');
        });
    });
    // Form navigation
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
    // Update progress bar
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
    
    // Complete profile
    function completeProfile() {
        fetch
        alert('Profile completed successfully! Redirecting to your dashboard...');
    }