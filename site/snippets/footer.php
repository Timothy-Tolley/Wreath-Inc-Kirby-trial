  <footer class="footer cf " role="contentinfo">
        <p class="footer-links">
          <a href = "https://www.linkedin.com/in/timothy-tolley/" class = "footer-link li" target="_blank"> LI </a>
          <a href = "https://github.com/Timothy-Tolley" class = "footer-link gh" target="_blank"> GH </a>
          <a href = "https://www.instagram.com/wreathinc.io/" class = "footer-link ig" target="_blank"> IG </a>
        </p>
        <p class="footer-copyright">
          <?php
          echo html::decode($site->copyright()->kirbytext())
          ?>
        </p>
  </footer>

</body>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script> 
  function home () {
    location.assign('/')
  }

  function previous (url) {
    document.body.style.opacity = 0
    setTimeout(() => {
      location.assign(url)
    }, 2000)
  }

  function next (url) {
      document.body.style.opacity = 0
      setTimeout(() => {
      location.assign(url)
      }, 2000)
  }

  $(document).ready(function() {
    let movementStrength = 20;
    let height = movementStrength / $(window).height();
    let width = movementStrength / $(window).width();
  if($(window).width() > 900) {
  $(".page").on( "mousemove", function(e){
    let pageX = e.pageX - ($(window).width() / 2);
    let pageY = e.pageY - ($(window).height() / 2);
    let newvalueX = width * pageX * -1 - 25;
    let newvalueY = height * pageY * -1 - 25;
    $('#about-logo').css("left", newvalueX+"px");
    $('#about-logo').css("top", newvalueY+"px");
  })
}
})
</script>
<script type="text/javascript"src="/assets/js/onload.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127343455-1"></script>
 <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());

    gtag('config', 'UA-127343455-1');
  </script> 
</html>