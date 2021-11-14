<?php

if (isset ($_POST ['submit']))
{
	$n= $_POST['n'];
	
	if ($n==1)
		header ('location: stdb2.php');
	else if ($n==2)
		header ('location: stdb3.php');
	else
		echo "Invalid input.";
}

?>