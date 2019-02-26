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
	 
	if(!$conn)
	{
		
		echo "Connection failed".mysqli_connect_error();
		exit();
		 
	}
	
	$temp=$_SESSION['start'];
	
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

<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
<link rel="stylesheet" href="dropdown.css">

</head>
<body>

<div class="logo"> 
  <img src="images1.jpg" width="125px" height="85px"/>
 </div>

<h1 class="main-header">Welcome to CS-HUB </h1>



<div class="page">

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

<div class="menu-wrap">
    <nav class="menu">
        <ul class="clearfix">
            <li><a href="START.php">HOME</a></li>
            <li><a href="#">COURSES  <span class="arrow">&#9660;</span></a>
                <ul class="sub-menu">
                   <li><a href="WEB DEVELOPMENT.php">WEB DEVELOPMENT</a></li>
                    <li><a href="COMPETITIVE PROGRAMMING.php">COMPETITIVE PROGRAMMING</a></li>
                    <li><a href="ANDROID DEVELOPMENT.php">ANDROID DEVELOPMENT</a></li>
                    <li><a href="OPERATING SYSTEM.php">OPERATING SYSTEMS</a></li>
                    <li><a href="PROGRAMMING LANGUAGES.php">PROGRAMMING LANGUAGES</a></li>
                    <li><a href="ELECTRONICS.php">ELECTRONICS</a></li>
                    <li><a href="SOFTWARES.php">SOFTWARES</a></li>
                    <li><a href="COMPUTER ARCHITECTURE.php">COMPUTER ARCHITECTURE</a></li>
                    <li><a href="MATHEMATICS COMPUTATION.php">MATHS AND COMPUTATION</a></li>
                    <li><a href="ALGORITHMS.php">ALGORITHMS</a></li>
                </ul>
            </li>
            <li><a href="ABOUTUS.php">ABOUT US</a></li>
            <li><a href="Contests.php">CONTESTS</a></li>
            <li class="current-item"><a href="#">MAIN PAGE</a></li>
            <li><a style="text-decoration:none" href="#"><?php echo $temp; ?> <span class="arrow">&#9660;</span></a>
                <ul class="sub-menu">
                   <li><a href="UPDATE.php">UPDATE DATA</a></li>
            
                </ul> 
            </li>
        </ul>
    </nav>
</div>





<div class="row">

<div class="col-md-8">

<div class="site-help">

 <h2>Site Help</h2>

 <p>Dear user,<br>
    
    Welcome to concept hub.
    Take a quick review of how the site works before you start exploring.
</p>
  <h3>How can I change my filled in details?</h3>
 <p>Click on your username above in the left-most corner of the page and 
     you can edit/change your<br>details..you cannot change your username once
    created at the time of registration</p>  

 <h3>How can I access study material of different courses?</h3>
   <p> Take the cursor on the "COURSES" option in the navigation bar and
       choose the course which you are intrested in.

    You will be directed to the course page. To take that course ,
       click on the "TAKE THIS COURSE" option. You will be automatically 
       enrolled for that course and you can access study material of that
       course.</p>

   <h3>The "HOME" option..</h3>
   <p>Clicking on "HOME" will take you to home page of the site</p>


<h3>The "CONTESTS" option..</h3>

<p>Contests are not conducted directly by us but links to different contests 
    will be provided </p>

</div >

</div>

<div class="col-md-4">




</div>




</div>


</div><!row closed>



</div>
</body>

</html>
