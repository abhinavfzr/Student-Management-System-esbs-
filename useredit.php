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
<form method="post" action="update_mul1.php" enctype="multipart/form-data" name="studInfo" class="register" >
	<table class='table table-bordered' border="1">
		<tbody><tr><th colspan="4">Official Information</th></tr>
		<?php
		
			$res=$MySQLiconn->query("SELECT * FROM sbsstudent WHERE rollno=".$_SESSION["user"]);


	while($row=$res->fetch_array())
	{
		?>
		    	<input type="hidden" name="id[]" value="<?php echo $row['id'];?>" />

		<tr><td style="width: 175px">(Roll No).</td>
			<td style="width: 240px"><input type="text" name="rid[]" value="<?php echo $row['rollno'];?>" />
</td>
			<td style="width: 135px">Degree (Batch)</td>
			<td style="width: 290px"> 
			<input type="text" name="batch[]" value="<?php echo $row['batch'];?>"  />

			
</td></tr>
		<tr><td style="width: 175px">Full Name </td>
			<td style="width: 240px">
		<input type="text" name="fn[]" value="<?php echo $row['studentname'];?>"  />

</td>
			<td style="width: 135px">Father Name </td>
			<td style="width: 290px">       
		<input type="text" name="ln[]" value="<?php echo $row['fathername'];?>"  />

			</td></tr>
			<tr>
	
			<td style="width: 135px">Mother Name </td>
			<td style="width: 290px">       
		<input type="text" name="mothername[]" value="<?php echo $row['mothername'];?>"  />

			</td></tr>
		<tr>
			<td style="width: 175px">Date of Birth</td>
			<td style="width: 240px">
		<input type="text" name="dob[]" value="<?php echo $row['dob'];?>"  />
</td>
			<td align="left" style="width: 135px">Gender</td>
			<td style="width: 290px">
		<input type="text" name="gender[]" value="<?php echo $row['gender'];?>" class="formcontro" />
</td>
		</tr>
		<tr><td style="width: 135px">Category</td ><td style="width: 175px">
		<input type="text" name="category[]" value="<?php echo $row['category'];?>"  />
</td>
			<td style="width: 135px">Student's Email</td>
			<td style="width: 290px">                    
		<input type="text" name="email[]" value="<?php echo $row['email'];?>"  />
</td></tr>
		<tr><td style="width: 175px">fee Category</td>
			<td style="width: 240px">   
		<input type="text" name="feecategory[]" value="<?php echo $row['feecategory'];?>"  />
</td>

			<td style="width: 175px">Mobile</td>
			<td style="width: 240px">                    
		<input type="text" name="mobno[]" value="<?php echo $row['mobno'];?>"  />
</td>

	</tr>
	
		<tr>
			
</tr>

<td style="width: 175px">Address</td>
			<td style="width: 240px" colspan="1">  
		<input type="text" name="address[]" value="<?php echo $row['address'];?>"  />
</td>
	<td style="width: 135px">residence </td>
			<td style="width: 290px">       
		<input type="text" name="residence[]" value="<?php echo $row['residence'];?>"  />

			</td></tr>
		<tr>
			<td style="width: 175px">marks12</td>
			<td style="width: 240px">
		<input type="text" name="marks12[]" value="<?php echo $row['marks12'];?>"  />
</td>
			<td align="left" style="width: 135px">diploma</td>
			<td style="width: 290px">
		<input type="text" name="diploma[]" value="<?php echo $row['diploma'];?>" class="formcontro" />
</td>
		</tr>
		<tr><td style="width: 135px">marks10</td ><td style="width: 175px">
		<input type="text" name="marks10[]" value="<?php echo $row['marks10'];?>"  />
</td>
			<td style="width: 135px">aadhaar</td>
			<td style="width: 290px">                    
		<input type="text" name="aadhaar[]" value="<?php echo $row['aadhaar'];?>"  />
</td></tr>

<tr><td style="width: 135px">sem1</td ><td style="width: 175px">
		<input type="text" name="sem1[]" value="<?php echo $row['sem1'];?>"  />
</td>
			<td style="width: 135px">pass1</td>
			<td style="width: 290px">                    
		<input type="text" name="pass1[]" value="<?php echo $row['pass1'];?>"  />
</td></tr>
<tr><td style="width: 135px">sem2</td ><td style="width: 175px">
		<input type="text" name="sem2[]" value="<?php echo $row['sem2'];?>"  />
</td>
			<td style="width: 135px">pass2</td>
			<td style="width: 290px">                    
		<input type="text" name="pass2[]" value="<?php echo $row['pass2'];?>"  />
</td></tr>

<tr><td style="width: 135px">sem3</td ><td style="width: 175px">
		<input type="text" name="sem3[]" value="<?php echo $row['sem3'];?>"  />
</td>
			<td style="width: 135px">pass3</td>
			<td style="width: 290px">                    
		<input type="text" name="pass3[]" value="<?php echo $row['pass3'];?>"  />
</td></tr>
<tr><td style="width: 135px">sem4</td ><td style="width: 175px">
		<input type="text" name="sem4[]" value="<?php echo $row['sem4'];?>"  />
</td>
			<td style="width: 135px">pass4</td>
			<td style="width: 290px">                    
		<input type="text" name="pass4[]" value="<?php echo $row['pass4'];?>"  />
</td></tr>

<tr><td style="width: 135px">sem5</td ><td style="width: 175px">
		<input type="text" name="sem5[]" value="<?php echo $row['sem5'];?>"  />
</td>
			<td style="width: 135px">pass5</td>
			<td style="width: 290px">                    
		<input type="text" name="pass5[]" value="<?php echo $row['pass5'];?>"  />
</td></tr>





		<tr><td style="width: 175px">sem6</td>
			<td style="width: 240px">   
		<input type="text" name="sem6[]" value="<?php echo $row['sem6'];?>"  />
</td>

			<td style="width: 175px">pass6</td>
			<td style="width: 240px">                    
		<input type="text" name="pass6[]" value="<?php echo $row['pass6'];?>"  />
</td>

	</tr>
	
		<tr>
			<td style="width: 175px">sem7</td>
			<td style="width: 240px" >  
		<input type="text" name="sem7[]" value="<?php echo $row['sem7'];?>"  />
		<td style="width: 175px">pass7</td>
			<td style="width: 240px" >  
		<input type="text" name="pass7[]" value="<?php echo $row['pass7'];?>"  />
</td>

</tr>
<tr>
			<td style="width: 175px">sem8</td>
			<td style="width: 240px" >  
		<input type="text" name="sem8[]" value="<?php echo $row['sem8'];?>"  />
		<td style="width: 175px">pass8</td>
			<td style="width: 240px" >  
		<input type="text" name="pass8[]" value="<?php echo $row['pass8'];?>"  />
</td>

</tr>
<tr>

<td style="width: 175px">totalmarks</td>
			<td style="width: 240px" >  
		<input type="text" name="totalmarks[]" value="<?php echo $row['totalmarks'];?>"  />
</tr>
<button type="submit" name="savemul" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> &nbsp; Update all</button>&nbsp;
<a href="index.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; cancel</a>
		</tbody></table><br>
		</form>
			


 <?php

}

?>










<html>