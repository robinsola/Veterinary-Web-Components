$(document).ready(function() {

  $('#navbar-basic-btn').click(function() {
    $('.navbar-basic-loop').toggleClass('basic-expand');
  });

  $('.menu-item-has-children').click(function() {
    $('.sub-menu', this).toggleClass('sub-menu-expand');
  });

});
