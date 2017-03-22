<!DOCTYPE HTML>
<html>
<?php include($_SERVER['DOCUMENT_ROOT']."/head.php"); ?>
<body>
  <?php include($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
  <div id="wrapper"></div>
  <?php include($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>
</body>
</html>
<script>
  $(document).ready(function(){
    var lastVisit = localStorage.getItem("currentPage");
    if (lastVisit == null || lastVisit == 'blog') $("#main").click();
    else $("#"+lastVisit).click();
  });
</script>
