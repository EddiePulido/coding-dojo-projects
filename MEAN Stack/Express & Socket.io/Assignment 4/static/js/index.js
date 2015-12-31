$(document).ready(function(){

  var socket = io();

  $('.js-chat-form').submit(function(){
    var formData = $(this).serialize();
    socket.emit('new-member', formData);
  });

});
