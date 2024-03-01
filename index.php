<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="ss.css">

    <title>Selamat Datang</title>
</head>

<body id="home">
    <!-- Navbar -->
    <header >
        <a href="#" class="logo">Digital<span> Library</span>

            <ul class="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Books</a></li>
                <li><a href="#contact">Contact us</a></li>

            </ul>

           
        </a>
    </header>

    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-primary shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Digital Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav> -->
    <!-- Akhair Navbar -->

    <!-- jumbotron -->
    <section class="home text-center">
    <div class="home-text">
            <h5>Let's</h5>
            <h1>Digital Library <br> Ailsa</h1>
            <p>"Temukan Dunia Pengetahuan di Ujung Jari Anda:
                 Digital Library Ailsa Membawa Anda ke Dunia Buku Digital."</p>
                <a href="perpus_ukk/index.php" class="btn">Get Started</a>
        </div>

    </section>
    <!-- Akhir jumbotron -->

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>About</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-4">
                    <p>Kami percaya bahwa pengetahuan adalah kekuatan, dan setiap individu berhak mendapatkan akses ke sumber daya pendidikan yang berkualitas. Inilah sebabnya kami menciptakan aplikasi perpustakaan online kami, yang dirancang untuk menjadi pintu gerbang ke ribuan buku, artikel, dan sumber daya belajar lainnya, semuanya hanya dalam genggaman Anda.</p>
                </div>
                <div class="col-md-4">
                    <p> Kami berdedikasi untuk memajukan literasi dan pembelajaran seumur hidup, dan kami ingin menjadi mitra Anda dalam perjalanan pembelajaran Anda. Aplikasi perpustakaan kami telah dirancang dengan antarmuka yang ramah pengguna, fitur pencarian canggih, dan koleksi konten yang terus berkembang untuk menginspirasi dan memberdayakan semua anggota komunitas kami</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir About -->

    <!-- Projects -->
    <section id="projects">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Daftar Buku</h2>
                </div>
            </div>
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="row">
                        <style>
                            .row {
                                color: blue;
                                gap: 15px;
                                margin-bottom: 10px;
                            }
                        </style>

                <?php
                include 'perpus_ukk/koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY id_buku ASC");

                while ($d = mysqli_fetch_array($data)) {
                    $id_buku = $d['id_buku']; // Ambil id_buku untuk digunakan dalam query rating

                    // Query untuk mengambil rating hanya untuk buku tertentu
                    $queryRating = "SELECT rating FROM ulasanbuku WHERE id_buku = $id_buku";
                    $resultRating = mysqli_query($koneksi, $queryRating);

                    $totalRating = 0;
                    $jumlahRating = 0;

                    // Loop untuk menghitung jumlah total rating dan jumlah rating
                    while ($rowRating = mysqli_fetch_assoc($resultRating)) {
                        $totalRating += $rowRating['rating'];
                        $jumlahRating++;
                    }

                    // Hitung rata-rata rating
                    if ($jumlahRating > 0) {
                        $rataRata = $totalRating / $jumlahRating;
                    } else {
                        $rataRata = 0; // Menghindari pembagian oleh nol
                    }
                ?>


                    <div class="card" style="width: 14rem;">
                        <img src="perpus_ukk/assets/img/<?php echo $d['gambar']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href="detail.php?id_buku=<?php echo $d['id_buku']; ?>"><?php echo $d['judul']; ?></a></h5>
                            <p class="fw-semibold">Rating:
                                <?php
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($i <= $rataRata) {
                                        echo '<span class="bi bi-star-fill"></span>';
                                    } else {
                                        echo '<span class="bi bi-star"></span>';
                                    }
                                }
                                ?>
                            </p>
                            <h6>Tahun terbit : <?php echo $d['tahun_terbit']; ?> </h6>

                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Akhir Projects -->

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Contact</h2>
                </div>
            </div>
            <div class="row justify-content-left">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Email : perpusdig@gmail.com</label>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat : Jl. Sidomekar no. 69</label>
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Telepon : 0856-9987-8865</label>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class="bg-primary text-black text-center pb-5">
        <p>created with <i class="bi bi-suit-heart-fill text-danger"></i> by <a href="https://www.instagram.com/xralsaf/" class="text-white fw-bold">perpusdigailsa</a>2024</p>
    </footer>
    <!-- Akhir Footer -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>