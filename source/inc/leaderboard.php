<?php

error_reporting(0); //hehehehehe

class Score {
	public $name;
	public $score;
	function __construct($csvScore) {
		$parts = explode("~", $csvScore);
		$this->name = $parts[0];
		$this->score = intval($parts[1]);
	}
}

function CSVToArray() {
    $csvToRead = fopen("leaderboard.csv", 'r');
    while (!feof($csvToRead)) {
        $csvArray[] = new Score(((array)fgetcsv($csvToRead, 1000, ';'))[0]);
    }
    array_pop($csvArray);
    fclose($csvToRead);
    return $csvArray;
}

function WriteToCSV($CSVarray) {
	$fp = fopen("leaderboard.csv", 'w');
	foreach($CSVarray as $scores) {
		$scoreStr = ""; //avoid null init
		$scoreStr .= $scores->name . "~" . strval($scores->score);
		fputcsv($fp, array($scoreStr), ";");
	}
}

function InsertScore(&$scores, $newScore) { //csv is always ordered, new insertions will also be in order
	$newScore = array($newScore);
	$index = -1;
	for($i = 0; $i < sizeof($scores); $i++) {
		if($newScore[0]->score > $scores[$i]->score) {
			$index = $i;
			break;
		}
	}
	array_splice($scores, $index > -1 ? $index : sizeof($scores), 0, $newScore);
}


////for debug only
//$scores = CSVToArray();
//WriteToCSV($scores);
//var_dump($scores)
//?>