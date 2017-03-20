<?php
  $resumeLink = "http://heinhtet.info/resume/Resume-HeinHtetZaw.pdf";
?>

<head>
  <link rel="stylesheet" type="text/css" href="/css/resume.css">
</head>
<div>

  <div>
    <embed id="embeddedpdf" src="http://docs.google.com/gview?url=<?php echo $resumeLink?>&embedded=true"></embed>
  </div>
<!--
<embed src="/resume/resume.pdf">
-->
</div>
<script>
  $("#embeddedpdf").height(function(){
    return $("#php_header").height() + $("#php_header_navbar").height() + $("#php_footer").height() + $(window).height() + 50;
  });
</script>
