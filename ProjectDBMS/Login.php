<?php
   
   
   $server="localhost"; 
   $username="root";
   $password="";
   $db="dbms";
   
   $conn=mysqli_connect($server,$username,$password,$db);
   
   if($conn){
	   
	   if(isset($_POST['submit1'])){
		   
		   //login 
		   //read user_handle, read user_password
		  //echo ($POST['user_handle']) .($POST['user_password']);
		  if(!empty($_POST['user_handle']) && !empty($_POST['user_password']))
		  {

		   
			   //mysqli_real_escape_string escapes special characters in a string for use in an SQL statement.
			   //protects from SQL injections and maintains security
			   
			   $user_handle=mysqli_real_escape_string($conn,$_POST['user_handle']);
			   $user_password=mysqli_real_escape_string($conn,$_POST['user_password']);	
			   
			   //$user_password=md5($user_password);
		
			   $sql="SELECT * FROM USERS WHERE user_handle='".$user_handle."' AND user_password='".$user_password."' LIMIT 1";
			   $res=mysqli_query($conn,$sql);
		
			   if(mysqli_num_rows($res) == 1){
		
				  //echo "You have successfully logged in";
				  
				  session_start();
				  
				  $_SESSION['start']=$user_handle;
				  
				  header('Location: http://localhost/DW/LOGOUT.php');
				  //this function prevents more than one header to be sent at once
				  exit();
			
			   }
			   else {
				  
				  die("Invalid information entered");
				  //exit();
			   
			   }
		   
	      }else die("Data insufficient<br />");
		  
	   }
	   
   }
   else die("Connection failed : ".mysqli_connect_error());
   
   mysqli_close($conn);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Concept Hub</title>

  <link rel="stylesheet" href="dropdown.css">

</head>

<body bgcolor="#FFFFFF" >

<div class="logo" style="margin:10px;"> 
  <img src="images1.jpg" width="125px" height="85px"/>
 </div>

<h1 class="main-header">Welcome to CS-HUB </h1>

<div style="color:#FFF;padding:20px"><br /><br /><br /><br />
<fieldset style="width:30%;margin:0 auto;background-color:#1F5C3D">
<form method="post" action="login.php">

  <dl>
    <dt>
      <p align="left"><br />
        &nbsp;&nbsp;&nbsp;USERNAME  <input style="border-radius:5px;padding:5px;font-color:#000;" type="text" name="user_handle" placeholder="USERNAME" required="required" id="username" /><br><br>
        
        &nbsp;&nbsp;&nbsp;PASSWORD  <input style="border-radius:5px;padding:5px;font-color:#000;" type="password" name="user_password" placeholder="PASSWORD" required="required" id ="password"/><br><br>
        
        &nbsp;&nbsp;&nbsp;<input style="border-radius:5px;padding:5px" type ="submit" name="submit1" value="USER LOGIN" id="button" />
      </p>
    </dt>
  </dl>
  
  <div align="right">
  <p align="left"><a style="color:#FFF;font-size:22px;text-decoration:none;" href="http://localhost/DW/START.php">&nbsp;&nbsp;&nbsp;HOME</a></p>
  </div>

  <div align="right">
  <p align="left"><a style="color:#FFF;font-size:22px;text-decoration:none;" href="http://localhost/DW/FORGOT%20PASSWORD.php">&nbsp;&nbsp;&nbsp;FORGOT PASSWORD?</a></p> 
  </div>
  
  <div>
  <a style="color:#FFF;font-size:22px;text-decoration:none;" href="http://localhost/DW/ADMIN%20LOGIN.php">&nbsp;&nbsp;&nbsp;ADMIN LOGIN</a>
  </div>

</form>
</fieldset>

</div>

</body>
</html>

<body>
</body>
</html>
