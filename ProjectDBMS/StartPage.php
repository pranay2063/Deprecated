<?php 
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
	 
	 if(isset($_POST['submit3']))
	 {
		  
		  if(!empty($_POST['query']))
		  {  
		  
		  	  
		  		$query=mysqli_real_escape_string($conn,$_POST['query']);
		  
		  		//echo $query;
		  
		 	    $sql="SELECT * FROM USERS WHERE user_handle='".$query."' or user_name='".$query."' ";
		  
		  		$res=mysqli_query($conn,$sql);
		  
		  		if(mysqli_num_rows($res)==0)
		  		{
			  
			 		 echo "NO RESULTS"; 
			  		 exit();
			    
		  		}
		  
		  		while($row=mysqli_fetch_array($res,MYSQLI_NUM))
		  		{
			  
			  		echo "USER_NAME : ".$row[3]."<br> USER_HANDLE : ".$row[1]."<br>USER_ADDRESS : ".$row[0]."<br>";
					echo "<br>USER exists.";
			  		exit();
			    
		  		}
		  
		  
		  }
		 
	 }
	 //else die("OOPS!!! TRY AGAIN");
	 
	 mysqli_close($conn);	 
?>



<!DOCTYPE html>
<html>

<head>

<title>CS-HUB</title>
<link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
<link rel="stylesheet" href="http://localhost/DW/dropdown.css">

<script type="text/javascript">

var slideimages = new Array() // create new array to preload images
slideimages[0] = new Image() // create new instance of image object
slideimages[0].src = "images/image7.jpg" // set image src property to image path, preloading image in the process
slideimages[1] = new Image()
slideimages[1].src = "images/image9.jpg"
slideimages[2] = new Image()
slideimages[2].src = "images/image10.jpg"
slideimages[3] = new Image() // create new instance of image object
slideimages[3].src = "images/image4.jpg" // set image src property to image path, preloading image in the process
slideimages[4] = new Image()
slideimages[4].src = "images/image3.jpg"
slideimages[5] = new Image()
slideimages[5].src = "images/image5.jpg"
slideimages[6] = new Image()
slideimages[6].src = "images/image8.jpg"

</script>


</head>


<body>

 <div class="logo"> 
  <img src="images1.jpg" width="125px" height="85px"/>
 </div>

<h1 class="main-header">Welcome to CS-HUB </h1>

<ul class="pull-right">

 <li><a href="LOGIN.php">Login</a></li>
 <li><a href="REGISTER.php">Register</a></li>

</ul>

<div class="menu-wrap">
    <nav class="menu">
        <ul class="clearfix">
            <li class="current-item"><a href="#">HOME</a></li>
            <li><a href="#">COURSES  <span class="arrow">&#9660;</span></a>
               <ul class="sub-menu">
                    <li><a href="LOGIN.php">WEB DEVELOPMENT</a></li>
                    <li><a href="LOGIN.php">COMPETITIVE PROGRAMMING</a></li>
                    <li><a href="LOGIN.php">ANDROID DEVELOPMENT</a></li>
                    <li><a href="LOGIN.php">OPERATING SYSTEMS</a></li>
                    <li><a href="LOGIN.php">PROGRAMMING LANGUAGES</a></li>
                    <li><a href="LOGIN.php">ELECTRONICS</a></li>
                    <li><a href="LOGIN.php">SOFTWARES</a></li>
                    <li><a href="LOGIN.php">COMPUTER ARCHITECTURE</a></li>
                    <li><a href="LOGIN.php">MATHEMATICS AND COMPUTATION</a></li>
                    <li><a href="LOGIN.php">ALGORITHMS</a></li>
                </ul>
             </li>    

            <li><a href="ABOUTUS2.php">ABOUT US</a></li>
        </ul>
    </nav>
</div>

<div class="background">

   <div class="row">
   <div class="col-md-8">

   <div class="heading"> 
   <img src="file:///H|/image1.jpg" id="slide" width="900" height="420" />
   <script type="text/javascript">

//variable that will increment through the images
var step=0

function slideit(){
 //if browser does not support the image object, exit.
 if (!document.images)
 return
 
 document.getElementById('slide').src = slideimages[step].src
 
 if (step<6)
 step++

 else step=0
 //call function "slideit()" every 4 seconds
 setTimeout("slideit()",4500)
 
}

slideit()

</script>  
    
    </div>
    </div>

    <div class="col-md-4">
    <div class="back">
    <div class="searchbox">
    <form action="START.php" method="post">
    <input type="text" name="query" />
    <input type="submit" name="submit3" value="SEARCH"/>
    </form>
    </div>
    </div>

     <div class="video">   
    
    <video width="370" height="360" controls="controls">
    <source src="images/video.MP4" type="video/mp4">
    </video>
    
</div>
</div>

 

</body>

</html>
