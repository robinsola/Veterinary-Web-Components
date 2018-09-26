$(document).ready(function() {

  let slides = document.querySelectorAll('#carouselSlides .image-slide');
  let next = document.getElementById('forwardBtn');
  let previous = document.getElementById('backBtn');
  let pauseButton = document.getElementById('toggleBtn');
  let currentSlide = 0;
  let slideInterval = setInterval(nextSlide, 3000);
  let playing = true;

  function nextSlide() {
    goToSlide(currentSlide+1);
  }

  function previousSlide() {
    goToSlide(currentSlide-1);
  }

  let goToSlide = (n) => {
    slides[currentSlide].className = 'image-slide';
    currentSlide = (n+slides.length)%slides.length;
    slides[currentSlide].className = 'image-slide showing';
  }

  function pauseSlideshow() {
    pauseButton.innerHTML = '&#9658;';
    playing = false;
    clearInterval(slideInterval);
  }

  function playSlideshow() {
    pauseButton.innerHTML = '&#10074;&#10074;';
    playing = true;
    slideInterval = setInterval(nextSlide, 3000);
  }

  $('#toggleBtn').click(function() {
    if(playing) {
      pauseSlideshow();
    } else {
      playSlideshow();
    }
  });

  $('#forwardBtn').click(function() {
      pauseSlideshow();
      nextSlide();
  });

  $('#backBtn').click(function() {
    pauseSlideshow();
    previousSlide();
  })

  // pauseButton.onclick = function() {
  //   if(playing) {
  //     pauseSlideshow();
  //   } else {
  //     playSlideshow();
  //   }
  // };

  // next.onclick = function() {
  //   pauseSlideshow();
  //   nextSlide();
  // };
  //
  // previous.onclick = function() {
  //   pauseSlideshow();
  //   previousSlide();
  // };

});

// $(document).ready(function(){
// function startCarousel() {
//   carouselInterval = setInterval(function() {
//     carousel();
//   }, 1000);
// }
//
// function pauseCarousel() {
//   clearInterval(carouselInterval);
//   carouselInterval = null;
// }
//
// let carouselIndex = 0;
//
// function carousel() {
//   let i;
//   let slides = document.getElementsByClassName("image-slide");
//   for (i=0; i<slides.length; i++) {
//     slides[i].style.display = "none";
//   }
//   carouselIndex++;
//   if (carouselIndex > slides.length) {
//     carouselIndex = 1;
//   }
//   slides[carouselIndex-1].style.display = "block";
// }
//
// function carouselReverse() {
//   let j;
//   let slidesReverse = document.getElementsByClassName("image-slide");
//   for (j=0; j<slidesReverse.length; j++) {
//     slidesReverse[j].style.display = "none";
//   }
//   carouselIndex--;
//   if (carouselIndex < slidesReverse.length) {
//     carouselIndex = 1;
//   }
//   slidesReverse[carouselIndex-1].style.display = "block";
// }
//
// startCarousel();
//
// $("#toggleBtn").click(function(){
// if ($(this).text() == "||") {
//   $(this).text(">");
//   pauseCarousel();
// } else {
//     $(this).text("||");
//     startCarousel();
//   }
// });
//
// $("#forwardBtn").click(function() {
//   pauseCarousel();
//   carousel();
// });
//
// $("#backBtn").click(function() {
//   pauseCarousel();
//   carouselReverse();
//   startCarousel();
// });
