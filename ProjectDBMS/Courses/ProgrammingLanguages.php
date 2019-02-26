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
                   <li class="current-item"><a href="PROGRAMMING LANGUAGES.php">PROGRAMMING LANGUAGES</a></li>
                   <li><a href="ALGORITHMS.php">ALGORITHMS</a></li>
                   <li><a href="COMPETITIVE PROGRAMMING.php">COMPETITIVE PROGRAMMING</a></li>
                   <li><a href="ANDROID DEVELOPMENT.php">ANDROID</a></li>
                   <li><a href="ELECTRONICS.php">ELECTRONICS</a></li>
                   <li><a href="MATHEMATICS COMPUTATION.php">MATHS AND COMPUTATION</a></li>
                   <li><a href="SOFTWARES.php">SOFTWARES</a></li>
                   <li><a href="COMPUTER ARCHITECTURE.php">COMPUTER ARCHITECTURE </a></li>
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

<h2 class="yc-heading">Programming Languages</h2>

<div class="row">

<div class="col-md-3">

<h3 class="yc-headings1">Courses Offered</h3>
<ul class="vertical-bar">
<li><a href="WEB DEVELOPMENT.php">WEB DEVELOPMENT</a></li>
<li class="current"><a href="PROGRAMMING LANGUAGES.php">PROGRAMMING LANGUAGES</a></li>
<li><a href="ALGORITHMS.php">AlGORITHMS</a></li>
<li><a href="COMPETITIVE PROGRAMMING.php">COMPETITIVE PROGRAMMING</a></li>
<li><a href="ANDROID DEVELOPMENT.php">ANDROID</a></li>
<li><a href="ELECTRONICS.php">ELECTRONICS</a></li>
<li><a href="MATHEMATICS COMPUTATION.php">MATHS AND COMPUTATION</a></li>
<li><a href="SOFTWARES.php">SOFTWARES</a></li>
<li><a href="COMPUTER ARCHITECTURE.php">COMPUTER ARCHITECTURE</a></li>
<li><a href="OPERATING SYSTEM.php">OPERATING SYSTEMS</a></li>
</div>
<div class="col-full">
<p>A programming language is a formal constructed language designed to communicate instructions to a machine, particularly a computer. Programming languages can be used to create programs to control the behavior of a machine or to express algorithms.The term programming language usually refers to high-level languages, such as BASIC, C, C++, COBOL, FORTRAN, Ada, and Pascal. Each language has a unique set of keywords (words that it understands) and a special syntax for organizing program instructions.</p>

<p>The earliest programming languages preceded the invention of the digital computer and were used to direct the behavior of machines such as Jacquard looms and player pianos.Thousands of different programming languages have been created, mainly in the computer field, and many more still are being created every year. Many programming languages require computation to be specified in an imperative form (i.e., as a sequence of operations to perform), while other languages utilize other forms of program specification such as the declarative form (i.e. the desired result is specified, not how to achieve it).</p>

<p>The description of a programming language is usually split into the two components of syntax (form) and semantics (meaning). Some languages are defined by a specification document (for example, the C programming language is specified by an ISO Standard), while other languages (such as Perl) have a dominant implementation that is treated as a reference.</p>

</div>
</div>
</div>
<h3 align="right"><a href="pdfs/ctutorial.pdf">C Tutorial</a></h3>
<h3 align="right"><a href="pdfs/C++ Primer, 5th Edition.pdf">C++ Tutorial</a></h3>
<h3 align="right"><a href="pdfs/head_first_python.pdf">Python</a></h3>
<h3 align="right"><a href="pdfs/Input_Output_in_java.pdf">Java Tutorial</a></h3>
</body>
</html>
