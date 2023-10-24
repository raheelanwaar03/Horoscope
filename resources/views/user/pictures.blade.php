<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <style>
        /* Custom CSS */
        body {
            background-color: #f7f7f7;
        }

        .navbar {
            background-color: yellow;
        }

        .carousel-inner {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('Images') }}">Marketplace</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('User.Dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Slider Section -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @forelse($images as $image)
            <div class="carousel-item active">
                <img src="{{ asset('image/'.$image->image) }}" class="d-block w-100" height="500px" width="auto" alt="Slider Image 1">
            </div>
            @empty
            <h2>No Images Selected by user yet</h2>
            @endforelse
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

    <div class="container mt-5 mb-5">
    <h2>Upload Your Images To Win Prizes</h2>
    <p>Share your images with the community.</p>
    <form enctype="multipart/form-data" action="{{ route('User.Store.Picture') }}" method="POST">
        <div class="form-group">
            <label for="imageUpload">Select an image:</label>
            <input type="file" class="form-control-file" id="imageUpload" name="imageUpload" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
    

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
