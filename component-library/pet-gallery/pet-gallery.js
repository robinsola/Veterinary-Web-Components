$(document).ready(function() {

  $('.open-lightbox').on('click', function(event) {
    event.preventDefault();
    let imageUrl = $(this).attr('src');
    $('html').addClass('no-scroll');
    $('body').append('<div class="lightbox"><div class="size-image"><img src="' + imageUrl + '"></div></div>');
  });

  $('body').on('click', '.lightbox', function() {
    $('html').removeClass('no-scroll');
    $('.lightbox').remove();
  });

});
