$(document).ready(function() {

  $('#navbar-main-btn').click(function() {
    $('.main-nav-loop').toggleClass('main-nav-expand');
  });

  $('.menu-item-has-children').click(function() {
    $('.sub-menu', this).toggleClass('sub-nav-expand');
  });

});
