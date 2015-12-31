$(document).ready(function(){

  var img = "";

  for (var i = 1; i <= 151; i++) {
    img += "<img id='" + i + "' src='http://pokeapi.co/media/img/" + i + ".png'>";
  }

  $('.pokemon-img').html(img);

  $('img').on('click',function(){

    var id = $(this).attr('id');
    var pokedex = "";

    $.get('http://pokeapi.co/api/v1/pokemon/' + id + '/',function(res){
      pokedex += "<h2>" + res['name'] + "</h2>";
      pokedex += "<img id='" + id + "' src='http://pokeapi.co/media/img/" + id + ".png'>";
      pokedex += "<h2>Types</h2>";
      pokedex += "<ul>";
      for (var x = 0; x < res['types'].length; x++) {
        pokedex += "<li>" + res['types'][x]['name'] + "</li>";
      }
      pokedex += "</ul>";
      pokedex += "<h2>Height</h2>";
      pokedex += "<p>" + res['height'] + "</p>";
      pokedex += "<h2>Weight</h2>";
      pokedex += "<p>" + res['weight'] + "</p>";
      $('.pokemon-pokedex').html(pokedex);
    });

  });

});
