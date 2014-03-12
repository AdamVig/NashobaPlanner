<?php


/**
 * Generate base Nashoba Schedule
 * @return      [[schedule[]],[period hours[]]]
 */
function genYear($startDay)
{
$YTD = [0,0,0,0,0,0,0];
//     [A,B,C,D,E,F,G]

$yearSchedule = ["A"];
    for ($daynum=$startDay; $daynum<180; $daynum++) {
        $periods = ["A","B","C","D","E","F","G"];
        $offset = ($daynum % 7);
        for ($i=0; $i<7; $i++) {
            $schedule[$i] = $periods[($offset+$i)%7].(($daynum % 8)+1);
            $YTD[($offset+$i)%7]+=46;
            if ($i == 4)
            {
                $schedule[$i] = $periods[($offset+$i)%7].(($daynum % 8)+1)."L";
                $YTD[($offset+$i)%7]+=23;
            }
        }
        $yearSchedule[$daynum] = $schedule;
    }
//print_r($yearSchedule);
//print_r($YTD);
$output = [$yearSchedule, $YTD];
return $output;
}

print_r(genYear(0)[0]);
print_r(genYear(0)[1]);
