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
	
	if(isset($_POST['submit']))
	{
	    
		if(!empty($_POST['date']))
		{
		
			$date=mysqli_real_escape_string($conn,$_POST['date']); 
			
			//$date=DATE_FORMAT($date,'%y-%m-%d');
			
			$sql="SELECT * FROM CONTESTS WHERE contest_date>='".$date."'";
			
			$res=mysqli_query($conn,$sql);
			
			if(mysqli_num_rows($res)>0)
			{
				
				
				while($row=mysqli_fetch_array($res,MYSQLI_NUM)){ 
					
					echo $row[0].".<br>";
					echo "  CONTEST NAME : ".$row[1]."<br>";
					echo "  CONTEST DATE : ".$row[2]." (YY-MM-DD)"."<br>";
					echo "  CONTEST TIME : ".$row[3]." IST "."<br>";
					echo "  CONTEST LINK : ".$row[4]."<br><br>";
		   
	            		}
				
				exit();
			
			}
			else die("NO CONTENTS IN NEAR FUTURE.");
		
		}
			
	}
	
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
            <li><a href="#">HOME</a></li>
            <li><a href="#">COURSES  <span class="arrow">&#9660;</span></a>
               <ul class="sub-menu">
                    <li><a href="WEB DEVELOPMENT.php">WEB DEVELOPMENT</a></li>
		   <li><a href="PROGRAMMING LANGUAGES.php">PROGRAMMING LANGUAGES</a></li>
		   <li><a href="ALGORITHMS.php">ALGORITHM ANALYSIS</a></li>
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
            <li class="current-item"><a href="#">CONTESTS</a></li>
            <li><a href="LOGOUT.php">MAIN PAGE</a></li>
            <li><a style="text-decoration:none" href="#"><?php echo $temp; ?> <span class="arrow">&#9660;</span></a>
                <ul class="sub-menu">
                   <li><a href="UPDATE.php">UPDATE DATA</a></li>
            
                </ul> 
            </li>
        </ul>
    </nav>
</div>


<h2 class="contests">CONTESTS</h2>

<div class="row2">

<div class="row">

<div class="col-md-5">
<h3 class="headings">&#8250;&#8250; GOING ON...(Present Contests)</h3>

<p><a href="http://www.codechef.com/KAN14ROS/">
ACM-ICPC Asia-Kanpur Onsite Contest 2014, Replay</a><br>

<a href="http://www.codechef.com/SPT2015/">
SPIT Coder's Club 2.0</a><br>

<a href="http://www.codechef.com/CDOT2015/">
CodeOut 2015</a>
</p>

<h3>&#8250;&#8250; Yet to come(Future Contests)</h3>

<p><a href="http://www.codechef.com/APRIL15/">
   April Challenge 2015</a><br>

<a href="http://www.codechef.com/GOOG2015/">
Googol-ISM Dhanbad</a><br>

<a href="http://www.codechef.com/PSCD2015/">
Pseudo Code</a>
</p>

</div>

 <div class="col-md-3">
 
  <h3 class="duration">&#8250;&#8250; Ends On</h3>

  <p>15:00IST 15-Apr 2015<br>
     00:00IST 14-Apr 2015<br>
     17:00IST 16-Apr 2015<br>
   </p>

  <h3>&#8250;&#8250; Starts On</h3>
 
  <p>
     20:00IST 7-Apr 2015<br>
     21:30IST 9-Apr 2015<br>
     22:00IST 9-Apr 2015
    

  </p>


 </div>


<div class="col-md-4">

<h3 class="headings">&#8250;&#8250; Recently Ended contests</h3>
<marquee behavior="scroll" scrollamount="3.5" direction="up" 
onmouseover="this.stop();" onmouseout="this.start();">

<p><a href="http://www.codechef.com/DMNT2015/">
&#8250;&#8250; Dementia 2015</a><br>

<a href="http://www.codechef.com/DBYZ15/">
&#8250;&#8250; Divide By Zero 3.0</a><br>

<a href="http://www.codechef.com/NCC2015/">
&#8250;&#8250; National Computing Contest 2015</a><br>

<a href="http://www.codechef.com/LTIME22/">
&#8250;&#8250; March Lunchtime 2015</a><br>

<a href="http://www.codechef.com/CDGO2015/">
&#8250;&#8250; Codigo 2015</a>

</p>

</marquee>

</div>


<div class="col-md-1"></div>


</div>

<div class="row">


<div class="col-md-8">

<h3 style="position:relative; top:30px;left:20px;">What is "Search for a contest" <br>and how to use it ?</h3>

  <p style="position:relative; top:30px;">This is a tool which you can use to find the contests going to start after a certain
     date. Just enter a date and click "SUBMIT" and you can see the contests starting after 
  the date you entered. </p><br>


</div>
<div class="col-md-4">

<h3 class="search-contest" style="position:relative;top:30px;left:17px;">Search for a contest </h3>
 
 <form action="#" method="post">
        
      <input style="border-radius:2px;padding:2px;position:relative;left:48px;top:30px;" type="date" name="date" />
      <input style="border-radius:5px;padding:5px;position:relative;left:48px;top:30px;" type="submit" name="submit" value="SUBMIT" />
        
      </form>




</div>


</div>



</div>


</div>

</body>

</html>
