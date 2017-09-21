<?php
if(empty($_REQUEST["id1"])){
	header("location:admin_panel5.php?err=5");
}
else{
	include("data.php");
	$id=$_REQUEST["id1"];
	$id2=$_REQUEST["id2"];
	$id3=$_REQUEST["id3"];
	if($id==1){
	
	if(mysql_query("update $id2 set actdct=2 where sn='$id3'")){
		header("location:admin_panel.php?succ=8");
	}
	else{
		header("location:category_master.php?err=8");
	}
}
else if($id==2){
	if(mysql_query("update $id2 set actdct=1 where sn='$id3'")){
		header("location:admin_panel.php?succ=8");
	}
	else{
		header("location:category_master.php?err=8");
	}
 }
	
}