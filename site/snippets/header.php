<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This header snippet is reused in all templates.
  It fetches information from the `site.txt` content file
  and contains the site navigation.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">





  <?php
  /*
    In the title tag we show the title of our
    site and the title of the current page
  */
  ?>


  <?php
  /*
    Stylesheets can be included using the `css()` helper.
    Kirby also provides the `js()` helper to include script file.
    More Kirby helpers: https://getkirby.com/docs/reference/templates/helpers
  */
  ?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/englishextra/iframe-lightbox@latest/css/iframe-lightbox.min.css">
  <link rel="stylesheet" href="http://www.journey.house/assets/css/lightbox.css">
  <link rel="stylesheet" href="/assets/css/index.css" >




  <?php
  /*
    The `url()` helper is a great way to create reliable
    absolute URLs in Kirby that always start with the
    base URL of your site.
  */
  ?>


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">





</head>
<body>

  <header class="header">



  </header>

  <main class="main">





 <script src="/assets/js/index.js"></script>
 <script src="/assets/js/iframe-lightbox.min.js"></script>
 <script src="/assets/js/lightbox.js"></script>
