$(document).ready(function(){

  $('.js-github-info').on('click', function(){
    $.get('https://api.github.com/users/mushy1693', function(data){
      $('.github-info').html("<p> Name: " + data['name'] + "</p>");
    });
  });

});
