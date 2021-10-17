<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>DOOKKI MALAYSIA</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand">
					<img src="logo2.png" alt="" />
				</a>
				<div>
				<?php
					if(isset($_SESSION['uid']))
					{
					?>
					<?php	
					}
					else
					{	
					?>
					<a href="registration.php">New User</a>&nbsp;&nbsp;&nbsp;<a href="pre_login.php">Login</a>
					<?php
					}
					?>
			</div>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
						<li class="nav-item"><a class="nav-link" href="review.php">Feedback</a></li>

					<?php
					if(isset($_SESSION['uid']))
					{
					?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown"> <?php echo $_SESSION['uid']; ?></a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="testProfile.php">Profile</a>
								<a class="dropdown-item" href="cart.php">Cart</a>
								<a class="dropdown-item" href="logout.php" onclick="return confirm('Are you sure you want to logout?');">Log Out</a>
							</div>
						</li>
					<?php
					}
					?>
				</div>
			</div>
		</nav>
	</header>