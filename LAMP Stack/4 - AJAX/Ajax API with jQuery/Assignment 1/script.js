$(document).ready(function(){

  var img = "";

  for (var i = 1; i <= 151; i++) {
    img += "<img src='http://pokeapi.co/media/img/" + i + ".png'>";
  }

  $('.pokemon').html(img);

});
