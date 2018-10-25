<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

		.studentRow{
			border-bottom: 1px solid black;
			font-size: 0;
		}
		.studentRow > *{
			display: inline-block;
			font-size: 1rem;
			border-right: 1px solid black;
			box-sizing: border-box;
		}

		.studentRow:nth-child(odd){
			background-color: lightgrey;
		}
		.studentName{
			width: 45%;
			font-weight: bold;
		}
		.studentCourse{
			width: 45%;
		}
		.studentGrade{
			width: 10%;
		}
		.studentRow:last-of-type{
			border-bottom: 3px solid black;
		}
		.gradeAverage{
			background-color: black;
			color: white;
			padding: 5%;
			display: inline;
			padding-top: 0%;
		}
	</style>
</head>
<body>
<?php

function calculateAverage( $sum, $count){
	return number_format($sum/$count,2);
}

$students = [
	['name'=>'Dan', 'course'=>'Magic', 'grade'=>'89'],
	['name'=>'Jane', 'course'=>'Math', 'grade'=>'90'],
	['name'=>'Jack', 'course'=>'English', 'grade'=>'91'],
	['name'=>'Mary', 'course'=>'Magic', 'grade'=>'92'],
	['name'=>'Gerry', 'course'=>'Magic', 'grade'=>'93'],
	['name'=>'Joe', 'course'=>'English', 'grade'=>'94'],
	['name'=>'Mark', 'course'=>'Magic', 'grade'=>'95'],
	['name'=>'Ines', 'course'=>'Magic', 'grade'=>'96'],
];

$studentLength = count($students);
$magicStudents = [];
$gradeObj = new stdClass();
$gradeObj->lowest = 100;
$gradeObj->highest = 0;

for($i = 0; $i < $studentLength; $i++){
	$currentStudent = $students[$i];
	if($currentStudent['course'] === 'Magic'){
		$grade = intVal( $currentStudent['grade']);
		if($grade < $gradeObj->lowest){
			$gradeObj->lowest = $grade;
		} else if( $grade > $gradeObj->highest){
			$gradeObj->highest = $grade;
		}
		$magicStudent[] = $currentStudent;

	}
}
$gradeSum = 0;
foreach($magicStudent as $aStudent){
	echo "<section class='studentRow'>
			<div class='studentName'>{$aStudent['name']}</div>
			<div class='studentCourse'>{$aStudent['course']}</div>
			<div class='studentGrade'>{$aStudent['grade']}</div>
		  </section>";
	$gradeSum += intVal( $aStudent['grade'] );
}
$average = "class average: " . calculateAverage($gradeSum, count($magicStudent) );
?>
<div class="gradeAverage"><?=$average;?></div>
<?php
?>
<?php 
	print( "The lowest grade is {$gradeObj->lowest} and the higest is {$gradeObj->highest}");
?>
</body>
</html>