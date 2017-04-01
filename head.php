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

  $titleLink = $dirName;
  if ($dirName == "resume") $titleLink = "my resume";
?>
<head>

<title> <?php echo "HeinHtet.info"; // - ".$titleLink; ?> </title>
<link rel="icon" type="image/png" href="/imgs/logo_white_bg.png" />
<link rel="stylesheet" type="text/css" href="/css/global.css">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>
