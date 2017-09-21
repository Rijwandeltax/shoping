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
                        <h1 class="page-header">Sales & Product Department </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                <?php
				
				if(isset($_GET["succ"])){
		       ?>
		  <div class="alert alert-success alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Success!</strong>
               </div>
	   <?php
				}
	  else if(isset($_GET["err"])){
		  ?>
		    <div class="alert alert-danger alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Error!</strong> There is a error in data error.
               </div>
			   <?php
	  }
	  ?>
               </div> 
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   

</body>

</html>
