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
                   <li class="current-item"><a href="COMPUTER ARCHITECTURE.php">COMPUTER ARCHITECTURE </a></li>
                   <li><a href="OPERATING SYSTEM.php">OPERATING SYSTEMS</a></li>	
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

<h2 class="yc-heading">Computer Architecture</h2>

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
<li class="current"><a href="COMPUTER ARCHITECTURE.php">COMPUTER ARCHITECTURE</a></li>
<li><a href="OPERATING SYSTEM.php">OPERATING SYSTEMS</a></li>
</div>
<div class="col-full">
<p>In computer engineering,computer architecture is a set of disciplines that describes the functionality, the organization and the implementation of computer systems; that is, it defines the capabilities of a computer and its programming model in an abstract way, and how the internal organization of the system is designed and implemented to meet the specified capabilities.Computer architecture involves many aspects, including instruction set architecture design, microarchitecture design, logic design, and implementation. Some fashionable (2011) computer architectures include cluster computing and non-uniform memory access.computer organization mainly deals with how a particular hardware works in a computer where as computer architecture deals with how to design a circuit for such hardware.</p>

<p>Computer architects use computers to design new computers. Emulation software can run programs written in a proposed instruction set. While the design is very easy to change at this stage, compiler designers often collaborate with the architects, suggesting improvements in the instruction set. Modern emulators may measure time in clock cycles: estimate energy consumption in joules, and give realistic estimates of code size in bytes. These affect the convenience of the user, the power consumption and the size and expense of the computer's largest physical part: its memory. That is, they help to estimate the value of a computer design.</p>
</div>
</div>
</div>
<h3 align="right"><a href="pdfs/computer system architecture.pdf">Computer Architecture</a></h3>
</body>
</html>
