<div class="bg-light py-5">
    <div class="container">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="{{ asset('imgs/hero-section/back.jpg') }}" class="d-block w-100" alt="Featured Post 1" style="height: 400px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="display-4 fw-bold">Welcome to Writeit</h1>
                        <p class="lead">Discover amazing stories and ideas.</p>
                        <a href="{{ url('/posts') }}" class="btn btn-primary btn-lg">Explore Posts</a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="{{ asset('imgs/hero-section/hero-image-with-smile.png') }}" class="d-block w-100" alt="Featured Post 2" style="height: 400px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="display-4 fw-bold">Featured Post</h1>
                        <p class="lead">Check out this highlighted story!</p>
                        <a href="{{ url('/posts/featured') }}" class="btn btn-primary btn-lg">Read Now</a>
                    </div>
                </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>