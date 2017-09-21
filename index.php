<!DOCTYPE html>
<html lang="en">
<head>
<title>Fashion Club an Ecommerce Online Shopping Category  Flat Bootstrap responsive Website Template | Home :: w3layouts</title>
<style>
</style>
<?php
include("script.php");
include("header.php");
?>
<div class="banner-agile">
	<div class="container">
		<h2>WELCOME TO</h2>
		<h3>FASHION <span>CLUB</span></h3>
		<p>This is the what a amzing website for you to buy products </p>
		<a href="about.php">Read More</a>
	</div>
</div> 
<!-- now the main page is start -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
        <?php
         include("data.php");
         	$rs=mysql_query("select * from category");
         		while($r=mysql_fetch_array($rs)){
				
         ?>
		<div class="col-md-4 bb-grids bb-middle-agileits-w3layouts" style="margin-bottom:20px;" >
			<a href="subcategory.php?id9=<?=$r[1]?>"><div class="bb-middle-top">
				<h3><?=$r[1]?></h3>
				
			</div></a>
		</div>
        <?php
				}
				?>
		<div class="clearfix"></div>
	</div>
</div>

<!-- the new row is start -->
<div class="top-products">
	<div class="container">
		<h3>Top Products</h3>
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Men's</span></li>
					<li class="resp-tab-item"><span>Women</span></li>
					<li class="resp-tab-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Kids</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>	
					<li class="resp-tab-item"><span>Cosmetics</span></li>					
				</ul>	
				
                <div class="clearfix"> </div>	
				<div class="resp-tabs-container">
                  <div class="tab-1 resp-tab-content">
                    
                                     <?php
                                  $rs=mysql_query("select * from product where categoryname='MEN' order by rating DESC LIMIT 8");
                                  while($r=mysql_fetch_array($rs)){
								  $rat=(int)$r[12];
								  $rest=5-$rat;
                                ?>
						<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                        
                               
                        
							<a href="single.php?id1=<?=$r[1]?>&id2=<?=$r[2]?>&id3=<?=$r[10]?>"><div class="product-img">
								<img src="myadmin/images/<?=$r[3]?>1.jpg" alt=""  />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
									<input type="hidden" name="amount" value="<?=$r[5]?>" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
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
							<h4><?=$r[10]?></h4>
                            <?php
							$rupess = (int)($r[5] - ($r[5]* ($r[6]/ 100)));
							?>
				<h5> &#8377; <?=$rupess?> &nbsp;  <s style="color:#999; font-size:14px">&#8377; <?=$r[5]?></s>&nbsp;  <span style="color:#388e3c; font-size:14px">% <?=$r[6]?> off</span> </h5>
                            
						</div>
						
						
						<?php
							}
							?>
					
						
						
						
						
					
						<div class="clearfix"></div>
						
					</div>
                
                
					<div class="tab-1 resp-tab-content">
                    
                                     <?php
                              $rs=mysql_query("select * from product where categoryname='WOMEN' order by rating DESC LIMIT 8");
                                  while($r=mysql_fetch_array($rs)){
								   $rat=(int)$r[12];
								  $rest=5-$rat;
                                ?>
						<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                        
                               
                        
							<a href="single.php?id1=<?=$r[1]?>&id2=<?=$r[2]?>&id3=<?=$r[10]?>"><div class="product-img">
								<img src="myadmin/images/<?=$r[3]?>1.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
									<input type="hidden" name="amount" value="220.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
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
							<h4><?=$r[10]?></h4>
                            <?php
							$rupess = (int)($r[5] - ($r[5]* ($r[6]/ 100)));
							?>
				<h5> &#8377; <?=$rupess?> &nbsp;  <s style="color:#999; font-size:14px">&#8377; <?=$r[5]?></s>&nbsp;  <span style="color:#388e3c; font-size:14px">% <?=$r[6]?> off</span> </h5>
                            
						</div>
						
						
						<?php
							}
							?>
					
						
						
						
						
					
						<div class="clearfix"></div>
						
					</div>
                    
					<div class="tab-1 resp-tab-content">
                    
                    
                                     <?php
                                $rs=mysql_query("select * from product where categoryname='KIDS' order by rating DESC LIMIT 8");
                                  while($r=mysql_fetch_array($rs)){
									   $rat=(int)$r[12];
								       $rest=5-$rat;
                                ?>
                              
						<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
							<a href="single.php?id1=<?=$r[1]?>&id2=<?=$r[2]?>&id3=<?=$r[10]?>"><div class="product-img">
								<img src="myadmin/images/<?=$r[3]?>1.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Handbag" /> 
									<input type="hidden" name="amount" value="90.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
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
							<h4><?=$r[10]?></h4>
                           <?php
							$rupess = (int)($r[5] - ($r[5]* ($r[6]/ 100)));
							?>
				<h5> &#8377; <?=$rupess?> &nbsp;  <s style="color:#999; font-size:14px">&#8377; <?=$r[5]?></s>&nbsp;  <span style="color:#388e3c; font-size:14px">% <?=$r[6]?> off</span> </h5>
						</div>
						<?php
								  }
								  ?>
						<div class="clearfix"></div>
											
					</div>
                    		
					 <div class="tab-1 resp-tab-content">
                    
                                    <?php
                                $rs=mysql_query("select * from product where categoryname='other' order by rating DESC LIMIT 8");
                                  while($r=mysql_fetch_array($rs)){
								  		 $rat=(int)$r[12];
								       $rest=5-$rat;	
                                ?>
                             
						<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
							<a href="single.php?id1=<?=$r[1]?>&id2=<?=$r[2]?>&id3=<?=$r[10]?>"><div class="product-img">
								<img src="myadmin/images/<?=$r[3]?>1.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Eye makeup" /> 
									<input type="hidden" name="amount" value="90.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
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
							<h4><?=$r[10]?></h4>
                           <?php
							$rupess = (int)($r[5] - ($r[5]* ($r[6]/ 100)));
							?>
				<h5> &#8377; <?=$rupess?> &nbsp;  <s style="color:#999; font-size:14px">&#8377; <?=$r[5]?></s>&nbsp;  <span style="color:#388e3c; font-size:14px">% <?=$r[6]?> off</span> </h5>
						</div>
						<?php
								  }
						 ?>
						
						
						<div class="clearfix"></div>	
						
						
							
											
						<div class="clearfix"></div>
						</div>
					</div>						
				</div>
			</div>
		</div>	
	</div>
</div>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});		
	</script>
<div class="fandt">
	<div class="container">
		<div class="col-md-6 features">
			<h3>Our Services</h3>
			<div class="support">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-user " aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>24/7 online free support</h4>
					<p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="shipping">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-bus" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>Free shipping</h4>
					<p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
				</div>	
				<div class="clearfix"></div>
			</div>
			<div class="money-back">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-money" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>100% money back</h4>
					<p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
				</div>	
				<div class="clearfix"></div>				
			</div>
		</div>
		<div class="col-md-6 testimonials">
			<div class="test-inner">
				<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<img src="images/c1.png" alt=" " class="img-responsive" />
								<p>Nam elementum magna id nibh pretium suscipit varius tortor. Phasellus in lorem sed massa consectetur fermentum. Praesent pellentesque sapien euismod.</p>
								<h4># Andrew</h4>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<img src="images/c2.png" alt=" " class="img-responsive" />
								<p>Morbi semper, risus dignissim sagittis iaculis, diam est ornare neque, accumsan risus tortor at est. Vivamus auctor quis lacus sed interdum celerisque.</p>
								<h4># Lucy</h4>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<img src="images/c3.png" alt=" " class="img-responsive" />
								<p>Fusce non cursus quam, in hendrerit sem. Nam nunc dui, venenatis vitae porta sed, sagittis id nisl. Pellentesque celerisque  eget ullamcorper vehicula. </p>
								<h4># Martina</h4>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
				<script src="js/jquery.wmuSlider.js"></script> 
								<script>
									$('.example1').wmuSlider();         
								</script> 
</div>
<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Top Brands</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">			
					<li>
						<img src="images/4.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/5.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/6.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/7.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/46.jpg" alt=" " class="img-responsive" />
					</li>
				</ul>
			</div>
					<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: false,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
<!-- //top-brands -->
<!-- newsletter -->
<?php
include("footer.php");
?>



</body>
</html>