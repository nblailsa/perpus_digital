<?php

$id_buku = $_GET['id_buku'];

//koneksi
include '../koneksi.php';


// menghapus data dari database
$sql = "DELETE FROM buku WHERE id_buku='$id_buku'";

$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo "<script>
          document.location.href ='buku.php?info=hapus';
          </script>";
} else {
    echo "<script>
        alert('Maaf Buku gagal dihapus');
          document.location.href ='buku.php?info=hapus';
          </script>";
}

?>