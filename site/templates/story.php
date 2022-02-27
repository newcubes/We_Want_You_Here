<?php snippet('header') ?>

<div class="container-fluid container-lightbox">
<section class="content article">
  <article>
    <h1 class="Story_Title"><?= $page->Story_Title()->html() ?></h1>

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


    <p class="Encounter"><?= $page->Encounter()->kirbytext() ?></p>
    <hr>
    <br>
    <p class="Conversation interview"><?= $page->Conversation()->kirbytext() ?></p>
    <br>
    <hr>
    <h3>The Drive Home:</h3>
    <p class="Drive"><?= $page->Drive()->kirbytext() ?></p>
    <?= $page->text()->kirbytext() ?>
    <br>
    <hr>

    <a href="<?= url('./') ?>"><h3>Back…</h3></a>

  </article>
</section>

<?php snippet('footer') ?>
</div>
