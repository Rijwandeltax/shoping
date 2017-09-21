<?php

if(!Isset($_COOKIE["user"])){
	header("location:index.php");
}
   $user=$_COOKIE["user"];
   setcookie("user",$user, time()-1);
   header("location:index.php");
?>