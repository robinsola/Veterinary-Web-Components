$(document).ready(function(){
  function startChange() {
    changeIt = setInterval(function(){
      nextSlide();
    }, 5000);
  };

  function stopChange() {
    clearInterval(changeIt);
  }

  let current = 1;
  let max = $(".slide").length +1;

    function prevSlide() {
      $(".slide").hide();
      current -= 1;
      if (current === 0) {
        current = max-1;
      }
      $(`.slide:nth-child(` + current + `)`).fadeIn(1000);
    }

    function nextSlide() {
      $(".slide").hide();
      current += 1;
      if (current === max) {
        current = 1;
      }
      $(`.slide:nth-child(` + current + `)`).fadeIn(1000);
    }

    startChange();

    $("#next").click(function() {
      stopChange();
      nextSlide();
      startChange();
    });

    $("#prev").click(function() {
      stopChange();
      prevSlide();
      startChange();
    });
});
