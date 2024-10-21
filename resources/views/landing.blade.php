<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clearnex - Landing Page</title>
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

<!-- Section 1 -->
<section class="section-one py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column (Image + Text) -->
            <div class="col-md-6 text-center column-1"> <!-- Added class column-1 -->
                <img src="{{ asset('images/landing.gif') }}" alt="Your Image" class="img-fluid align-center" style="border-radius: 10px; max-width: 60%; height: auto;">
                <h1 class="image-text text-center mt-3 w-700">Remove Noise</h1>
                <h5 class="image-text mt-3 w-700">100% Automatically and Free</h5>
            </div>

            <!-- Right Column (Upload Box) -->
            <div class="col-md-6 column-2"> <!-- Added class column-2 -->
                <div class="upload-box text-center">
                <div class="upload-container">
                    <a href="/image-upload" class="btn btn-primary custom-btn btn-lg mb-3">Upload Image</a>
                    <p class="text-muted">Upload image noise and see the magic</p>
                </div>
                    <div class="example-images mt-4">
                        <p>No image? Try one of these:</p>
                        <div class="d-flex justify-content-center gap-2">
                            <img src="{{ asset('images/ex1.png') }}" class="example-img" alt="Example 1">
                            <img src="{{ asset('images/ex2.png') }}" class="example-img" alt="Example 2">
                            <img src="{{ asset('images/ex3.jpg') }}" class="example-img" alt="Example 3">
                            <img src="{{ asset('images/ex4.jpeg') }}" class="example-img" alt="Example 4">

                        </div>
                    </div>
                    <div class="terms mt-3">
                        <p>By uploading an image or URL you agree to our <a href="#">Terms of Service</a>. To learn more about how we handle personal data, check our <a href="#">Privacy Policy</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section 2 -->
<section class="section-two py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column (Text) -->
            <div class="col-md-6">
                <h2 class="text-left">Seputar Domain Spasial</h2>
                <p class="mt-4">
                    Domain spasial merupakan salah satu konsep penting dalam pengolahan citra yang merujuk pada representasi citra dalam bentuk koordinat spasialnya. Dalam domain ini, pengolahan citra dilakukan dengan memanipulasi nilai piksel citra secara langsung. Metode ini sering digunakan untuk teknik seperti pemfilteran, penghalusan, dan deteksi tepi. 
                    Dengan menggunakan transformasi domain spasial, kita dapat meningkatkan kualitas citra dan mengekstrak fitur-fitur penting yang ada di dalamnya. Pendekatan ini sangat efektif dalam berbagai aplikasi, termasuk pengenalan wajah, analisis medis, dan pemantauan lingkungan.
                </p>
            </div>

            <!-- Right Column (Image) -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/domainspasial.png') }}" alt="Domain Spasial" class="img-fluid" style="border-radius: 10px; max-width: 100%; height: auto;">
            </div>
        </div>
    </div>
</section>
<!-- Section 3 -->
<section class="section-two py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column (Text) -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/domainspasial.png') }}" alt="Domain Spasial" class="img-fluid" style="border-radius: 10px; max-width: 100%; height: auto;">
            </div>
            <!-- Right Column (Image) -->
            <div class="col-md-6">
                <h2 class="text-left">Filter Median atau Filter Rata-Rata</h2>
                <p class="mt-4">
                    Filter Median: Filter median menggantikan nilai setiap piksel dengan nilai median dari piksel-piksel di sekitarnya, efektif untuk menghilangkan noise tipe garam dan merica sambil mempertahankan tepi. Filter ini tahan terhadap outlier, sehingga ideal untuk aplikasi dalam praproses citra dan visi komputer.</p>
                <p>Filter Rata-rata: Filter rata-rata menggantikan nilai setiap piksel dengan rata-rata nilai piksel di sekitarnya, sehingga menghaluskan citra dan mengurangi noise Gaussian. Meskipun efektif untuk penghalusan dan pengurangan noise, filter ini dapat juga mengaburkan tepi dan detail halus.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section-two py-5">
    <h2 class= "text-center mb-5">Just Picture It</h2>
    <div class="row align-items-center">
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/ex6.jpg') }}" alt="Domain Spasial" class="img-fluid" style="border-radius: 10px; max-width: 70%; height: auto;">
            <p class=text-center>Image Noise</p>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/avg.png') }}" alt="Domain Spasial" class="img-fluid" style="border-radius: 10px; max-width: 70%; height: auto;">
            <p class=text-center>Average Filter Image</p>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/median.png') }}" alt="Domain Spasial" class="img-fluid" style="border-radius: 10px; max-width: 70%; height: auto;">
            <p class=text-center>Median Filter Image</p>
        </div>
    <div>
</section>
<footer style="text-align: center; padding: 20px; background-color: #dcede1;">
    <p>&copy; 2024 Kelompok 1 | all content is reserved.</p>
</footer>
    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
