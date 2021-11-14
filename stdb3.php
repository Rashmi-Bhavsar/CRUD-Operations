<?php

$db= mysqli_connect ('localhost', 'root', '', 'studentdb');
$q= "SELECT *FROM STUDENT";
$result= mysqli_query ($db, $q);
$count= mysqli_num_rows ($result);

?>

<html>

<center>
<h1>Student Database</h1>
<title>Student Database</title>

<body>

<table style= "width: 100%" cellspacing = "1" cellpadding= "1" border= "1" align= "center">

<tr>
<th style= "text-align: center">STUDENT_NO</th>
<th style= "text-align: center">STUDENT_NAME</th>
<th style= "text-align: center">STUDENT_DOB</th>
<th style= "text-align: center">STUDENT_DOJ</th>
<th style= "text-align: center">ACTION</th>

</tr>

<?php

for ($i=0; $i<$count; $i++)
    {
		$row= mysqli_fetch_array ($result);
?>

<tr align= "center">
<td>

<?php

echo $row ['STUDENT_NO'];

?>

</td>
<td>

<?php
   
        echo $row ['STUDENT_NAME'];
		
?>

</td>
<td>

<?php

        echo $row ['STUDENT_DOB'];	
		
?>

</td>
<td>

<?php

        echo $row ['STUDENT_DOJ'];
		
?>		

</td>
<td>
        <a href="stdbedit1.php?STUDENT_NO=<?php echo $row['STUDENT_NO']; ?>">Update</a>
		<a href="stddelete.php?STUDENT_NO=<?php echo $row['STUDENT_NO']; ?>">Delete</a>

</td>
</tr>

<?php 

    }

?>

</table><br>

</body>
</center>
</html>