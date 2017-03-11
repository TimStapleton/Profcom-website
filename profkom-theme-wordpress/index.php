<?php get_header() ?>

  <!-- NAVBAR-->
  <header class="container">
    <!-- MENU -->
    <?php get_sidebar() ?>
    <!-- FEATURED -->

    <div class="col-sm-6 featured" href="#">
      <?php wp_nav_menu (array('theme_location' => 'fav_article')) ?>
    </div>
  </header>

  <!-- NEWS -->
  <div class="container posts">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <!-- POST-EXAMPLE -->
    <div class="col-md-4 col-sm-6">
      <a class="post-item" href="<?php the_permalink();  ?>">
        <?php the_post_thumbnail(); ?>

        <div class="post-item-content">
          <h4><?php the_title(); ?></h4>
          <h6><?php the_time('j M Y'); ?></h6>
        </div>
      </a>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

  </div>

  <!-- MORE-POSTS -->
  <!--<button class="more">Еще публикации</button>-->
  <div class="container">
    <div class="row">
      <div class="col-md-2 pagination">
        <?php my_pagenavi(); ?>
      </div>
    </div>
  </div>
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
