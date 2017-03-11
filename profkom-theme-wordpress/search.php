<?php get_header() ?>

  <div class="search-title">
    <div class="search-text">
      Результаты поиска по <span class="search-phrase">"<?php echo $_GET['s'];?>"</span>
    </div>
  </div>
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="row search-item">
        <a href="<?php the_permalink();?>">
        <div class="col-md-1 search-item-img">
          <div class="search-item-label"></div>
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="col-md-9 search-item-info">
          <?php the_title(); ?></a>
          <?php the_content(''); ?>
        </div>
        <div class="col-md-2 search-item-date">
          <?php the_date('j F Y', '<p>', '</p>'); ?>
        </div>
        </a>
      </div>
      <?php endwhile; else: ?>
      <p>Поиск не дал результатов.</p>
    <?php endif;?>
  </div>
  <!-- BACK -->
  <button class="more" onclick="location.href = '<?php bloginfo("home"); ?>'">Назад к главной</button>



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
