<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="index.php"><img src="images/logo2.png" alt=" " /><h1>SHOPING<span>MALL</span></h1></a>
		</div>
		<div class="col-md-6 phone-w3l">
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
				<li><a href="tel:+18045403380">+18045403380</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="header-bottom-w3ls">
	<div class="container">
		<div class="col-md-7 navigation-agileits">
			<nav class="navbar navbar-default">
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
						<li><a href="index.php" class="hyper "><span>Home</span></a></li>
                    <!--start the drop down list    -->
                        	
						
                          
                          <?php
						  include("data.php");
						$ks=mysql_query("select * from category");
						 while($k=mysql_fetch_array($ks)){
							
						?>                  
						<li class="dropdown">
                        
                        
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> <?=$k[1]?> <b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
                                            <?php
											$x=0;
											$ls=mysql_query("select * from subcategory where categoryname='$k[1]'");
											 while($l=mysql_fetch_array($ls)){
												 $x=$x+1;
											if($x<=4){
											?>
                                            
                                            
                                            
												<li><a href="subcategory.php?id8=<?=$l[3]?>&id9=<?=$l[1]?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?=$l[3]?></a></li>
												<?php
											 }
											 }
                                                ?>
										
											</ul>
											
										</div>
										<div class="col-sm-4">
											
											<ul class="multi-column-dropdown">
												<?php
												$x=4;
											$ls=mysql_query("select * from subcategory where categoryname='$k[1]'");
											 while($l=mysql_fetch_array($ls)){
												 $x=$x+1;
											if($l>4 && $l<=8){
											?>
                                            
                                            
                                            
												<li><a href="subcategory.php?id8=<?=$l[3]?>&id9=<?=$l[1]?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?=$l[3]?></a></li>
												<?php
											 }
						                    }
                                                ?>
										
											</ul>
											
										</div>
										<div class="col-sm-4 w3l">
											<a href="jewellery.html"><img src="myadmin/images/<?=$k[2]?>.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li>
                        <?php
						 }
						  $hs=mysql_query("select * from commanpage where isDelete=0 AND actdct=1");
						   while($h=mysql_fetch_array($hs)){
						 ?>
						<li><a href="comman_page.php?id18=<?=$h[1]?>" class="hyper"><span><?=$h[1]?></span></a></li>
                      <?php
						}
						?>
					</ul>
				</div>
			</nav>
		</div>
								<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
				</script>
		<div class="col-md-4 search-agileinfo">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Search for a Product..." required>
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
			</form>
		</div>
		<div class="col-md-1 cart-wthree">
			<div class="cart"> 
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>  
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>