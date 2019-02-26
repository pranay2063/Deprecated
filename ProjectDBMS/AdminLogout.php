<?php

   	 session_start();
	 
	 if(!isset($_SESSION['start']))
	 {
		 
		header('Location: http://localhost/DW/ADMIN%20LOGIN.php');		
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
	 
	 $sql="SELECT COUNT(*) AS c FROM USERS";
	 $res=mysqli_query($conn,$sql);
			 
	 foreach($res as $r)
	 $temp=$r;
			 
	 $sql="SELECT COUNT(*) AS d FROM COURSES";
	 $res=mysqli_query($conn,$sql);
			 
	 foreach($res as $r)
	 $temp2=$r;
	 
	 if(isset($_POST['submit2']))
	 {
		  
		 if(!empty($_POST['name']) && !empty($_POST['date']) && !empty($_POST['time']) && !empty($_POST['link']))
		 {

			 
			 $name=mysqli_real_escape_string($conn,$_POST['name']);
			 $date=mysqli_real_escape_string($conn,$_POST['date']);
			 $time=mysqli_real_escape_string($conn,$_POST['time']);
			 $link=mysqli_real_escape_string($conn,$_POST['link']);
			 
			 $sql="SELECT * FROM CONTESTS WHERE CONTEST_NAME='".$name."' AND CONTEST_DATE='".$date."' AND 
			       CONTEST_TIME='".$time."' AND CONTEST_LINK='".$link."' LIMIT 1";
				   
			 $res=mysqli_query($conn,$sql);
			 
			 if(mysqli_num_rows($res)==1)
			 {
			     
				 echo "CONTEST DATA EXISTS IN THE DATABASE.";
				 exit();
				 	 
			 }
			 
			 $sql="INSERT INTO CONTESTS(CONTEST_NAME,CONTEST_DATE,CONTEST_TIME,CONTEST_LINK)   
			       VALUES('$name','$date','$time','$link')";
				    
			 $res=mysqli_query($conn,$sql);
			 
			 //echo "Executing...2";
			 
			 if($res)
			 {
				 //echo "Executing...1";
				 //exit();
				 
			 }
			 else die("CONNECTION ERROR".mysqli_connect_error());
			 
		 }
		 else die("ENTER INFORMATION PROPERLY");
		   
	 }
	 
	 if(isset($_POST['submit3']))
	 {
		
		 if(!empty($_POST['cid']) && !empty($_POST['cname']) && !empty($_POST['ctime']))
		 {
			  
			  $cid=mysqli_real_escape_string($conn,$_POST['cid']);
			  $cname=mysqli_real_escape_string($conn,$_POST['cname']);
			  $ctime=mysqli_real_escape_string($conn,$_POST['ctime']);
			  
			  $sql="SELECT * FROM COURSES WHERE COURSE_ID='".$cid."'AND COURSE_NAME='".$cname."' LIMIT 1";
			  
			  $res=mysqli_query($conn,$sql);
			 
			  if(mysqli_num_rows($res)==1)
			  {
			     
				  echo "COURSE ALREADY EXISTS IN THE DATABASE.";
				  exit();
				 	 
			  }
			  
			  $sql="INSERT INTO COURSES VALUES('$cid','$cname','$ctime')";
			  
			  $res=mysqli_query($conn,$sql);
			 
			  //echo "Executing...4";
			 
			  if($res)
			  {
				  //echo "Executing...3";
				  //exit();
				 
			  }
			  else die("CONNECTION ERROR".mysqli_connect_error());
			  
		 }
		 else die("ENTER INFORMATION PROPERLY");
		 
	 }
	 
	 if(isset($_POST['logout']))
	 {   
	   
		if(isset($_SESSION['start']))
		unset($_SESSION['start']);
		
		session_destroy();
		
		header('Location: http://localhost/DW/START.php');
		
		exit();
			
	 }
	 
	 mysqli_close($conn);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Concept Hub</title>
</head>

<body bgcolor="#FFFFFF">

<form method="post" action="#">
      <div align="right">
      <input style="border-radius:5px;padding:5px" type="submit" name="logout" value="LOG OUT" />
      </div>
</form>

<div style="color:#000;padding:20px"><br />
<h2>1.There are currently <?php echo $temp['c']; ?> users registered into the site</h2>
<h2>2.There are currently <?php echo $temp2['d']; ?> courses on the site</h2>

<form method="post" action="#">

  <p align="right">      
      
    CONTEST NAME <input style="border-radius:5px;padding:5px" type="text" name="name" required="required" placeholder="NAME" /> 
                 <br />
    CONTEST DATE <input style="border-radius:5px;padding:5px" type="text" name="date" required="required" placeholder="DATE" />
                 <br />
    CONTEST TIME <input style="border-radius:5px;padding:5px" type="text" name="time" required="required" placeholder="TIME" />
                 <br />
    CONTEST LINK <input style="border-radius:5px;padding:5px" type="text" name="link" required="required" placeholder="LINK" /><br />
  </p>
  <div align="right">
    <input style="border-radius:5px;padding:5px" type="submit" name="submit2" value="ADD CONTEST"/><br /><br /><br /> 
  </div>
     
</form>

<form method="post" action="#">
    
    <div align="right">
    
    COURSE_ID <input style="border-radius:5px;padding:5px" type="text" name="cid" required="required" placeholder="NAME" />
      <br />
    
    COURSE NAME
  <input style="border-radius:5px;padding:5px" type="text" name="cname" required="required" placeholder="NAME" />
      <br />
      COURSE DURATION(DAYS) <input style="border-radius:5px;padding:5px" type="text" name="ctime" required="required" placeholder="NAME" />
      <br /><br />    
      
      <input style="border-radius:5px;padding:5px" type="submit" name="submit3" value="ADD COURSE"/>
    </div>       
     
</form>

</div>

</body>
</html>
