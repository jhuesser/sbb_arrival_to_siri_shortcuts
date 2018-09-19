<?php

$departure = $_GET['departure'];
$destination = $_GET['destination']; 

// use param transportations[] to filter transport type (train, tram, bus, etc.
$url = "http://transport.opendata.ch/v1/connections?from=". $departure . "&to=" . $destination . "&date=" . date('Y-m-d');
$result = json_decode(file_get_contents($url));
// connections[0] seems to be to early, a quick and dirty fix
$arrival = $result->connections[1]->to->arrivalTimestamp;
$date = strtotime($arrival);
echo date("d.m.y H:i",$arrival);