<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Product  - Cun Store</title>
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
			<img src="img/logoku.png" width="125px">
		</div>
		<nav>
			<ul id="MenuItems">
				<li><a href="index.html">Home</a></li>
				<li><a href="products.html">Product</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="">Account</a></li>
			</ul>
		</nav>
		<img src="img/cart.png" width="30px" height="30px">
		<img src="img/menu.png" class="menu-icon" onclick="menutoggle()">
		</div>
	</div>
	
	<div class="small-container">

		<div class="row row-2">
			<h2>All Products</h2>
			<select>
				<option>Default Sorting</option>
				<option>Sort by Price</option>
				<option>Sort by Popularity</option>
				<option>Sort by Rating</option>
				<option>Sory by Sale</option>
			</select>
		</div>

		<div class="row">
			<div class="col-4">
				<img src="img/product-1.jpg">
				<a href="products-detail.html"><h4>Red Puma T-shirt</h4></a>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>$29.90</p>
			</div>
			<div class="col-4">
				<img src="img/product-2.jpg">
				<h4>Black HRX Sneakers</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>$69.90</p>
			</div>
			<div class="col-4">
				<img src="img/product-3.jpg">
				<h4>Benetton Sport Pants</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>$49.90</p>
			</div>
			<div class="col-4">
				<img src="img/product-4.jpg">
				<h4>Navy Puma Polo Shirt</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<p>$39.90</p>
			</div>
			<div class="col-4">
				<img src="img/product-5.jpg">
				<h4>Grey HRX Hi-Sneakers</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<p>$79.90</p>
			</div>
			<div class="col-4">
				<img src="img/product-6.jpg">
				<h4>Puma Black-Strip T-shirt</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>$39.90</p>
			</div>
			<div class="col-4">
				<img src="img/product-7.jpg">
				<h4>HRX Sport Socks</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>$19.90</p>
			</div>
			<div class="col-4">
				<img src="img/product-8.jpg">
				<h4>Black Steel Fossil Watch</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>$109.90</p>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<img src="img/product-9.jpg">
				<h4>C-21 Roadster Watch</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>$99.90</p>
			</div>
			<div class="col-4">
				<img src="img/product-10.jpg">
				<h4>Black HRX Bike Shoes</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>$69.90</p>
			</div>
			<div class="col-4">
				<img src="img/product-11.jpg">
				<h4>Grey Roadster Comfy Shoes</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>$59.90</p>
			</div>
			<div class="col-4">
				<img src="img/product-12.jpg">
				<h4>Black Nike Sport Pants</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<p>$49.90</p>
			</div>
		</div>

		<div class="page-btn">
			<span>1</span>
			<span>2</span>
			<span>3</span>
			<span>4</span>
			<span>&#8594;</span>
		</div>
	</div>

	

	<!-- footer -->

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Download Our App</h3>
					<p>Download App for Android and Ios Mobile Phone</p>
					<div class="app-logo">
						<img src="img/play-store.png">
						<img src="img/app-store.png">
					</div>
				</div>
				<div class="footer-col-2">
					<img src="img/logo-whiteku.png">
					<p>Our Purpose is to Sustainably Make the Pleasure and Benefits of Sports Accessible of Sports Accessible to the Many.</p>
				</div>
				<div class="footer-col-3">
					<h3>Useful Links</h3>
					<ul>
						<li>Coupons</li>
						<li>Blog Post</li>
						<li>Return Policy</li>
						<li>Join Affliate</li>
					</ul>
				</div>
				<div class="footer-col-4">
					<h3>Follow Us</h3>
					<ul>
						<li>Facebook</li>
						<li>Twitter</li>
						<li>Instagram</li>
						<li>Youtube</li>
					</ul>
				</div>				
			</div>
			<hr>
			<p class="copyright">Copyright &copy; 2020 - Ikhsan Asagaf. All Rights Reserved.</p>
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