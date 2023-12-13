<?php
session_start();
$_SESSION['name'] = "";
if(isset($_POST['name'])) {
	$_SESSION['name'] = $_POST['name'];
	header("Location: ../" . $_POST['location']);
	//header("Location: test.php");
	exit;
}