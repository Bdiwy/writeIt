@props([
    'title' => 'Default Title',
    'author' => 'Unknown',
    'date' => 'Unknown Date',
    'image' => 'imgs/logo-cover.png',
    'avatar' => 'imgs/avatar/3.jpg',
    'content' => 'No content provided.',
    'voteCount' => 0,
    'postId' => 1
])

<div class="card mb-4">
    <img src="{{ asset($image) }}" class="card-img-top img-fluid mx-auto d-block" alt="Blog Post Image">
    <div class="card-body">
        <div class="d-flex align-items-center mb-3">
            <img src="{{ asset($avatar) }}" class="rounded-circle me-2" alt="Author Avatar" style="width: 50px; height: 50px;">
            <div>
                <h2 class="card-title mb-0">{{ $title }}</h2>
                <small class="text-muted">By {{ $author }} - {{ $date }}</small>
            </div>
        </div>
        <p class="card-text">{{ $content }}</p>

        <!-- Post Actions -->
        <div class="post-actions">
            <button class="vote-btn upvote" onclick="vote(this, 1, {{ $postId }})">
                <i class="bi bi-arrow-up"></i>
            </button>
            <span class="vote-count">{{ $voteCount }}</span>
            <button class="vote-btn downvote" onclick="vote(this, -1, {{ $postId }})">
                <i class="bi bi-arrow-down"></i>
            </button>
            <button class="share-btn" onclick="sharePost(this, {{ $postId }})">
                <i class="bi bi-repeat"></i>
            </button>
            <a href="{{ url('/posts/' . $postId) }}" class="btn btn-success ms-auto">Read More</a>
        </div>
    </div>
</div>