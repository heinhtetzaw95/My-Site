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
<title> <?php echo "Zaw - ".ucwords($dirName); ?> </title>
<link rel="stylesheet" type="text/css" href="./css/header.css">
</head>
</body>
<?php //this is test area

?>
    <div id="header">
          <img src="/imgs/logo.png" width="50px">
    </div>
</body>
</html>
