<?php
// Koneksi ke database (gantilah nilai-nilai ini sesuai dengan pengaturan database Anda)
include '../koneksi.php';

// Ambil data dari formulir
$id_user = $_POST['id_user'];
$username = $_POST['username'];
$email = $_POST['email'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

// Query SQL untuk memperbarui data anggota
$sql = "UPDATE user SET id_user='$id_user', username='$username', email='$email',
 nama_lengkap='$nama_lengkap', alamat='$alamat' WHERE id_user='$id_user'";
$query = mysqli_query($koneksi, $sql);


if ($query) {
    echo "<script>
      document.location.href ='member.php';
      </script>";
} else {
    echo "<script>
    alert('Maaf data tidak terhapus');
      document.location.href ='member.php';
      </script>";
}

?>
