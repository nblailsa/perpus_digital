<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if (!isset($_SESSION['id_user'])) {
    header("location:../index.php?pesan=info_login");
}
if ($_SESSION['level'] != "peminjam") {
    header("location:../logout.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Halaman Ulasan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
        <!-- form ulasan -->
    <div class="wrapper">
        <h3>Berikan Ulasan dan Rating Buku</h3>
        <form action="tambah_ulasan.php" method="post">
            <div class="rating">
                <input type="number" name="rating" hidden>
                <i class='bx bx-star star' style="--i: 0;"></i>
                <i class='bx bx-star star' style="--i: 1;"></i>
                <i class='bx bx-star star' style="--i: 2;"></i>
                <i class='bx bx-star star' style="--i: 3;"></i>
                <i class='bx bx-star star' style="--i: 4;"></i>
            </div>
            

            <?php
            include '../koneksi.php';
            if (isset($_GET['id_buku'])) {
                $id_buku = $_GET['id_buku'];
            } else {
                die("Error, Data Tidak Ditemukan");
            }
            $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id_buku'");
            $result = mysqli_fetch_array($query);
            ?>
            <div class="input-group mb-3 mt-3">
                <span class="input-group-text" id="bassic-addon1">
                    
                </span>
                <input type="hidden" class="form-control" id="id_buku" name="id_buku" value="<?= $result['id_buku']; ?>" readonly>
            </div>
            <div class="input-group mb-3 mt-3">
                <span class="input-group-text" id="bassic-addon1"></span>
                <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $_SESSION['username']; ?>" readonly>
            </div>
            <textarea name="ulasan" cols="30" rows="5" placeholder="Ulasan Anda..."></textarea>
            <div class="btn-group">
                <button type="submit" class="btn submit">Submit</button>
                <a href="koleksi.php" class="btn cancel">Cancel</a>
            </div>
        </form>
    </div>

    <script src="script.js" type="text/javascript"></script>
</body>

</html>