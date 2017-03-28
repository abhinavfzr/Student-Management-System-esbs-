<?php
error_reporting(0);
session_start();
?>
<?php

if(!isset($_SESSION['admin']))
{
    header("location:user.php");
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
<?php

	if(isset($_POST["search"]))
	{
		


	    {
			$_SESSION["SEARCH"]=$_POST["box"];
header("location:search.php");
        }
	}
	
	 
		
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="collegestyle2.css"/>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />

<title>
MY COLLEGE CAMPUS
</title>
</head>
<div class="navbar navbar-default navbar-static-top" >
		
            <a class="navbar-brand" href="index.php"><font color="darkblue">Show</font></a>
						<a class="navbar-brand" href="college.php"><font color="darkblue">Home</font></a>
						<form method="POST" align="right" style="padding: 0; margin: 10;">
<input type="text" name="box"   placeholder="enter rollno">
<input type="submit"  name="search" value="search">
</form>

        </div>

<body bgcolor="darkblue">
<form method="post">
 <div  align="right">
<input type="submit" name="logout"  style="background-color:blue;color:orange;text-align:right;font-family:bold;font-size:15px" value="logout">

</div>
</form>

<div id="mainWrapper" align="center">
 
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />

	<?php echo $_SESSION["admin"];?>

<div class="pageHeadFoot">
    
 <div class="pageTitle">Select Batch</div>
 <div class="pageContents">
	<form method="post" action="home1.php" enctype="multipart/form-data" name="studInfo" class="register" >
	<table class='table table-bordered' border="1">
		<tbody><tr><th colspan="4">Official Information</th></tr>
		<select name="batch">
<option value="2014">2014-2018</option>
<option value="2013">2013-2017</option>
<option value="2012">2012-2016</option>
<option value="2011">2011-2015</option>
<option value="2010">2010-2014</option>
</select>
		<tr><td style="width: 175px">(Roll No.)*</td>
			<td style="width: 240px">                    <input  name="rollno" type="text" class="form-control" />
</td>
			<td style="width: 135px">Mother Name</td>
			<td style="width: 290px">                   <input type="text" name="mothername" class="form-control" />
</td></tr>
		<tr><td style="width: 175px">Full Name </td>
			<td style="width: 240px">                    <input name="studentname" type="text" class="form-control"/>

</td>
			<td style="width: 135px">Father Name </td>
			<td style="width: 290px">                    <input  name="fathername" type="text" class="form-control"/>
</td></tr>
		<tr>
			<td style="width: 175px">Date of Birth</td>
			<td style="width: 240px"><input  name="dob" type="text" class="form-control" placeholder="__/__/____"/>
</td>
			<td align="left" style="width: 135px">Gender</td>
			<td style="width: 290px">MALE<input  name="gender" type="radio" value="male" class="form-contro" />
			                        FEMALE<input  name="gender" type="radio"value="female" class="form-contro" />
</td>
		</tr>
		<tr><td style="width: 135px">Category</td ><td style="width: 175px">
		GEN<input  name="category" type="radio"  value="GEN" class="form-contro" />
        SC<input  name="category" type="radio" value="SC" class="form-contro" />
        OBC<input  name="category" type="radio"value="OBC" class="form-contro" />
		BC<input  name="category" type="radio"value="BC" class="form-contro" />

		
		</td>
			<td style="width: 135px">Student's Email</td>
			<td style="width: 290px">                    <input  name="email"  type="text" class="form-control"/>
</td></tr>
		<tr><td style="width: 175px">Fee Category</td>
			<td style="width: 240px"> GEN <input  name="feecategory" type="radio" value="GEN" class="form-contro"placeholder="SC/GEN/FEEWAIVER"/>
                                     SC   <input  name="feecategory" type="radio" value="SC" class="form-contro"placeholder="SC/GEN/FEEWAIVER"/>
									 FEEWAIVER  <input  name="feecategory" type="radio" value="FEEWAIVER"class="form-contro"placeholder="SC/GEN/FEEWAIVER"/>
			</td>

			<td style="width: 175px">Mobile Number</td>
			<td style="width: 240px">                    <input  name="mobno" type="text" class="form-control"/>
</td>

	</tr>
	
		<tr>
			
</tr>

<td style="width: 175px">Address</td>
			<td style="width: 240px" colspan="1">  <input  name="address" type="text" class="form-control"/>
			<td style="width: 175px">Residence</td>
			<td style="width: 240px" colspan="1">HOSTELER <input  name="residence" type="radio" value="HOSTELER" class="form-contro"/>
			DAYSCHOLAR <input  name="residence" type="radio" value="DAYSCHOLAR" class="form-contro"/>
</td>

		</tbody></table>
		<table class='table table-bordered' border="1">
		<tr><td style="width: 175px">Aadhaar Number</td>
			<td style="width: 240px">                    <input  name="aadhaar" type="text" class="form-control"/>
</td>
			<td style="width: 135px">marks 10th</td>
			<td style="width: 290px">                   <input type="text" name="marks10" class="form-control" />
</td></tr>
		
		<tr>
			<td style="width: 175px">marks 12th</td>
			<td style="width: 240px"><input  name="marks12" type="text" class="form-control"/>
</td>
			<td align="left" style="width: 135px">Diploma marks</td>
			<td style="width: 290px"><input  name="diploma" type="text" class="form-control"/>
</td>
		</tr>
		<tr><td style="width: 135px">sem1 marks</td ><td style="width: 175px"><input  name="sem1" type="text" class="form-control"/>
</td>
			<td style="width: 135px">pass year sem1</td>
			<td style="width: 290px">                    <input  name="pass1"  type="text" class="form-control"/>
</td></tr>
		<tr><td style="width: 175px">sem2 marks</td>
			<td style="width: 240px">   <input  name="sem2" type="text" class="form-control"/>
</td>

			<td style="width: 175px">pass year sem2</td>
			<td style="width: 240px">                    <input  name="pass2" type="text" class="form-control"/>
</td>

	</tr>
	
		<tr>
		<td style="width: 175px">sem3 marks</td>
			<td style="width: 240px" >  <input  name="sem3" type="text" class="form-control"/>
	</td>
<td style="width: 175px">pass year sem3</td>
			<td style="width: 240px" >  <input  name="pass3" type="text" class="form-control"/>
	</td>		
</tr>
<tr>
		<td style="width: 175px">sem4 marks</td>
			<td style="width: 240px" >  <input  name="sem4" type="text" class="form-control"/>
	</td>
<td style="width: 175px">pass year sem4</td>
			<td style="width: 240px" >  <input  name="pass4" type="text" class="form-control"/>
	</td>		
</tr>
	<tr><td style="width: 135px">sem5 marks</td ><td style="width: 175px"><input  name="sem5" type="text" class="form-control"/>
</td>
			<td style="width: 135px">pass year sem5</td>
			<td style="width: 290px">                    <input  name="pass5"  type="text" class="form-control"/>
</td></tr>
		<tr><td style="width: 175px">sem6 marks</td>
			<td style="width: 240px">   <input  name="sem6" type="text" class="form-control"/>
</td>

			<td style="width: 175px">pass year sem6</td>
			<td style="width: 240px">                    <input  name="pass6" type="text" class="form-control"/>
</td>

	</tr>
	
		<tr>
		<td style="width: 175px">sem7 marks</td>
			<td style="width: 240px" >  <input  name="sem7" type="text" class="form-control"/>
	</td>
<td style="width: 175px">pass year sem7</td>
			<td style="width: 240px" >  <input  name="pass7" type="text" class="form-control"/>
	</td>		
</tr>
<tr>
		<td style="width: 175px">sem8 marks</td>
			<td style="width: 240px" >  <input  name="sem8" type="text" class="form-control"/>
	</td>
<td style="width: 175px">pass year sem8</td>
			<td style="width: 240px" >  <input  name="pass8" type="text" class="form-control"/>
	</td>		
</tr>
<td style="width: 175px">total marks</td>
			<td style="width: 240px"  colspan="3">  <input name="totalmarks" type="text" class="form-control"/>
	</td>	


		</tbody></table><br>
					<input  type="submit" name="submit" value="Submit">
</form>
 </div>	
 
<?php
error_reporting(0);
session_start();
?>
<body>
<form method="POST">


</body>
</form>






</html>
