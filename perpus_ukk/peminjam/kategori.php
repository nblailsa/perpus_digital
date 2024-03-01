<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if (!isset($_SESSION['id_user'])) {
    header("location:../index.php?pesan=info_login");
}
if ($_SESSION['level'] != "peminjam") {
    header("location:../logout.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perpustakaan Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- style -->
    <style>
        .bi-star-fill {
            color: orange;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3">Digital Library <sup>Ailsa</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    
                    <i class="fas fa-fw fa-bookmark"></i>
                    <span>Kategori Buku</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <?php
                        include '../koneksi.php';
                        $no = 1;
                        $data = "SELECT * FROM kategoribuku";
                        $result = mysqli_query($koneksi, $data);
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <!-- Card Body -->
                            <div class="card-body">
                                <a href="kategori.php?nama_kategori=<?php echo $row['nama_kategori']; ?>" class="collapse-item">
                                    <?= $row['nama_kategori']; ?>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
            </li>

            <!-- Heading -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="buku.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Buku</span>
                </a>
                <a class="nav-link" href="koleksi.php">
                    <i class="fas fa-fw fa-book-open"></i>
                    <span>Koleksi Buku</span>
                </a>
            </li>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']; ?></span>
                                <img class="img-profile rounded-circle" src="../assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <!-- Content Row -->
                    <div class="row"> <style>
                        .row {
                            color: blue;
                            gap: 15px;
                            margin-bottom: 10px;
                        }
                    </style>

                        <!-- Earnings (Monthly) Card Example -->
                        <h4>Daftar Buku</h4>
                        <?php
                        include '../koneksi.php';
                        if (isset($_GET['nama_kategori'])) {
                            $nama_kategori = $_GET['nama_kategori'];
                        } else {
                            die("Error, Data Tidak Ditemukan");
                        }
                        $data = mysqli_query($koneksi, "SELECT * FROM buku, kategoribuku WHERE buku.id_kategori=kategoribuku.id_kategori AND
                            nama_kategori= '$nama_kategori' ");
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
                            <img src="../assets/img/<?php echo $d['gambar']; ?>" class="card-img-top" alt="...">
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
                                <a href="ulasan_buku_detail.php?id_buku=<?php echo $d['id_buku']; ?>" class="btn btn-sm btn-outline-success">Ulasan</a>

                                <a class="btn btn-sm btn-warning" href="" data-toggle="modal" data-target="#anggotaeditModal<?php echo $d['id_buku']; ?>">Pinjam</a> <br>

                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>


                <!-- Modal pinjam -->
                <?php
                $dataA = "SELECT * FROM buku WHERE id_buku";
                $result = mysqli_query($koneksi, $dataA);
                while ($rowA = mysqli_fetch_assoc($result)) {

                ?>
                    <div class="modal fade" id="anggotaeditModal<?php echo $rowA['id_buku']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> Pinjam Buku</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" &times;></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="tambah_pinjam.php">
                                        <input type="hidden" name="id_buku" value="<?php echo $rowA['id_buku']; ?>">
                                        <h5>Yakin ingin meminjam buku <b><?php echo $rowA['judul']; ?></b> ini?</h5>
                                        <input type="text" class="form-control" name="id_buku" id="id_buku" value="<?php echo $rowA['id_buku']; ?>" hidden>

                                        <input type="text" class="form-control" name="id_user" id="id_user" value="<?php echo $_SESSION['username']; ?>" hidden>

                                        <input type="date" class="form-control" name="tanggal_peminjaman" id="tanggal_peminjaman" hidden>

                                        <input type="date" class="form-control" name="tanggal_pengembalian" id="tanggal_pengembalian" hidden>

                                        <input type="text" class="form-control" name="status_peminjaman" id="status_peminjaman" value="dipinjam" hidden>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-danger">Pinjam</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        <?php } ?>


        </div>
    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Perpustakaan Ailsa</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik "Logout" Jika Anda Ingin Keluar Dari Halaman</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

</body>

</html>