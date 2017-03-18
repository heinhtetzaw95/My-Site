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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>
</body>
<?php //this is test area

?>
  <div id="php_header">
    <div id="php_header_site_identity">
      <a href="http://www.heinhtet.info" ><img id="php_header_logo" src="/imgs/logo_transparent.png"></a>
    </div>
    <div id="php_header_name">
      Hein Htet Zaw
    </div>
  </div>
  <div id="php_header_social_links">
    <ul id="php_header_social_buttons">
      <li><a href="https://www.facebook.com/heinhtetzaw95" target="_blank"> <img class="php_header_social_icons" src="/imgs/icons/round_fb.png" title="Facebook"></a></li>
      <li><a href="https://www.twitter.com/heinhtetzaw95" target="_blank"> <img class="php_header_social_icons" src="/imgs/icons/round_twitter.png" title="Twitter"></a></li>
      <li><a href="https://www.linkedin.com/in/heinhtetzaw" target="_blank"> <img class="php_header_social_icons" src="/imgs/icons/round_linkedin.png" title="LindedIn"></a></li>
      <li><a href="https://www.github.com/heinhtetzaw95" target="_blank"> <img class="php_header_social_icons" src="/imgs/icons/round_github.png" title="GitHub"></a></li>
    </ul>
  </div>
  <div id="php_header_navbar">
    <ul id="php_header_navbar_links">
      <li><a class="php_header_navbar_active_tab" href="./" > Main </a></li>
      <li><a href="./resume/"> Resume </a></li>
      <li><a href="http://blog.heinhtet.info" target="_blank"> Blog (&#8599) </a></li>
      <li><a href="./about/"> About </a></li>
      <li><a href="./contact/"> Contact </a></li>
    </ul>
  </div>

  <!-- Sticky Nav Bar - Hein - Mar 2017 -->
  <script>
    $(document).scroll(function (){
      if (($("#php_header_navbar").offset().top - $(window).scrollTop()) < 0){
        $("#php_header_navbar").css("background-color: white;");
      }
      $("#wrapper").text($("#php_header_navbar").offset().top - $(window).scrollTop());
    });
  </script>
</body>
</html>
