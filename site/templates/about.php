<?php snippet('others-header') ?>

    <div class="about-container">
      <h1 class="main-about">
        <?= $page->maintext()->html() ?>
      </h1>
      <p class="sub-about">
        <?= $page->subtext()->html() ?>
      </p>
      <div class = "contact-cont grid">
        <div class = "contact-intro grid--row--1-2 grid--col--1-4" >
          <p class = "contact-header">
            Contact
          </p>
          <p class = "contact-header">
            <?= $page->contacttext()->html() ?> 
          </p>
        </div>
        <div class = "contact-dets grid--row--1-2 grid--col--9-13" >
          <p class = "contact-details contact-det-header">
            Email: 
          </p>
          <p>
            <a class = "contact-details contact-link" href="mailto:<?= $page->email()->html() ?>">
              <?= $page->email()->html() ?>
            </a>
          </p>
          <p class = "contact-details contact-det-header">
            Phone: 
          </p>
          <p>
            <a class = "contact-details contact-link" href="tel:<?= $page->phoneplain()->html() ?>">
              <?= $page->phonedisp()->html() ?>
            </a>
          </p>
        </div>
        <div class = "contact-socials grid--row--1-2 grid--col--5-8" >
          <p class = "contact-details">
            <a href="<?= $page->linkedin()->html() ?>" class="contact-link" target="_blank">Linkedin </a>
          </p>
          <p class = "contact-details">
            <a href="<?= $page->github()->html() ?>" class="contact-link" target="_blank">Github </a>
          </p>
          <p class = "contact-details">
            <a href="<?= $page->instagram()->html() ?>" class="contact-link" target="_blank">Instagram </a>
          </p>
        </div>   
      </div>
    </div>
    <img src="/assets/images/wreath-solo-white.svg" alt ="wreath" class = "about-logo" id= "about-logo"/>

<?php snippet('footer') ?>
</div>