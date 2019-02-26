
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
                   <li class="current-item"><a href="COMPETITIVE PROGRAMMING.php">COMPETITIVE PROGRAMMING</a></li>
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

<h2 class="yc-heading">Competitive Programming</h2>

<div class="row">

<div class="col-md-3">

<h3 class="yc-headings1">Courses Offered</h3>
<ul class="vertical-bar">
<li><a href="WEB DEVELOPMENT.php">WEB DEVELOPMENT</a></li>
<li><a href="PROGRAMMING LANGUAGES.php">PROGRAMMING LANGUAGES</a></li>
<li><a href="ALGORITHMS.php">AlGORITHMS</a></li>
<li class="current"><a href="COMPETITIVE PROGRAMMING.php">COMPETITIVE PROGRAMMING</a></li>
<li><a href="ANDROID DEVELOPMENT.php">ANDROID</a></li>
<li><a href="ELECTRONICS.php">ELECTRONICS</a></li>
<li><a href="MATHMATICS COMPUTATION.php">MATHS & COMPUTATION</a></li>
<li><a href="SOFTWARES.php">SOFTWARES</a></li>
<li><a href="COMPUTER ARCHITECTURE.php">COMPUTER ARCHITECTURE</a></li>
<li><a href="OPERATING SYSTEM.php">OPERATING SYSTEMS</a></li>
</div>
<div class="col-full">
<p>Competitive programming is a mind sport usually held over the Internet or a local network, involving participants trying to program according to provided specifications. Competitive programming is recognized and supported by several multinational software and Internet companies, such as Google, Facebook and IBM.There are several organizations who host programming competitions on a regular basis.</p>
<p>A programming competition generally involves the host presenting a set of logical or mathematical problems to the contestants (who can vary in number from tens to several thousands), and contestants are required to write computer programs capable of solving each problem. Judging is based mostly upon number of problems solved and time spent for writing successful solutions, but may also include other factors (quality of output produced, execution time, program size etc.)</p>
<p>Since programming itself is a very recently developed branch of science, competitive programming is a very young sport. One of the oldest contests known is ACM ICPC which originated in the 1970s, and has grown to include 88 countries in its 2011 edition. Interest in competitive programming has grown extensively[quantify] since 2000, and is strongly connected to the growth of the Internet, which facilitates holding international contests online, eliminating geographical problems.</p>
</div>
</div>
</div>
<h3 align="right"><a href="pdfs/Programming_Challenges.pdf">Programming Challenges</a><h3>
</body>
</html>
