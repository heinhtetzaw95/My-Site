<?php
/*
*   The header file for heinhtet.info site
*   Date Created: Feb 25, 2017
*   Created by Hein Htet Zaw
*/
  $root = $_SERVER['DOCUMENT_ROOT'];

  $currDir = getcwd();
  $dirArr = explode("/", $currDir);
  $dirName = $dirArr[sizeof($dirArr)-1];

?>

<!DOCTYPE HTML>
<html>
<head>
<title> <?php echo "HeinHtet.info - ".$dirName; ?> </title>

<link rel="stylesheet" type="text/css" href="/css/header.css">
<link rel="icon" type="image/png" href="/imgs/logo_white_bg.png" />

</head>
</body>
<?php //this is test area

?>
  <div id="header">
      <div id="site_identity">
        <img id="header_logo" src="/imgs/logo_transparent.png">
        <div id="header_name"> Hein Htet Zaw </div>
      </div>
      <div id="header_social_bar">
          <ul id="social_bar">
            <li><a href="https://www.facebook.com/heinhtetzaw95" target="_blank"> <img class="social_icons" src="/imgs/icons/round_fb.png"></a></li>
            <li><a href="https://www.twitter.com/heinhtetzaw95" target="_blank"> <img class="social_icons" src="/imgs/icons/round_twitter.png"></a></li>
            <li><a href="https://www.facebook.com/heinhtetzaw95" target="_blank"> <img class="social_icons" src="/imgs/icons/round_fb.png"></a></li>
            <li><a href="https://www.facebook.com/heinhtetzaw95" target="_blank"> <img class="social_icons" src="/imgs/icons/round_fb.png"></a></li>

          </ul>
      </div>
  </div>
</body>
</html>
