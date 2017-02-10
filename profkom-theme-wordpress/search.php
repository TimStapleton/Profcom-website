<?php get_header() ?>

  <div class="container">
    <div class="row">
      <div class="content">
        <div class="content-header">
          <h3><font color="3d7992">Результаты поиска</font></h3>
        </div>
        <h1>Поиск по: "<?php echo $_GET['s'];?>"</h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="row">
            <div class="col-md-"></div>
          </div>
          <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
          <?php the_content(''); ?>
          <?php endwhile; else: ?>
          <p>Поиск не дал результатов.</p>
        <?php endif;?>
      </div>
    </div>
  </div>
  <!-- BACK -->
  <a href="<?php bloginfo("home"); ?>"><button class="more">Назад к публикациям</button></a>



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
