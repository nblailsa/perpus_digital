<?php

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$id_kategori = $_POST['id_kategori'];
$tahun_terbit = $_POST['tahun_terbit'];
$deskripsi = $_POST['deskripsi'];

$gambar = $_FILES['gambar']['name'];
$file = $_FILES['gambar']['tmp_name'];
$dir_upload = "../assets/img/";
move_uploaded_file($file, '../assets/img/' .$gambar);

// Query untuk insert data ke database
include '../koneksi.php';
$query = "INSERT INTO buku VALUES('', '$judul', '$penulis', '$penerbit', '$id_kategori', '$tahun_terbit', '$deskripsi', '$gambar')";
$success = mysqli_query($koneksi, $query);

if ($success) {
    echo "
    <script>
    alert('Berhasil Ditambahkan');
    document.location.href = 'buku.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Data gagal ditambahkan');
    document.location.href = 'buku.php';
    </script>
    ";
}
