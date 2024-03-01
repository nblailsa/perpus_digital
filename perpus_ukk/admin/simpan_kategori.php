<?php

    $nama_kategori = $_POST['nama_kategori'];

    //koneksi
    include '../koneksi.php';
    

    // Query SQL untuk menyimpan data ke tabel item
    $sql = "INSERT INTO kategoribuku (nama_kategori) VALUES
     ('$nama_kategori')";

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