<!DOCTYPE html>
<?php
	session_start();
	//$_SESSION['priveleges'] = 2;
	include 'connect.php';
?>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="author" content="Filip Vasiljević"/>
		<meta name="description" content="Proof of concept LMS platform made for the TVZ-MC2 contest"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="icon" type="image/png" href="img/favicon.png"/>
		
		<link rel="stylesheet" type="text/css" href="style.css"/>
		
		<title>FreeLMS</title>
		
	</head>
	
	<body>
	
		<div class="Main">
			<nav>
				<header>
						<div class="col"> <img src="img/Logo.png" width="50%"> </div>
						<div class="col"></div>
						<div class="col"></div>
						<div class="col"></div>
						<div class="col"><a href="#">My Profile or Login</a></div>
				</header>
			</nav>
			
			<div class="addBanner">
				<img src="img/exampleBannerAdd.png" width="70%">
				&nbsp;
			</div>
			
			<div style="width:100%; height:1000px; background-color: white;">
				<div class="repoSuggest"><a href="#">
					<img src="img/python.png"/>
					<br><br><br>
					<h1>Uvod u python</h1>
					<p>Description</p>
					</a>
				</div>
				
				<div class="repoSuggest"><a href="#">
					<img src="img/python.png"/>
					<br><br><br>
					<h1>Uvod u python</h1>
					<p>Description</p>
					</a>
				</div>
				
				<div class="repoSuggest"><a href="#">
					<img src="img/python.png"/>
					<br><br><br>
					<h1>Uvod u python</h1>
					<p>Description</p>
					</a>
				</div>
				
				<div class="repoSuggest"><a href="#">
					<img src="img/python.png"/>
					<br><br><br>
					<h1>Uvod u python</h1>
					<p>Description</p>
					</a>
				</div>
			</div>
		
		
		
		</div>


	</body>