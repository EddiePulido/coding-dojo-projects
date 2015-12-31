$(document).ready(function(){
  var socket = io();
  $('.js-survey-form').submit(function(){
    $('.info').empty();
    socket.emit('posting_form', $(this).serialize());
    return false;
  });
  socket.on('updated_message', function(data){
    $('.info').append(data);
  });
  socket.on('random_number', function(data){
    $('.info').append(data);
  });
});
