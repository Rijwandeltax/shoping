<?php
    if(empty($_REQUEST["catee"])){
		echo "not have categpry";
	}
	else{
		
		?>
        <select class="form-control" name="subcategory_name">
        <?php
		
		  $cate=$_REQUEST["catee"];
		  Include("data.php");
		  $rs=mysql_query("select * from subcategory where categoryname='$cate' AND isDelete=0");
		   while($r=mysql_fetch_array($rs)){
?>               cfgvdfgd
			    <option value="<?=$r[3]?>"><?=$r[3]?></option>
				
		   <?php
		   }
		   ?>
           
		  
		   <?php
		   
	}
?>
		   
			   