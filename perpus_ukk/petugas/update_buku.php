<?php
// Koneksi ke database (gantilah nilai-nilai ini sesuai dengan pengaturan database Anda)
include '../koneksi.php';

// Ambil data dari formulir
$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$id_kategori = $_POST['id_kategori'];
$tahun_terbit = $_POST['tahun_terbit'];
$deskripsi = $_POST['deskripsi'];

if ($_FILES['gambar']['name']) {
  $gambar = $_FILES['gambar']['name'];
  $file = $_FILES['gambar']['tmp_name'];
  $dir_upload = "../assets/img/";
  move_uploaded_file($file, $dir_upload .$gambar);

} else {
  $gambar = $_POST['gambar_lama'];
}

// Query SQL untuk memperbarui data buku
$sql = "UPDATE buku SET id_buku='$id_buku', judul='$judul', penulis='$penulis',
 penerbit='$penerbit', id_kategori='$id_kategori', tahun_terbit='$tahun_terbit', deskripsi='$deskripsi', gambar='$gambar' WHERE id_buku='$id_buku'";
$query = mysqli_query($koneksi, $sql);


if ($query) {
    echo "<script>
      document.location.href ='buku.php';
      </script>";
} else {
    echo "<script>
    alert('Maaf data tidak terhapus');
      document.location.href ='buku.php';
      </script>";
}

?>
