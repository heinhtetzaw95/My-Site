<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<title> Resume </title>
<link rel="stylesheet" type="text/css" href="./css/main.css" />
<link rel="shortcut icon" href=".././images/icon.png" />
<style>

#embeddedpdf {
  left: 0px;
  right: 0px;
  bottom: 0px;
  width: 100vw;
  height: 90vh;         /* don't forget to change the cover too */
  position: absolute;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    right: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: hidden; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    float: right;
    background-color: #fefefe;
    margin-top: 10vh; /* 15% from the top and centered */
    margin-right: 52px;
    padding: 10px;
    border: 1px solid grey;
    width: auto; /* Could be more or less, depending on screen size */
}

</style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42195148-3', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
  <div>
    This document was updated on
    <?php
      $filename = 'Resume-HeinHtetZaw.pdf';
      if (file_exists($filename)) {
        echo date ("F d Y. h:m:s", filemtime($filename));
      }
    ?>
  </div>
  <div>
    <embed id="embeddedpdf" src="http://docs.google.com/gview?url=http://heinhtet.info/resume/Resume-HeinHtetZaw.pdf&pid=explorer&efh=false&a=v&chrome=false&embedded=true" scrolling="no" seamless></embed>
    <div id="cover" style="width: 40px; height: 52px; position: absolute; opacity: 1; right: 12px; top: 10vh;">&nbsp;</div>
  </div>

  <!-- The Modal -->
<div id="myModal" class="modal close">

  <!-- Modal content -->
  <div class="modal-content">
    <p>Google Docs Viewer</p>
  </div>

</div>

<script>

  // Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("cover");

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
</body>

</html>
