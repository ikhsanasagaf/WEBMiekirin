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
	<title>Contact - Mie'Kirin Official Website</title>
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

    <h2 class="title">Contact Us</h2>
    <br>
    <div class="row">
			<div class="col-2">
				<h1>Contact Mie'Kirin</h1> <br><br>
				<p>Whatsapp : 62+822-5615-8707 <br><br> Instagram : @icunasagaf <br> <br> Twitter   : @icunasagaf</p>
                <br>
                <br>
			</div>
			<div class="col-2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.224667372074!2d109.27017981450508!3d-7.440375975374574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3c7505008a2ac14b!2zN8KwMjYnMjUuNCJTIDEwOcKwMTYnMjAuNSJF!5e0!3m2!1sen!2sid!4v1637853173957!5m2!1sen!2sid" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>		</div>
            </div>
            <br>
            <br>
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