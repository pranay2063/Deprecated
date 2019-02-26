<?php
   
   session_start();
	
   if(!isset($_SESSION['start']))
   {
		
	   header('Location: http://localhost/DW/LOGIN.php');		
	   exit();
		
   }

   
   $server="localhost";
   $username="root";
   $password="";
   $db="dbms";
   
   $conn=mysqli_connect($server,$username,$password,$db);
   
   if($conn){
	   
	  if(isset($_POST['submit2'])){
		     
			    if(!empty($_POST['user_password']) && !empty($_POST['user_email']) && !empty($_POST['pass2'
				    ]) && !empty($_POST['user_security']))
				{
				     
					 //register
					 //read user details or the tuples of the table USERS
					 
				   if($_POST['user_password'] == $_POST['pass2'])
				   {
					 
					 //$user_handle=mysqli_real_escape_string($conn,$_POST['user_handle']);
					 $user_password=mysqli_real_escape_string($conn,$_POST['user_password']);
					 $user_email=mysqli_real_escape_string($conn,$_POST['user_email']);
					 $user_address=mysqli_real_escape_string($conn,$_POST['user_address']);
					 $user_name=mysqli_real_escape_string($conn,$_POST['user_name']);
					 $user_contact_no=mysqli_real_escape_string($conn,$_POST['user_contact_no']);
					 $user_security=mysqli_real_escape_string($conn,$_POST['user_security']);
					 
					 $user_handle=$_SESSION['start'];
					 
					 //$user_password=md5($user_password);
					 
					 //if(empty($user_name))        $user_name="";
					 //if(empty($user_address))     $user_address="";
					 //if(empty($user_contact_no))  $user_contact_no="";
					 
					 /*$sql="SELECT * FROM USERS WHERE user_handle='".$user_handle."' AND user_password='".$user_password."'    
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
						 
					 }*/
					 
	
					 $sql="UPDATE USERS 
					       SET USER_ADDRESS='$user_address',USER_PASSWORD='$user_password',USER_NAME='$user_name'
					       ,USER_EMAIL='$user_email',USER_CONTACT_NO='$user_contact_no',USER_SECURITY='$user_security' 
						   WHERE USER_HANDLE='$user_handle' ";   
						                        
					 $res=mysqli_query($conn,$sql);	  
						   
					 if($res){
						
						echo "PROFILE UPDATED SUCCESSFULLY<br>";
			
			            		exit();
						
					 }
					 else die("PROFILE COULD NOT BE UPDATED.".mysqli_connect_error());
					 
				   }
				   else die("Please confirm password");
					
				}
				else die("Enter information properly");
			 
	        }
	
   }
   else die("Connection failed : ".mysqli_connect_error());
   
   if(isset($_POST['logout']))
	{   
	   
		if(isset($_SESSION['start']))
		unset($_SESSION['start']);
		
		session_destroy();
		
		header('Location: http://localhost/DW/START.php');
		
		exit();
			
	}
	//$userhandle = "rohit";
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

<div class="row">

<div class="col-md-6">
<div class="welcome"><br>

</div>
</div>


<div class="col-md-6">
<div class="logout">
 <form method="post" action="logout.php">
      <div align="right">
      <input style="border-radius:5px;padding:5px" type="submit" name="logout" value="LOG OUT" />
      </div>
 </form>

</div>
</div>

</div>


<div style="color:#000;padding:20px"><br /><br />

<form method="post" action="#">

  <dl>
    <dt>

     <div class="row">
<div class="col-md-3"></div>
     <div class="col-md-3" style="background-color:#1F5C3D;color:#FFF;">   
   
   
   <br>
      <p align="center" style="font-size:14px;position:relative;top:20px;">
        PASSWORD<br><br>
        CONFIRM<br><br>
        FULL NAME<br><br>
        EMAIL<br><br>
        ADDRESS <br><br>  
        CONTACT <br><br>
        WHICH IS FAVORITE WEBSITE<br><br><br>

       <h3 style="position:relative;left:100px;bottom:12px;"><a style="text-decoration:none;color:#FFF;"href="http://localhost/DW/LOGOUT.php">MAIN PAGE</a></h3><br>
     </p>

     </div>

   <div class="col-md-3" style="background-color:#1F5C3D; height:431px;">
      <br>
   <div class="registerinput" style="position:relative; right:40px;top:24px;">

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

      <input type="submit" name="submit2" value="UPDATE DATA" style="position:relative;bottom:20px;" /><br><br>
   

   </div></div>

    <div class="col-md-4"></div>
   </div>
    </dt>
  </dl>

</form>

</div>

</body>
</html>
