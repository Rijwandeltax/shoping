<!DOCTYPE html>
<html lang="en">
<head>
<title>Fashion Club an Ecommerce Online Shopping Category  Flat Bootstrap responsive Website Template | Single :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
<!--flex slider-->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
</script>
<!--flex slider-->

<script src="js/imagezoom.js"></script>
<!-- //js --> 

</head>
<body>
<?php
if(!isset($_GET["id1"]) || !isset($_GET["id2"]) || !isset($_GET["id3"])){
header("location:index.php?err=1");	
}
else{
$categoryname=$_GET["id1"];
$subcategoryname=$_GET["id2"];
$productname=$_GET["id3"];
include("header.php");
$productname=mysql_real_escape_string($productname);
?>


<div class="products">	 
		<div class="container">  
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
								<?php 
								include("data.php");
								$rs=mysql_query("select * from product where productName='$productname' AND categoryname='$categoryname' AND subcategoryname='$subcategoryname'");
									while($r=mysql_fetch_array($rs)){
										$img=$r[3];
									}
									for($i=1;$i<=3;$i++){
								?>
                                <li data-thumb="myadmin/images/<?=$img?><?=$i?>.jpg">
									<div class="thumb-image detail_images"> <img src="myadmin/images/<?=$img?><?=$i?>.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
                                <?php
									}
									?>
							</ul>
						</div>
					</div>
                    <?php 
								include("data.php");
								$rs=mysql_query("select * from product where productName='$productname' AND categoryname='$categoryname' AND subcategoryname='$subcategoryname'");
									while($r=mysql_fetch_array($rs)){
										
									 $rat=(int)$r[12];
								     $rest=5-$rat;
									?>
					<div class="col-md-6 single-top-right">
						<h3 class="item_name"> <?=$r[10]?></h3>
						<p>Processing Time: Item will be shipped out within 2-3 working days. </p>
						<div class="single-rating">
							<ul>
								<?php
							for($j=1;$j<=$rat;$j++){
							?>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <?php
							}
							for($j=1;$j<=$rest;$j++){
							?>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
			                <?php
							}
							?>
								<li class="rating">20 reviews</li>
								
							</ul>
						</div>
						<div class="single-price">
                         <?php
							$rupess = (int)($r[5] - ($r[5]* ($r[6]/ 100)));
							?>
							<ul>
								<li>&#8377; <?=$rupess?></li>  
								<li><del>&#8377; <?=$r[5]?></del></li> 
								<li><span class="w3off"><?=$r[6]?> % OFF</span></li> 
								<li>Ends on: Oct,15th</li>
								
							</ul>	
						</div> 
						
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="add" value="1" /> 
							<input type="hidden" name="w3ls1_item" value="Handbag" /> 
							<input type="hidden" name="amount" value="<?=$rupess?>" /> 
							<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
						</form>
						
					</div>
				   <div class="clearfix"> </div>  
				</div>
			</div> 
				
			<!-- collapse-tabs -->
			<div class="collpse tabs">
				<h3 class="w3ls-title">About this item</h3> 
				<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> Description <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body" style="padding-left:30px">
								<?=$r[4]?>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
			<!-- //collapse --> 
		</div>
	</div>
    <?php
		}
		include("footer.php");
        }
		?>
 </body>
</html>
