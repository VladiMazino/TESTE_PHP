<?php
 require 'config.php';

if(isset($_GET['id']) && empty($_GET['id']) == false) {
	$id = addslashes($_GET['id']);

	$sql = "DELETE FROM facebook WHERE id = '$id'";
	$pdo->query($sql);
} else{
	header("Location: index.php");
}

?>