<div id="php_header">
  <div id="php_header_site_identity">
    <div id="php_header_name">
      HEIN HTET ZAW
    </div>
    <a href="http://www.heinhtet.info" ><img id="php_header_logo" src="/imgs/logo_transparent.png" alt="logo-image" title="logo"></a>
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
    <li><a id="main" onclick="goto('main')" > Main </a></li>
    <li><a id="resume" onclick="goto('resume')"> Resume </a></li>
    <li><a id="about" onclick="goto('about')"> About </a></li>
    <li><a id="contact" onclick="goto('contact')"> Contact </a></li>
    <li><a id="projects" onclick="goto('projects')"> Projects </a></li>
    <li><a id="blog" onclick="goto('blog')"> Blog </a></li>
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
    var toPage;
    if(page == 'main') toPage = '/main.php';
    else if(page == 'resume') toPage = '/resume/resume.php';
    else if(page == 'about') toPage = '/about/about.php';
    else if(page == 'contact') toPage = '/contact/contact.php';
    else if(page == 'projects') toPage = '/projects/projects.php';
    else if(page == 'blog') { window.open('http://blog.heinhtet.info', '_blank'); }

    $.get( toPage, function( data ) {
      $( "#wrapper" ).html( data );
    });
    return;
  }
</script>
