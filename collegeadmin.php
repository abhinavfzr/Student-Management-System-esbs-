

<?php


error_reporting(0);
$con=mysql_connect("localhost","root","") or die("error");
if($con)
{
	mysql_select_db("sbsstc");
}

session_start();
	if(isset($_POST["click"]))
	{
	
    $select="select * from admin where admin='".$_POST["admin"]."' and password='".$_POST["password"]."'";	
  
   $dr=mysql_query($select);
	if(mysql_num_rows($dr)>0)
	{
		while($r=mysql_fetch_array($dr))
		{
			$_SESSION["admin"]=$r[0];
			echo $_SESSION["admin"];
		}
	 header("Location:college.php");	
	}
	else
	{
		echo "<center><h2>incorrect username and password</h2></center>";
	}
	$select="select * from user where user='".$_POST["admin"]."' and password='".$_POST["password"]."'";	
  
   $dr=mysql_query($select);
	if(mysql_num_rows($dr)>0)
	{
		while($r=mysql_fetch_array($dr))
		{
			$_SESSION["user"]=$r[1];
			echo $_SESSION["user"];
		}
	 header("Location:college.php");	
	}
	else
	{
		echo "<center><h2>incorrect username and password</h2></center>";
    } 
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
			Login ID <input  type="text"  name="admin" size="7"> &nbsp; Password 
			<input name="password" type="password" size="7"><br><br>
			<input name="click" type="submit" value="Login">

		</form>
		            <a  href="registeruser.php"><font color="darkblue">New Registration</font></a>

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

 
 