<?php 
// menangkap data id yang dikirim dari url
$id_peminjaman = $_GET['id_peminjaman'];

// koneksi
include '../koneksi.php';
// menghapus data dari databasee
$query = "DELETE FROM peminjaman WHERE id_peminjaman = '$id_peminjaman'";
$success = mysqli_query ($koneksi, $query);
 
if ($success) {
    echo "
    <script>
    alert('buku berhasil dikembalikan');
    document.location.href = 'koleksi.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('buku gagal dikembalikan');
    document.location.href = 'koleksi.php';
    </script>";
}

?>