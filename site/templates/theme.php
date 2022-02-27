<?php snippet('header') ?>

<div class="container-fluid container-lightbox">
<section class="content blog">

  <h1 class="Theme_Title"><?= $page->Theme_Title()->html() ?></h1>
  <p class="Subtitle"><?= $page->Subtitle()->html() ?></p>
  <br>
  <br>

  <div class="thin">
  <div class="col-md-4"></div>
  <div class="col-md-8"><p class="Quote"><?= $page->Quote()->html() ?></p>
  </div>
  </div>
  <div class="thin">
  <div class="col-md-4"></div>
  <div class="col-md-8"><p class="Quote_Author"><?= $page->Quote_Author()->html() ?></p>
  </div>
  </div>
  <br>
  <hr>
  <br>
  <p class="Description"><?= $page->Description()->kirbytext() ?></p>

<hr>
  <?php foreach($page->children() as $story): ?>

  <story>
    <h2></h2>
    <!-- <p ><?= $story->intro()->kirbytext() ?></p> -->

  <a href="<?= $story->url() ?>" class="button"><?= $story->title()->html() ?></a>

    <br>
    <br>
  </story>

  <?php endforeach ?>

</section>

<?php snippet('footer') ?>
</div>
