<?php
  if(empty($_POST["category_name"])){
	  header("location:admin.php?err=1");
  }
  else{
	  Include("data.php");
	  $category_name = $_POST["category_name"];
	 $subcategory_name= $_POST["subcategory_name"];
	  $product_name=$_POST["product_name"];
	  $rating=$_POST["rating"];
	  $price= mysql_real_escape_string($_POST["price"]);
	  $discription   =  mysql_real_escape_string($_POST["remark"]);
	  $id            =$_POST["id"];
	  $discount= mysql_real_escape_string($_POST["discount"]);
	  $unit=$_POST["unit"];
	   $date=date();


    $flag=0;
	  $rs=mysql_query("select * from product");
	   while($r=mysql_fetch_array($rs)){
		  if($id!=$r[0]){
		  $id4=$r[7];
		  $id1=$r[1];
		  $id2=$r[2];
			if(($id4==$product_name) && ($id1==$category_name) && ($id2==$subcategory_name)){
			$flag=1;
			}
		   }
		}
	
	
	
	
	
	   if($flag==0){

 



            	    $category_name =  mysql_real_escape_string($_POST["category_name"]);
				    $subcategory_name= mysql_real_escape_string($_POST["subcategory_name"]);
					$product_name= mysql_real_escape_string($_POST["product_name"]);
   
	if(mysql_query("update product set categoryname='$category_name',subcategoryname='$subcategory_name',productName='$product_name',price='$price',discount='$discount',unite='unit', discription='$discription',rating='$rating' where sn='$id'")){
		header("location:product_master.php?suc=1");
		}
		else{
					
		header("location:product_master.php?err=2");
		}
	   }
	   else if($flag==1){
		   header("location:product_master.php?errr=3");
			  }
		
		//echo $subcategory_name;
  }
  ?>
	