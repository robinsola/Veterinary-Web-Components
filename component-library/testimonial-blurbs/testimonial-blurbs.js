$(document).ready(function(){

  function startSlider() {
    changeBlurb = setInterval(function(){
      nextBlurb();
    }, 5000);
  };

  function stopSlider() {
    clearInterval(changeBlurb);
    changeBlurb = 0;
  }

  let visible = 1;
  let prevVisible = visible-1;
  let nextVisible = visible+1;
  let allBlurbs = $(".blurbs-display").length +1;

    function prevBlurb() {
      $(".blurbs-display").hide();
      visible -= 1;
      prevVisible -=1;
      nextVisible -=1;
      if (visible === 0) {
        visible = allBlurbs-1;
        prevVisible = visible-1;
        nextVisible = visible+1;
      }
      $(`.blurbs-display:nth-child(` + visible + `)`).fadeIn(1000);
      $(`.blurbs-display:nth-child(` + nextVisible + `)`).fadeIn(1000);
    }

    function nextBlurb() {
      $(".blurbs-display").hide();
      visible += 1;
      prevVisible +=1;
      nextVisible +=1;
      if (visible === allBlurbs) {
        visible = 1;
        prevVisible = visible-1;
        nextVisible = visible+1;
      }
      $(`.blurbs-display:nth-child(` + visible + `)`).fadeIn(1000);
      $(`.blurbs-display:nth-child(` + nextVisible + `)`).fadeIn(1000);
    }

    startSlider();

    $("#nextBtn").click(function() {
      stopSlider();
      nextBlurb();
      startSlider();
    });

    $("#prevBtn").click(function() {
      stopSlider();
      prevBlurb();
      startSlider();
    });
    
});
