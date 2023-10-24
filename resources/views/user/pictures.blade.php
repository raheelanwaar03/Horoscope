@extends('layouts.app')

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


@section('content')
    <!-- Slider Section -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @forelse($images as $image)
                <div class="carousel-item active">
                    <img src="{{ asset('image/' . $image->image) }}" class="d-block w-100" height="500px" width="auto"
                        alt="Slider Image 1">
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
            @csrf
            <div class="form-group">
                <label for="imageUpload">Upload Now:</label>
                <input type="file" class="form-control-file" id="imageUpload" name="image" accept="image/*"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
@endsection
