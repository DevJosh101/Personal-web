<!doctype html>
<html>
	<head>
		<title>DΞV JOSH | Website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	</head>
	<body>
<div class="hero">
		<nav>
			<h2 class="logo">DΞV<span>JOSH</span></h2>
			<ul>
				<li><a href="?page=home">Home</a></li>
				<li><a href="?page=1">About Us</a></li>
				<li><a href="?page=2">Services</a></li>
				<li><a href="?page=3">Contact Us</a></li>
			</ul>
			<a href="#" class="btn">resume</a>
		</nav>

		<div id="maincontent">
		<?php
			if(isset($_GET['page'])){
				$c = $_GET['page'];
				switch (strtolower($c)){
					case '1':
						include "inc/one.php";
						break;			
					case '2':
						include "inc/two.php";
						break;
					case '3':
						include "inc/three.php";
						break;
					case 'home':
						include "inc/main.php";
						break;
					default:
						include 'inc/main.php';
				} 
			}	
			else
			{
				include 'inc/main.php';
			}
		?>    
		</div>    
		<?php include 'inc/footer.php';?>		
	</div>
</body>
<script src="script.js"></script>
</html>