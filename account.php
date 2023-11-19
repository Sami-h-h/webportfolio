<?php 
	session_start();
	if(!isset($_SESSION['user'])){
		header("location: login.php");	exit();
	}

	if(isset($_GET['logout'])){
		unset($_SESSION['user']);
		header("location: login.php");	exit();
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="/assets/css/style1.css">
	 <script src = "gallery.js"></script>
	<title>User account</title>
</head>
<body class="home">

	<header>
		<h2 class="logo">Logo</h2>
		<h2 class="logo">Welcome <?php echo $_SESSION['user']; ?><h2>
		
		<nav class="navigation">
			<a name="a1" href="#">Home</a>
			<a name="a1" href="gallery.php">Pick Your Character</a>
			<a name="a1" href="?logout">Portfolio</a>
			
			<button class="btnLogin-popup" onclick="redirectToLink('?logout')">Logout</button>
			
			
			
		</nav>
	</header>



	<!--<div class="content">
		<header>
			
			<a href="?logout">Log out</a>	
		</header>

		<main>
			<h3>Some user actions ......</h3>
		</main>
	</div>-->
	<script>
        // JavaScript function to redirect to a link
        function redirectToLink(link) {
            window.location.href = link;
        }
    </script>

</body>
</html>