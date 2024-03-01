<?php
// Koneksi ke database (gantilah nilai-nilai ini sesuai dengan pengaturan database Anda)
include '../koneksi.php';

// Ambil data dari formulir
$id_peminjaman = $_POST['id_peminjaman'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];
$status_peminjaman = $_POST['status_peminjaman'];

// Query SQL untuk memperbarui data anggota
$sql = "UPDATE peminjaman SET tanggal_peminjaman='$tanggal_peminjaman', tanggal_pengembalian='$tanggal_pengembalian', status_peminjaman='$status_peminjaman' WHERE id_peminjaman='$id_peminjaman'";
$query = mysqli_query($koneksi, $sql);


if ($query) {
    echo "<script>
      document.location.href ='generate.php';
      </script>";
} else {
    echo "<script>
    alert('Maaf data tidak terhapus');
      document.location.href ='generate.php';
      </script>";
}

?>
