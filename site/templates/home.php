
  <?php snippet('home-header') ?>
      <div class = "home-container">
        <div class = "logo-container">
          <img src="./assets/images/Wreath-full.svg" class="logo-load" alt="wreath logo content image" />
        </div>
      </div>
      <div class = "home-text">
          <?= $page->text()->kirbytext() ?>
          <a href = "/about" class="get-in-touch" id="get-in-touch">
            <?= $page->calltoaction()->html() ?>
          </a>
        </div>
  <?php snippet('home-footer') ?>
</div>