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
	<title>About - Mie'Kirin Official Website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel = "icon" type = "image/png" href = "./img/logo-mie-kirin1.png">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<div class="bg-loader">
		<div class="loader"></div>
	</div>
	<div class="container">
		<div class="navbar">
		<div class="logo">
        <img src="img/logo-mie-kirin1.png" width="100px">
		</div>
		<nav>
			<ul id="MenuItems">
            <li><a href="userindex.php">Home</a></li>
				<li><a href="daftarmenu.php">List Menu</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
		<a href="logout.php"><img src="img/logout.png" width="30px" height="30px"></a>
		<img src="img/menu.png" class="menu-icon" onclick="menutoggle()">
		</div>
	</div>
	
	<div class="small-container">
        <br>

    <h2 class="title">Tentang Mie'Kirin</h2>
    <div class="row">
			<div class="col-2">
				<h1>Mie'Kirin Official Website</h1> <br>
				<p>Website ini dibuat untuk keperluan tugas sekolah. Menu dan Foto berasal dari sumber tertentu.<br><br>
				Website ini dibuat dengan tujuan untuk mempermudah masyarakat dalam melakukan proses jual beli makanan 
                lewat Handphone atau Laptop saja. <br><br>Sehingga mengurangi kegiatan tatap muka yang sangat beresiko pada keadaan
                Pandemi Sekarang. </p>
                <br>
                <br>
			</div>
			<div class="col-2">
				<img src="img/cafe.png">
			</div>
		</div>

		
	</div>

	

	<!-- footer -->
        <br>
        <br>
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