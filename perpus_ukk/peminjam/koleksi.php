<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if (!isset($_SESSION['id_user'])) {
    header("location:../index.php?pesan=info_login");
}
if ($_SESSION['level'] != "peminjam") {
    header("location:../logout.php");
}
require "../koneksi.php";
$id_user = $_SESSION["id_user"];
$username = $_SESSION["username"];
$query = mysqli_query($koneksi, "SELECT peminjaman.id_peminjaman, peminjaman.id_buku, buku.judul,  buku.gambar, buku.tahun_terbit, user.nama_lengkap, user.id_user, peminjaman.tanggal_peminjaman, peminjaman.tanggal_pengembalian, peminjaman.status_peminjaman
FROM peminjaman
INNER JOIN buku ON peminjaman.id_buku = buku.id_buku
INNER JOIN user ON peminjaman.id_user = user.id_user
WHERE peminjaman.id_user = $id_user");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Koleksi Buku</title>

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
            <hr class="sidebar-divider">

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
                <div class="container">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    </div>

                    <!-- Page Heading -->

                    <!-- Content Row -->
                    <div class="row"> <style>
                        .row {
                            color: blue;
                            gap: 15px;
                            margin-bottom: 10px;
                        }
                    </style>
                        <?php foreach ($query as $d) :
                        // tenggat waktu
                        $tanggal_pengembalian = strtotime($d['tanggal_pengembalian']);
                        $tanggal_sekarang = strtotime(date('Y-m-d'));
                        if ($tanggal_pengembalian < $tanggal_sekarang && $d['status_peminjaman'] != 'dikembalikan') {
                            // Jika tanggal pengembalian telah lewat dan status belum dikembalikan, maka status diubah menjadi "telat"
                            mysqli_query($koneksi, "UPDATE peminjaman SET status_peminjaman = 'telat' WHERE id_peminjaman = '" . $d['id_peminjaman'] . "'");
                            $d['status_peminjaman'] = 'telat'; // Update status peminjam untuk ditampilkan
                            $color = "text-bg-danger"; // Update warna
                        }
                        ?>
                            <div class="card" style="width: 14rem;">
                                <img src="../assets/img/<?php echo $d['gambar']; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title"><a href="" data-toggle="modal" data-target="#bukudetailModal<?php echo $d['id_peminjaman']; ?>"><b><?php echo $d['judul']; ?></b></a></h5>
                                    <h6>Tahun terbit : <?php echo $d['tahun_terbit']; ?> </h6>
                                    
                                    <?php
                                    if ($d['status_peminjaman'] != 'telat') {
                                    ?>
                                    <a href="baca.php?id_buku=<?php echo $d['id_buku']; ?>" class="btn btn-sm btn-warning my-4">Baca</a>
                                    <?php
                                    }
                                    ?>
                                    <a onclick="return confirm('Apakah anda yakin ingin mengembalikan buku?')" class="btn btn-sm btn-danger" href="kembalikan.php?id_peminjaman=<?php echo $d['id_peminjaman']; ?>">Kembalikan</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>


                <!-- Modal Detail -->
                <?php
                $datab = "SELECT * FROM peminjaman, user, buku WHERE peminjaman.id_user=user.id_user AND peminjaman.id_buku=buku.id_buku ORDER BY tanggal_peminjaman ASC";
                $result = mysqli_query($koneksi, $datab);
                while ($rowb = mysqli_fetch_assoc($result)) {
                    if ($rowb['status_peminjaman'] == 'dipinjam') {
                        $color = "btn btn-success";
                    } elseif ($rowb['status_peminjaman'] == 'dikembalikan') {
                        $color = "btn btn-warning";
                    } elseif ($rowb['status_peminjaman'] == 'telat') {
                        $color = "btn btn-danger";
                    }
                ?>
                    <div class="modal fade" id="bukudetailModal<?php echo $rowb['id_peminjaman']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> Detail Buku</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" &times;></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                        <tbody>
                                            <tr>
                                                <th>Peminjam</th>
                                                <th>:</th>
                                                <td><?php echo $rowb['nama_lengkap']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Buku</th>
                                                <th>:</th>
                                                <td><?php echo $rowb['judul']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Peminjaman</th>
                                                <th>:</th>
                                                <td><?php echo $rowb['tanggal_peminjaman']; ?></td>
                                            </tr>
                                            - <tr>
                                                <th>Tanggal Pengembalian</th>
                                                <th>:</th>
                                                <td><?php echo $rowb['tanggal_pengembalian']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <th>:</th>
                                                <td><span class="badge rounded-pill <?= $color; ?>"><?= $rowb['status_peminjaman'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <!-- Kembalikan Buku -->
                <?php
                $datab = "SELECT * FROM peminjaman, user, buku WHERE peminjaman.id_user=user.id_user AND peminjaman.id_buku=buku.id_buku 
                    ORDER BY tanggal_peminjaman ASC";
                $result = mysqli_query($koneksi, $datab);
                while ($rowb = mysqli_fetch_assoc($result)) {
                ?>

                    <div class="modal fade" id="anggotaeditModal<?php echo $rowb['id_peminjaman']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> Edit Status</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" &times;></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="ubah_status.php">
                                        <input type="hidden" name="id_peminjaman" value="<?php echo $rowb['id_peminjaman']; ?>">
                                        <div class="form-group">
                                            <label for="status_peminjaman">Kembalikan Buku</label>
                                            <select class="form-control" name="status_peminjaman" id="status_peminjaman" required>
                                                <option value="" selected disabled>Update</option>
                                                <option value="dikembalikan">Dikembalikan</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Ubah Status</button>
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

</body>

</html>