<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Your Profile - Writeit</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset("css/compleate-profile/style.css")}}">
</head>
<body class="bg-light">
    <!-- Progress Bar -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-center mb-4">Complete Your Profile</h2>
                <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" id="profileProgress"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Completion Form -->
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow">
                    <div class="card-body p-5">
                        <!-- Avatar Selection Section -->
                        @include('pages.compleate.avatar')
                        <!-- Personal Information Section -->
                        @include('pages.compleate.personal-info')
                        <!-- Interests Section -->
                        @include('pages.compleate.intersts')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset("js/comleate-profile/main.js")}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>