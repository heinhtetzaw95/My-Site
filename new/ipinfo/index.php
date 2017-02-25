<?php include ("../header.php") ?>

<html>
<head>
  <title> IP Information </title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="./ipinfo_script.js"></script>
</head>
<body>
  <input id="ip_input" type="text" > </imput>
  <button id="submit_button"> Submit </button>
  <div id="result"></div>

  <script>
    $("#submit_button").click(function() {var input=$("#ip_input").val(); if (!!input){submit(input); $("#ip_input").val("");}});
    $("#ip_input").keypress(function (e) { if(e.which == 13) $("#submit_button").click(); });
  </script>

</body>

</html>
