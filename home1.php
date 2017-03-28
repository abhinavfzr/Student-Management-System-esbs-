<html>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />

<div class="navbar navbar-default navbar-static-top" >
		
            <a class="navbar-brand" href="addnew.php" >add new record</a>
            <a class="navbar-brand" href="index.php">personal</a>
            <a class="navbar-brand" href="index1.php">academic</a>
			<a class="navbar-brand" href="college.php">Home</a>

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
 $mothername = $_POST['mothername'];
 $dob = $_POST['dob'];
 $email = $_POST['email']; 
 $mobno = $_POST['mobno'];
 $category = $_POST['category']; 
 $feecategory = $_POST['feecategory'];
 $address = $_POST['address']; 
 $gender = $_POST['gender'];
 $residence = $_POST['residence'];
 $marks12 = $_POST['marks12'];
 $diploma = $_POST['diploma']; 
 $marks10 = $_POST['marks10'];
 $sem1 = $_POST['sem1'];
 $sem2 = $_POST['sem2']; 
 $sem3 = $_POST['sem3'];
 $sem4 = $_POST['sem4']; 
 $sem5 = $_POST['sem5'];
 $sem6 = $_POST['sem6'];
 $sem7 = $_POST['sem7']; 
 $sem8 = $_POST['sem8'];
 $pass1 = $_POST['pass1'];
 $pass2 = $_POST['pass2']; 
 $pass3 = $_POST['pass3'];
 $pass4 = $_POST['pass4']; 
 $pass5 = $_POST['pass5'];
 $pass6 = $_POST['pass6'];
 $pass7 = $_POST['pass7']; 
 $pass8 = $_POST['pass8'];
 $batch = $_POST['batch'];
 $totalmarks = $_POST['totalmarks'];
 $aadhaar = $_POST['aadhaar'];

 $query = "INSERT INTO sbsstudent (id,rollno,studentname,fathername,mothername,dob,category,feecategory,mobno,email,gender,address,batch,residence,marks12,diploma,sem1,pass1,sem2,pass2,sem3,pass3,sem4,pass4,sem5,pass5,sem6,pass6,sem7,pass7,sem8,pass8,marks10,totalmarks,aadhaar) 
 VALUES ('','$rollno','$userName','$fathername','$mothername','$dob','$category','$feecategory','$mobno','$email','$gender','$address','$batch','$residence','$marks12','$diploma','$sem1','$pass1','$sem2','$pass2','$sem3','$pass3','$sem4','$pass4','$sem5','$pass5','$sem6','$pass6','$sem7','$pass7','$sem8','$pass8','$marks10','$totalmarks','$aadhaar')";
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
	 
	 $query = mysql_query("SELECT * FROM sbsstudent WHERE rollno = '".$_POST['rollno']."'") 
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