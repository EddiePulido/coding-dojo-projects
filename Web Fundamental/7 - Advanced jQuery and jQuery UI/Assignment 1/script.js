$(document).ready(function(){
  $('form').submit(function(){
    $('table').append('<tr>' +
                      '<td>' + $(this).find('#fname').val() + '</td>' +
                      '<td>' + $(this).find('#lname').val() + '</td>' +
                      '<td>' + $(this).find('#email').val() + '</td>' +
                      '<td>' + $(this).find('#tel').val() + '</td>' +
                      + '</tr>');
    return false;
  });
});
