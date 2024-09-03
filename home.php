<?php include 'dashboard.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.main{
			width: 100%;
			background: url(radis.jpg);
			background-position: center;
			background-size: cover;
			height: 109vh;
			height: 109vh;
		}
		.navbar{
			width: 1200px;
			height: 75px;
			margin: auto;

		}
		.icon{
			width: 200px;
			float: left;
			height: 70px;
		}
		.logo{
			
			height: 180%;
			width: 170%;
			padding-right: 100px;
		}
		.content{
			color: white;
			padding-top: 130px;
		}
	</style>
</head>
<body>
	<center>
	
	<div class="main">
	<div class="navbar">
		<div class="icon">
			<img class="logo"src="logo.jpg">
	
	<div class="content">
				<h2>PROPERTY FOR SALE</h2>
		</div>
	</div>
	</div>
</div>
	<p>Search for property</p>
	<select>
		<option>Status</option>
		<option>Buy</option>
		<option>Rent</option>
	</select>
		<select>
		<option>Type</option>
		<option>Apartement</option>
		<option>Hotel/Guesthouse</option>
		<option>House</option>
		<option>Land</option>
		<option>Office</option>
		<option>Warehouse</option>
	</select>
		<select>
		<option>Neighborhood</option>
		<option>Kimihurura</option>
		<option>Kimironko</option>
		<option>Kacyiru</option>
		<option>Nyarutarama</option>
		<option>Kicukiro</option>
		<option>Kiyovu</option>
	</select>
		<select>
		<option>Bedrooms</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>

	</select>
	<p>search property</p>
	<div class="container">
	<table>	
		<tr>
	<th><img src="kiy1.jpg" alt="image" width="400" height="350" ><a href="kiy.php">Apartement for rent in Kiyovu </a></th>
	<th><img src="kab1.jpg" alt="image" width="400" height="350"><a href="kab.php">Apartement for rent in Kabuga</a></th>
	<th><img src="kim1.jpg" alt="image" width="400" height="350"><a href="kim.php">Apartement for rent in Kimihurura</a></th></tr>&nbsp&nbsp&nbsp
	<th><img src="kag1.jpg" alt="image" width="400" height="350"><a href="kag.php">Apartement for rent in Kagugu</a></th>
	<th><img src="kag1.jpg" alt="image" width="400" height="350"><a href="kag.php">Apartement for rent in Kagugu</a></th>
	<th><img src="kacy1.jpg" alt="image" width="400" height="350"><a href="kacy.php">Apartement for rent in Kacyiru</a></th>
	</tr>
</table>
</center>
</body>
</html>