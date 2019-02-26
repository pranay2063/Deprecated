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




<div class="page">

<h1 class="main-header" style="position:relative;top:30px;">Welcome to CS-HUB </h1>


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
                   <li class="current-item"><a href="ALGORITHMS.php">ALGORITHMS</a></li>
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

<h2 class="yc-heading">Algorithms</h2>

<div class="row">

<div class="col-md-3">

<h3 class="yc-headings1">Courses Offered</h3>
<ul class="vertical-bar">
<li><a href="WEB DEVELOPMENT.php">WEB DEVELOPMENT</a></li>
<li><a href="PROGRAMMING LANGUAGES.php">PROGRAMMING LANGUAGES</a></li>
<li class="current"><a href="ALGORITHMS.php">AlGORITHMS</a></li>
<li><a href="COMPETITIVE PROGRAMMING.php">COMPETITIVE PROGRAMMING</a></li>
<li><a href="ANDROID DEVELOPMENT.php">ANDROID</a></li>
<li><a href="ELECTRONICS.php">ELECTRONICS</a></li>
<li><a href="MATHMATICS COMPUTATION.php">MATHS AND COMPUTATION</a></li>
<li><a href="SOFTWARES.php">SOFTWARES</a></li>
<li><a href="COMPUTER ARCHITECTURE.php">COMPUTER ARCHITECTURE</a></li>
<li><a href="OPERATING SYSTEM.php">OPERATING SYSTEMS</a></li>
</div>
<div class="col-full">
<p>In mathematics and computer science, an algorithm is a self-contained step-by-step set of operations to be performed. Algorithms exist that perform calculation, data processing, and automated reasoning.</p>

<p>An algorithm is an effective method that can be expressed within a finite amount of space and time and in a well-defined formal language for calculating a function. Starting from an initial state and initial input (perhaps empty), the instructions describe a computation that, when executed, proceeds through a finite number of well-defined successive states, eventually producing "output" and terminating at a final ending state. The transition from one state to the next is not necessarily deterministic; some algorithms, known as randomized algorithms, incorporate random input.</p>

<p>The concept of algorithm has existed for centuries, however a partial formalization of what would become the modern algorithm began with attempts to solve the Entscheidungsproblem (the "decision problem") posed by David Hilbert in 1928. Subsequent formalizations were framed as attempts to define "effective calculability" or "effective method"; those formalizations included the GödelHerbrandKleene recursive functions of 1930, 1934 and 1935, Alonzo Church's lambda calculus of 1936, Emil Post's "Formulation 1" of 1936, and Alan Turing's Turing machines of 19367 and 1939. Giving a formal definition of algorithms, corresponding to the intuitive notion, remains a challenging problem.</p>
</div>
</div>
</div>
<h3 align="right"><a href="pdfs/CLRS.pdf" type="application/pdf">Algorithm Analysis</a></h3>
</body>
</html>
