<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>cakrjun</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">cakjrun</a>
            <button class="navbar-toggler" type="button" data-bs- toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria- expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=
base_url('about') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('post')
?>">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=
base_url('contact') ?>">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('faqs')
?>">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="p-5 mb-10 bg-body-tertiary"
        style="background:url(https://static.vecteezy.com/system/resources/thumbnails/008/141/217/small/panoramic-abstract-web-background-blue-gradient-vector.jpg)">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold text-white">Halaman Blog Kami</h1>
            <p class="col-md-8 fs-4 text-white">Nantikan Blog terkini dari layanan desainer</p>
        </div>
    </div>
    <div class="container py-4">
        <footer class="text-center bg-body-tertiary">
            <!-- Grid container -->
            <div class="container pt-4">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!"
                        role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!"
                        role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

                    <!-- Google -->
                    <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!"
                        role="button" data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

                    <!-- Instagram -->
                    <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!"
                        role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!"
                        role="button" data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
                    <!-- Github -->
                    <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!"
                        role="button" data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2024 Copyright:
                <a class="text-body" href="https://muhammadfajrimaulana.github.io/portofoliofajrimaulana.github.io/">by
                    Fajri Maulana</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>