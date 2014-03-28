<?php

$noSchoolDays = [
	"Labor Day" => "2013-09-02",
	"Columbus Day" => "2013-10-14",
	"Veterans Day" => "2013-11-11",
	"Thanksgiving Break" => "2013-11-27",
	"Thanksgiving" => "2013-11-28",
	"Thanksgiving Break" => "2013-11-29",
	"Christmas Break" => "2013-12-23",
	"Christmas Eve" => "2013-12-24",
	"Christmas" => "2013-12-25",
	"Christmas Break" => "2013-12-26",
	"Christmas Break" => "2013-12-27",
	"Christmas Break" => "2013-12-30",
	"New Year's Eve" => "2013-12-31",
	"New Year's Day" => "2014-01-01",
	"Christmas Break" => "2014-01-02",
	"Christmas Break" => "2014-01-03",
	"Martin Luther King Day" => "2014-01-20",
	"February Vacation" => "2014-02-17",
	"February Vacation" => "2014-02-18",
	"February Vacation" => "2014-02-19",
	"February Vacation" => "2014-02-20",
	"February Vacation" => "2014-02-21",
	"April Vacation" => "2014-04-18",
	"April Vacation" => "2014-04-21",
	"April Vacation" => "2014-04-22",
	"April Vacation" => "2014-04-23",
	"April Vacation" => "2014-04-24",
	"April Vacation" => "2014-04-25",
	"Memorial Day" => "2014-05-26"
];

/**
 * Tests if there is school on a date
 * @param  DateTime $date Date to test
 * @return boolean        Whether or not there is school
 */
function isSchool(DateTime $date)
{
	global $noSchoolDays;
	$weekday = $date->format('w'); //Sunday = 0, Saturday = 6
	if (in_array($date->format('Y-m-d'), $noSchoolDays)) {
		$isSchool = false;
	} else {
		$isSchool = true;
	}
	return $isSchool;
}

function getHoliday(DateTime $date)
{
	global $noSchoolDays;
	return array_search($date->format('Y-m-d'), $noSchoolDays);
}