<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Kisaan mitra</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="stylesheet" href="indexfooter.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>

	<?php
		require 'menu.php';
	?>

		<!-- Banner -->
			<section id="banner" class="wrapper">
				<h2>Kisaan Mitra</h2>
				<p>Your Product Our Market</p>
				<br><br>
				<center>
					<div class="row uniform">
						<div class="6u 12u$(xsmall)">
							<button class="button fit" onclick="document.getElementById('id01').style.display='block'" style="width:auto">LOGIN</button>
						</div>

						<div class="6u 12u$(xsmall)">
							<button class="button fit" onclick="document.getElementById('id02').style.display='block'" style="width:auto">REGISTER</button>
						</div>
					</div>
				</center>


			</section>

		<!-- One -->
			<section id="one" class="wrapper style1 align-center">
				<div class="container">
					<header>
						<h2>Kisaan Mitra</h2>
						<p>Explore the new way of trading...</p>
					</header>
					
					<div class="row 200%">
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-sign-in"></i>
							<p><button class="btn btn-warning"><a href="#">REGISTER HERE</a></button></p>
						</section>
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-comments"></i>
							<p><button class="btn btn-warning"><a href="blog.php">AGRO BLOG</a></button></p>
						</section>
						<section class="4u$ 12u$(small)">
							<i class="icon big rounded fa-shopping-cart"></i>
							<p><button class="btn btn-warning"><a href="market.php">DIGITAL MARKET</a></button></p>
						</section>
					</div>
				</div>
			</section>
			<section id="one" class="wrapper style1 align-center">
				<div class="container">
					<div class="row 200%">
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-sun-o"></i>
							<p><button class="btn btn-warning"><a href="https://5cb0c3b326ee.ngrok.io" target="_blank">WEATHER</a></button></p>
						</section>
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-money"></i>
							<p><button class="btn btn-warning"><a href="price.html" target="_blank">LIVE PRICING</a></button></p>
						</section>
						<section class="4u$ 12u$(small)">
							<i class="icon big rounded fa-file-video-o"></i>
							<p><button class="btn btn-warning"><a href="videos.html" target="_blank">VIDEO LIBRARY</a></button></p>
						</section>
					</div>
				</div>
			</section>
			<section id="one" class="wrapper style1 align-center">
				<div class="container">
					<div class="row 200%">
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-question-circle"></i>
							<p><button class="btn btn-warning"><a href="faq.html" target="_blank">FAQ</a></button></p>
						</section>
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-phone"></i>
							<p><button class="btn btn-warning"><a href="finofo.html" target="_blank">NATIONAL HELPLINES</a></button></p>
						</section>
						<section class="4u$ 12u$(small)">
							<i class="icon big rounded fa-phone"></i>
							<p><button class="btn btn-warning"><a href="statelevel.html" target="_blank">STATE HELPLINE</a></button></p>
						</section>
					</div>
				</div>
			</section>
			<section id="one" class="wrapper style1 align-center">
				<div class="container">
					<div class="row 200%">
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-phone"></i>
							<p><button class="btn btn-warning"><a href="kisan_nodal_level.html" target="_blank">Nodal Level</a></button></p>
						</section>
						
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-camera-retro"></i>
							<p><button class="btn btn-warning"><a href="disease/disease.html" target="_blank">DISEASE DETECTION</a></button></p>
						</section>
						<section class="4u$ 12u$(small)">
							<i class="icon big rounded fa-line-chart"></i>
							<p><button class="btn btn-warning"><a href="disease/normalyield.html" target="_blank">PREDICT YIELD</a></button></p>
						</section>
						
					</div>
				</div>
			</section>
			


		<!-- Footer -->
		<footer class="footer-distributed" style="background-color:black" id="aboutUs">
		<center>
			<h1 style="font: 35px calibri;">About Us</h1>
		</center>
		<div class="footer-left">
			<h3 style="font-family: 'Times New Roman', cursive;">Kisaan Mitra &copy; </h3>
		<!--	<div class="logo">
				<a href="index.php"><img src="images/logo.png" width="200px"></a>
			</div>-->
			<br />
			<p style="font-size:20px;color:white">Your product Our market !!!</p>
			<br />
		</div>

		<div class="footer-center">
			<div>
				<i class="fa fa-map-marker"></i>
				<p style="font-size:20px">Kisaan Mitra Fam</p>
			</div>
			<div>
				<i class="fa fa-phone"></i>
				<p style="font-size:20px">123456789</p>
			</div>
			<div>
				<i class="fa fa-envelope"></i>
				<p style="font-size:20px"><a href="mailto:kisaanmitra@gmail.com" style="color:white">demo@demo.com</a></p>
			</div>
		</div>

		<div class="footer-right">
			<p class="footer-company-about" style="color:white">
				<span style="font-size:20px"><b>About Kisaan Mitra</b></span>
				Kisaan Mitra is e-commerce trading platform for grains & grocerries...
			</p>
			
			<div class="footer-icons">
				<a  href="#"><i style="margin-left: 0;margin-top:5px;"class="fa fa-facebook"></i></a>
				<a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-instagram"></i></a>
				<a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-youtube"></i></a>
			</div>
		</div>

	</footer>


			<div id="id01" class="modal">

  <form class="modal-content animate" action="Login/login.php" method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
    <h3>Login</h3>
							<form method="post" action="Login/login.php">
								<div class="row uniform 50%">
									<div class="7u$">
										<input type="text" name="uname" id="uname" value="" placeholder="UserName" style="width:80%" required/>
									</div>
									<div class="7u$">
										<input type="password" name="pass" id="pass" value="" placeholder="Password" style="width:80%" required/>
									</div>
								</div>
									<div class="row uniform">
                                        <div style="display: none;">
                                            <p>
				                            <b>Category : </b>
				                        </p>
				                        <div class="3u 12u$(small)">
				                            <input type="radio" id="farmer" name="category" value="1" checked>
				                            <label for="farmer">Farmer</label>
				                        </div>
				                        <div class="3u 12u$(small)">
				                            <input type="radio" id="buyer" name="category" value="0">
				                            <label for="buyer">Buyer</label>
				                        </div>
                                        </div>
									</div>
									<center>
									<div class="row uniform">
										<div class="7u 12u$(small)">
											<input type="submit" value="Login" />
										</div>
									</div>
									</center>
                                </form>
								
							
</div>
    
  </form>
</div>


<div id="id02" class="modal">

  <form class="modal-content animate" action="Login/signUp.php" method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

<section>
							<h3>SignUp</h3>
							<form method="post" action="Login/signUp.php">
								<center>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Name" required/>
									</div>
									<div class="3u 12u$(xsmall)">
										<input type="text" name="uname" id="uname" value="" placeholder="UserName" required/>
									</div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
										<input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required/>
									</div>

									<div class="3u 12u$(xsmall)">
										<input type="email" name="email" id="email" value="" placeholder="Email" required/>
									</div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
			                            <input type="password" name="password" id="password" value="" placeholder="Password" required/>
			                        </div>
			                        <div class="3u 12u$(xsmall)">
			                            <input type="password" name="pass" id="pass" value="" placeholder="Retype Password" required/>
			                        </div>
								</div>
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="addr" id="addr" value="" placeholder="Address" style="width:80%" required/>
									</div>
								</div>
								<div class="row uniform">
                                    <div style="display: none;">
									<p>
			                            <b>Category : </b>
			                        </p>
			                        <div class="3u 12u$(small)">
			                            <input type="radio" id="farmer" name="category" value="1" checked>
			                            <label for="farmer">Farmer</label>
			                        </div>
			                        <div class="3u 12u$(small)">
			                            <input type="radio" id="buyer" name="category" value="0">
			                            <label for="buyer">Buyer</label>
			                        </div>
								</div>
                                    </div>
								<div class="row uniform">
									<div class="3u 12u$(small)">
										<input type="submit" value="Submit" name="submit" class="special" />
									</div>
									<div class="3u 12u$(small)">
										<input type="reset" value="Reset" name="reset"/>
									</div>
								</div>
							</center>
							</form>
						</section>

    </div>
  </form>
</div>



<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal1= document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

</script>


	</body>
</html>
