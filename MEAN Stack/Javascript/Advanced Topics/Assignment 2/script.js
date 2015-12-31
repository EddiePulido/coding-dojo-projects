$(document).ready(function(){

  $('.js-click-me').on('click', function(){
    $('.box').toggleClass('blue');
  });

  $('.box').hover(function(){
    $('.box').addClass('green');
  },function(){
    $('.box').removeClass('green');
  });

});
