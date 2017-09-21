<?php
  if(empty($_POST["category_name"])){
	  header("location:sub_category_master.php?err=1");
  }
  else{
	  Include("data.php");
	  $category_name = $_POST["category_name"];
	  $sub_category_name = $_POST["sub_category_name"];
	  $remark   = mysql_real_escape_string($_POST["remark"]);
	  $id            =$_POST["id"];
	   
	 
	 
	 
	        $flag=0;
			$rs=mysql_query("select * from subcategory");
			while($r=mysql_fetch_array($rs)){
				if($r[0]!=$id){
		     $id2=$r[3];
			 $id3=$r[1];
			if(($id2==$sub_category_name) && ($id3==$category_name)){
			$flag=1;
			}
				}
		}
		
		$category_name = mysql_real_escape_string($_POST["category_name"]);
	  $sub_category_name = mysql_real_escape_string($_POST["sub_category_name"]);
		
		
		  if($flag==0){
	 
	 
      
	if(mysql_query("update subcategory set categoryname='$category_name', remark='$remark',subcategoryname='$sub_category_name' where sn='$id'")){
		header("location:sub_category_master.php?suc=1");
		}
		else{
			echo $id;
			echo  $discription;
            echo   $category_name;			
		//header("location:sub_category_master.php.php?err=2");
		}
		  }
		   else if($flag==1){
		   header("location:sub_category_master.php?errr=1");
			  } 
  }
  ?>