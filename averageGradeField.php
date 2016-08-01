<?php

$field = //array of grades
$tempArray = explode(',',$field);
$tempArrayLength = count($tempArray);
$total = 0;  //total for averaging

foreach($tempArray as $temp)
{
	$total += $temp;
}

$gradeFieldAvg = $total / $tempArrayLength;  //avg in gradeFieldAvg
echo "Field Average is: " .$gradeFieldAvg."
";

?>