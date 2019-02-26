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
<h3>Welcome <a style="text-decoration:none" href="#"><?php echo $temp; ?></a></h3>

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
		   <li class="current-item"><a href="SOFTWARES.php">Softwares</a></li>
		   <li><a href="COMPUTER ARCHITECTURE.php">COMPUTER ARCHITECTURE </a></li>
		   <li><a href="OPERATING SYSTEM.php">OPERATING SYSTEMS</a></li>	
                </ul>
            </li>
            <li><a href="ABOUTUS.php">ABOUT US</a></li>
            <li><a href="Contests.php">CONTESTS</a></li>
            <li><a href="LOGOUT.php">MAIN PAGE</a></li>
        </ul>
    </nav>
</div>

<h2 class="yc-heading">Softwares</h2>

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
<li class="current"><a href="SOFTWARES.php">SOFTWARES</a></li>
<li><a href="COMPUTER ARCHITECTURE.php">COMPUTER ARCHITECTURE</a></li>
<li><a href="OPERATING SYSTEM.php">OPERATING SYSTEMS</a></li>
</div>
<div class="col-full">
<p>Computer software or simply software is any set of machine-readable instructions that directs a computer's processor to perform specific operations. Computer software contrasts with computer hardware, which is the physical component of computers. Computer hardware and software require each other and neither can be realistically used without the other. Using a musical analogy, hardware is like a musical instrument and software is like the notes played on that instrument.</p>

<p>Computer software includes computer programs, libraries and their associated documentation. The word software is also sometimes used in a more narrow sense, meaning application software only. Software is stored in computer memory and is intangible, i.e. it cannot be touched.</p>
<p>Software written in a machine language is known as "machine code". However, in practice, software is usually written in high-level programming languages that are easier and more efficient for humans to use (closer to natural language) than machine language.High-level languages are translated, using compilation or interpretation or a combination of the two, into machine language. Software may also be written in a low-level assembly language, essentially, a vaguely mnemonic representation of a machine language using a natural language alphabet. Assembly language is translated into machine code using an assembler.</p>
</div>
</div>
</div>
<h3 align="right"><a href="pdfs/Software Eng, Roger Presmen.pdf">Software Engg. 1</a></h3>
<h3 align="right"><a href="pdfs/software-engineering-rajib-mall.pdf">Software Engg. 2</a></h3>
</body>
</html>
