<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clearnex - Image Result</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" height="50"> Cleanex
            </a>
        </div>
    </nav>

    <div class="container mt-5 text-center">
        <h2 class="text-center mb-5">Result Image Processing</h2>

        <div class="row">
            <!-- Original Image (Right) -->
            <div class="col-md-6">
                <div class="image-box">
                    <img src="{{ $originalImage }}" alt="Original Image" class="img-fluid" style="border-radius:10px;">
                </div>
                <p class="text-center mt-3" style="color: #a1a1a1";>Uploaded image</p>
            </div>

            <!-- Processed Image (Left) -->
            <div class="col-md-6">
                <!-- <h4 class="text-center">Result</h4> -->
                <div class="image-box">
                    <img src="{{ $outputImage }}" alt="Processed Image" class="img-fluid">
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <a href="{{ $outputImage }}" download class="btn btn-primary custom-btn">Download Result</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
