<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>cakjrun</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">Akbar Torik Madani</a>
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
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="p-5 mb-10 bg-body-tertiary"
            style="background:url(https://static.vecteezy.com/system/resources/thumbnails/008/141/217/small/panoramic-abstract-web-background-blue-gradient-vector.jpg)">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold text-white">Selamat Datang di Layanan Desain</h1>
            </div>
        </div>

        <section class="showcase">
            <div class="container">
                <h1></h1>
            </div>
        </section>

        <section class="container">
            <h2>Tentang Kami</h2>
            <p>Layanan Desain adalah perusahaan yang berdedikasi untuk menyediakan solusi desain yang inovatif dan
                berkualitas tinggi. Kami memahami pentingnya desain yang efektif dalam menciptakan identitas dan
                meningkatkan visibilitas bisnis Anda. Dengan tim desainer profesional yang berpengalaman, kami siap
                membantu Anda mencapai tujuan bisnis melalui desain yang kreatif dan fungsional.</p>

            <h2>Visi Kami</h2>
            <p>Menjadi penyedia layanan desain terdepan yang memberikan solusi kreatif dan inovatif untuk berbagai
                kebutuhan bisnis.</p>

            <h2>Misi Kami</h2>
            <ul>
                <li>Menyediakan layanan desain berkualitas tinggi yang memenuhi kebutuhan dan harapan klien.</li>
                <li>Menggunakan teknologi terbaru dan tren desain untuk menciptakan solusi yang inovatif.</li>
                <li>Membangun hubungan jangka panjang dengan klien melalui layanan yang profesional dan terpercaya.</li>
            </ul>

            <h2>Layanan Kami</h2>
            <ul>
                <li>Desain Logo</li>
                <li>Desain Flayer</li>
                <li>Desain Produk</li>
            </ul>
        </section>

        <div class="container py-5">
            <footer class="text-center bg-primary text-white">
                <!-- Grid container -->
                <div class="container pt-4">
                    <!-- Section: Social media -->
                    <section class="mb-4">
                        <!-- Facebook -->
                        <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!"
                            role="button" data-mdb-ripple-color="dark"><i class="bi bi-whatsapp"></i></a>

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
                    <span class="mb-3 mb-md-0 text-white">© 2024 Copyright by Fajri Maulana</span>
                </div>
                <!-- Copyright -->
            </footer>
        </div>
    </div>
    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>