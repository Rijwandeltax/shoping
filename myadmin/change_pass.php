<?php
if(empty($_POST["opass"])){
	header("location:change_password.php?err=1");
}
else{
		$username=$_COOKIE["user"];
		$old_password=$_POST["opass"];
		$new_password=$_POST["npass"];
		include("data.php");
	   $rs=mysql_query("select * from admin where password='$old_password' AND username='$username'");
       if($r=mysql_fetch_array($rs)){
	     	if(mysql_query("update admin set password='$new_password'")){
			  header("location:admin_panel.php?succ=1");
          }
	   }
			else {
			   echo "Invalid User name or Password";
			   header("location:change_password.php?err=2");
                }

   
    
}
?>