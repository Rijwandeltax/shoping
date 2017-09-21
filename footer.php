
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Newsletter</h3>
				<p>You can subscribe our newsletter by sub,it your mail id.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="demo.php" method="post">
					<input type="email" name="email"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>            <input type="hidden" name="type" value="newsletter"/>
					<input type="submit" value="Subscribe" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grids fgd1">
		<a href="index.php"><img src="images/logo2.png" alt=" " /><h3>SHOPING<span>MALL</span></h3></a>
		<ul>
			<li>1234k Avenue, 4th block,</li>
			<li>Ajmer Rajasthan.</li>
			<li><a href="mailto:rijwanmohmmed@gmail.com">rijwanmohmmed@gmail.com</a></li>
			<a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="https://www.dribbble.com"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
			<a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="https://www.linkedin.com"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</ul>
		</div>
		<div class="col-md-3 footer-grids fgd2">
			<h4>Information</h4> 
			<ul>
				<li><a href="comman_page.php?id18=Contact">Contact Us</a></li>
				<li><a href="#">Terms</a></li>
			
				<li><a href="#">FAQ's</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			<h4>Shop</h4> 
			<ul>
             <?php
         include("data.php");
         	$rs=mysql_query("select * from category");
         		while($r=mysql_fetch_array($rs)){
          ?>
				<li><a href="subcategory.php?id9=<?=$r[1]?>"><?=$r[1]?></a></li>
                <?php
				}
				?>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			<h4>My Account</h4> 
			<ul>
				
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
				<li><a href="comman_page.php?id18=About">About Us</a></li>
				<li><a href="#">Payments</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">© 2017 Shoping Mall . All rights reserved | Design by <a href="http://w3layouts.com">Rijwan Mohmmed</a></p>
	</div>
</div>
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls1.render();

        w3ls1.cart.on('w3sb1_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->  