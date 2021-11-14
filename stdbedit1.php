<?php

$db= mysqli_connect ('localhost', 'root', '', 'studentdb');
$STUDENT_NO= $_GET ['STUDENT_NO'];

$query= "SELECT *FROM STUDENT WHERE STUDENT_NO= '$STUDENT_NO'";
$res= mysqli_query ($db, $query);

?>

<html>

<center>
<h1>Student Database</h1>
<title>Student Database</title>

<body>

<?php

for ($i=0; $i<1; $i++)
    {
		$row= mysqli_fetch_array ($res);
?>

<form action= "stdedit.php" method= "POST">

<p>Student no: 
<input type= "number" name= "STUDENT_NO" value= "<?php echo $row ['STUDENT_NO']; ?>"></p><br>

<p>Student Name: 
<input type= "text" name= "STUDENT_NAME" value= "<?php echo $row ['STUDENT_NAME']; ?>"></p><br>

<p>Student Date of Birth: 
<input type= "date" name= "STUDENT_DOB" value= "<?php echo $row ['STUDENT_DOB']; ?>"></p><br>

<p>Student Date of Joining: 
<input type= "date" name= "STUDENT_DOJ" value= "<?php echo $row ['STUDENT_DOJ']; ?>"></p><br>

<input type= "submit" name= "update" value= "Update">

</form>

<?php

    }

?>

</body>
</center>
</html>