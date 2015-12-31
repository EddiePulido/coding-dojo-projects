$(document).ready(function(){

  $('.form').submit(function(){
    $city = $("input[name='city']").val();
    $cityInfo = "";
    $.get('http://api.openweathermap.org/data/2.5/weather?q=' + $city + ',us&appid=bd82977b86bf27fb59a04b61b657fb6f',function(data){
      $cityInfo += "<h2>" + data['name'] + "</h2>";
      $cityInfo += "<p>Temperature: " + data['main']['temp'] + "</p>";
      $('.city-info').html($cityInfo);
      $("input[name='city']").val("");
    });
    return false;
  });

});
