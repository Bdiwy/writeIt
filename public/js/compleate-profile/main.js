// Avatar selection
        document.querySelectorAll('.avatar-option').forEach(avatar => {
            avatar.addEventListener('click', function() {
                document.querySelectorAll('.avatar-option').forEach(a => a.classList.remove('selected'));
                this.classList.add('selected');
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

        // Complete profile
        function completeProfile() {
            // Here you would normally submit the form
            alert('Profile completed successfully! Redirecting to your dashboard...');
            // window.location.href = 'dashboard.html';
        }