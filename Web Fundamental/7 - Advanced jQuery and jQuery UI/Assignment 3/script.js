$(document).ready(function(){

  var users = [];

  $('.addUser').on('click',function(){

    var user = {};

    user.fname = $('#fname').val();
    $('#fname').val("");
    user.lname = $('#lname').val();
    $('#lname').val("");
    user.description = $('#description').val();
    $('#description').val("");
    users.push(user);

    $('#contactBox').append("<div class='contact'>"+
                              "<h3 class='lname'><span>" + user.fname + "</span> " + user.lname + "</h3>" +
                              "<h4 class='fname'>" + "Click for Description!" + "</h4>" +
                              "<p class='description'>" + user.description + "</p>"
                            +"</div>");

    $('.description').hide();

  });

  $(document).on('click','.contact',function(){
    $(this).find('.fname').hide();
    $(this).find('.lname').hide();
    $(this).find('.description').show();
  });

});
