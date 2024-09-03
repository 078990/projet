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
		.slide {
			overflow: hidden;
		}
		.slide figure{
			position: relative;
			width: 300%;
			margin: 0;
			left: 0;
			animation: 10s  slider infinite;
		}
		.slide figure img{
			float: left;
			width: 20%;
		}
		@keyframes slider{
			0%{
				left: 0;
			}
			20%{
				left: 0;
			}
			25%{
				left: -100%;
			}
			45%{
				left: -100%;
			}
			50%{
				left: -200%;
			}
			70%{
				left: -200%;
			}
			75%{
				left: -300%;
			}
			95%{
				left: -300%;
			}
			100%{
				left: -400%;
			}
		}
	</style>
</head>
<body>
<div class="slide">
	<figure>
		<img src="kiy1.jpg">
		<img src="kiy2.jpg">
		<img src="kiy3.jpg">
		<img src="kiy4.jpg">
		<img src="kiy5.jpg">
	</figure>
</div>
</body>
</html>