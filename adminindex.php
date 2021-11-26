<?php
 include 'db.php';
 session_start();

 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['level']==""){
  header("location:login.php?pesan=gagal");
 }

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mie'Kirin Official Website</title>
	<link rel = "icon" type = "image/png" href = "./img/logo-mie-kirin1.png">
	<link href="style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
		<!-- loader -->

	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<div class="header">
	<div class="container">
		<div class="navbar">
		<div class="logo">
			<img src="img/logo-mie-kirin1.png" width="100px">
		</div>
		<nav>
			<ul id="MenuItems">
				<li><a href="adminindex.php">Home</a></li>
				<li><a href="datamenu.php">Tambah Menu</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
		<a href="logout.php"><img src="img/logout.png" width="30px" height="30px"></a>
		<img src="img/menu.png" class="menu-icon" onclick="menutoggle()">
		</div>
		<div class="row">
			<div class="col-2">
				<h1>Selamat Datang!</h1>
				<p>Halo Admin! Anda telah login menggunakan akun Admin. Di halaman khusus Admin ini Anda bisa menambah,
					 mengedit, menghapus, maupun mencari menu yang akan di publish di Website MieKirin!.
					 Anda bisa menambah menu lewat fitur tambah menu di bawah. </p>
				<a href="datamenu.php" class="btn"> Tambah Menu &#8594;</a>
			</div>
			<div class="col-2">
				<img src="img/homepic.png">
			</div>
		</div>
	</div>
</div>
	
	<!-- footer -->

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-2">
					<p>"Tujuan utama kami adalah memberi kenyamanan dalam membeli produk Miekirin bagi semua pelanggan."</p>
				</div>
			</div>
			<hr>
			<p class="copyright">Copyright &copy; 2021 - Ikhsan Asagaf. All Rights Reserved.</p>
		</div>
	</div>
	<!-- js for toggle menu -->
	<script type="text/javascript">
		var MenuItems = document.getElementById("MenuItems");

		MenuItems.style.maxHeight = "0px";

		function menutoggle(){
			if(MenuItems.style.maxHeight == "0px")
			{
				MenuItems.style.maxHeight = "200px";
			}
			else
			{
				MenuItems.style.maxHeight = "0px";
			}
		}
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>

</body>
</html>