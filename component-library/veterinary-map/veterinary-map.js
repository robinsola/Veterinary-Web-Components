$(document).ready(function() {

//variables for location hours
  const vet_data_arr = Object.values(vet_data_object);

  function listHours1() {
    let hours1_arr = [];
    let hours1_list = "";
    for (i=7; i<=13; i++) {
      hours1_arr.push(vet_data_arr[i]);
    }
    for (j=0; j<=hours1_arr.length -1; j++) {
      hours1_list += "<li>" + hours1_arr[j] + "</li>";
    }
    return hours1_list;
  }

  function listHours2() {
    let hours2_arr = [];
    let hours2_list = "";
    for (i=21; i<=27; i++) {
      hours2_arr.push(vet_data_arr[i]);
    }
    for (j=0; j<=hours2_arr.length -1; j++) {
      hours2_list += "<li>" + hours2_arr[j] + "</li>";
    }
    return hours2_list;
  }

  const hospital1_hours = listHours1();
  const hospital2_hours = listHours2();

//variables for map display
  let location1 = vet_data_object.hospital_1.split(' ').join('+');
  let street1 = vet_data_object.street_1.split(' ').join('+');
  let city1 = vet_data_object.city_1.split(' ').join('+');
  let state1 = vet_data_object.state_1.split(' ').join('+');

  let location2 = vet_data_object.hospital_2.split(' ').join('+');
  let street2 = vet_data_object.street_2.split(' ').join('+');
  let city2 = vet_data_object.city_2.split(' ').join('+');
  let state2 = vet_data_object.state_2.split(' ').join('+');

  const map1 = "https://www.google.com/maps?q=" + location1 + "+" + street1 + "+" + city1 + "+" + state1 + "&output=embed";
  const map2 = "https://www.google.com/maps?q=" + location2 + "+" + street2 + "+" + city2 + "+" + state2 + "&output=embed";

  $("#map1").click(function() {
    $("#display-map").attr("src", map1);
    $("#phone-href").attr("href", "Tel:+01" + vet_data_object.phone_1);
    $("#hospital-name").text(vet_data_object.hospital_1);
    $("#hospital-description").text(vet_data_object.description_1);
    $("#hospital-address").html(vet_data_object.street_1 + "<br/>" + vet_data_object.city_1 + ", " + vet_data_object.state_1 + " " + vet_data_object.zipcode_1);
    $("#hospital-phone").text(vet_data_object.phone_1);
    $("#hospital-hours").html(hospital1_hours);
  });

  $("#map2").click(function() {
    $("#display-map").attr("src", map2);
    $("#phone-href").attr("href", "Tel:+01" + vet_data_object.phone_2);
    $("#hospital-name").text(vet_data_object.hospital_2);
    $("#hospital-description").text(vet_data_object.description_2);
    $("#hospital-address").html(vet_data_object.street_2 + "<br/>" + vet_data_object.city_2 + ", " + vet_data_object.state_2 + " " + vet_data_object.zipcode_2);
    $("#hospital-phone").text(vet_data_object.phone_2);
    $("#hospital-hours").html(hospital2_hours);
  });

});
