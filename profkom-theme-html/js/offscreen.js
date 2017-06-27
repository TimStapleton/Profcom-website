$(document).ready(function(){
  $('.sliding-panel-button,.sliding-panel-fade-screen,.menu-button,.menu-close-title').on('click touchstart',function (e) {
    $('.sliding-panel-content, .sliding-panel-fade-screen, .menu-button, .menu-button span').toggleClass('is-visible');
    e.preventDefault();
  });
  $('.js-accordion-trigger').bind('click', function(e){
    jQuery(this).parent().find('.submenu').slideToggle('fast');
   // apply the toggle to the ul
    jQuery(this).parent().toggleClass('is-expanded');
    e.preventDefault();
  });
});
