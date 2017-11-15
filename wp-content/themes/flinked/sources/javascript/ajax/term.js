/**
* navigation of configurateur
*/
import AddOption from './../AddOption.js'

var ajax = function () {

  jQuery(document).ready(function ($) {

    let addOption = new AddOption();
    addOption.init();

    $('.config__nav__item__sub__link').on('click', function(e){
      e.preventDefault();
      let mainSlug = $(this).attr('data-mainSlug');
      let slug = $(this).attr('data-slug');

      $('.config__term').addClass('config__term--active');
      setTimeout(function(){
        $('.config__term').css('transform', 'translateX(0)');
      }, 100);

      var response_section = $('.config__term');
      jQuery.post(
          ajaxurl,
          {
              'action': 'ajax_term',
              'slug': slug, 
              'mainSlug': mainSlug
          },
          function(response){
            response_section.append(response);
            addOption.clickEvent();
          }
      );
    });

    $('.config__term__returns').on('click', function(e){
      e.preventDefault();
      $('.config__term').css('transform', 'translateX(0)');
      setTimeout(function(){
        $('.config__term').removeClass('config__term--active');
        $('.config__term__item').remove();
      }, 100);
    })

  });
}

module.exports = function () {
  ajax();
}
