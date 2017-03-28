<?php
$con=mysql_connect("localhost","root","") or die("error");
if($con)
{
	mysql_select_db("sbsstc");
}

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
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />

<title>
MY COLLEGE CAMPUS
</title>
</head>
<div class="navbar navbar-default navbar-static-top" >
		
      
			<a class="navbar-brand" href="college.php">Home</a>

        </div>
<body bgcolor="darkblue">
<h1> <center><font color="orange">Student Detail</font></h1></center>



<?php
$sel="select * from sbsstudent where rollno='".$_SESSION["SEARCH"]."'";

$dr=mysql_query($sel);
if(mysql_num_rows($dr)>0)
{
 while($row=mysql_fetch_array($dr))
	{                  
			       
echo"<center><table  class='table table-bordered' width='1000px'>"; 

    echo "<tr><td><th>id</th> <td>";
				   echo "<th>rollno</th><td>";
				   echo "<th>studentname </th><td>";
				   echo "<th>fathername</th><td>";
				   echo "<th> mothername</th><td>";
				   echo "<th>dob</th> <td>";
				  
				   echo "<th>category</th><td>";
				   echo "<th>feecategory</th> <td>";
				   echo "<th>mobno</th> <td>";
				   echo "<th>email</th> <td>";
				   echo "<th>gender</th> <td>";
				   echo "<th>address</th> <td>";
				   echo "<th>batch</th> <td>";
				   echo "<th>residence</th> <td>";
				   echo "<th>marks12</th> <td>";
				   echo "<th>diploma</th> <td>";
				   
				   echo "<th>sem1</th> <td>";
				   echo "<th>pass1</th><td>";
				   echo "<th>sem2 </th><td>";
				   echo "<th>pass2</th><td>";
				   echo "<th> sem3</th><td>";
				   echo "<th>pass3</th> <td>";
				  
				   echo "<th>sem4</th><td>";
				   echo "<th>pass4</th> <td>";
				   echo "<th>sem5</th> <td>";
				   echo "<th>pass5</th> <td>";
				   echo "<th>sem6</th> <td>";
				   echo "<th>pass6</th> <td>";
				   
				   echo "<th>sem7</th><td>";
				   echo "<th>pass7</th> <td>";
				   echo "<th>sem8</th> <td>";
				   echo "<th>pass8</th> <td>";
				   echo "<th>marks10</th> <td>";
				   echo "<th>totalmarks</th> <td>";
				   echo "<th>aadhaar</th> <td></tr>";



				   
				   
				      echo "<tr><td><th>$row[id]</th> <td>";
				   echo "<th>$row[rollno]</th><td>";
				   echo "<th>$row[studentname] </th><td>";
				   echo "<th>$row[fathername]</th><td>";
				   echo "<th> $row[mothername]</th><td>";
				   echo "<th>$row[dob]</th> <td>";
				  
				   echo "<th>$row[category]</th><td>";
				   echo "<th>$row[feecategory]</th> <td>";
				   echo "<th>$row[mobno]</th> <td>";
				   echo "<th>$row[email]</th> <td>";
				   echo "<th>$row[gender]</th> <td>";
				   echo "<th>$row[address]</th> <td>";
				   echo "<th>$row[batch]</th> <td>";
				   echo "<th>$row[residence]</th> <td>";
				   echo "<th>$row[marks12]</th> <td>";
				   echo "<th>$row[diploma]</th> <td>";
				   
				   echo "<th>$row[sem1]</th> <td>";
				   echo "<th>$row[pass1]</th><td>";
				   echo "<th>$row[sem2] </th><td>";
				   echo "<th>$row[pass2]</th><td>";
				   echo "<th> $row[sem3]</th><td>";
				   echo "<th>$row[pass3]</th> <td>";
				  
				   echo "<th>$row[sem4]</th><td>";
				   echo "<th>$row[pass4]</th> <td>";
				   echo "<th>$row[sem5]</th> <td>";
				   echo "<th>$row[pass5]</th> <td>";
				   echo "<th>$row[sem6]</th> <td>";
				   echo "<th>$row[pass6]</th> <td>";
				   
				   echo "<th>$row[sem7]</th><td>";
				   echo "<th>$row[pass7]</th> <td>";
				   echo "<th>$row[sem8]</th> <td>";
				   echo "<th>$row[pass8]</th> <td>";
				   echo "<th>$row[marks10]</th> <td>";
				   echo "<th>$row[totalmarks]</th> <td>";
				   echo "<th>$row[aadhaar]</th> <td></tr>";
				   
				   
				    echo"</center></table>";
					
    }	}
 
 
?>

</body>
</html>
