<?php

    $server="localhost";
    $username="root";
    $password="";
    $db="dbms";
   
    $conn=mysqli_connect($server,$username,$password,$db);
	
	
	
	if($conn)
	{
	     	
		if(isset($_POST['submit1']))
		{
		    
			//echo "Executing...";
			
			if(!empty($_POST['username']) && !empty($_POST['password']))
			{
			    
				$username=mysqli_real_escape_string($conn,$_POST['username']);
				$password=mysqli_real_escape_string($conn,$_POST['password']);
				
				$sql="SELECT * FROM ADMIN WHERE ADMIN_USERNAME='".$username."' AND ADMIN_PASSWORD='".$password."' LIMIT 
				      1";
					  
				$res=mysqli_query($conn,$sql);
				
				if(mysqli_num_rows($res)==1)
				{
					
					session_start();
					
					$_SESSION['start']=1;
					
					//echo "vlskfgk";
					
					header('Location: http://localhost/DW/ADMIN%20LOGOUT.php');
					
					exit();
					
				}
				else die("INVALID INFORMATION");
					
			}
				
		}
		
	}
	else {
        
		echo "Connection failed".mysqli_connect_error();
		exit();
			    	
	}
	
	mysqli_close($conn);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Concept Hub</title>

  <link rel="stylesheet" href="dropdown.css">


</head>

<body bgcolor="#FFFFFF">

<div class="logo" style="margin:10px;"> 
  <img src="images1.jpg" width="125px" height="85px"/>
 </div>

<h1 class="main-header">Welcome to CS-HUB </h1>

<div style="color:#FFF;padding:20px"><br /><br /><br /><br />
<fieldset style="width:30%;margin:0 auto;background-color:#1F5C3D">
<form method="post" action="#">
  
  <dl>
    <dt>
      <p align="left"><br />
        USERNAME  <input style="border-radius:5px;padding:5px" type="text" name="username" placeholder="USERNAME" required= 
                                "required" id="username" /><br />
        PASSWORD  <input style="border-radius:5px;padding:5px" type="password" name="password" placeholder="PASSWORD" 
                                required="required" id ="password"/><br /><br />
        <input style="border-radius:5px;padding:5px" type ="submit" name="submit1" value="ADMIN LOGIN" id="button" />
      </p>
    </dt>
  </dl>
  
  <div align="right">
  <h1 align="left"><a style="color:#FFF;text-decoration:none;" href="http://localhost/DW/START.php">HOME</a></h1>
  </div>


</form>
</fieldset>

</div>
</body>
</html>
