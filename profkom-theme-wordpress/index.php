<?php get_header() ?>

<body>

  <!-- TOPBAR -->
  <div class="container topbar">

    <div class="logo"></div>

    <h1 class="title">Profcom<span class="title-description">Профком студентов МФТИ</span></h1>

    <form class="form-inline search">
      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="поиск по сайту"><button type="submit" class="btn btn-default"><img src="<?php bloginfo('template_url'); ?>/images/icons/loupe.svg" alt=""></button>
    </form>

  </div>

  <!-- HEADER-->
  <header class="container">
    <?php get_sidebar() ?>
    <!-- FEATURED -->
    <div class="col-md-6 col-sm-12 featured" id="featured">
      <h3></h3>
    </div>
  </header>

  <!-- NEWS -->
  <div class="container posts">

    <!-- POST-EXAMPLE -->
    <div class="col-md-4 col-sm-6">
      <a class="post-item" href="#">
        <img src="<?php bloginfo('template_url'); ?>/images/preview.jpg" class="post-item-image">
        <div class="post-item-label"></div>
        <div class="post-item-content">
          <h4>Изменен режим питания в столовой КСП</h4>
          <h6>29 января 2017 в 12:30</h6>
        </div>
      </a>
    </div>


    <!-- COPIES -->
    <div class="col-md-4 col-sm-6">
      <a class="post-item" href="#">
        <img src="<?php bloginfo('template_url'); ?>/images/preview.jpg" class="post-item-image">
        <div class="post-item-label"></div>
        <div class="post-item-content">
          <h4>Инцидент с дверью в ГК</h4>
          <h6>29 января 2017 в 12:30</h6>
        </div>
      </a>
    </div>
    <div class="col-md-4 col-sm-6">
      <a class="post-item" href="#">
        <img src="<?php bloginfo('template_url'); ?>/images/preview.jpg" class="post-item-image">
        <div class="post-item-label"></div>
        <div class="post-item-content">
          <h4>Плитку на НК починили</h4>
          <h6>29 января 2017 в 12:30</h6>
        </div>
      </a>
    </div>
    <div class="col-md-4 col-sm-6">
      <a class="post-item" href="#">
        <img src="<?php bloginfo('template_url'); ?>/images/preview.jpg" class="post-item-image">
        <div class="post-item-label"></div>
        <div class="post-item-content">
          <h4>Заголовок поста в несколько строчек для теста.</h4>
          <h6>29 января 2017 в 12:30</h6>
        </div>
      </a>
    </div>
    <div class="col-md-4 col-sm-6">
      <a class="post-item" href="#">
        <img src="<?php bloginfo('template_url'); ?>/images/preview.jpg" class="post-item-image">
        <div class="post-item-label"></div>
        <div class="post-item-content">
          <h4>Заголовок поста в несколько строчек для теста.</h4>
          <h6>29 января 2017 в 12:30</h6>
        </div>
      </a>
    </div>
    <div class="col-md-4 col-sm-6">
      <a class="post-item" href="#">
        <img src="<?php bloginfo('template_url'); ?>/images/preview.jpg" class="post-item-image">
        <div class="post-item-label"></div>
        <div class="post-item-content">
          <h4>Заголовок поста в несколько строчек для теста.</h4>
          <h6>29 января 2017 в 12:30</h6>
        </div>
      </a>
    </div>
    <div class="col-md-4 col-sm-6">
      <a class="post-item" href="#">
        <img src="<?php bloginfo('template_url'); ?>/images/preview.jpg" class="post-item-image">
        <div class="post-item-label"></div>
        <div class="post-item-content">
          <h4>Заголовок поста в несколько строчек для теста.</h4>
          <h6>29 января 2017 в 12:30</h6>
        </div>
      </a>
    </div>
    <div class="col-md-4 col-sm-6">
      <a class="post-item" href="#">
        <img src="<?php bloginfo('template_url'); ?>/images/preview.jpg" class="post-item-image">
        <div class="post-item-label"></div>
        <div class="post-item-content">
          <h4>Заголовок поста в несколько строчек для теста.</h4>
          <h6>29 января 2017 в 12:30</h6>
        </div>
      </a>
    </div>


  </div>

  <!-- MORE-POSTS -->
  <button class="more">Еще публикации</button>
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
