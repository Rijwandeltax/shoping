<?php
if(empty($_POST["user"])){
	header("location:index.php?err=1");
}
else{
	Include("data.php");
	$user    =    $_POST["user"];
	$password=    $_POST["pass"];
	$rs=mysql_query("select * from admin where username='$user' AND password='$password'");
	if($r=mysql_fetch_array($rs)){
		setcookie('user',$user,time()+100000);
		header("location:admin_panel.php");
	}
	else{
		header("location:index.php?err=1");
        }

  
}
?>
   
   
	   
   