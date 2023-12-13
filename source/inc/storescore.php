<?php
session_start();
if(isset($_POST['score'])) {
	require_once("leaderboard.php");
	$scores = CSVToArray();
	InsertScore($scores, new Score($_SESSION['name'] . "~" . $_POST['score']));
	WriteToCSV($scores);
	header("Location: ../" . $_POST['location']);
	exit;
}