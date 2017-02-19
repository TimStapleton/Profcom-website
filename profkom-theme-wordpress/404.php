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
  <div class="topbar-404">
    <div class="container toplogo-404">
      <a href="<?php bloginfo("home"); ?>"><div class="logo-404"></div></a>
      <a href="<?php bloginfo("home"); ?>"><h1 class="title-404">Profcom<span class="title-description-404">Профком студентов МФТИ</span></h1></a>
    </div>
  </div>

  <!-- 404 -->
  <div class="container page-404">
    <h1>Страница не найдена</h1>
    <img src="<?php bloginfo('template_url'); ?>/images/NotFoundSign.svg">
  </div>

  <!-- MAIN -->
  <a href="<?php bloginfo("home"); ?>"><button class="more">На главную</button></a>
  <?php get_footer() ?>
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>

  <script>
    $(document).ready(function() {

      var menuHeight = $('.menu').height();
      console.log(menuHeight);
      $('#featured').height(menuHeight);

      if ($('body').height() < $('window').height()) {
        $('footer').css({'position' : 'absolute', 'bottom' : '0'});
      }

   });
  </script>
</body>
</html>
