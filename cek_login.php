<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'db.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$masuk = mysqli_query($koneksi,"SELECT * FROM login WHERE username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($masuk);

// cek apakah username dan password di temukan pada database
if($cek > 0){

 $data = mysqli_fetch_assoc($masuk);

 // cek jika user login sebagai admin
 if($data['level']=="admin"){

  // buat session login dan username
  $_SESSION['username'] = $username;
  $_SESSION['level'] = "admin";
  // alihkan ke halaman dashboard admin
  header("location:adminindex.php");

 // cek jika user login sebagai pegawai
 }else if($data['level']=="user"){
  // buat session login dan username
  $_SESSION['username'] = $username;
  $_SESSION['level'] = "user";
  // alihkan ke halaman dashboard pegawai
  header("location:userindex.php");

 }else{

  // alihkan ke halaman login kembali
  header("location:login.php?pesan=gagal");
 } 
}else{
 header("location:login.php?pesan=gagal");
}

?>