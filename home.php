<html>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />

<div class="navbar navbar-default navbar-static-top" >
		
        
            <a class="navbar-brand" href="index.php"><font color="darkblue">Show</font></a>
						<a class="navbar-brand" href="college.php"><font color="darkblue">Home</font></a>

        </div>
</html>

<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'sbsstc'); 
define('DB_USER','root'); 
define('DB_PASSWORD','');
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) 
 or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con)
 or die("Failed to connect to MySQL: " . mysql_error()); 
 function NewUser() 
 { 
 $rollno = $_POST['rollno']; 
 $userName = $_POST['studentname'];
 $fathername = $_POST['fathername'];
 $dob = $_POST['dob'];
 $email = $_POST['email']; 
 $mobno = $_POST['mobno'];
 $category = $_POST['category']; 
 $feecategory = $_POST['feecategory'];
 $address = $_POST['address']; 
 $gender = $_POST['gender'];
 $batch = $_POST['batch'];
 $query = "INSERT INTO student (id,rollno,studentname,fathername,dob,category,feecategory,mobno,email,gender,address,batch) 
 VALUES ('','$rollno','$userName','$fathername','$dob','$category','$feecategory','$mobno','$email','$gender','$address','$batch')";
 $data = mysql_query ($query)or die(mysql_error());
 if($data)
	 { 
 echo "YOUR REGISTRATION IS COMPLETED...";
 } 
 } 
 function SignUp() 
 {
	 if(!empty($_POST['rollno'])) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
	 { 
	 
	 $query = mysql_query("SELECT * FROM student WHERE rollno = '".$_POST['rollno']."'") 
	 or die(mysql_error());
	 if (mysql_num_rows($query) != 0)
  {
      echo "Username already exists";
  }

	 else 
	 { 
      NewUser();
	 } 
	 }
	 }



if(isset($_POST['submit']))
{
	SignUp();
}


	 ?>
<?php
error_reporting(0);
session_start();
?>
<?php

if(!isset($_SESSION['admin']))
{
    header("location:collegeadmin.php");
    exit();
}
    ?>
<html>














</html>