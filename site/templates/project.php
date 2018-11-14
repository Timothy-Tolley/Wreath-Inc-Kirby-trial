<?php snippet('project-header') ?>
    <img src="/assets/images/wreath-solo-white.svg" alt ="wreath" class = "project-logo"/>
    <div class="project-container grid m--grid project-<?= $page->projectNo() ?>">
      <video src="<?= $page->vid()->html() ?>" autoPlay muted alt="<?= $page->title()->html() ?> video" class = "project-gif grid--row--2-3 grid--col--7-12 m--grid--row--2-3 m--grid--col--1-7">
      </video>
      <div class="project-title-banner grid--row--1-2 grid--col--2-12 m--grid--row--1-2 m--grid--col--1-7">
        <h1 class="project-title"><?= $page->title()->html() ?></h1>
        <h3 class="project-subtext"><?= $page->subtext()->html() ?></h3>
      </div>
      <div class="top-bar grid--auto m--grid--auto grid--row--2-3 grid--col--2-7 m--grid--row--3-4 m--grid--col--1-7">
        <div class= "tech-cont grid--row--1-2 grid--col--1-13 m--grid--col--2-6" >
          <p class="project-label"> Tech Stack: </p>
          <p class="text"> <?= $page->tech()->html() ?></p>
        </div> 
        <div class= "link-cont grid--row--2-3 grid--col--1-7 m--grid--col--2-4" >
          <p class="text"> 
            <a href = "<?= $page->link()->html() ?>">
             Link
            </a>
          </p>
          <p class="text"> 
            <a href = "<?= $page->git()->html() ?>">
              Github
            </a>
          </p>
        </div> 
        <div class= "github-cont grid--row--1-2 grid--col--7-13  m--grid--col--4-6" >
        </div> 
        <div class="design-cont grid--row--2-3 grid--col--7-13 m--grid--col--4-6">
          <p class="project-label"> Design:  </p>
          <p class="text">
          <a href = "<?= $page->deslink()->html() ?>">
            <?= $page->design()->html() ?>
          </a>
          </p>
        </div>
      </div>
    </div>

    <div class = "bottom-bar">
      <div class="next-bar">
        <?php snippet('prevnext') ?>
      </div>
    </div>

<?php snippet('footer') ?>
</div>