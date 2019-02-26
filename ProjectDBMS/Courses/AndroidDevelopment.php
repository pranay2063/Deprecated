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
                   <li class="current-item"><a href="ANDROID DEVELOPMENT.php">ANDROID</a></li>
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

<h2 class="yc-heading">Android Development</h2>

<div class="row">

<div class="col-md-3">

<h3 class="yc-headings1">Courses Offered</h3>
<ul class="vertical-bar">
<li><a href="WEB DEVELOPMENT.php">WEB DEVELOPMENT</a></li>
<li><a href="PROGRAMMING LANGUAGES.php">PROGRAMMING LANGUAGES</a></li>
<li><a href="ALGORITHMS.php">AlGORITHMS</a></li>
<li><a href="COMPETITIVE PROGRAMMING.php">COMPETITIVE PROGRAMMING</a></li>
<li class="current"><a href="ANDROID DEVELOPMENT.php">ANDROID</a></li>
<li><a href="ELECTRONICS.php">ELECTRONICS</a></li>
<li><a href="MATHEMATICS COMPUTATION.php">MATHS AND COMPUTATION</a></li>
<li><a href="SOFTWARES.php">SOFTWARES</a></li>
<li><a href="COMPUTER ARCHITECTURE.php">COMPUTER ARCHITECTURE</a></li>
<li><a href="OPERATING SYSTEM.php">OPERATING SYSTEMS</a></li>
</div>
<div class="col-full">
<p>Android software development is the process by which new applications are created for the Android operating system. Applications are usually developed in Java programming language using the Android Software Development Kit (SDK), but other development environments are also available.</p>

<p>As of July 2013, more than one million applications have been developed for Android, with over 25 billion downloads. A June 2011 research indicated that over 67% of mobile developers used the platform, at the time of publication.In Q2 2012, around 105 million units of Android smartphones were shipped which acquires a total share of 68% in overall smartphones sale till Q2 2012.</p>
<p>The Android Developer Challenge was a competition to find the most innovative application for Android. Google offered prizes totaling 10 million US dollars, distributed between ADC I and ADC II. ADC I accepted submissions from January 2 to April 14, 2008. The 50 most promising entries, announced on May 12, 2008, each received a $25,000 award to further development.It ended in early September with the announcement of ten teams that received $275,000 each, and ten teams that received $100,000 each.

ADC II was announced on May 27, 2009. The first round of the ADC II closed on October 6, 2009. The first-round winners of ADC II comprising the top 200 applications were announced on November 5, 2009. Voting for the second round also opened on the same day and ended on November 25. Google announced the top winners of ADC II on November 30, with SweetDreams, What the Doodle!? and WaveSecure being nominated the overall winners of the challenge.</p>
</div>
</div>
</div>
<h3 align="right"><a href="pdfs/android.pdf">Android</a></h3>
<h3 align="right"><a href="https://developer.android.com/training/index.html">Android Development</a></h3>
</body>
</html>
