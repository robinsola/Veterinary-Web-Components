$(document).ready(function() {

  let dogPlatinum = plans_data_object.dog_platinum.split(', ');
  let dogGold = plans_data_object.dog_gold.split(', ');
  let dogSilver = plans_data_object.dog_silver.split(', ');
  let catPlatinum = plans_data_object.cat_platinum.split(', ');
  let catGold = plans_data_object.cat_gold.split(', ');
  let catSilver = plans_data_object.cat_silver.split(', ');
  let puppyGold = plans_data_object.puppy_gold.split(', ');
  let puppySilver = plans_data_object.puppy_silver.split(', ');
  let kittenGold = plans_data_object.kitten_gold.split(', ');
  let kittenSilver = plans_data_object.kitten_silver.split(', ');

  function listPlanDetails(array) {
    let list = '';
    for (i=0; i<=array.length -1; i++) {
      list += "<span class='style-checkmark'>&#10004</span> " + "<li>" + array[i] + "</li>";
    }
    return list;
  }

  let dogPlatinum_list = listPlanDetails(dogPlatinum);
  let dogGold_list = listPlanDetails(dogGold);
  let dogSilver_list = listPlanDetails(dogSilver);
  let catPlatinum_list = listPlanDetails(catPlatinum);
  let catGold_list = listPlanDetails(catGold);
  let catSilver_list = listPlanDetails(catSilver);
  let puppyGold_list = listPlanDetails(puppyGold);
  let puppySilver_list = listPlanDetails(puppySilver);
  let kittenGold_list = listPlanDetails(kittenGold);
  let kittenSilver_list = listPlanDetails(kittenSilver);

  document.getElementById('catPlans').focus();
  $('#display-platinum').show();
  $('#display-gold').show();
  $('#display-silver').show();
  $('#platinum').html(catPlatinum_list);
  $('#gold').html(catGold_list);
  $('#silver').html(catSilver_list);

  $('#catPlans').click(function() {
    $('#display-platinum').fadeIn();
    $('#display-gold').fadeIn();
    $('#display-silver').fadeIn();
    $('#platinum').html(catPlatinum_list);
    $('#gold').html(catGold_list);
    $('#silver').html(catSilver_list);
  });

  $('#dogPlans').click(function() {
    $('#display-platinum').fadeIn();
    $('#display-gold').fadeIn();
    $('#display-silver').fadeIn();
    $('#platinum').html(dogPlatinum_list);
    $('#gold').html(dogGold_list);
    $('#silver').html(dogSilver_list);
  });

  $('#kittenPlans').click(function() {
    $('#display-platinum').hide();
    $('#display-gold').fadeIn();
    $('#display-silver').fadeIn();
    $('#gold').html(kittenGold_list);
    $('#silver').html(kittenSilver_list);
  });

  $('#puppyPlans').click(function() {
    $('#display-platinum').hide();
    $('#display-gold').fadeIn();
    $('#display-silver').fadeIn();
    $('#gold').html(puppyGold_list);
    $('#silver').html(puppySilver_list);
  });

});
