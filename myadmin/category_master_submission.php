<?php
  if(empty($_POST["category_name"])){
	  header("location:admin.php?err=1");
  }
  else{
	  Include("data.php");
		  $category_name = $_POST["category_name"];
		  $category_code = $_POST["code"];
		  $discription   = $_POST["discription"];
		  $date=date("Y.m.d h:i");
		
		
		
		
		
		
	$flag=0;
			$rs=mysql_query("select * from category");
			while($r=mysql_fetch_array($rs)){
		     $id=$r[1];
			if($id==$category_name){
			$flag=1;
			}
		}
	
	
	
	
	
	   if($flag==0){
	   
			$img=$category_code.".jpg";
				$target="images/";
				$target=$target.$img;
				$pic=($_FILES['photo']['size']);
				 $photo="no";
				if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target)or die(mysql_error())) {
					$photo="yes";
				} 
				else {
						$photo="no";
				}

      $category_name =mysql_real_escape_string($category_name);
	  $discription  =mysql_real_escape_string($discription);
				if(mysql_query("insert into category (categoryname, categorycode, discription, photo,addedOn) values('$category_name','$category_code','$discription','$photo','$date')")){
					header("location:category_master.php?succ=1");
					
					}
					else{
					//echo $date;
					header("location:category_master.php?err=2");
					}
	   }
	   else if($flag==1){
		   header("location:category_master.php?errr=3");	
			  }
			  
  }
  ?>
		
	   
	   
	  
	  