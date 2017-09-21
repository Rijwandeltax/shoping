<?php
if(empty($_POST["title"])){
	  header("location:admin.php?err=1");
  }
  else{
	  include("data.php");
	  $title=mysql_real_escape_string($_POST["title"]);
	  $metakeyword=mysql_real_escape_string($_POST["metakeywords"]);
	  $metadiscription=mysql_real_escape_string($_POST["metadiscription"]);
	  $pagecontent=mysql_real_escape_string($_POST["pagecontent"]);
	  $id=$_POST["id"];
	  $date=date("Y.m.d h:i");
	  $flag=0;
	  $rs=mysql_query("select * from pagecontain where isDelete=0");
	   while($r=mysql_fetch_array($rs)){
		   if($r[0]!=$id){
		   	 if($r[1]==$title){
			            $flag=1;
			 }
		   }
	   }
	  
	  
	  if($flag==0){
	  if(mysql_query("insert into commanpage (pageTitle, metaKeywords, metaDiscription, pageContent,addedOn) values('$title','$metakeyword','$metadiscription','$pagecontent','$date')")){
					header("location:comman_page_master.php?succ=1");
					
					}
					
		else{
					//echo $date;
					header("location:comman_page_master.php?err=2");
			}
	  }
	  else if($flag==1){
		  header("location:comman_page_master.php?errr=2");
  }
  }

?>