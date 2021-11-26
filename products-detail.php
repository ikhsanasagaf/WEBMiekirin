<?php 
	error_reporting(0);
	include 'db.php';

	$menu = mysqli_query($koneksi, "SELECT * FROM menu WHERE id_menu = '".$_GET['id']."' ");
	$b = mysqli_fetch_object($menu);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detail Produk - Mie'Kirin Official Website</title>
	<link rel = "icon" type = "image/png" href = "./img/logo-mie-kirin1.png">
	<link rel="stylesheet" type="text/css" href="style.css">
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

	<!-- single product details -->


	<div class="small-container single-product">
		<div class="row">
			<div class="col-2">
				<img src="img/<?php echo $b->gambar ?>" width="95%" id="ProductImg">
			</div>
			<div class="col-2">
				<h1><?php echo $b->nama_menu ?></h1>
				<h4> Rp. <?php echo $b->harga ?></h4>
				<a href="https://wa.link/389ug6" class="btn">Beli Sekarang via Whatsapp</a>
				<h3>Deskripsi Produk <i class="fa fa-indent"></i></h3>
				<br>
				<p><?php echo $b->deskripsi_menu ?></p>
			</div>
		</div>
	</div>

	<!-- title -->

	<div class="small-container">
		<div class="row row-2">
			<h2>Produk Terkait</h2>
			<a href="daftarmenu.php"><p>Lihat Lainnya</p></a>
		</div>

	</div>

	<!-- products -->
	
	<div class="small-container">

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

	<!-- js for product galery -->


	<script type="text/javascript">
		var ProductImg = document.getElementById("ProductImg");
		var SmallImg = document.getElementsByClassName("small-img");

		SmallImg[0].onclick = function()
		{
			ProductImg.src = SmallImg[0].src;
		}
		SmallImg[1].onclick = function()
		{
			ProductImg.src = SmallImg[1].src;
		}
		SmallImg[2].onclick = function()
		{
			ProductImg.src = SmallImg[2].src;
		}
		SmallImg[3].onclick = function()
		{
			ProductImg.src = SmallImg[3].src;
		}

	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>