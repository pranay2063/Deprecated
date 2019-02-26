<?php
    
	session_start(); 
	
	if(isset($_SESSION['temp']))
	{
		 
	     unset($_SESSION['temp']);
		
		 session_destroy();	
		 header('Location: http://localhost/DW/FORGOT%20PASSWORD.php');
		 exit();	
		
	}
	
	
	$server="localhost";
    	$username="root";
    	$password="";
    	$db="dbms";
   
    	$conn=mysqli_connect($server,$username,$password,$db);
	
	if(!$conn)
	{
		
		 echo "Connection failed".mysqli_connect_error();
		 exit();
		 
	}
	
	if(isset($_POST['submit2']))
	{
		
	
		if(!empty($_POST['query']) && !empty($_POST['user_handle']))
		{
			
			$query=mysqli_real_escape_string($conn,$_POST['query']);
			$user_handle=mysqli_real_escape_string($conn,$_POST['user_handle']);
			
			//echo $user_handle;
			
			$sql="SELECT * FROM USERS WHERE USER_SECURITY='".$query."'and USER_HANDLE='".$user_handle."'LIMIT 1";
			$res=mysqli_query($conn,$sql);
			
			if(mysqli_num_rows($res) == 1)
			{
				
				$row=mysqli_fetch_array($res,MYSQLI_NUM);
				
				$temp=$row[2];
				
				//$temp=md5($temp);
				
			
				$_SESSION['temp']=1;
				
				if(isset($temp))
			
				echo "Your password is ".$temp.".";
				
				echo "<br><br><br>WARNING : PLEASE RELOAD TO END THE SESSION AND TO MAINTAIN PASSWORD SAFETY !!!<br>";
				
				//if(isset($_SESSION['start']))
				//unset($_SESSION['start']);
				
				//session_destroy();
				
				exit();
				
			}
			else die("Incorrect data");
				
		}else die("Enter proper details");
	
    }
  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

 <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
<link rel="stylesheet" href="http://localhost/DW/dropdown.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Concept Hub</title>
</head>

<body bgcolor="#FFFFFF">

 <div class="logo"> 
  <img src="images1.jpg" width="125px" height="85px"/>
 </div>

<h1 class="main-header">Welcome to CS-HUB </h1>

    <div style="color:#000"><br /><br /><br /><br />
    

  <form action="#" method="post">

   <div class="row">

   <div class="col-md-3"></div>
     <div class="col-md-3" style="background-color:#1F5C3D; font-size:16px;color:#FFF;">
   
        <br><br><p>USERNAME</p><br>
         <p>WHICH IS THE WEBSITE YOU VISIT THE MOST?</p>  <br> 
       <h3 style="position:relative;left:100px;bottom:40px;"><a style="text-decoration:none;color:#FFF;"href="http://localhost/DW/START.php">HOME</a></h3>     

    </div>


<div class="col-md-3" style="background-color:#1F5C3D;height:271px;">
<br><br>
<input style="border-radius:5px;padding:5px" type="text" name="user_handle" placeholder="USERNAME" required="required"/><br><br><br>
 <input style="border-radius:5px;padding:5px" type="password" name="query" placeholder="SECURITY" required="required"/><br><br><br>
 <input style="border-radius:5px;padding:5px" type="submit" name="submit2" value="SUBMIT" /><br>

</div>
 <div class="col-md-3"></div>

  </div>

  </form>
      
   <p style="background-color:#1F5C3D;color:#FFF;position:relative;left:334px;font-size:20px;width:698px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THIS ANSWER MUST MATCH YOUR PREVIOUS ANSWER.<br><br></p>

     
    
    </div>

</body>
</html>
