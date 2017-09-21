 <!DOCTYPE html>
<html lang="en">
<head>
<title>Fashion Club an Ecommerce Online Shopping Category  Flat Bootstrap responsive Website Template | Men :: w3layouts</title>
<?php
include("script.php");
 If(!isset($_GET["id9"])){
	  header("location:index.php?err=1");
	 }
 else{
	 $sort='ASC';
	 $which='rand()';
	  $categoryname=$_GET["id9"];
	 if(!isset($_GET["id8"])){
		 include("data.php");
			 $km=mysql_query("select * from product where categoryname='$categoryname'");
			 if($kms=mysql_fetch_array($km)){
			  $subcategoryname=$kms[2];
	   			 }
	 }
	 else{
		  $subcategoryname=$_GET["id8"];
	 }
	
	
	 if(isset($_GET["id4"]) && isset($_GET["id10"]) ){
		 $sort=$_GET["id4"];
		 $which=$_GET["id10"];
	 }
	 include("header.php");
  ?>

<div class="sub-banner my-banner3">
</div>

<!-- start the men clothing -->

<div class="content">
	<div class="container">
		<div class="col-md-4 w3ls_dresses_grid_left">
			<div class="w3ls_dresses_grid_left_grid">
				<h3>Categories</h3>
					<div class="w3ls_dresses_grid_left_grid_sub">
						<div class="ecommerce_dres-type">
							<ul>
                             
                             <?php   
											   include("data.php"); 
                                               $rs=mysql_query("select * from subcategory where categoryname='$categoryname'");
                                                 while($r=mysql_fetch_array($rs)){
												$cat=$r[1];
                              ?>
                                            
												<li><a href="subcategory.php?id9=<?=$categoryname?>&id8=<?=$r[3]?>"><?=$r[3]?></a></li>
							<?php
								}
							 ?>				
							</ul>
						</div>
					</div>
			</div>
			<div class="w3ls_dresses_grid_left_grid">
				<h3><i class="fa fa-sort fa-fw"></i>Sort</h3>
				<div class="w3ls_dresses_grid_left_grid_sub">
					<div class="ecommerce_color ecommerce_size">
						<ul>
							<li><a href="subcategory.php?id8=<?=$subcategoryname?>&id4=ASC&id9=<?=$categoryname?>&id10=price">Price: Low - High</a></li>
                            <li><a href="subcategory.php?id8=<?=$subcategoryname?>&id4=DESC&id9=<?=$categoryname?>&id10=price">Price: High - Low</a></li>
                            <li><a href="#">Popularity</a></li>
							<li><a href="subcategory.php?id8=<?=$subcategoryname?>&id4=DESC&id9=<?=$categoryname?>&id10=date">Newest</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="w3ls_dresses_grid_left_grid">
				<h3>Size</h3>
				<div class="w3ls_dresses_grid_left_grid_sub">
					<div class="ecommerce_color ecommerce_size">
						<ul>
							<li><a href="#">Newest</a></li>
							
						</ul>
					</div>
				</div>
			</div>
			<div class="w3ls_dresses_grid_left_grid">
				<div class="dresses_img_hover">
					<img src="images/offer2.jpg" alt=" " class="img-responsive" />
					<div class="dresses_img_hover_pos">
						<h4>Upto<span>50%</span><i>Off</i></h4>
					</div>
				</div>
			</div>
		</div>
        <!-- Start the products -->
		<div class="col-md-8 col-sm-8 women-dresses">
         <label class="label label-success" style="font-size:16px"> Category:<?=$subcategoryname?> </label><br><br>
			<div class="women-set1">
           
             <!-- php is start by sub category and category wise -->
             <?php
			 include("data.php");
			
             $rs=mysql_query("select * from product where categoryname='$categoryname' AND subcategoryname='$subcategoryname' order by $which $sort");
			  while($r=mysql_fetch_array($rs)){
				  
			                      $rat=(int)$r[12];
								  $rest=5-$rat;
			 
			 ?>
				<div class="col-md-4 women-grids wp1 animated wow slideInUp" data-wow-delay=".5s">
					<a href="single.php?id1=<?=$r[1]?>&id2=<?=$r[2]?>&id3=<?=$r[10]?>"><div class="product-img">
						<img src="myadmin/images/<?=$r[3]?>1.jpg" alt="" />
						<div class="p-mask">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" /> 
								<input type="hidden" name="w3ls1_item" value="<?=$r[2]?>" /> 
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
           
		</div>
	</div>
</div>
<!-- newsletter -->
	<?php
	include("footer.php");
	?>
	<!-- //cart-js --> 
    <?php
		}
	 ?>
</body>
</html>
