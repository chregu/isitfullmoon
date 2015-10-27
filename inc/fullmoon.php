<?php

namespace IsItFullMoon;

require_once("moonphase.inc.php");

$date = time() ;
$fullmoon = "No";

foreach(phaselist($date - 3600 * 12 ,$date + 3600 * 12) as $d) {
    if ($d > 100) {
        $moondata = phase($d);
        $MoonIllum = $moondata[1];
        if (round($MoonIllum,2) == 1) {
            $fullmoon = "Yes";
            break;
        }
    }
}

$data['status'] = $fullmoon;
