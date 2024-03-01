<?php
// Koneksi ke database (gantilah nilai-nilai ini sesuai dengan pengaturan database Anda)
include '../koneksi.php';

// Ambil data dari formulir
$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];

// Query SQL untuk memperbarui data anggota
$sql = "UPDATE kategoribuku SET id_kategori='$id_kategori', nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'";
$query = mysqli_query($koneksi, $sql);


if ($query) {
    echo "<script>
      document.location.href ='kategori_buku.php';
      </script>";
} else {
    echo "<script>
    alert('Maaf data tidak terhapus');
      document.location.href ='kategori_buku.php';
      </script>";
}

?>
