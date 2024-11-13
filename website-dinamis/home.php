<!doctype html>
<html lang="en">
<head>
    <title>Home - Agung Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #121212;
            color: #f0f0f0;
        }
        .container {
            margin-top: 20px;
        }
        /* Gambar slide dengan ukuran lebih kecil dan proporsi terjaga */
        .carousel-item img {
            width: 100%;
            height: 300px; /* Menurunkan tinggi gambar */
            object-fit: contain; /* Memastikan seluruh gambar terlihat */
        }
        h2 {
            color: #00bfff;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <!-- Carousel Gambar Slide -->
        <div id="promoCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://th.bing.com/th/id/OIP.Q7PLnW8Ik6TX_yjkUC2-xQAAAA?rs=1&pid=ImgDetMain" class="d-block w-100" alt="Promo Top-Up Diskon">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Promo Diskon Spesial</h5>
                        <p>Diskon hingga 50% untuk top-up game tertentu!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://contents.spin.ph/image/resize/image/2020/09/09/ml-oldlogo-1599651659.webp" class="d-block w-100" alt="Game Mobile Legends">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Mobile Legends</h5>
                        <p>Top-up diamond Mobile Legends dengan harga terjangkau.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://antimatter.vn/wp-content/uploads/2022/05/hinh-anh-ff-1.jpg" class="d-block w-100" alt="Game Free Fire">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Free Fire</h5>
                        <p>Top-up diamond Free Fire dengan cepat dan aman.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#promoCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#promoCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Konten Sambutan -->
        <div class="text-center my-4">
            <h2>Selamat Datang di Agung Shop</h2>
            <p>Agung Shop adalah layanan top-up game terpercaya dengan harga terjangkau dan proses cepat. Nikmati kemudahan transaksi top-up untuk berbagai game favorit Anda!</p>
            <a href="?page=topup" class="btn btn-primary btn-lg">Mulai Top Up</a>
        </div>
    </div>

    <!-- JavaScript untuk Bootstrap Carousel -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
