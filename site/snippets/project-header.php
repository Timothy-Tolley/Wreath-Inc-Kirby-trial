<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <link rel="apple-touch-icon" sizes="57x57" href="../assets/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../assets/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../assets/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../assets/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../assets/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../assets/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../assets/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="../assets/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../assets/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicons/favicon-16x16.png">
  <meta name="msapplication-TileImage" content="../assets/favicons/ms-icon-144x144.png">

  <link rel="stylesheet" type="text/css" href='../assets/css/index.css'>
  <link rel="stylesheet" type="text/css" href='../assets/css/home.css'>
  <link rel="stylesheet" type="text/css" href='../assets/css/footer.css'>
  <link rel="stylesheet" type="text/css" href='../assets/css/menu.css'>
  <link rel="stylesheet" type="text/css" href='../assets/css/header.css'>
  <link rel="stylesheet" type="text/css" href='../assets/css/project.css'>
  <link rel="stylesheet" type="text/css" href='../assets/css/about.css'>
  <link rel="stylesheet" type="text/css" href='../assets/css/grid_rules.css'>
  <link href="https://fonts.googleapis.com/css?family=Adamina" rel="stylesheet"> 

</head>
<body>
  <div class="page">
  <header class="header">

      <div class="branding" id="crossfade-logo" onclick = "home()">
        <img src = "../assets/images/wreath-inc-long-white.svg" class = "header-logo bottom" />
        <img src = "../assets/images/wreath-inc-long-orange.svg" class = "header-logo top" />
      </div>

      <?php snippet('menu') ?>

  </header>