$(document).ready(function(){

  $.get('/posts/notes_html_api', function(data){
    $('.notes').html(data);
  });

  $('form').submit(function(){
    $.post('/posts/create', $(this).serialize(), function(data){
      $('.notes').html(data);
    });
    $('.js-note-button').val('');
    return false;
  });

});
