<?php

/**
 * Tests if there is school on a date
 * @param  DateTime $date Date to test
 * @return boolean        Whether or not there is school
 */
function isSchool(DateTime $date)
{
	$noSchoolDays = [
		"2014-09-02",
		""
	];
	foreach ($noSchoolDays as $date) {
		array_push($noSchoolDateTimes, new DateTime($date));
	}
	$weekday = $date->format('w'); //Sunday = 0, Saturday = 6
	if ($weekday == "0" || $weekday == "6") {
		$isSchool = false;
	} else if (in_array($date, $noSchoolDateTimes)) {
		$isSchool = false;
	} else {
		$isSchool = true;
	}
	return $isSchool;
}

$date = new DateTime("2014-03-28");
echo isSchool($date) ? "true" : "false";