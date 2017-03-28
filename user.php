<?php
error_reporting(0);
session_start();
?>
<?php

	include_once 'dbcon.php';
if(!isset($_SESSION['user']))
{
    header("location:collegeadmin.php");
    exit();
}
    ?>
    <?php

if(isset($_POST["logout"]))
{
	session_destroy();
	header("Location:collegeadmin.php");
	
}
?>
<html>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<script src="jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>
<h1> welcome user       </h1>
	<?php echo $_SESSION["user"];?>


<form method="post">
 <div  align="right">
<input type="submit" name="logout"  style="background-color:blue;color:orange;text-align:right;font-family:bold;font-size:15px" value="logout">

</div>
</form>

		<?php
		$con=mysql_connect("localhost","root","") or die("error");
if($con)
{
	mysql_select_db("sbsstc");
}
		
$res="select * from sbsstudent where rollno='".$_SESSION["user"]."'";
				
  $dr=mysql_query($res);

	if(mysql_num_rows($dr)>0)
	{
					 header("Location:useredit.php");	

	}
	else
	{
			 header("Location:usernew.php");	

    } 
	
?>
</html>