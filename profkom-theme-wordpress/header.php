<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <meta name="description" content="Profcom website">
  <meta name="author" content="Profcom MIPT">
  <link rel="icon" href="../../favicon.ico">

  <title><?php bloginfo('name') ?></title>

  <!-- Bootstrap core CSS -->

  <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->

  <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">

</head>
<body>

  <!-- TOPBAR -->
  <div class="container topbar">

    <div class="logo"></div>

    <h1 class="title">Profcom<span class="title-description">Профком студентов МФТИ</span></h1>

    <form class="form-inline search">
      <input type="search" class="form-control" id="exampleInputEmail2" placeholder="Поиск по сайту" name="s"><button type="submit" class="btn btn-default"><img src="<?php bloginfo('template_url'); ?>/images/icons/loupe.svg" alt=""></button>
    </form>

  </div>
