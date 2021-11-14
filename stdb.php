<html>

<center>
<h1>Student Database</h1>
<title>Student Database</title>

<body>

<form action= "stdb.php" method= "POST">

<p>Enter the choice:<br>
   1. Add new data<br>
   2. Get list of students<br>
</p>
   
<input type= "text" name= "n" placeholder= "Enter your choice"><br><br>

<input type= "submit" name= "submit" value= "Confirm">

</body>
</center>
</html>

<?php

if (isset ($_POST ['submit']))
{
	$n= $_POST ['n'];
	
	if ($n==1)
		header ('location: stdb2.php');
	else if ($n==2)
		header ('location: stdb3.php');
	else
		echo "Invalid input.";
}

?>