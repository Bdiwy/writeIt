<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('imgs/logo.png') }}" alt="Writeit Logo" class="logo-img">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Feed</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('explore') }}">Explore</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto align-items-center">
                <!-- Notification Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle position-relative" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-bell-fill notification-icon"></i>
                        <span class="badge bg-danger notification-badge">3</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationDropdown">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-bell me-2"></i> New comment on your post</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-bell me-2"></i> New follower</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-bell me-2"></i> Post liked</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">View all notifications</a></li>
                    </ul>
                </li>
                <!-- Messages Link -->
                <li class="nav-item">
                    <a class="nav-link position-relative" href="{{ url('messages') }}">
                        <i class="bi bi-chat-left-text-fill notification-icon"></i>
                        <span class="badge bg-danger notification-badge">5</span>
                    </a>
                </li>
                <!-- Profile Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ Auth::user()->avatar_url }}" class="profile-img" alt="Profile">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('show.Profile') }}"><i class="bi bi-person me-2"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('show.SettingsProfile') }}"><i class="bi bi-gear me-2"></i> Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"><i class="bi bi-box-arrow-right me-2"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>