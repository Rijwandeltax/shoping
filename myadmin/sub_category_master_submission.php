<?php
  if(empty($_POST["category_name"])){
	  header("location:sub_category_master.php?err=1");
  }
  else{
	  Include("data.php");
	  $category_name = $_POST["category_name"];
	  $category_code = $_POST["code"];
	  $remark   = mysql_real_escape_string($_POST["remark"]);
	  $sub_category_name=$_POST["sub_category_name"];
	  $date=date("Y.m.d h:i");
	 
	  
	  
	        $flag=0;
			$rs=mysql_query("select * from subcategory");
			while($r=mysql_fetch_array($rs)){
		     $id=$r[3];
			 $id4=$r[1];
			if(($id==$sub_category_name) && ($id4==$category_name) ){
			$flag=1;
			}
		}
	
	$sub_category_name = mysql_real_escape_string($_POST["sub_category_name"]);
	$category_name = mysql_real_escape_string($_POST["category_name"]);
	
	
	   if($flag==0){
		if(mysql_query("insert into subcategory (categoryname, categorycode, subcategoryname, remark,addedOn) values('$category_name','$category_code','$sub_category_name','$remark','$date')")){
			header("location:sub_category_master.php?succ=1");
			}
			else{
			header("location:sub_category_master.php?err=1");
			}
		   }
	    else if($flag==1){
		   header("location:sub_category_master.php?errr=2");
			  } 
	   
  }
  ?>
		