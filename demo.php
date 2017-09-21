<?php
if(empty($_POST["email"]) && empty($_POST["type"])){
	header("location:index.php?err=1");
}
else{
	Include("data.php");
	$email    =    $_POST["email"];
	            if(isset($_POST["password"])){
							$password=    $_POST["password"];
							   }
					if(isset($_POST["username"])){
							$username=$_POST["username"];
					}
	$type=$_POST["type"];
	
	if($type=='login'){
	
			$rs=mysql_query("select * from login where email='$email' AND password='$password'");
			while($r=mysql_fetch_array($rs)){
				$flag=1;
			}
			if($flag==1){
				setcookie('user',$user,time()+1000);
				header("location:index.php?succ");
			}
			else{
				header("location:index.php?err=2");
				}
	}
	else if($type=='register'){
						if(mysql_query("insert into login (email, password, username) values('$email','$password','$username')")){
							header("location:index.php?succ=1");
						}
						else{
								header("location:index.php?err=2");
							}
                   }
	else if($type=='newsletter'){
					              
								 
								  include("data.php");
					              $rs=mysql_query("select * from newsletter");
								   $flag=0;
								  while($r=mysql_fetch_array($rs)){
									                             
														           if($r[1]==$email){
																	   $flag=1;
																	  
																   }
								  }
								if($flag==0){								   
										 
								  
								  
										 if(mysql_query("insert into newsletter (email) value('$email')")){
											// header("location:index.php?succ=5");
											echo $flag;
											}
										 else{
											  header("location:index.php?err=2");
											}
								}
								else if($flag==1){
									 header("location:index.php?already exist=2");
								}
	}
}
?>
   
   
	   
   