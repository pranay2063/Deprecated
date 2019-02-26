<?php

   $server="localhost";
   $username="root";
   $password="";
   $db="dbms";
   
   $conn=mysqli_connect($server,$username,$password,$db);
   
   if($conn){
	   
	  if(isset($_POST['submit2'])){
		     
			    if(!empty($_POST['user_handle']) && !empty($_POST['user_password']) && !empty($_POST['user_email']) && !empty(                   $_POST['pass2']) && !empty($_POST['user_security']))
				{
				     
					 //register
					 //read user details or the tuples of the table USERS
					 
				   if($_POST['user_password'] == $_POST['pass2'])
				   {
					 
					 $user_handle=mysqli_real_escape_string($conn,$_POST['user_handle']);
					 $user_password=mysqli_real_escape_string($conn,$_POST['user_password']);
					 $user_email=mysqli_real_escape_string($conn,$_POST['user_email']);
					 $user_address=mysqli_real_escape_string($conn,$_POST['user_address']);
					 $user_name=mysqli_real_escape_string($conn,$_POST['user_name']);
					 $user_contact_no=mysqli_real_escape_string($conn,$_POST['user_contact_no']);
					 $user_security=mysqli_real_escape_string($conn,$_POST['user_security']);
					 
					 //$user_password=md5($user_password);
					 
					 //if(empty($user_name))        $user_name="";
					 //if(empty($user_address))     $user_address="";
					 //if(empty($user_contact_no))  $user_contact_no=""; 
					 
					 $sql="SELECT * FROM USERS WHERE user_handle='".$user_handle."' AND user_password='".$user_password."'    
					       LIMIT 1";   
						   
					 $res=mysqli_query($conn,$sql);
					 
					 if(mysqli_num_rows($res) == 1)
					 {
						
						echo "user already exists";
						exit();
						 
					 }
					 
					 $sql="SELECT * FROM USERS WHERE user_handle='".$user_handle."' LIMIT 1";	   
						   
					 $res=mysqli_query($conn,$sql);
					 
					 if(mysqli_num_rows($res) == 1)
					 {
						
						echo "username already exists";
						exit();
						 
					 }
					 
					 $sql="SELECT * FROM USERS WHERE user_email ='".$user_email."' LIMIT 1";
					 $res=mysqli_query($conn,$sql);
					 
					 if(mysqli_num_rows($res) == 1)
					 {
						
						echo "email already exists";
						exit();  
						 
					 }
					 
	
					 $sql="INSERT INTO USERS VALUES('$user_address','$user_handle','$user_password','$user_name','$user_email',                           '$user_contact_no','$user_security')";
						   
					 $res=mysqli_query($conn,$sql);	  
						   
					 if($res){
						
						echo "You are registered for this site<br>";
			            echo "Please login to continue<br>";
			
			            exit();
						
					 }
					 else die("Registration Incomplete.".mysqli_connect_error());
					 
				   }
				   else die("Please confirm password");
					
				}
				else die("Enter information properly");
			 
	        }
	
   }
   else die("Connection failed : ".mysqli_connect_error());
   
   mysqli_close($conn);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
<link rel="stylesheet" href="http://localhost/DW/dropdown.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CS-HUB</title>
</head>

<body bgcolor="#FFFFFF">

<div class="logo" style="margin:10px;"> 
  <img src="images1.jpg" width="125px" height="85px"/>
 </div>

<h1 class="main-header">Welcome to CS-HUB </h1>


<div style="color:#000;padding:20px"><br /><br />

<form method="post" action="register.php">

  <dl>
    <dt>

     <div class="row">
<div class="col-md-3"></div>
     <div class="col-md-3" style="background-color:#1F5C3D;color:#FFF;">   
   
   
   <br>
      <p align="center" style="font-size:14px;position:relative;top:20px;">
        USERNAME<br><br>
        PASSWORD<br><br>
        CONFIRM<br><br>
        FULL NAME<br><br>
        EMAIL<br><br>
        ADDRESS <br><br>  
        CONTACT <br><br>
        WHICH IS FAVORITE WEBSITE<br><br><br>

       <h3 style="position:relative;left:100px;bottom:12px;"><a style="text-decoration:none;color:#FFF;"href="http://localhost/DW/START.php">HOME</a></h3>
     </p>

     </div>

   <div class="col-md-3" style="background-color:#1F5C3D; height:441px;">
      <br>
   <div class="registerinput" style="position:relative; right:40px;top:24px;">

   <input style="border-radius:5px;padding:2px;height:21px;" type="text" name="user_handle" placeholder="Your Login ID" required=
                                  "required"/><br><br>
    <input style="border-radius:5px;padding:2px;height:21px;" type="password" name="user_password" placeholder="Password" 
                                  required="required"/><br><br>
    <input style="border-radius:5px;padding:2px;height:21px;" type="password" name="pass2" placeholder="Confirm password" required=
                                  "required"/><br><br> 
     <input style="border-radius:5px;padding:2px;height:21px;" type="text" name="user_name" placeholder="Full Name" /><br><br>

     <input style="border-radius:5px;padding:2px;height:21px;" type="email" name="user_email" placeholder="Email" required=
                                   "required"/><br><br>
    <input style="border-radius:5px;padding:2px;height:21px;" type="text" name="user_address" placeholder="Address" /><br><br>
      <input style="border-radius:5px;padding:2px;height:21px;" type="text" name="user_contact_no" placeholder="Phone/Mobile no." /><br><br>
       <input style="border-radius:5px;padding:2px;height:21px;" type="password" name="user_security" placeholder="Security Question" required=
                      "required"/><br><br><br><br>

      <input type="submit" name="submit2" value="REGISTER" style="position:relative;bottom:20px;" /><br><br>
   

   </div></div>

    <div class="col-md-4"></div>
   </div>
    </dt>
  </dl>

</form>

</div>

</body>
</html>
