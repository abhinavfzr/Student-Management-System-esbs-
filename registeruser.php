

<?php


error_reporting(0);

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
 $user = $_POST['user']; 
 $password = $_POST['password'];
 
 $query = "INSERT INTO user (id,user,password) 
 VALUES ('','$user','$password')";
 $data = mysql_query ($query)or die(mysql_error());
 if($data)
	 { 
 echo "YOUR REGISTRATION IS COMPLETED...";
 } 
 } 
 function SignUp() 
 {
	 if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
	 { 
	 
	 $query = mysql_query("SELECT * FROM user WHERE user = '".$_POST['user']."'") 
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



if(isset($_POST['click']))
{
	SignUp();
}

?>

 
 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0019)http://10.11.11.11/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<link rel="stylesheet" href="./WebSoft@SBS Ferozepur_files/websoft.css" type="text/css">
	<link rel="shortcut icon" href="http://10.11.11.11/includeUs/img/favicon.ico">
    <script src="./WebSoft@SBS Ferozepur_files/jquery.min.js.download"></script>
    <script>
	    $(function(){
		    $('.fadein img:gt(0)').hide();
		    setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
	    });
    </script>
<style>
	.fadein {position:relative; top:0px; height:300px; margin:0 auto; padding: 0px; border:1px gray ridge}
	.fadein img {position:absolute; left:0px; top:0px; width:100%; height:100%}
</style>
</head>
<body>
<div id="mainWrapper">
 

	<link rel="stylesheet" href="./WebSoft@SBS Ferozepur_files/websoft.css" type="text/css">
	<script type="text/javascript" src="./WebSoft@SBS Ferozepur_files/websoft.js.htm"></script>
	
	<title>WebSoft@SBS Ferozepur</title>
	<link rel="shortcut icon" href="#">


<div class="pageHeadFoot">
    <div class="LogoBanner">
		<div class="NavLeftLogo"><a href="index.php"><img alt="Logo" src="./WebSoft@SBS Ferozepur_files/logo.png" height="80px"></a></div>
		<div class="NavRight">
		<form method="post">
			NEW ROLL NO (ID) <input  type="text"  name="user" size="7"> &nbsp; Password 
			<input name="password" type="password" size="7"><br><br>
		
			<input name="click" type="submit" value="Register">	
		</form>
				            <a  href="collegeadmin.php"><font color="darkblue">Already user Login here</font></a>

		</div>	<!-- End NavRight -->
    </div>	<!-- End LogoBanner -->

	
	<br>
	</div>
	
 <div class="pageTitle">Welcome to esbsstc website of SBSSTC Ferozepur</div>
 <div class="pageContents" align="center">
    <div class="fadein">
<!--	    <img src="webImg/WebImg1.JPG"/>	<img src="webImg/WebImg2.JPG"/>	<img src="webImg/WebImg3.JPG"/>-->
	    				
	    		<img src="./WebSoft@SBS Ferozepur_files/5.JPG" style="display: block;">		<img src="./WebSoft@SBS Ferozepur_files/6.JPG" style="display: none;">
    <img src="./WebSoft@SBS Ferozepur_files/1.JPG" style="display: none;"><img src="./WebSoft@SBS Ferozepur_files/2.JPG" style="display: none;"><img src="./WebSoft@SBS Ferozepur_files/3.JPG" style="display: none;"><img src="./WebSoft@SBS Ferozepur_files/4.JPG" style="display: none;"></div>
 </div>	
 

	<link rel="stylesheet" href="./WebSoft@SBS Ferozepur_files/websoft.css" type="text/css">


</div>
<div class="pageHeadFoot">
	<div class="NavBottom" style="height:72px">
		<div class="NavBottomL" align="center">
			<a href="#">Guidelines for Better Performance</a><hr>
			Faculty &amp; Student: Google Chrome or Internet Explorer<br>
			Controller of Examination &amp; Supdt Exam: Mozilla Firefox<br>
			© Copyright Reserved with Abhinav Jaiswal
		</div>	<!-- End of NavBottomL -->
		<div class="NavBottomR" align="center" style="color:black">
			<a href="http://www.Abhinav.site11.com" target="_blank">Abhinav Jaiswal</a><hr>
			Department of CSE, SBS State Technical Campus<br>
			Moga Road (NH-95), Ferozepur-152004 (PB) India<br>
			☎ +91-7307731196 | ✉ Abhi.king11@gmail.com
		</div>	<!-- End of NavBottomR -->
	</div>
</div>
 </div>

</body></html>

 
 