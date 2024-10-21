<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clearnex - image upload</title>
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
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" height="50">Cleanex
            </a>
        </div>
    </nav>

    <div class="container content-box text-center">
        <h1 class="mb-4">Upload any image with noise<br> and make it clear</h1>
        <form id="uploadForm" action="/process-image" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="file" name="image" id="image" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary custom-btn">Proses Gambar</button>
        </form>
    </div>

    <!-- Modal for showing processed image -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Processed Images</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Median Filter Result</h6>
                            <img id="medianImage" src="" alt="Median Filter Result" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <h6>Average Filter Result</h6>
                            <img id="averageImage" src="" alt="Average Filter Result" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                    <a id="downloadMedian" href="" download class="btn btn-success">Download Median Filter Image</a>
                    <a id="downloadAverage" href="" download class="btn btn-success">Download Average Filter Image</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
