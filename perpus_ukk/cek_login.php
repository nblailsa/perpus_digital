<?php 
$host = "localhost"; 
$user = "root"; //nama user yang digunakan masuk k database
$password = ""; //password yagn digunakan masuk k database
$database = "digitalibrary"; //nama database yang digunakkan
$koneksi = mysqli_connect($host, $user, $password, $database);

//cek koneksi ke database
//jika tidak menampilkan apa-apa artinya koneksi berhasil dilakukan
if (mysqli_connect_errno()){
echo "Koneksi gagal : " . mysqli_connect_error();
}

//mengaktifkan session
session_start();

//mengambil data yang dikirim dari form sebelumnya
$username = $_POST['username'];
$password = md5($_POST['password']);
// $username = $_POST['username'];
// $password = $_POST['password'];

//mengambil data user di tabel user
$user = mysqli_query($koneksi, "SELECT * from user where username='$username' and password='$password'");
//menghitung jumlah data
$cek = mysqli_num_rows($user);

//jika username dan password lebih besar dari 0 maka user ditemukan
if($cek > 0){
$data = mysqli_fetch_assoc($user);
//jika user adalah admin
 $_SESSION['id_user'] = $data['id_user'];
 $_SESSION['username'] = $data['username'];
 $_SESSION['level'] = $data['level'];
 if($data['level'] == 'admin'){
    header("location:admin/index.php");
 }elseif($data['level'] == 'petugas'){
    header("location:petugas/index.php");
 }elseif($data['level'] == 'peminjam'){
    header("location:peminjam/index.php");
 }else {
   header("location:index.php?pesan=gagal");
 }
}else{
//jika user tidak ditemukan
header("location:index.php?pesan=gagal");
}

?>