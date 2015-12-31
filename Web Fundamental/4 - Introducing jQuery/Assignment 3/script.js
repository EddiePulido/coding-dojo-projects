$(document).ready(function(){

  $('img').click(function(){

    var src = $(this).attr('src');
    var data = $(this).attr('data-alt-src');

    $(this).hide(1000,function(){

      $(this).show();
      $(this).attr('src', data);
      $(this).attr('data-alt-src', src);

    });

  });

});
