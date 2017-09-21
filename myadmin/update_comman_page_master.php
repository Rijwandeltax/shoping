<?php
  if(empty($_POST["title"])){
	  header("location:comman_page_master.php?err=1");
  }
  else{
	  Include("data.php");
	      $title=$_POST["title"];
		  $metakeyword=mysql_real_escape_string($_POST["metakeywords"]);
		  $metadiscription=mysql_real_escape_string($_POST["metadiscription"]);
		  $pagecontent=mysql_real_escape_string($_POST["pagecontent"]);
	      $id=$_POST["id"];
	
		
	       $flag=0;
			$rs=mysql_query("select * from commanpage where isDelete=0");
			while($r=mysql_fetch_array($rs)){
				if($r[0]!=$id){
		     $id3=$r[1];
			
			if(($id3==$title)){
			$flag=1;
			}
				}
		}
	
	
	
	
	
	   if($flag==0){
	     $title=mysql_real_escape_string($_POST["title"]);
      
		if(mysql_query("update commanpage set pagetitle='$title', metaKeywords='$metakeyword', metaDiscription='$metadiscription',pageContent='$pagecontent' where sn='$id'")){
				header("location:comman_page_master.php?suc=1");
				}
				else{
							
				header("location:comman_page_master.php?err=2");
				}
			  }
			  if($flag==1){
				  header("location:comman_page_master.php?errr=4");
			  }
		  }
		  ?>
	