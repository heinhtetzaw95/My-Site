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
    <li><a onclick="goto('main')" > Main </a></li>
    <li><a onclick="goto('resume')"> Resume </a></li>
    <li><a onclick="goto('about')"> About </a></li>
    <li><a onclick="goto('contact')"> Contact </a></li>
    <li><a onclick="goto('blog')"> Blog </a></li>
  </ul>
</div>

<!-- Sticky Nav Bar starts - by Hein - Mar 2017 -->
<script>
  var navTop, strollTop, sticking;
    //instantiate
  $(document).ready(function(){
      sticking=false;
      navTop = $("#php_header_navbar").offset().top;
  });
    //detect scroll
  $(document).scroll(function (){
    scrollTop = $(window).scrollTop();
    if (navTop <= scrollTop){ toggle(true); sticking = true;}
    else { toggle(false); sticking = false;}
  });
    //do stick and unstick
  function toggle(stick){
    if(stick && !sticking){
      $("#php_header_navbar").addClass('fixed-nav-bar');
      $("#wrapper").css("margin-top", $("#php_header_navbar").height());
    }
    else if (!stick && sticking){
      $("#php_header_navbar").removeClass('fixed-nav-bar');
      $("#wrapper").css("margin-top", 0);
    }
  }
</script>
<style>
  .fixed-nav-bar{
    position: fixed;
    top: 0;
    z-index: 10;
  }
</style>
<!-- Sticky Nav Bar ends -->

<!-- page changing script -->
<script>
  function goto(page){
    if (page == 'resume'){
    $.get( "/resume/resume.php", function( data ) {
      $( "#wrapper" ).html( data );
    });
  }
  }
</script>
