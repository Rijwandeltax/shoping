<?php
if(empty($_REQUEST["id1"])){
	header("location:category_master.php?err=5");
}
else{
	include("data.php");
	$id=$_REQUEST["id1"];
	$id2=$_REQUEST["id2"];
	if(mysql_query("update $id2 set isDelete=1 where sn='$id'")){
		header("location:admin_panel.php?succ=8");
	}
	else{
		header("location:category_master.php?err=8");
	}
}