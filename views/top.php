<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		<title>Home</title>

		<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"-->
		<link href="../../bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/dafYomi.css">

	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar_links">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="http://localhost/chateauDaf/index.php">
						<img id="logo" src="images/logo.new.png" alt="Logo">
					</a>
				</div>
				<div class="collapse navbar-collapse navbar-right" id="navbar_links">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="" class="dropdown-toggle">Shiurim<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="?action=dafYomi">Daf Yomi</a></li>
								<li><a href="?action=chumash">Chumash</a></li>
							</ul>
						</li>
						<li><a href="?action=gallery">Gallery</a></li>
						<li class="dropdown">
							<a href="" class="dropdown-toggle">About<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="?action=bio">Bio</a></li>
								<li><a href="?action=location">Location</a></li>
								<li><a href="?action=contact">Contact Us</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>