<?php
  if(empty($_POST["category_name"])){
	  header("location:admin.php?err=1");
  }
  else{
	  Include("data.php");
	  $category_name = $_POST["category_name"];
	 
	  $discription   = $_POST["discription"];
	  $id            =$_POST["id"];
	   
	
	
		
	$flag=0;
			$rs=mysql_query("select * from category");
			while($r=mysql_fetch_array($rs)){
				if($r[0]!=$id){
		     $id3=$r[1];
			 $id1=$r[3];
			if(($id3==$category_name)){
			$flag=1;
			}
				}
		}
	
	
	
	
	
	   if($flag==0){
	   
	
	  $category_name =mysql_real_escape_string($category_name);
	  $discription  =mysql_real_escape_string($discription);
      
	if(mysql_query("update category set categoryname='$category_name', discription='$discription' where sn='$id'")){
		header("location:category_master.php?suc=1");
		}
		else{
					
		header("location:category_master.php?err=2");
		}
	  }
	  if($flag==1){
		  header("location:category_master.php?errr=4");
      }
  }
  ?>
	