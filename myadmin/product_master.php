<!DOCTYPE html>
<html lang="en">

<?php 
include_Once("header.php");
include_Once("sidebar.php");
 ?>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product Master</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				
				<?php
				
				if(isset($_GET["succ"])){
		       ?>
		  <div class="alert alert-success alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Success!</strong>  Successful insert the Product.
               </div>
	   <?php
				}
	  else if(isset($_GET["err"])){
//		  	if($_GET["err"]==2)
			
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
               <strong>Error!</strong> Already have Product.
               </div>
			   <?php
	  }
	  else if(isset($_GET["suc"])){
		  ?>
		    <div class="alert alert-success alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Success!</strong>Updated the Product.
               </div>
			   <?php
	  }
	   ?>
                
                
				<div class="row">
				 <div class="col-lg-11">
				   <div class="panel panel-default">
				    <div class="panel-heading">
					  Product Master
					</div>
                    <div class="panel-body">
                      <form method="post" enctype="multipart/form-data" action="product_master_submission.php">
					     
						 <div class="row form-group">
							<div class="col-lg-2">
								Select Category</div>
							<div class="col-lg-5">
								<select class="form-control" name="category_name" id="cate">
								<option>select the Category</option>
									<?php
									 Include("data.php");
									 $rs=mysql_query("select * from category where isDelete=0");
									 while($r=mysql_fetch_array($rs)){
								   
								   ?>
									 <option value="<?=$r[1]?>"><?=$r[1]?></option>
									 <?php
									 }
									 ?>
						 
								</select>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-lg-2">
								Select Sub Category</div>
							<div class="col-lg-5">
							
							
							<div id="show"><select class="form-control"></select></div>
								
									
								
						 </div>
						</div>
						 
						<div class="row form-group">
							<div class="col-lg-2">
								Product Code
							</div>
							<div class="col-lg-5">
								<input type="text" name="code" class="form-control" value="pro<?php echo  rand(111111111,999999999);?>" readonly>
							</div>
						</div>
                        <div class="row form-group">
							<div class="col-lg-2">
								Product Name
							</div>
							<div class="col-lg-5">
								<input type="text" name="product_name" class="form-control"/>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-lg-2">
								Discription
							</div>
							<div class="col-lg-5">
								<textarea cols="10" rows="5" placeholder="Required" class="form-control ckeditor" name="discription" required></textarea>
							</div>
						</div>
                        <div class="row form-group">
							<div class="col-lg-2">
								Image 1
							</div>
							<div class="col-lg-5">
								<input type="file" class="form-control" name="photo1" required>
							</div>
						</div>
                       <div class="row form-group">
							<div class="col-lg-2">
								Image 2
							</div>
							<div class="col-lg-5">
								<input type="file" class="form-control" name="photo2" Required></div></div>
                       <div class="row form-group">
							<div class="col-lg-2">
							Image 3
							</div>
							<div class="col-lg-5">
								<input type="file" class="form-control" name="photo3" Required>
							</div>
						</div>
                       <div class="row form-group">
							<div class="col-lg-2">
								Price
							</div>
							<div class="col-lg-5">
								<input type="text" class="form-control" name="policy" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-lg-2">
								Discount
							</div>
							<div class="col-lg-5">
								<input type="text" class="form-control" name="discount" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-lg-2">
								Unite
							</div>
							<div class="col-lg-5">
								 <select class="form-control" name="unite">
									  <option value="ptk">ptk</option>
									  <option value="Pc">Pc</option>
									  <option value="Pok">Pok</option>
									  <option value="Bottle">Bottle</option>
								 </select>
							</div>
						</div>
                        
                        <div class="row form-group">
							<div class="col-lg-2">
						         Rating
							</div>
							<div class="col-lg-5">
								 <select class="form-control" name="rating">
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									  <option value="4">4</option>
                                      <option value="5">5</option>
								 </select>
							</div>
						</div>
								<input type="submit" class="btn  btn-primary " value="Save">
					
						</form>
					  
					
					</div>
				</div>
			</div>
		</div>
					
						 
			<div class="row">
				 <div class="col-lg-11">
				   <div class="panel panel-default">
				    <div class="panel-heading">
					  Product Master Details
					</div>
                    <div class="panel-body">
                      <div class="table-responsive">
								<table class="table table-condensed table-hover table-bordered">
								   <thead>
									<tr>
									  <td>Sn</td>
                                      <td>Product Name</td>
									  <td>Category Name</td>
									  <td>Sub Category Name</td>
                                      <td>Image</td>
									  <td></td>
									 
									</tr>
								   </thead>
								   <tbody>
					   
										 <?php
										 Include("data.php");
										 $y=0;
										 $rs=mysql_query("select * from product where isDelete=0");
										 while($r=mysql_fetch_array($rs)){
									   $y=$y+1;
									     ?>
									   
								     <tr>
										  <td><?=$y?></td>
										  <td><?=$r[10]?></td>
										  <td><?=$r[1]?></td>
										  <td><?=$r[2]?></td>
                                          <td><a href="images/<?=$r[3]?>.jpg" ><i class="fa fa-search fa-fw"></i></a>
										  <td><a href="delete.php?id1=<?php echo $r[0]?>&id2=product" style="text-decoration:none;"><button type="button" class="btn btn-outline btn-primary btn-sm"><span class="glyphicon glyphicon-trash"></span></i></button></a>&nbsp;
										  <button type="button" class="btn btn-outline btn-primary btn-sm" data-toggle="modal" data-target="#<?=$r[0]?>"><i class="fa fa-edit fa-fw"></i></button>&nbsp;
                        <a href="actdct.php?id1=<?php echo $r[9]?>&id2=product&id3=<?php echo $r[0]?>" style="text-decoration:none">                 
         
                          <?php
						  if($r[9]==1){
							  echo '<button type="button" class="btn btn-success btn-sm">Active</button>';
						  }
						  else if($r[9]==2){
							  echo '<button type="button" class="btn btn-danger btn-sm">Deactive</button>';
						  
						  }
						  ?>
                      </a>
                        
                        </td>                  
                                          
                                          
                                          
                                          
                                          
                                          
						 
  <div class="modal fade" id="<?=$r[0]?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																	<h4 class="modal-title" id="myModalLabel">Category Editor</h4>
																</div>
																<div class="modal-body">                                         
																	<form method="post" action="update_product_master.php">
																	
																			<div class="row form-group">
																				<div class="col-lg-2">
																					Select Category
																			</div>
																				<div class="col-lg-5">
																			<select class="form-control" name="category_name" id="ca<?=$r[0]?>">
																						 <?php
                                                                                             Include("data.php");
                                                                                             $ps=mysql_query("select * from category where isDelete=0");
                                                                                             while($p=mysql_fetch_array($ps)){
                                                                                           
                                                                                           ?>
                                                                                         <option value="<?=$p[1]?>"><?=$p[1]?></option>
                                                                                             <?php 
                                                                                             }
                                                                                             ?>
																					</select>
																				</div>
																			</div>
                                                                            
                                                                            
                                                                            <div class="row form-group">
																				<div class="col-lg-2">
																					Select Category
																			</div>
																				<div class="col-lg-5" >
                                                                                <select class="form-control" name="subcategory_name" id="showw<?=$r[0]?>">
                                                                              
                                                                                </select>
																				</div>
																			</div>
                                                                            
																			<div class="row form-group">
																				<div class="col-lg-2">
																					Product Name</div>
																				<div class="col-lg-5">
																					<input type="text" name="product_name" class="form-control" placeholder="product Name" value="<?=$r[10]?>" required></div></div>
																			<div class="row form-group">
																				<div class="col-lg-2">
																					Product Discription
																				</div>
																				<div class="col-lg-5">
                       <textarea cols="10" rows="5" placeholder="Required" class="form-control ckeditor" name="remark" required><?=$r[4]?></textarea>
                                                                                 </div></div>
                                                                                 
                                                                        <div class="row form-group">
																				<div class="col-lg-2">
																					Product Price</div>
																				<div class="col-lg-5">
													<input type="text" name="price" class="form-control" placeholder="Required" value="<?=$r[5]?>" required></div></div>         
                                                    
                                                            
                                                                        <div class="row form-group">
																				<div class="col-lg-2">
																					Discount</div>
																				<div class="col-lg-5">
													<input type="text" name="discount" class="form-control" placeholder="Required" value="<?=$r[6]?>" required></div></div>         
                                                         
                                                         
                                                       <div class="row form-group">
															<div class="col-lg-2">
																Unite</div>
													     <div class="col-lg-5">
                                                             <select class="form-control" name="unit">
                                                                  <option value="ptk">ptk</option>
                                                                  <option value="Pc">Pc</option>
                                                                  <option value="Pok">Pok</option>
                                                                  <option value="Bottle">Bottle</option>
                                                             </select>
                                                      </div>       
                                                     </div>                                    
                                                    <div class="row form-group">
                                                    <div class="col-lg-2">
                                                         Rating
                                                    </div>
                                                    <div class="col-lg-5">
                                                         <select class="form-control" name="rating">
                                                              <option value="1">1</option>
                                                              <option value="2">2</option>
                                                              <option value="3">3</option>
                                                              <option value="4">4</option>
                                                              <option value="5">5</option>
                                                         </select>
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
                                                    
                                                    
                                                    <script>
                                                     $(document).ready(function(){
		                                               $("#ca<?=$r[0]?>").change(function(){
																	 var m = $("#ca<?=$r[0]?>").val();
																	alert(m);
																   $.post(
																	"opt.php",
																	{catee:m},
																	//alert(m);
												      function(data){
													
													   $("#showw<?=$r[0]?>").html(data);
														   })
		                                              } )
	                                                })		  
                                                    </script>
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
	
	<script>
	 $(document).ready(function(){
		    $("#cate").change(function(){
										 var m = $("#cate").val();
										
									   $.post(
										"options.php",
										{cat:m},
										//alert(m);
									function(data){
										
										 $("#show").html(data);
											 })
		                              } )
	 })			
	 
	 
	  $(document).ready(function(){
		    $("#ca").change(function(){
										 var m = $("#ca").val();
										alert(m);
									   $.post(
										"opt.php",
										{catee:m},
										//alert(m);
									function(data){
										
										 $("#showw").html(data);
											 })
		                              } )
	 })			
	 
	 						  
	</script>
	
	
	
	

</body>

</html>