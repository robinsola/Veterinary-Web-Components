$(document).ready(function() {

  $('#navbar-symmetrical-btn').click(function() {
    $('.navbar-symmetrical-loop').toggleClass('symmetrical-expand');
  });

  $('.menu-item-has-children').click(function() {
    $('.sub-menu', this).toggleClass('expanded-sub-menu');
  });

});
