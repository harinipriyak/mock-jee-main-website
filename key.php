<?php
            
           

$answer1 = $_POST['1'];

$answer2 = $_POST['2'];

$answer3 = $_POST['3'];

$answer4 = $_POST['4'];

$answer5 = $_POST['5'];

$answer6 = $_POST['6'];

$answer7 = $_POST['7'];

$answer8 = $_POST['8'];

$answer9 = $_POST['9'];

$answer10 = $_POST['10'];



$totalCorrect = 0;

if ($answer1 == "1.1") { $totalCorrect++; }

if ($answer2 == "2.1") { $totalCorrect++; }

if ($answer3 == "3.3") { $totalCorrect++; }

if ($answer4 == "4.2") { $totalCorrect++; }

if ($answer5 == "5.4") { $totalCorrect++; }

if ($answer1 == "6.2") { $totalCorrect++; }

if ($answer2 == "7.4") { $totalCorrect++; }

if ($answer3 == "8.2") { $totalCorrect++; }

if ($answer4 == "9.1") { $totalCorrect++; }

if ($answer5 == "10.4") { $totalCorrect++; }

$totalCorrect=$totalCorrect*5;



echo $totalCorrect;

?>