<?php
    if(empty($_REQUEST["cat"])){
		echo "not have categpry";
	}
	else{
		
		?>
        <select class="form-control" name="subcategory_name">
        <?php
		
		  $cat=$_REQUEST["cat"];
		  Include("data.php");
		  $rs=mysql_query("select * from subcategory where categoryname='$cat' AND isDelete=0");
		   while($r=mysql_fetch_array($rs)){
?>               
			    <option value="<?=$r[3]?>"><?=$r[3]?></option>
				
		   <?php
		   }
		   ?>
           
		   </select>
		   <?php
		   
	}
?>
		   
			   