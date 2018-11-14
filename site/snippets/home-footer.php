    <footer class="home-footer cf" role="contentinfo">
          <!-- <p class="footer-links">
            <a href = "/side-projects" class = "footer-link"> Side Projects </a>
          </p> -->
          <p class="footer-copyright">
            <?php
            echo html::decode($site->copyright()->kirbytext())
            ?>
          </p>
    </footer>

  </body>
  <script type="text/javascript"src="/assets/js/home.js"></script>
  <script> 
    function home () {
      location.assign('/')
    }
  </script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127343455-1"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

    gtag('config', 'UA-127343455-1');
  </script> 
</html>