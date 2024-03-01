<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") {
    header("location:../index.php?pesan=info_login");
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

    <title>Halaman Generate Laporan</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

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
                    <span>home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">



            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="buku.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Buku</span>
                </a>
                <a class="nav-link" href="kategori_buku.php">
                    <i class="fas fa-fw fa-book-open"></i>
                    <span>Kategori</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="member.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Member</span></a>
            </li>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="ulasan.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Ulasan Buku</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="generate.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Generate Laporan</span></a>
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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

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

                        <!-- Nav Item - Alerts -->


                        <!-- Nav Item - Messages -->


                        <div class="topbar-divider d-none d-sm-block"></div>

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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    </div>



                    <!-- tabel laporan -->
                    <div class="card shadow mb-4">
                        <div class="page-heading">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i class="la la-home font-20"></i></a>
                                </li>
                                <li class="breadcrumb-item"> Data Laporan</li>
                            </ol>
                        </div>
                                <!-- filter tanggal peminjaman -->
                        <div class="page-content fade-in-up">
                            <div class="ibox">
                                <div class="ibox-head">
                                </div>
                                <div class="ibox-body">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="tanggal_peminjaman">Pilih Tanggal Pinjam:</label>
                                                <input type="date" name="tanggal_peminjaman" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="tanggal_pengembalian">Pilih Tanggal Kembali:</label>
                                                <input type="date" name="tanggal_pengembalian" class="form-control">
                                            </div>
                                        </div><br>
                                        <button type="submit" class="btn btn-primary">Filter</button>
                                    </form>
                                    <hr>
                                    <?php
                                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        // Ambil tanggal dari form
                                        $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
                                        $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
                                    ?>

                                        <div class="container">
                                            <a class="btn btn-sm btn-success" href="print.php?tanggal_peminjaman=<?php echo $tanggal_peminjaman;
                                                 ?>&tanggal_pengembalian=<?php echo $tanggal_pengembalian; ?>;" target="_blank">Cetak Semua</a>
                                        </div>
                                        <br>
                                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Peminjam</th>
                                                    <th>Buku</th>
                                                    <th>Tgl. Peminjaman</th>
                                                    <th>Tgl.Pengembalian</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include '../koneksi.php';
                                                $no = 1;
                                                $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
                                                $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
                                                $query = mysqli_query($koneksi, "SELECT * FROM peminjaman, buku, user WHERE peminjaman.id_user=user.id_user
                                 AND peminjaman.id_buku=buku.id_buku AND tanggal_peminjaman >= '$tanggal_peminjaman' AND 
                                 (tanggal_pengembalian <= '$tanggal_pengembalian')");
                                                while ($row = mysqli_fetch_assoc($query)) {
                                                    $status = $row['status_peminjaman'];
                                                ?>
                                                    <tr class="text-center">
                                                        <td><?php echo $no++; ?>.</td>
                                                        <td><?php echo $row['nama_lengkap']; ?></td>
                                                        <td><?php echo $row['judul']; ?></td>
                                                        <td><?php echo $row['tanggal_peminjaman']; ?></td>
                                                        <td><?php echo $row['tanggal_pengembalian']; ?></td>
                                                        <td>
                                                            <?php if ($status == 'dipinjam') { ?>
                                                                <span class="badge badge-warning">Dipinjam</span>
                                                            <?php } elseif ($status == 'dikembalikan') { ?>
                                                                <span class="badge badge-success">Dikembalikan</span>
                                                            <?php } elseif ($status == 'telat') { ?>
                                                                <span class="badge badge-danger">Telat</span>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm btn-success" href="print1.php?id_peminjaman=<?php echo $row['id_peminjaman'];
                                                        ?>&tanggal_peminjaman=<?php echo $tanggal_peminjaman; ?>&tanggal_pengembalian=<?php echo
                                                         $tanggal_pengembalian; ?>&status_peminjaman=<?php echo $status_peminjaman; ?>" target="_blank">Print</a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    <?php } else { ?>
                                        <div class="alert alert-sm alert-primary">
                                            <center>
                                                <strong>Perhatian!</strong> Silakan Filter Laporan Peminjaman
                                            </center>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Perpustakaan Ailsa</span>
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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>
    <script>
        // ambil elemen input tanggal peminjaman dan tanggal pengembalian
        var tanggalPeminjaman = document.getElementById('tanggal_peminjaman');
        var tanggalPengembalian = document.getElementById('tanggal_pengembalian');

        // Event listener untuk mengubah tanggal pengembalian saat tanggal peminjaman diubah
        tanggalPeminjaman.addEventListener('change', function() {
            var tanggalPeminjamanValue = new Date(tanggalPeminjaman.value);
            var tanggalPengembalianValue = new Date(tanggalPeminjamanValue);
            tanggalPengembalianValue.setDate(tanggalPeminjamanValue.getDate() + 7);

            // format tanggal pengembalian menjadi YYYY-MM-DD
            var dd = String(tanggalPengembalianValue.getDate()).padStart(2, '0');
            var mm = String(tanggalPengembalianValue.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = tanggalPengembalianValue.getFullYear();

            var formattedtanggalPengembalian = yyyy + '-' + mm + '-' + dd;
            tanggalPengembalian.value = formattedtanggalPengembalian;
        });
    </script>

</body>

</html>