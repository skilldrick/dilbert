<?php

$strip = (int) $_GET['strip'];
$next = !(bool) $_GET['previous'];
if($next) {
  $strip++;
}
else {
  $strip--;
}

$url = "http://www.dilbert.com/dyn/str_strip/000000000/00000000/0000000/"
  . "000000/30000/3000/100/$strip/$strip.strip.gif";

$data['url'] = $url;
$data['number'] = $strip;
echo json_encode($data);


?>