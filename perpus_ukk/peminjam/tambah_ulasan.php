<?php
session_start();

$id_user = $_SESSION['id_user'];
$id_buku = $_POST['id_buku'];
$ulasan = $_POST['ulasan'];
$rating = $_POST['rating'];

// Query untuk insert data ke database
include '../koneksi.php';
$sql = "INSERT INTO ulasanbuku (id_user, id_buku, ulasan, rating) VALUES('$id_user', '$id_buku', '$ulasan', '$rating')";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo "
    <script>
    alert('Berhasil Ditambahkan');
    document.location.href = 'koleksi.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Data gagal ditambahkan');
    document.location.href = 'koleksi.php';
    </script>
    ";
}
