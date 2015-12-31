$(document).ready(function(){

  var socket = io();

  socket.on('user-left', function(data){
    $('.chat-box').html("<p>" + data['name'] + " has left the chat." + "</p>");
  });

});
