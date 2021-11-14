<html>

<center>
<h1>Student Database</h1>
<title>Student Database</title>

<body>

<form action= "stdb2.php" method= "POST">

<p>Student No:<br>
<input type= "number" name= "STUDENT_NO" placeholder= "Enter student's no"><br>
</p>

<p>Student Name:<br>
<input type= "text" name= "STUDENT_NAME" placeholder= "Enter student's name"><br>
</p>

<p>Student Date of Birth:<br>
<input type= "date" name= "STUDENT_DOB" placeholder= "Enter student's DOB"><br>
</p>

<p>Student Date of Joining:<br>
<input type= "date" name= "STUDENT_DOJ" placeholder= "Enter student's DOJ"><br><br>
</p>

<input type= "submit" name= "submit1" value= "Create">

</body>
</center>
</html>

<?php

$db= mysqli_connect ('localhost', 'root', '', 'studentdb');

if (isset ($_POST ['submit1']))
{
	$no= $_POST ['STUDENT_NO'];
	$name= $_POST ['STUDENT_NAME'];
	$dob= $_POST ['STUDENT_DOB'];
	$doj= $_POST ['STUDENT_DOJ'];
	
	$query= "INSERT INTO STUDENT (STUDENT_NO, STUDENT_NAME, STUDENT_DOB, STUDENT_DOJ) VALUES ('$no', '$name', '$dob', '$doj')";
	$result= mysqli_query ($db, $query);
	
	if ($result==1)
	{
		echo "Creation successful!";
	}
	else
	{
		echo "Creation unsuccessful";
	}
}

?>