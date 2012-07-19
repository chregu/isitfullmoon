<?php

include("../inc/fullmoon.php");



$time = time();

$d = phasemoon($time, 0.5);

if ($d < $time) {
    $data['prev'] = $d;
    $data['next'] = phasemoon($time,0.5,true);
    
} else {
    $data['next'] = $d;
    $prevnew = phasemoon($time,0);
    $data['prev'] = phasemoon($prevnew - 3600*24,0.5);
}


if (isset($_GET['tz'])) {
    ini_set("date.timezone",$_GET['tz']);
    $data['prev8601'] = date("c",$data['prev']);
    $data['next8601'] = date("c",$data['next']);
} else if (isset($_GET['iso8601']) && $_GET['iso8601'] == 1) {
    ini_set("date.timezone","UTC");
}


// CORS support: http://www.w3.org/TR/cors/#access-control-allow-origin-response-header
header('Access-Control-Allow-Origin: *');
       
       
switch ($_GET['format']) {
    case "xml":
        header("Content-Type: text/xml");
        print xmldata($data);
        break;
    default:
        header("Content-Type: text/javascript");
        if (isset($_GET['callback'])) {
            print $_GET['callback']. "(";
            print jsondata($data);
            print ");";
        } else {
            print jsondata($data);
        }
            
         
}


function jsondata($data) {
    return json_encode(array("isitfullmoon" => $data));
}

function xmldata($data) {
    $d = "<isitfullmoon>";
    foreach($data as $k => $v) {
        $d .= "<$k>".htmlspecialchars($v)."</$k>";
    }
    $d .= "</isitfullmoon>";
    return $d;
}
