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
      <h1>Test heading</h1>
      <p id="first">Text</p>
      <p id="second"><a href="#">Link</a></p>

      <form action='?strip=1000&amp;previous=1' method='post' id='previous'>
	<input type='submit' value='Previous'></input>
      </form>
      <form action='?strip=1000' method='post' id='next'>
	<input type='submit' value='Next'></input>
      </form>

      <div id='picturebox'>
	<?php
							  $strip = (int) $_GET['strip'];
							  ?>
	<img rel='<?php echo $strip; ?>' />
      </div>
      <?php
   /*
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, 'skilldrick.co.uk/test/inc/process.php?strip=99');
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   $output = curl_exec($ch);
   echo $output;
   curl_close($ch);
   */
   ?>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
    <script src="js/test.js" type="text/javascript"></script>

  </body>
</html>