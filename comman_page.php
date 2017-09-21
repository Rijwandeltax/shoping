<?php
if(empty($_GET["id18"])){
	header("location:index.php");
}
else{
    $id18=$_GET["id18"];
	include("data.php");
	 $sql=mysql_query("select * from commanpage where pageTitle='$id18' AND isDelete=0");
       while($r=mysql_fetch_array($sql)){

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$r[1]?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?=$r[3]?>">
<meta name="keywords" content="<?=$r[2]?>" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<style>
.contact input[type="email"] {
    width: 47%;
    padding: 10px;
    background: transparent;
	border:1px solid #000;
    margin: 10px 14px 13px 0px;
    color: #000;
	outline:none;
}
</style>
<body>
<?php

include("header.php");
?>


<div class="sub-banner">
</div>

<?php
if($id18=='ABOUT'){
	?>
<div class="about">
	<div class="container">
		<h3>About Us</h3>
		<div class="about-info">
			<div class="col-md-10 about-grids">
					<p><?=$r[4]?></p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

<!-- //about -->
<!-- about-bottom -->
	
<!-- //about-bottom -->
<!--team-->
<div class="team" id="team">
	<div class="container">
		<h3> Our Team</h3>
		<div class="team-grids">
			<div class="col-md-3 team-grid">
									<div class="team-img">
										<img src="images/t1.jpg" class="img-responsive" alt=" " />
										<figcaption class="overlay">
											<div class="social-icon">
												<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
												<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
												<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
												<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
											</div>
										</figcaption>
									</div>
									<h4>John Filmr Doe</h4>
									<h5>Managing Director</h5>
			</div>
			<div class="col-md-3 team-grid">
				<div class="team-img">
					<img src="images/t3.jpg" class="img-responsive" alt=" " />
					<figcaption class="overlay">
						<div class="social-icon">
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</div>
					</figcaption>
				</div>
				<h4>Jaye Smith</h4>
				<h5>Lead Developer</h5>
			</div>
			<div class="col-md-3 team-grid">
				<div class="team-img">
					<img src="images/t2.jpg" class="img-responsive" alt=" " />
					<figcaption class="overlay">
						<div class="social-icon">
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</div>
					</figcaption>
				</div>
				<h4>Mike Arney</h4>
				<h5>Fashion Designer</h5>
			</div>
			<div class="col-md-3 team-grid">
				<div class="team-img">
					<img src="images/t4.jpg" class="img-responsive" alt=" " />
					<figcaption class="overlay">
						<div class="social-icon">
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</div>
					</figcaption>
				</div>
				<h4>Michele Lampa</h4>
				<h5>fashion Designer</h5>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--team-->

<?php
}
else if($id18=='CONTACT'){

?>
<div class="contact">
	<div class="container">
		<h3>Contact Us</h3>
		<div class="col-md-3 col-sm-3 contact-left">
			<?=$r[4]?>
		</div>
		<div class="col-md-9 ">
			<form action="https://docs.google.com/forms/d/e/1FAIpQLSdeadVX5H953I8EppdAtzqJY3BzVe5wi4yTMzcFfhOCWpXSkg/formResponse" method="post">
                
				<input type="text" name="entry.2005620554"  placeholder="Your name" id=mG61Hd  required>
				<input type="email" name="entry.1045781291"  placeholder="Your email" id=mG61Hd required>
				<input type="text" name="entry.839337160"  placeholder="Your subject" id=mG61Hd required>
				<input type="text" name="entry.1166974658"  placeholder="Phone number" id=mG61Hd required min="10">
				<textarea  name="entry.241418100" placeholder="Your message"  id=mG61Hd required></textarea>
				<input type="submit" value="Send message" class="btn btn-primary">
			</form>
		</div>
	</div>
</div>
<div class="map-w3ls">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14286.334781121663!2d74.610831!3d26.469145!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3a084afc89230c18!2sDexterwit!5e0!3m2!1sen!2sin!4v1503741080809" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<?php
}
include("footer.php");
?>


<!-- newsletter -->
	
</body>
</html>
<?php
}
}
?>