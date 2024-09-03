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
			background: url(radis.jpg);
		}
		.form{

			width: 300px;
			height: 150px;
			padding-top: 80px;
		}
		.form button{
			background-color: black;
			color: white;
		}
		.form input{
			background-color: lightblue;
			border: hidden;
			border-radius:4px;
		}
		a{
			color: white;
			font-size: 20px;
		}
		.icon{
			width: 200px;
			float: left;
			height: 70px;
		}
		.logo{
			
			height: 150%;
			width: 150%;
			padding-right: 100px;
		}
		.main{
			width: 100%;
		
			background-position: center;
			background-size: cover;
			height: 109vh;
			height: 109vh;
		}
	</style>
</head>
<body>
	<div class="main">
		<div class="icon">
			<img class="logo"src="logo.jpg">
	</div>
<center>
	<div class="form">
		<h2>Admin Login</h2>
		<form method="POST" action="adm.php">
			<table>
				<tr>
					<th>Username</th>
					<td><input type="text" name="username"></td>
				</tr>
					<tr>
					<th>Password</th>
					<td><input type="password" name="password"></td>
				</tr>
			</table>
			<button type="submit" name="submit">Login</button>
		</form>
		
	</div>

</center>
</div>
</body>
</html>