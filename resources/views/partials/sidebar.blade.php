<div class="col-lg-4">
    <h3 class="mb-4">About Me</h3>
    <p>A little about me: I'm learning Bootstrap and building this blog!</p>
    <h3 class="mb-4">Categories</h3>
    <ul class="list-group mb-4">
        <li class="list-group-item">Tech</li>
        <li class="list-group-item">Lifestyle</li>
        <li class="list-group-item">Learning</li>
    </ul>
    <h3 class="mb-3">Search Posts</h3>
    <form class="d-flex" action="{{ url('/search') }}" method="GET">
        <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Go</button>
    </form>
</div>