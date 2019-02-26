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
            <li class="current-item"><a href="#">COURSES  <span class="arrow">&#9660;</span></a>
                
         
                <ul class="sub-menu">
                   <li><a href="WEB DEVELOPMENT.php">WEB DEVELOPMENT</a></li>
                   <li><a href="PROGRAMMING LANGUAGES.php">PROGRAMMING LANGUAGES</a></li>
                   <li><a href="ALGORITHMS.php">ALGORITHMS</a></li>
                   <li><a href="COMPETITIVE PROGRAMMING.php">COMPETITIVE PROGRAMMING</a></li>
                   <li><a href="ANDROID DEVELOPMENT.php">ANDROID</a></li>
                   <li><a href="ELECTRONICS.php">ELECTRONICS</a></li>
                   <li><a href="MATHEMATICS COMPUTATION.php">MATHS AND COMPUTATION</a></li>
                   <li><a href="SOFTWARES.php">SOFTWARES</a></li>
                   <li><a href="COMPUTER ARCHITECTURE.php">COMPUTER ARCHITECTURE </a></li>
                   <li class="current-item"><a href="OPERATING SYSTEM.php">OPERATING SYSTEMS</a></li>	
                </ul>
                  </li>
                  <li><a href="ABOUTUS.php">ABOUT US</a></li>
                  <li><a href="Contests.php">CONTESTS</a></li>
                  <li><a href="LOGOUT.php">MAIN PAGE</a></li>
                  <li><a style="text-decoration:none" href="#"><?php echo $temp; ?> <span class="arrow">&#9660;</span></a>
                      <ul class="sub-menu">
                         <li><a href="UPDATE.php">UPDATE DATA</a></li>
                  
                      </ul> 
                  </li>
        </ul>
    </nav>
</div>

<h2 class="yc-heading">Operating System</h2>

<div class="row">

<div class="col-md-3">

<h3 class="yc-headings1">Courses Offered</h3>
<ul class="vertical-bar">
<li><a href="WEB DEVELOPMENT.php">WEB DEVELOPMENT</a></li>
<li><a href="PROGRAMMING LANGUAGES.php">PROGRAMMING LANGUAGES</a></li>
<li><a href="ALGORITHMS.php">AlGORITHMS</a></li>
<li><a href="COMPETITIVE PROGRAMMING.php">COMPETITIVE PROGRAMMING</a></li>
<li><a href="ANDROID DEVELOPMENT.php">ANDROID</a></li>
<li><a href="ELECTRONICS.php">ELECTRONICS</a></li>
<li><a href="MATHEMATICS COMPUTATION.php">MATHS AND COMPUTATION</a></li>
<li><a href="SOFTWARES.php">SOFTWARES</a></li>
<li><a href="COMPUTER ARCHITECTURE.php">COMPUTER ARCHITECTURE</a></li>
<li class="current"><a href="OPERATING SYSTEM.php">OPERATING SYSTEMS</a></li>
</div>
<div class="col-full">
<p>An operating system (OS) is software that manages computer hardware and software resources and provides common services for computer programs. The operating system is an essential component of the system software in a computer system. Application programs usually require an operating system to function.</p>

<p>Time-sharing operating systems schedule tasks for efficient use of the system and may also include accounting software for cost allocation of processor time, mass storage, printing, and other resources.</p>

<p>For hardware functions such as input and output and memory allocation, the operating system acts as an intermediary between programs and the computer hardware, although the application code is usually executed directly by the hardware and frequently makes system calls to an OS function or be interrupted by it. Operating systems are found on many devices that contain a computerfrom cellular phones and video game consoles to web servers and supercomputers.</p>

<p>Examples of popular modern operating systems include Android, BSD, iOS, Linux, OS X, QNX, Microsoft Windows,Windows Phone, and IBM z/OS. The first six of these examples share roots in UNIX.</p>
</div>
</div>
</div>
<h3 align="right"><a href="pdfs/OS_Edition.pdf">Operating System</a></h3>
</body>
</html>
