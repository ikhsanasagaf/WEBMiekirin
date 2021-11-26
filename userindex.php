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
	<link rel="stylesheet" type="text/css" href="style.css">
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
		<div class="row">
			<div class="col-2">
				<br>
				<h1>Mie yang Lagi Viral<br> Di Indonesia!</h1>
				<p>Mie yang hadir kali ini bukan Mie biasa! Bukan Mie Instan, bukan Mie Ayam, tapi Mie'Kirin!<br>
				Mie yang satu ini hadir dengan rasa yang tak biasa. Tersedia dalam 2 Varian, Asin dan Manis. </p>
				<a href="daftarmenu.php" class="btn"> Lihat Selengkapnya &#8594;</a>
			</div>
			<div class="col-2">
				<img src="img/mie-home1.png">
			</div>
		</div>
	</div>
</div>
	<br>
	<br>
	<br>
<!-- featured producsts -->
	<div class="small-container">
		<h2 class="title">Produk Unggulan</h2>
		<div class="row">
		<?php 
					$menu = mysqli_query($koneksi, "SELECT * FROM menu ORDER BY id_menu ASC LIMIT 4");
					while($p = mysqli_fetch_array($menu)){
				?>	
				<div class="col-4">
				<a href="products-detail.php?id=<?php echo $p['id_menu'] ?>">
					<img src="img/<?php echo $p['gambar']; ?>">
					<h4><?php echo $p['nama_menu']; ?></h4>
					<p>Rp. <?php echo $p['harga']; ?></p>
				</a>
				</div>
				<?php } ?>
		</div>
	</div>

	<!-- offer -->
	<div class="offer">
		<div class="small-container">
			<div class="row">
				<div class="col-2">
					<img src="img/mieoffer.png" class="offer-img">
				</div>
				<div class="col-2">
					<p>Sekarang Hadir di Mie Kirin!</p>
					<h1>Mie Kirin Dia</h1>
					<small>Kali ini Mie Kirin hadir dengan varian asin. Dengan topping yang melimpah kalian bisa merasakan kenikmatan cita rasa mie yang baru.</small>
					<a href="products-detail.php?id=2" class="btn">Beli Sekarang &#8594;</a>
				</div>
			</div>
		</div>
	</div>


	<!-- testimonial -->

	<div class="testimonial">
		<div class="small-container">
			<div class="row">
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>Makanan Enak, Pelayanan Cepat, tingkatkan lagi!</p>
					<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<img src="img/user-1.png">
				<h3>Naila Azkiya Rahmah</h3>
				</div>
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>Menu beraneka ragam, fast respon, harga bersahabat di kantong. Rekomen!</p>
					<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<img src="img/user-2.png">
				<h3>Zaky Fathin Al-Jawary</h3>
				</div>
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>Sudah berlangganan disini, menu komplit, pelayanan tidak lelet. Mantap deh!</p>
					<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<img src="img/user-3.png">
				<h3>Dewi Haryati</h3>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
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