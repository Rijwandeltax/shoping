<!DOCTYPE html>
<html lang="en">

<?php
       Include_Once("header.php");
       Include_Once("sidebar.php");
 ?>

            
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category Master</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				
                	<?php
				
				if(isset($_GET["succ"])){
		       ?>
		  <div class="alert alert-success alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Success!</strong>  Successful insert the Category.
               </div>
	   <?php
				}
	  else if(isset($_GET["err"])){
		  ?>
		    <div class="alert alert-danger alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Error!</strong> There is a error in data.
               </div>
			   <?php
	  }
	  else if(isset($_GET["errr"])){
		  ?>
		    <div class="alert alert-danger alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Error!</strong> Already have Category.
               </div>
			   <?php
	  }
	  else if(isset($_GET["suc"])){
		  ?>
		    <div class="alert alert-success alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Success!</strong>Updated the Category .
               </div>
			   <?php
	  }
	   ?>
                
                
                
				
				<div class="row">
				<div class="col-lg-12 col-md-9">
				   <div class="panel panel-default">
				    <div class="panel-heading">
					   Category Master
					</div>
                    <div class="panel-body">
					
					
                      <form method="post" enctype="multipart/form-data" action="category_master_submission.php">
					    
						
						
						<div class="row form-group">
							<div class="col-lg-2">
						      Category Code</div>
							  <div class="col-lg-5">
					    <input type="text" name="code" class="form-control" value="<?php echo  rand(1111111111,9999999999);?>" readonly>
						
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-lg-2">
						      Category Name</div>
							  <div class="col-lg-5">
						<input type="text" name="category_name" class="form-control" placeholder="Category Name" required>
						</div>
						</div>
						
						
						<div class="row form-group">
							<div class="col-lg-2">
						Category Discription</div>
						 <div class="col-lg-5">
						<textarea cols="10" rows="5" placeholder="Discription" class="form-control" name="discription" required></textarea></div></div>
						
						<div class="row form-group">
							<div class="col-lg-2">
						Category Image</div>
						 <div class="col-lg-5">
						<input type="file" class="form-control" name="photo" required></div></div>
						
					
							<input type="submit" class="btn  btn-primary" value="Save">	
                         </form>							
						
				
				</div></div></div></div>
				
				
				
				<div class="row">
				 <div class="col-lg-12">
				  <div class="panel panel-info">
				    <div class="panel-heading">
					   Category Master
					</div>
                    <div class="panel-body">
					<div class="table-responsive">
					  <table class="table table-condensed table-hover table-bordered">
					   <thead>
					    <tr>
						  <td>Sn</td>
						  <td>Category Name</td>
						  <td>Category Code</td>
                          <td>Image</td>
						  <td></td>
						</tr>
                       </thead>
                       <tbody>
					   <?php
					     Include("data.php");
						 $y=0;
					     $rs=mysql_query("select * from category where isDelete=0");
	                       while($r=mysql_fetch_array($rs)){
					   $y=$y+1;
					   ?>
                        <tr>
                          <td><?=$y?></td>
                          <td><?=$r[1]?></td>
                          <td><?=$r[2]?></td>
                          <td><a href="images/<?=$r[2]?>.jpg" ><i class="fa  fa-file-photo-o fa-2x"></i></a></td>
                          <td><a href="delete.php?id1=<?php echo $r[0]?>&id2=category" style="text-decoration:none"><button type="button" class="btn btn-outline btn-primary btn-sm">Delete</button></a>&nbsp;<button type="button" class="btn btn-outline btn-primary btn-sm" data-toggle="modal" data-target="#<?=$r[0]?>"><i class="fa fa-edit fa-fw"></i></button>&nbsp;<a href="actdct.php?id1=<?php echo $r[6]?>&id2=category&id3=<?php echo $r[0]?>" style="text-decoration:none">
                          
                          <?php
						  if($r[6]==1){
							  echo '<button type="button" class="btn btn-success btn-sm">Active</button>';
						  }
						  else if($r[6]==2){
							  echo '<button type="button" class="btn btn-danger btn-sm">Deactive</button>';
						  
						  }
						  ?>
                      </a>
                          </button></td>
						 
						 <div class="modal fade" id="<?=$r[0]?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Category Editor</h4>
                                        </div>
                                        <div class="modal-body">                                         
											<form method="post" action="update_category_master.php">
												<div class="row form-group">
												  <div class="col-lg-3">
												   Category Name</div>
													<div class="col-lg-9">
													<input type="text" name="category_name" class="form-control" placeholder="required" required value="<?=$r[1]?>"/>
													</div>
												</div>
										  
											<div class="row form-group">
												<div class="col-lg-3">
													Category Discription
												</div>
												<div class="col-lg-9">
													<textarea cols="10" rows="5" placeholder="Required" class="form-control" name="discription" required ><?=$r[3]?></textarea>
												</div>
											</div>
											<input type="hidden" value="<?=$r[0]?>" name="id" class="form-control"/>
											<input type="submit" class="btn  btn-primary" value="Update"/>
											</form>
                                        </div>
										
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>			
						</tr> 
						 <?php
						 }
                          ?>						 
				       </tbody>
					  </table>
					</div>
                  </div>
             </div>
             </div>
            </div>	
                             
                           
                              
				
				
				
				
				
				
				
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	
	
	
	
	
	

</body>

</html>