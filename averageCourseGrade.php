<?php

$fields = //array of gradeFields
$tempArray = explode(',',$fields);
$tempArrayLength = count($tempArray);
$tempWeight = 0;  //for holding a weight of a grade field
$total = 0;  //total grade in course

foreach($tempArray as $temp)
{
	$tempWeight = $temp->fieldWeight/100;
	$total += $temp->fieldAvg * $tempWeight;
}

echo "Grade Earned in Course: " .$total."
";

?>