<?php
include "koneksi.php";

$username = $_POST['username'];
$password =md5($_POST['password']);
$email = $_POST['email'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

// Validasi username
$cek_username = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
if (mysqli_num_rows($cek_username) > 0) {
    echo "<script>alert('Username sudah ada!'); window.location='register.php';</script>";
    exit;
}



// Simpan data ke database
$query = "INSERT INTO user (username, password, email, nama_lengkap, alamat, level) VALUES ('$username', '$password', '$email', '$nama_lengkap', '$alamat', 'peminjam')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "<script>alert('Registrasi berhasil!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Registrasi gagal!'); window.location='register.php';</script>";
}
?>
