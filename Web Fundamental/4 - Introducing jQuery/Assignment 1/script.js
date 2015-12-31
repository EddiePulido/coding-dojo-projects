$(document).ready(function(){

  var $this;
  var getDiv;

  function setDiv($getThis){
    $this = $getThis;
    getDiv = $this.next().next().next();
  }

  $('#addClass').click(function(){
    setDiv($(this));
    getDiv.addClass('addClass');
  });

  $('#after').click(function(){
    setDiv($(this));
    getDiv.after("<h1>Added</h1>");
  });

  $('#append').click(function(){
    setDiv($(this));
    getDiv.after("<h1>Appended</h1>");
  });

  $('#attr').click(function(){
    setDiv($(this));
    getDiv.next().text(getDiv.attr('value'));
  });

  $('#before').click(function(){
    setDiv($(this));
    getDiv.before("<h1>Before</h1>");
  });

  $('#html').click(function(){
    setDiv($(this));
    getDiv.html("<h1>Changed Html</h1>");
  });

  $('#text').click(function(){
    setDiv($(this));
    getDiv.text("Changed text!!!");
  });

  $('#val').click(function(){
    setDiv($(this));
    getDiv.val(5);
  });

  $('#toggle').click(function(){
    setDiv($(this));
    getDiv.toggle();
  });

  $('#hide').click(function(){
    setDiv($(this));
    getDiv.hide();
  });

  $('#show').next().next().next().hide();
  $('#show').click(function(){
    setDiv($(this));
    getDiv.show();
  });

  $('#slideDown').next().next().next().hide();
  $('#slideDown').click(function(){
    setDiv($(this));
    getDiv.slideDown();
  });

  $('#slideToggle').click(function(){
    setDiv($(this));
    getDiv.slideToggle();
  });

  $('#slideUp').click(function(){
    setDiv($(this));
    getDiv.slideUp();
  });

  $('#fadeOut').click(function(){
    setDiv($(this));
    getDiv.fadeOut();
  });

  $('#fadeIn').next().next().next().hide();
  $('#fadeIn').click(function(){
    setDiv($(this));
    getDiv.fadeIn();
  });

  $('#focus').focus(function(){
    $(this).next().text("focused");
  });

  $('#click').click(function(){
    setDiv($(this));
    getDiv.text("Clicked me");
  });

});
