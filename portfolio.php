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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resume</title>
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="/assets/css/style.css">
  <script src = "gallery.js"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700&display=swap');

* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}
:root {
	--primary-color: #9b62e4;
	--text-color: #727171;
}
html {
	font-size: 10px;
}
body {
	font-family: Inter, sans-serif;
	background-color: #272626;
	color: white;
}

/* common styles */
img {
	width: 100%;
}
a {
	text-decoration: none;
	color: white;
}
.description {
	margin-top: 1rem;
	font-size: 1.5rem;
	font-weight: 400;
	color: var(--text-color);
}
.title {
	color: var(--primary-color);
	font-weight: 700;
	font-size: 2rem;
	text-transform: uppercase;
}
.item_preTitle {
	font-size: 1.4rem;
	color: var(--text-color);
	font-weight: 300;
}
.item_title {
	font-size: 1.6rem;
	color: white;
	font-weight: 500;
	margin: 0.8rem 0;
}
.item_subtitle {
	font-size: 1.4rem;
	color: var(--text-color);
	font-weight: 400;
}

/* layouts */
.container {
	max-width: 1000px;
	width: 90%;
	margin: 0 auto;
	display: grid;
	padding: 5rem;
	background: #272626;
	grid-template-columns: 1fr 1fr;
	gap: 4rem;
}
@media only screen and (max-width: 768px) {
	.container {
		width: 100%;
		grid-template-columns: 1fr;
		padding: 3rem;
		gap: 7rem;
	}
}
.profile {
	grid-column: 1 / -1;
	margin-bottom: 2rem;
}
.group-1,
.group-2 {
	display: flex;
	flex-direction: column;
	gap: 5rem;
}
.group-3 {
	
	width: 100%;
	margin: 0 auto;
	grid-column: 1/-1;
	display: flex;
	flex-direction: row;
	gap: 5rem;
}
.group-3 > div {
	flex: 1;
}
@media only screen and (max-width: 768px) {
	.profile {
		margin-bottom: 0;
	}
	.group-3 {
		flex-direction: column;
	}
}

/* profile */
.profile_container {
	display: flex;
	gap: 2rem;
}
.profile_profileImg {
	max-width: 250px;
}
.profile_name_firstName {
	color: white;
	font-weight: 200;
	font-size: clamp(2rem, 8vw, 4rem);
	text-transform: uppercase;
	display: block;
	margin-bottom: -0.8rem;
}
.profile_name_lastName {
	color: var(--primary-color);
	font-weight: 700;
	font-size: clamp(2.5rem, 15vw, 7rem);
	text-transform: uppercase;
	display: block;
}
.profile_title {
	font-size: 1.5rem;
	font-weight: 400;
	text-transform: uppercase;
}
.downloadBtn {
	display: block;
	text-decoration: underline;
	font-size: 1.6rem;
	margin-top: 1rem;
}
.downloadBtn:hover {
	color: var(--primary-color);
}
@media only screen and (max-width: 768px) {
	.profile_container {
		flex-direction: column;
	}
}

/* Expertise */
.skills_list {
	margin-top: 1rem;
	margin-left: 2rem;
	line-height: 2;
}
.percent
{
    position:relative;
    width: 100%;
    height:10px;
    background:#afa6bb
}
.percent div
{
    position:absolute;
    top: 0;
    left: 0;
    height: 100%;
    background:#5402be;
}

/* Ref  */
.ref_item {
	margin-top: 2rem;
}
.ref_name {
	font-size: 1.6rem;
	font-weight: 700;
}

/* eduction */
.edu_item {
	margin-top: 2rem;
}

/* certification */
.certification_item {
	margin-top: 2rem;
}
/* exp */
.exp_item {
	margin-top: 2rem;
}

/* awards */
.awards_item {
	margin-top: 2rem;
}
/* Interests */
.interest_items {
	margin-top: 2rem;
	display: flex;
	align-items: center;
	flex-wrap: wrap;
	gap: 2rem;
}
.interest_item {
	font-size: 1.5rem;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	gap: 0.5rem;
	color: var(--text-color);
}
.interest_item svg {
	width: 2rem;
}

/* socials */
.social_items {
	margin-top: 2rem;
}
.social_item {
	margin-top: 1.5rem;
	font-size: 1.5rem;
	display: flex;
	gap: 0.5rem;
	align-items: center;
	justify-content: flex-start;
	color: var(--text-color);
}
.social_item:hover {
	color: var(--primary-color);
}
.social_item svg {
	width: 2rem;
}

hr {
	grid-column: 1/-1;
	width: 80%;
	margin: 0 auto;
	margin-top: 5rem;
	margin-bottom: 1rem;
	border: none;
	border-top: 2px solid rgba(128, 128, 128, 0.229);
}
@media only screen and (max-width: 768px) {
	hr {
		margin: 0 auto;
	}
}
  </style>
</head>

<body>
  
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





  <div class="container">
    <div class="profile">
      <div class="profile_container">
        <div class="profile_profileImg">
          <img src="./assets/images/Steve.png" alt="Steve">
        </div>
        <div>
          <h1 class="profile_name">
            <span class="profile_name_firstName">Sami</span>
            <span class="profile_name_lastName">Hammoud</span>
          </h1>
          <p class="profile_title">Software Developer</p>
          <p class="description profile_description">
            
          </p>
          <a class="downloadBtn" href="./Resume.pdf" download="Resume.pdf">Download Resume</a>
        </div>
      </div>
    </div>
    <div class="group-1">
      <div class="skills">
        <h3 class="title">Expertise</h3>
        <ul class="skills_list description">
        <div class="box">
            <li>JavaScript</li>
            <div class="percent">
                <div style ="width:70%;"></div>
            </div>

        </div>
        <div class="box">
            <li>PHP & Wordpress</li>
            <div class="percent">
                <div style ="width:90%;"></div>
            </div>

        </div>
        <div class="box">
            <li>HTML CSS</li>
            <div class="percent">
                <div style ="width:80%;"></div>
            </div>

        </div>
        <div class="box">
            <li>React JS</li>
            <div class="percent">
                <div style ="width:40%;"></div>
            </div>

        </div>
        <div class="box">
            <li>Webflow</li>
            <div class="percent">
                <div style ="width:50%;"></div>
            </div>

        </div>
        <div class="box">
            <li>Python</li>
            <div class="percent">
                <div style ="width:50%;"></div>
            </div>

        </div>
          
        
        </ul>
      </div>
     

      <div class="edu">
        <h3 class="title">Education</h3>
        <div class="edu_item">
          <p class="item_preTitle">2019-2021</p>
          <h4 class="item_title">Life Science</h4>
          <p class="item_subtitle">
            Al Sabah HighSchool
          </p>
        </div>
        <div class="edu_item">
          <p class="item_preTitle">2021-2024</p>
          <h4 class="item_title">BS in Computer Science</h4>
          <p class="item_subtitle">
            Lebanese American University
          </p>
        </div>
      </div>

     
         

      
    </div>
    <div class="group-2">
      <div class="exp">
        <h3 class="title">Experience</h3>
        <div class="exp_item">
          <p class="item_preTitle">2021 - present</p>
          <h4 class="item_title">Pulp</h4>
          <p class="item_subtitle">FullStack Developer</p>
          
        </div>
       
      </div>
     
      <div class="awards">
        <h3 class="title">Awards</h3>
        <div class="awards_item">
          
          <h4 class="item_title">Creative Writing </h4>
          <p class=" description">
           Lebanese American University
          </p>
        </div>
        <div class="awards_item">
          
          <h4 class="item_title">Model United Nations (Best Improvement)</h4>
          <p class="description">
            Lebanese American University
          </p>
        </div>
        

      </div>

      <div class="interest">
        <h3 class="title">Interest</h3>
        <div class="interest_items">
          <div class="interest_item">
            <i data-feather="music"></i>
            <span>Music</span>
          </div>
          <div class="interest_item">
            <i data-feather="book"></i>
            <span>Reading</span>
          </div>
          <div class="interest_item">
            <i data-feather="award"></i>
            <span>Boxing</span>
          </div>
        </div>

      </div>
    </div>
    <hr>
    <div class="group-3">

        <div class="certification" style="width: 100%; margin: 0 auto;">
            <div class="title" style="text-align: center;font-size: 40px;">certification</div>
            <div class="certification_item">
             
              <h4 class="item_title" style="text-align: center;font-size: 25px;">Interactivity with JavaScript</h4>
              <p class="description" style="text-align: center;">
                University of Michigan
              </p>
            </div>
            <div class="certification_item" style="text-align: center;">
             
                <h4 class="item_title" style="font-size: 25px;">Interactivity with JavaScript</h4>
                <p class="description">
                  University of Michigan
                </p>
              </div>
              <div class="certification_item" style="text-align: center;">
             
                <h4 class="item_title" style="font-size: 25px;">Advanced Styling with Responsive Design</h4>
                <p class="description">
                    University of Michigan
                </p>
              </div>
              <div class="certification_item" style="text-align: center;">
             
                <h4 class="item_title" style="font-size: 25px;">Digital Transformation</h4>
                <p class="description">
                    BCG, University of Virginia
                </p>
              </div>
              <div class="certification_item" style="text-align: center;">
             
                <h4 class="item_title" style="font-size: 25px;">Introduction to HTML5</h4>
                <p class="description">
                  University of Michigan
                </p>
              </div>
              <div class="certification_item" style="text-align: center;">
             
                <h4 class="item_title" style="font-size: 25px;">Introduction to CSS3</h4>
                <p class="description">
                  University of Michigan
                </p>
              </div>
              <div class="certification_item" style="text-align: center;">
             
                <h4 class="item_title" style="font-size: 25px;">AI for Everyone</h4>
                <p class="description">
                    DeepLearning.AI
                </p>
              </div>
             
    
          </div>
    </div>
    <hr>
    
    <div class="group-3 " >
      <div class="contact">
        <h3 class="title">Contact</h3>
        <div class="contact_info">
          <p class="description">
            Beirut, Lebanon
          </p>
          <p class="description">
            +76712571
          </p>
          <p class="description">
            samihamoud2003@gmail.com
          </p>
        </div>
      </div>
      <div class="social">
        <h3 class="title">Socials</h3>
        <div class="social_items">
          <a href="#" target="_b" class="social_item">
            <i data-feather="github"></i>
            <span>Sami-h-h</span>
          </a>
          
          <a href="#" target="_blank" class="social_item">
            <i data-feather="linkedin"></i>
            <span>Sami Hammoud</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <script>
    feather.replace()
  </script>
</body>

</html>