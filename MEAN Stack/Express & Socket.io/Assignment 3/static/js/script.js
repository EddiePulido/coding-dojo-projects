$(document).ready(function(){

  var socket = io();

  $('.js-epic-button').on('click', function(){
    socket.emit('epic-button-clicked');
  });

  $('.js-reset-button').on('click', function(){
    socket.emit('reset-button-clicked');
  });

  socket.on('count', function(data){
    var countInfo = "";
    if (data == 0) {
      countInfo = "The button has been pushed " + data + " time";
    }else{
      countInfo = "The button has been pushed " + data + " time(s)";
    }
    $('.js-count').html(countInfo);
  });

});
