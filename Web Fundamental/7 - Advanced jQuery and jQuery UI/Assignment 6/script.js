$(document).ready(function(){

  var nameError = $('.name-error');

  $( ".datepicker" ).datepicker();
  nameError.hide();

  $('form').submit(function(){

    var name = $('input[name="name"]');

    if(name.val() == ""){
      name.addClass('error');
      nameError.show();
    }else{
      name.removeClass('error');
      nameError.hide();
      alert("Thanks " + name.val() + " ! Your Cruise leaves on " + $('#fromDate').val() + " and returns on " + $('#toDate').val() + "!");
    }

    return false;

  });

});
