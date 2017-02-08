<?php get_header() ?>

  <!-- NAVBAR-->
  <header class="container">
    <!-- MENU -->
    <?php get_sidebar() ?>
    <!-- FEATURED -->
    <div class="col-md-6 col-sm-12 featured" id="featured">
      <h3></h3>
    </div>
  </header>

  <!-- NEWS -->
  <div class="container posts">
    <?php
      $args =  array('posts_per_page' => 6, 'offset' => 0);
      $myposts = get_posts($args);
      foreach ( $myposts as $post ) : setup_postdata( $post );
    ?>
    <!-- POST-EXAMPLE -->
    <div class="col-md-4 col-sm-6">
      <a class="post-item" href="<?php the_permalink();  ?>">
        <?php the_post_thumbnail(); ?>
        <div class="post-item-label"></div>
        <div class="post-item-content">
          <h4><?php the_title(); ?></h4>
          <h6><?php the_time('j M Y'); ?></h6>
        </div>
      </a>
    </div>
    <?php endforeach;
    wp_reset_postdata();?>
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
