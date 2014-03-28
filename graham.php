<?php
date_default_timezone_set ("America/New_York");

/**
 * Generate base Nashoba Schedule
 * @return      [[schedule[]],[period hours[]]]
 */
function genYear()
{

$YTD = [0,0,0,0,0,0,0];
//     [A,B,C,D,E,F,G]
$currentDate = new DateTime("2013-09-03");
$finalDate = new DateTime("2014-06-18");
$testDate;
$dayCount = 0;
$fullSchedule;
    for ($currentDate; $currentDate<=$finalDate; $currentDate->modify("+1 day")) {
        $fullSchedule[$dayCount]= getDay($dayCount,"normal",$currentDate)[0];
        $testDate = $currentDate;
        if ($testDate->format('w') == 5)
        {
            $currentDate->modify("+2 days") ;
        }
        $dayCount++;
    }

$output = $fullSchedule;
return $output;
}



function getDay($dayNum,$type,$date)
{
$classMinutes = [0,0,0,0,0,0,0];
$periods = ["A","B","C","D","E","F","G"];
$offset = ($dayNum % 7);
$schedule;
if ($type == "normal")
{
    for ($i=0; $i<7; $i++)
    {
        $schedule[$i] = $periods[($offset+$i)%7].(($dayNum % 8)+1);
        $classMinutes[($offset+$i)%7]+=46;
        if ($i == 4)
        {
            $schedule[$i] = $periods[($offset+$i)%7].(($dayNum % 8)+1)."L";
            $classMinutes[($offset+$i)%7]+=23;
        }
    }
}
if ($type == "half")
{

}
if ($type == "activity")
{

}
$output = [[$date->format('Y-m-d'),$schedule[0]],$classMinutes];
return $output;
}

print_r(genYear());


