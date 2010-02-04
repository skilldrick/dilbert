<?php

$strip = (int) $_GET['strip'];
$previous = (bool) $_GET['previous'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $_SERVER['HTTP_HOST'] . "/dilbert/inc/process.php?strip=$strip&previous=$previous");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$raw_output = curl_exec($ch);
curl_close($ch);

$image = json_decode($raw_output);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
  <head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <title>Dilbert</title> 
    <meta name="description" content="" /> 
 
    <link href="http://yui.yahooapis.com/3.0.0pr2/build/cssreset/reset-min.css" rel="stylesheet" type="text/css" />
    
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    
  </head>
  <body>
    <div id="container">
      <a href='?strip=<?php echo $image->number; ?>&previous=1' id='previous'>Previous</a>
      <a href='?strip=<?php echo $image->number; ?>' id='next'>Next</a>
	
      <div id='picturebox'>
	<?php
	  echo "<img src='{$image->url}' rel='{$image->number}' />";
	?>
      </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
    <script src="js/test.js" type="text/javascript"></script>

  </body>
</html>