// Voting functionality
function vote(button, direction) {
    const card = button.closest('.card');
    const upvoteBtn = card.querySelector('.upvote');
    const downvoteBtn = card.querySelector('.downvote');
    const voteCount = card.querySelector('.vote-count');

    // Get current values
    let currentVote = button.classList.contains('active') ? 0 : direction;
    let currentCount = parseInt(voteCount.textContent);

    // Remove active classes
    upvoteBtn.classList.remove('active');
    downvoteBtn.classList.remove('active');

    // Update based on vote
    if (currentVote === 1) {
        upvoteBtn.classList.add('active');
        voteCount.textContent = currentCount + 1;
    } else if (currentVote === -1) {
        downvoteBtn.classList.add('active');
        voteCount.textContent = currentCount - 1;
    } else {
        // If clicking the same button again (undoing vote)
        if (direction === 1) {
            voteCount.textContent = currentCount - 1;
        } else {
            voteCount.textContent = currentCount + 1;
        }
    }
}

// Share functionality
function sharePost(button) {
    button.classList.toggle('active');
    alert('Post shared successfully!');
}