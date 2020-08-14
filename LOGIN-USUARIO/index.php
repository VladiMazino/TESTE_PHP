<?php
session_start();

if (isset($_session['id']) && empty($_session['id']) == false) {
		
		echo "Área restrita...";
	

	} else {

	header("location login.php");
}



?>

