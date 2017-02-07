<!-- MENU -->
<div class="col-md-6 col-sm-12 menu">

  <div class="row">
    <div class="col-md-12">
      <h2 class="menu-title text-center">Навигация по сайту</h2>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6" href="#">
      <?php wp_nav_menu (array('theme_location' => 'menu1')) ?>
    </div>
    <div class="col-sm-6" href="#">
      <?php wp_nav_menu (array('theme_location' => 'menu2')) ?>
    </div>
    <div class="col-sm-6" href="#">
      <?php wp_nav_menu (array('theme_location' => 'menu3')) ?>
    </div>
    <div class="col-sm-6" href="#">
      <?php wp_nav_menu (array('theme_location' => 'menu4')) ?>
    </div>
  </div>

</div>
