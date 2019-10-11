.<?php
	
	$q1 = $_POST["q1"];
	$q2 = $_POST["q2"];
	$q3 = $_POST["q3"];
	$q4 = $_POST["q4"];
	$q5 = $_POST["q5"];
	
	echo "Question1: Who teaches EECS 448 Fall 2019?". "<br>";
	echo "Your Answer: " . $q1 . "<br>";
	echo "Correct answer: John Gibbons<br><br>";
	
	echo "Question2: Who teaches EECS 645 Fall 2019?". "<br>";
	echo "Your Answer: " . $q2 . "<br>";
	echo "Correct answer: Esam El-Araby<br><br>";
	
	echo "Question3: Who teaches EECS 510 Fall 2019?". "<br>";
	echo "Your Answer: " . $q3 . "<br>";
	echo "Correct answer: Michael Branicky<br><br>";
	
	echo "Question4: Who teaches EECS 168 Fall 2019?". "<br>";
	echo "Your Answer: " . $q4 . "<br>";
	echo "Correct answer: John Gibbons<br><br>";
	
	echo "Question5: Who teaches EECS 268 Fall 2019?". "<br>";
	echo "Your Answer: " . $q5 . "<br>";
	echo "Correct answer: John Gibbons<br><br>";
	
	$total = 0;
	$points = 0;
	
	if($q1 == "John Gibbons") {
		$total = $total + 1;
		$points = $points + 20;
	}
	
	if($q2 == "Esam El-Araby") {
		$total = $total + 1;
		$points = $points + 20;
	}
	
	if($q3 == "Michael Branicky") {
		$total = $total + 1;
		$points = $points + 20;
	}
	
	if($q4 == "John Gibbons") {
		$total = $total + 1;
		$points = $points + 20;
	}
	
	if($q5 == "John Gibbons") {
		$total = $total + 1;
		$points = $points + 20;
	}
	
	echo "You correctly answered: " . $total . " questions!". "<br>";
	echo "Score: " . $points . "%";
?>