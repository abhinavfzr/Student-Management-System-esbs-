<?php
	include_once 'dbcon.php';
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SBSSTC</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<script src="jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>
</head>
       <div class="navbar navbar-default navbar-static-top" >
		
           
            <a class="navbar-brand" href="index.php"><font color="darkblue">Show</font></a>
						<a class="navbar-brand" href="college.php"><font color="darkblue">Home</font></a>

        </div>

<div  align="center">
<body>
<form action="#" method="post">
<select name="batch">
<option value="2014">2014-2018</option>
<option value="2013">2013-2017</option>
<option value="2012">2012-2016</option>
<option value="2011">2011-2015</option>
<option value="2010">2010-2014</option>
</select>
<input type="submit" name="submit" value="SELECT BATCH" />
</form>
</div>
<br>

</br>

<div class="container">
<form method="post" name="frm">
<table class='table table-bordered table-responsive'>
<tr>
<th>id</th>
<th>rollno</th>
<th>batch</th>
<th>name</th>
<th>FName</th>
<th>MName</th>
<th>DOB</th>
<th>gender</th>
<th>Mobile</th>
<th>email</th>
<th>category</th>
<th>feecategory</th>
<th>address</th>
<th>aadhaar</th>
<th>residence</th>
<th>marks10</th>
<th>marks12</th>
<th>Diploma</th>
<th>sem1</th>
<th>pass1</th>
<th>sem2</th>
<th>pass2</th>
<th>sem3</th>
<th>pass3</th>
<th>sem4</th>
<th>pass4</th>
<th>sem5</th>
<th>pass5</th>
<th>sem6</th>
<th>pass6</th>
<th>sem7</th>
<th>pass7</th>
<th>sem8</th>
<th>pass8</th>
<th>totalmarks</th>
</tr>
<?php
if(isset($_POST['submit'])){


	$res = $MySQLiconn->query("SELECT * FROM sbsstudent  WHERE batch = '".$_POST['batch']."'");
	$count = $res->num_rows;

	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['id']; ?>"  /></td>
			
			<td><?php echo $row['rollno']; ?></td>
			<td><?php echo $row['batch']; ?></td>
			<td><?php echo $row['studentname']; ?></td>
			<td><?php echo $row['fathername']; ?></td>
			<td><?php echo $row['mothername']; ?></td>
			<td><?php echo $row['dob']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo $row['mobno']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['category']; ?></td>
			<td><?php echo $row['feecategory']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td><?php echo $row['aadhaar']; ?></td>
            <td><?php echo $row['residence']; ?></td>
            <td><?php echo $row['marks10']; ?></td>
			<td><?php echo $row['marks12']; ?></td>
			<td><?php echo $row['diploma']; ?></td>
			<td><?php echo $row['sem1']; ?></td>
			<td><?php echo $row['pass1']; ?></td>

			<td><?php echo $row['sem2']; ?></td>
			<td><?php echo $row['pass2']; ?></td>

			<td><?php echo $row['sem3']; ?></td>
			<td><?php echo $row['pass3']; ?></td>

			<td><?php echo $row['sem4']; ?></td>
			<td><?php echo $row['pass4']; ?></td>

			<td><?php echo $row['sem5']; ?></td>
			<td><?php echo $row['pass5']; ?></td>

			<td><?php echo $row['sem6']; ?></td>
			<td><?php echo $row['pass6']; ?></td>

			<td><?php echo $row['sem7']; ?></td>
			<td><?php echo $row['pass7']; ?></td>

			<td><?php echo $row['sem8']; ?></td>
			<td><?php echo $row['pass8']; ?></td>

			<td><?php echo $row['totalmarks']; ?></td>
			
			
			</tr>
			<?php
		}	
	}
	else
	{
		?>
        <tr>
        <td colspan="3"> No Records Found ...</td>
        </tr>
        <?php
	}
}
?>



<?php

if($count > 0)
{
	?>
	<tr>
    <td colspan="12">
    <label><input type="checkbox" class="select-all" /> Check / Uncheck All</label>

    
    <label style="margin-left:100px;">
    <span style="word-spacing:normal;"> with selected :</span>
    <span><img src="edit.png" onClick="edit_records();" alt="edit" />edit</span> 
    <span><img src="delete.png" onClick="delete_records();" alt="delete" />delete</span>
    </label>
    
    
    </td>
	</tr>    
    <?php
}

?>

</table>
</form>
</div>

</body>
</html>