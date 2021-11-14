<?php

$db= mysqli_connect ('localhost', 'root', '', 'studentdb');

$STUDENT_NO = $_GET['STUDENT_NO'];
$delete= "DELETE FROM STUDENT where STUDENT_NO= '$STUDENT_NO'";
$result = mysqli_query ($db, $delete);

if($result==1)
{
    
    header ('location: stdb3.php');
    	
}
else
{
    echo "Error deleting record.";
}
?>