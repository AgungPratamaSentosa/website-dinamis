<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agung Shop - Top Up Game Terpercaya</title>

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        /* Gaya Umum */
        body {
            background-color: #121212;
            color: #f0f0f0;
        }
        .navbar {
            background-color: #1f1f1f;
        }
        .navbar-brand {
            font-weight: bold;
            color: #00bfff !important;
        }
        .navbar-nav .nav-link {
            color: #f0f0f0 !important;
            transition: color 0.3s;
        }
        .navbar-nav .nav-link:hover {
            color: #00bfff !important;
        }
        .hero-banner {
            background-image: url('assets/images/banner.jpg');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            color: #fff;
            text-align: center;
        }
        .btn-primary {
            background-color: #00bfff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #00a3cc;
        }
        footer {
            background-color: #1f1f1f;
            color: #f0f0f0;
        }
    </style>
</head>

<body>
    <!-- Header with Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php"><i class="bi bi-shop"></i> Agung Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=topup">Top Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=datatables">Daftar Game</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Dynamic Content -->
    <main class="container my-5">
        <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            switch($page) {
                case 'home':
                    include 'home.php';
                    break;
                case 'topup':
                    include 'form.php';
                    break;
                case 'datatables':
                    include 'datatables.php';
                    break;
                case 'about':
                    include 'about.php';
                    break;
                case 'contact':
                    include 'contact.php';
                    break;
                case 'konten':
                    include 'konten.php';
                    break;
                default:
                    include '404.php';
                    break;
            }
        ?>
    </main>

    <!-- Footer -->
    <footer class="py-4">
        <div class="container text-center">
            <p>Follow Us on Social Media</p>
            <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
            <a href="#" class="text-white"><i class="bi bi-whatsapp"></i></a>
            <p class="mt-3">&copy; 2024 Agung Shop. All rights reserved.</p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="assets/jquery-3.7.1.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
