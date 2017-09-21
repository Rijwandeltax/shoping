<!DOCTYPE html>
<html lang="en">

<?php Include_Once("header.php");
       Include_Once("sidebar.php");   
 ?>

            
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">CHANGE PASSWORD</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
				
				
				
			
			
	
	
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Change Password</h3>
                    </div>
                    <div class="panel-body">
                        <form  method="post" action="change_pass.php">
                          
                                <div class="form-group input-group">
								
								<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                    <input type="password" name="opass" required="required" class="form-control" placeholder="Enter Old Password"><br>
			         
                                </div>
                                <div class="form-group input-group">
							
								<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                    <input class="form-control" placeholder="Enter New Password" name="npass" type="password" value="" required="required">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Submit">
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
		</div>
</body>
</html>