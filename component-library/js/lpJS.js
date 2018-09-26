var $ = jQuery;

$(document).ready(function($) {

  console.log('adwords scripots');

    try {
      // document.querySelector('.services > p:last-child').setAttribute('style', 'margin: 0px;');
      console.log('active even with vc')
      var $ = jQuery;
      console.log($('.services ul > li > span'));
      var serviceTitles = $('.services ul > li > span');
      var serviceExcerpts = $('.excerpt-area');
      serviceTitles.first().addClass('active-service');
      serviceExcerpts.first().show();
      serviceTitles.each(function() {
        $(this).on('click', function() {
          wipeDisplayArea($);
          $(this).addClass('active-service');
          var iden = $(this).attr('id');
          $('div#' + iden).show('slow');
        })
      });
      $('.dr-read-more').on('click', function() {
        $(this).hide('slow');
        $('.complete-dr-bio').show('slow');
      });
      setTimeout(function() {
        $('.full-site-link').attr('href', '/');
      }, 1500);
      removeLinksFromHeaderOnLp();
    } catch (e) {
      console.log(e, '- shortcode JS has failed');
    }
    function wipeDisplayArea() {
      serviceTitles.each(function() {
        $(this).removeClass('active-service');
      });
      serviceExcerpts.each(function() {
        $(this).hide('slow');
      });
    }
    // addressLookup($);


});


  function initMap(mapArea, lat, lng) {
    var map;
    console.log(lat, lng);
    map = new google.maps.Map(mapArea, {
      center: {lat: lat, lng: lng},
      zoom: 13
    });
    var marker = new google.maps.Marker({
      position: {lat: lat, lng: lng},
      map: map
    });
    var contentString = '<p style="color: black; margin-bottom: 0px; font-weight: bold; text-align: center;" class="map-label">' + document.querySelector('.map-area').getAttribute('data-name'); + '</p>';
    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });
    infowindow.open(map, marker);
    marker.addListener('click', function() {
      infowindow.open(map, marker);
    });
  }

  function addressLookup() {
    var $ = jQuery;
    var map = document.querySelector('.map-area');
    map.setAttribute('style', 'height: 400px; width: 100%; margin-bottom: 20px;');
    var address = map.getAttribute('data-address').split(' ');
    var addressFormatted = []
    for (var i = 0; i < address.length; i++) {
      if (address[i] === '<br' || address[i] === '/>') {
        continue;
      } else {
        console.log(address[i], 'loop')
        addressFormatted.push(address[i])
      }
    }
    addressFormatted = addressFormatted.join('+');
    var apiRequest = 'https://maps.googleapis.com/maps/api/geocode/json?address=' + addressFormatted + '&key=AIzaSyAZSG14Aw8BTWAcwQZeL2yHhw1RmWU6yKo';
    console.log(apiRequest);
    $.ajax({
      url: apiRequest,
      type: 'GET',
      data: {
        format: 'json'
      },
      success: function(response) {
        initMap(map, response.results[0].geometry.location.lat, response.results[0].geometry.location.lng);
      },
      error: function() {
        console.log("There was an error processing your request. Please try again.");
      }
    });
  }

  function removeLinksFromHeaderOnLp() {
    if (document.querySelector('.landing-page-plugin')) {
      var links = document.querySelectorAll('#header a');
      for (var i = 0; i < links.length; i++) {
        links[i].removeAttribute('href');
      }
      var links = document.querySelectorAll('.excerpt-area a');
      for (var i = 0; i < links.length; i++) {
        if (links[i].getAttribute('href').split('')[0] != 't') {
          links[i].removeAttribute('href');
        }
      }
    }
  }
