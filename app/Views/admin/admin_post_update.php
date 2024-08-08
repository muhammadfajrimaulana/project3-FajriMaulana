<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cakjrun</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">cakjrun</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/post') ?>">Blog</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= base_url('admin/post/new') ?>" class="btn btn-primary mr-3">New Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth/logout') ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="p-5 mb-4 bg-light rounded-3 jumbotron jumbotron-fluid"
        style="background:url(https://i.pinimg.com/originals/3c/24/46/3c24462450c2a902bf7e18f3d9aada81.jpg)">
        <div class="container py-5">
            <h1 class="display-10 text-white">Ubah konten sesuai kebutuhan</h1>
            <p class="lead text-white">Halo! Mengubah konten kini lebih simpel. Dengan beberapa klik saja, Anda bisa
                memperbarui teks, gambar, atau video. Nikmati kemudahan dan fleksibilitas dalam mengelola konten Anda
                setiap saat!</p>
        </div>
    </div>

    <div class="container">
        <form action="" method="post" id="text-editor">
            <div class="mb-3">
                <label for="image" class="form-label">Upload Gambar</label>
                <input class="form-control" type="file" id="image">
            </div>
            <input type="hidden" name="id" value="<?= $post['id'] ?>" />
            <div class="form-group mb-2">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Post title"
                    value="<?= $post['title'] ?>" required>
            </div>
            <div class="form-group mb-2">
                <textarea name="content" class="form-control" cols="30" rows="10"
                    placeholder="Write a great post!"><?= $post['content'] ?></textarea>
            </div>
            <div class="form-group mb-2">
                <button type="submit" name="status" value="published" class="btn btn-primary">Publish</button>
                <button type="submit" name="status" value="draft" class="btn btn-warning">Save</button>
            </div>
        </form>
    </div>

    <div class="container py-4 ">
        <footer class="text-center bg-primary text-white">
            <!-- Grid container -->
            <div class="container pt-4">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>
                    <!-- Twitter -->
                    <a class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>
                    <!-- Google -->
                    <a class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>
                    <!-- Instagram -->
                    <a class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>
                    <!-- Linkedin -->
                    <a class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
                    <!-- Github -->
                    <a class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
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

    <!-- Jquery dan Bootstrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>