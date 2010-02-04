<?php

$strip = (int) $_GET['strip'];
$next = !(bool) $_GET['previous'];

do {
  if($next) {
    $strip++;
  }
  else {
    $strip--;
  }

  $temp = $strip;
  $tenthousands = floor($temp / 10000) * 10000;
  $temp -= $tenthousands;
  $thousands = floor($temp / 1000) * 1000;
  $temp -= $thousands;
  $hundreds = floor($temp / 100) * 100;

  $url = "http://www.dilbert.com/dyn/str_strip/000000000/00000000/0000000/"
    . "000000/$tenthousands/$thousands/$hundreds/$strip/$strip.strip.gif";

  $fail = true;
  if(getimagesize($url)) {
    $fail = false;
  }
} while($fail);


  
$data['url'] = $url;
$data['number'] = $strip;
echo json_encode($data);


?>