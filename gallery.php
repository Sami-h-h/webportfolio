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
	<title>Photo Gallery</title>
	<link rel="stylesheet" href="/assets/css/gallery.css">
	<script src = "gallery.js"></script>
</head>
<body>
	<div class="container">

		
		
	<div id = "image">
		Choose your character
	</div>
	<div class="image">
		<img src="/assets/images/bartender.png">
	</div>
</div>
	
	<div class="select">
	<img class = "preview preview1" name="ayden"  alt = "yes"  src = "/assets/css/gallery-images/gallery (1).gif" onmouseover = "upDate(this)" onmouseout = "unDo()">
	
	<img class = "preview" name="ayden" alt = "Eli" src = "/assets/css/gallery-images/gallery (2).gif" onmouseover = "upDate(this)" onmouseout = "unDo()">
	
	<img class = "preview" id="yes" name="ayden" src = "/assets/css/gallery-images/gallery (3).gif" alt = "Luca" onmouseover = "upDate(this)" onmouseout = "unDo()">

	<img class = "preview" name="ayden" alt = "Blue" src = "/assets/css/gallery-images/gallery.gif" onmouseover = "upDate(this)" onmouseout = "unDo()">

	<img class = "preview" name="ayden"alt = "Kace" src = "/assets/css/gallery-images/gallery (4).gif" onmouseover = "upDate(this)" onmouseout = "unDo()">

</div>
</div>
	
	<div class="pictures" id="imageGallery">
        
	
    </div>

<script>
	const jsonData = {
		"images": [
		 {
			"url": "/assets/css/gallery-images/Aiden.jpeg",
			"alt": "Image 1"
		  },
		  {
			"url": "/assets/css/gallery-images/Eli.jpeg",
			"alt": "Image 2"
		  },
		  
		  {
			"url": "/assets/css/gallery-images/Luca.jpeg",
			"alt": "Image 3"
		  },
		  {
			"url": "/assets/css/gallery-images/Blue.jpeg",
			"alt": "Image 4"
		  },
		  {
			"url": "/assets/css/gallery-images/Blue.jpeg",
			"alt": "Image 5"
		  },
		  {
			"url": "/assets/css/gallery-images/Kace.jpeg",
			"alt": "Image 6"
		  }
		]
	  };

	 

	  const picturesContainer = document.querySelector('.pictures');

	  jsonData.images.forEach((image, index) => {
		  const imgElement = document.createElement('img');
		  imgElement.src = image.url;
		  imgElement.alt = image.alt;
		  imgElement.classList.add('image');
		  picturesContainer.appendChild(imgElement);
	  });
  </script>

</body>
</html>