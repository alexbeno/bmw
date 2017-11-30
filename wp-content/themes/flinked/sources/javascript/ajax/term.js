/**
* navigation of configurateur
*/
import AddOption from './../AddOption.js'
import Interieur  from './../Interieur.js'


var returns = function() {
  jQuery(document).ready(function ($) {
    if($('config__term--active')) {
      $('config__nav__histo__arrow--active').removeClass('config__nav__histo__arrow--active');
      $('.config__nav__histo__arrow--back').addClass('config__nav__histo__arrow--active');

      $('.config__nav__histo__arrow--back').on('click', function(e){
        e.preventDefault();

        $('.config__nav__histo__arrow--active').removeClass('config__nav__histo__arrow--active');
        $('.config__nav__histo__arrow--next').addClass('config__nav__histo__arrow--active');

        let current = $('.config__term');
        $('.config__term').css('transform', 'translateX(100vw)');
        setTimeout(function(){
          $('.config__term').removeClass('config__term--active');
          forwards(current);
        }, 100);
      });
    }
  });
}

var forwards = function (current) {
  jQuery(document).ready(function ($) {

    $('.config__nav__histo__arrow--next').on('click', function(e){

      $('.config__nav__histo__arrow--active').removeClass('config__nav__histo__arrow--active');
      $('.config__nav__histo__arrow--back').addClass('config__nav__histo__arrow--active');

      $('.config__term').addClass('config__term--active');
      setTimeout(function(){
        $('.config__term').css('transform', 'translateX(0)');
      }, 100);
    });
  });
}

var ajax = function () {

  jQuery(document).ready(function ($) {

    let addOption = new AddOption();
    addOption.init();

    let interieur = new Interieur();
    interieur.init();

    $('.config__nav__item__sub__link').on('click', function(e){
      e.preventDefault();
      $('.config__term__item').remove();
      let mainSlug = $(this).attr('data-mainSlug');
      let slug = $(this).attr('data-slug');
      if(slug === undefined) {
        slug = "noSlug"
      }
      $('.config__term').addClass('config__term--active');
      setTimeout(function(){
        $('.config__term').css('transform', 'translateX(0)');
      }, 100);

      var response_section = $('.config__term__container');
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
            interieur.destroyInterieur();
            interieur.clickEvent();
            returns();
          }
      );
    });

  });
}

module.exports = function () {
  ajax();
}
