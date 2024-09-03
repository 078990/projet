<?php 	

include 'dashboard.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		
body{
		padding: 0;
		margin: 0;
		background-color: floralwhite;
	}
	.slide{
		overflow: hidden;
		height: 800px;
		width: 1200px;
		margin-left: 360px;
		margin-top: 20px;
	}

	@keyframes slide_animation{
		0%{left: 0px;}
		10%{left: 0px;}
		20%{left: 1200px;}
		30%{left: 1200px;}
		40%{left: 2400px;}
		50%{left: 2400px;}
		60%{left: 1200px;}
		70%{left: 1200px;}
		80%{left: 0px;}
		90%{left: 0px;}
		100%{left: 0px;}
	}
	.slide-image{
		width: 3300px;
		height: 800px;
		margin: 0 0 0 -2400px;
		position: relative;
		-webkit-animation-name: slide_animation;
		-webkit-animation-duration: 10s;
		-webkit-animation-riteration-count: infinite;
		-webkit-animation-direction: alternate;
		-webkit-animation-play-state: running;
	}
	.img-container{
		height: 800px;
		width: 1000px;
		position: relative;
		float: left;
	}

	</style>
	
</head>
<body>
<div class="slide">
	<div class="slide-image">
		<div class="img-container">
			<img src="kim1.jpg">
		</div>
		<div class="img-container">
			<img src="kim2.jpg">
		</div>
		<div class="img-container">
			<img src="kim3.jpg">
		</div>
		<div class="img-container">
			<img src="kim4.jpg">
		</div>
	</div>
</div>
<div class="form"><form method="POST" action="req.php">
	<h2>Request information</h2>
	<table>
		<tr>
			<td><input type="text" name="name" placeholder="Enter name"></td>

		</tr>
		<tr>
			<td><input type="number" name="phone" placeholder="Enter phone number"></td>

		</tr>
		<tr>
			<td><input type="text" name="email" placeholder="Enter email"></td>

		</tr>
		<tr>
			<td><input type="text" name="message" placeholder="Enter message"></td>

		</tr>

	</table><br>
	<button type="submit" name="submit">Send </button>
</form></div>
</body>
</html>