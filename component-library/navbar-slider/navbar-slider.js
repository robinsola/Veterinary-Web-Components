$(document).ready(function() {

  $('#navbar-slider-btn').click(function() {
    $('.navbar-slider-loop').toggleClass('slider-expand');
  });

  $('.menu-item-has-children').click(function() {
    $('.sub-menu', this).toggleClass('sub-slider-expand');
  });

});
