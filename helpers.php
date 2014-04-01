<?php

$noSchoolDays = [
	"2013-09-02" => "Labor Day",
	"2013-10-14" => "Columbus Day",
	"2013-11-11" => "Veterans Day",
	"2013-11-27" => "Thanksgiving Break",
	"2013-11-28" => "Thanksgiving",
	"2013-11-29" => "Thanksgiving Break",
	"2013-12-23" => "Christmas Break",
	"2013-12-24" => "Christmas Eve",
	"2013-12-25" => "Christmas",
	"2013-12-26" => "Christmas Break",
	"2013-12-27" => "Christmas Break",
	"2013-12-30" => "Christmas Break",
	"2013-12-31" => "New Year's Eve",
	"2014-01-01" => "New Year's Day",
	"2014-01-02" => "Christmas Break",
	"2014-01-03" => "Christmas Break",
	"2014-01-20" => "Martin Luther King Day",
	"2014-02-17" => "February Vacation",
	"2014-02-18" => "February Vacation",
	"2014-02-19" => "February Vacation",
	"2014-02-20" => "February Vacation",
	"2014-02-21" => "February Vacation",
	"2014-04-18" => "April Vacation",
	"2014-04-21" => "April Vacation",
	"2014-04-22" => "April Vacation",
	"2014-04-23" => "April Vacation",
	"2014-04-24" => "April Vacation",
	"2014-04-25" => "April Vacation",
	"2014-05-26" => "Memorial Day"
];

/**
 * Tests if there is school on a date
 * @param  DateTime $date Date to test
 * @return boolean        Whether or not there is school
 */
function isSchool(DateTime $date)
{
	global $noSchoolDays;
	if (array_key_exists($date->format('Y-m-d'), $noSchoolDays)) {
		$isSchool = $noSchoolDays[$date->format('Y-m-d')];
	} else {
		$isSchool = true;
	}
	return $isSchool;
}


