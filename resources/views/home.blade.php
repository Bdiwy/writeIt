@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    @include('partials.hero')

    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">
            <!-- Blog Posts -->
            <div class="col-lg-8">
                <h1 class="mb-4">Blog Posts</h1>

                <!-- Example Posts -->
                <x-post-card
                    title="First Blog Post"
                    author="Jane Doe"
                    date="April 1, 2025"
                    image="imgs/logo-cover.png"
                    avatar="imgs/avatar/3.jpg"
                    content="This post now has an image! Bootstrap's card component is super flexible."
                    voteCount="42"
                    postId="1"
                />

                <x-post-card
                    title="Exploring Nature"
                    author="Jane Doe"
                    date="April 2, 2025"
                    image="imgs/hero-section/back.jpg"
                    avatar="imgs/avatar/2.jpg"
                    content="A journey through the wilderness with stunning views."
                    voteCount="128"
                    postId="2"
                />

                <!-- Pagination -->
                <nav aria-label="Blog post pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Sidebar -->
            @include('partials.sidebar')
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function vote(button, direction, postId) {
            const card = button.closest('.card');
            const upvoteBtn = card.querySelector('.upvote');
            const downvoteBtn = card.querySelector('.downvote');
            const voteCount = card.querySelector('.vote-count');
            
            let currentVote = button.classList.contains('active') ? 0 : direction;
            let currentCount = parseInt(voteCount.textContent);
            
            upvoteBtn.classList.remove('active');
            downvoteBtn.classList.remove('active');
            
            if (currentVote === 1) {
                upvoteBtn.classList.add('active');
                voteCount.textContent = currentCount + 1;
            } else if (currentVote === -1) {
                downvoteBtn.classList.add('active');
                voteCount.textContent = currentCount - 1;
            } else {
                if (direction === 1) {
                    voteCount.textContent = currentCount - 1;
                } else {
                    voteCount.textContent = currentCount + 1;
                }
            }

            // Optionally send vote to server
            fetch('/vote/' + postId, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ direction: currentVote })
            });
        }

        function sharePost(button, postId) {
            button.classList.toggle('active');
            alert('Post shared successfully!');
        }
    </script>
@endsection