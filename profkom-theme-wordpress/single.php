<?php get_header() ?>

  <div class="container">
    <div class="row">
      <div class="content">
        <div class="content-header">
          <h3><font color="3d7992"><?php the_title(); ?></font></h3>
        </div>
        <div class="content-date">
          <h5><font color="3d7992"><?php the_time('j M Y'); ?></font></h5>
        </div>
        <div class="content-text">
          <?php the_post(); ?>
          <p><font color="5f5f5f"><?php the_content( $more_link_text = null, $strip_teaser = false) ?></p>
          </div>
        </div>
      </div>
    </div>
  <!-- BACK -->
  <button class="more" onclick="location.href = '<?php bloginfo("home"); ?>'">Назад к публикациям</button>



  <?php get_footer() ?>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script>
    $(document).ready(function() {
      console.log($('body').height() + ' ' + $(window).height());
      if ($('body').height() < $('window').height()) {
      //  $('footer').css({'position' : 'absolute', 'bottom' : '0'});
      }
   });
  </script>
</body>
</html>
