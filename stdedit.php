<?php

$db= mysqli_connect ('localhost', 'root', '', 'studentdb');

$STUDENT_NO= $_POST ['STUDENT_NO'];
$STUDENT_NAME= $_POST ['STUDENT_NAME'];
$STUDENT_DOB= $_POST ['STUDENT_DOB'];
$STUDENT_DOJ= $_POST ['STUDENT_DOJ'];
         
$qry= "UPDATE STUDENT
       SET STUDENT_NO= '$STUDENT_NO', STUDENT_NAME= '$STUDENT_NAME', STUDENT_DOB= '$STUDENT_DOB', STUDENT_DOJ= '$STUDENT_DOJ' WHERE STUDENT_NO= '$STUDENT_NO'";
$res= mysqli_query ($db, $qry);

header ('location: stdb3.php');	

?>