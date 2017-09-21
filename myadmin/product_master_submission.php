<?php
  if(empty($_POST["category_name"])){
	  header("location:product_master.php?err=1");
  }
  else{
	  Include("data.php");
	    $category_name = $_POST["category_name"];
	    $subcategory_name =  $_POST["subcategory_name"];
	    $category_code = $_POST["code"];
	    $discription   =  mysql_real_escape_string($_POST["discription"]);
	    $price      =   mysql_real_escape_string($_POST["policy"]);
		$discount      =    mysql_real_escape_string($_POST["discount"]);
		$unite      =    mysql_real_escape_string($_POST["unite"]);
		$product_name= $_POST["product_name"];
	    $rating=$_POST["rating"];
	  $flag=0;
	  $rs=mysql_query("select * from product");
	   while($r=mysql_fetch_array($rs)){
		  $id=$r[7];
		  $id1=$r[1];
		  $id2=$r[2];
			if(($id==$product_name) && ($id1==$category_name) && ($id2==$subcategory_name)){
			$flag=1;
			}
		}
// cooment 
if($flag==0){
	 for($i=1;$i<4;$i++){  
	$img=$category_code.$i.".jpg";
    $target="images/";
    $target=$target.$img;
    $pic=($_FILES['photo'.$i]['size']);
    $photo="no";
	
     if (move_uploaded_file($_FILES["photo".$i]["tmp_name"], $target)or die(mysql_error())) {
        $photo="yes";
     } else {
            $photo="no";
     }
   }
       $category_name = mysql_real_escape_string($_POST["category_name"]);
	    $subcategory_name =  mysql_real_escape_string($_POST["subcategory_name"]);
	  $product_name= mysql_real_escape_string($_POST["product_name"]);
	  
	  
	if(mysql_query("insert into product (categoryname, subcategoryname, categorycode, discription, price, discount, unite,productName,rating)                     values('$category_name','$subcategory_name','$category_code','$discription','$price','$discount','$unite','$product_name','$rating')")){
		header("location:product_master.php?succ=1");
		}
		else{
			header("location:product_master.php?err=2");
		}
	   }
	    else if($flag==1){
		   header("location:product_master.php?errr=3");
			  } 
  }
  ?>
		
	   
	   
	  
	  