<?php
include_once 'dbcon.php';
$rid = $_POST['rid'];
$id = $_POST['id'];
$fn = $_POST['fn'];
$mothername = $_POST['mothername'];
$ln = $_POST['ln'];
$chk = $_POST['chk'];
$dob = $_POST['dob'];
$mobno = $_POST['mobno'];
$category = $_POST['category'];
$feecategory = $_POST['feecategory'];
$address = $_POST['address'];
$batch = $_POST['batch'];
$gender = $_POST['gender'];
$email= $_POST['email'];
$residence = $_POST['residence'];
$marks12 = $_POST['marks12'];
$diploma = $_POST['diploma'];
 $aadhaar = $_POST['aadhaar'];
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
$totalmarks = $_POST['totalmarks'];

$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE sbsstudent SET rollno='$rid[$i]',  studentname='$fn[$i]', fathername='$ln[$i]', mothername='$mothername[$i]' , dob='$dob[$i]',  category='$category[$i]', feecategory='$feecategory[$i]',  mobno='$mobno[$i]', email='$email[$i]' , gender='$gender[$i]',address='$address[$i]', batch='$batch[$i]',rollno='$rid[$i]',  studentname='$fn[$i]', residence='$residence[$i]', marks12='$marks12[$i]',  diploma='$diploma[$i]', sem1='$sem1[$i]',sem2='$sem2[$i]', sem3='$sem3[$i]', sem4='$sem4[$i]', sem5='$sem5[$i]', sem6='$sem6[$i]', sem7='$sem7[$i]',  sem8='$sem8[$i]',pass1='$pass1[$i]',pass2='$pass2[$i]', pass3='$pass3[$i]', pass4='$pass4[$i]', pass5='$pass5[$i]', pass6='$pass6[$i]', pass7='$pass7[$i]',  pass8='$pass8[$i]',totalmarks='$totalmarks[$i]',aadhaar='$aadhaar[$i]',marks10='$marks10[$i]' WHERE id=".$id[$i]);
}
header("Location: user.php");l

?>
<?php
error_reporting(0);
session_start();
?>
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



if(isset($_POST['submit1']))
{
	SignUp();
}


	 ?>
<?php

if(!isset($_SESSION['user']))
{
    header("location:collegeadmin.php");
    exit();
}
    ?>