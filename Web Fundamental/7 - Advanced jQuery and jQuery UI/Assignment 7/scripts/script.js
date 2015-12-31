$(document).ready(function() {

  //For the nice tooltips
  $('.tooltip').tooltipster({
    theme: 'tooltipster-noir'
  });

  //For the nice sliders
  $('.banner').unslider();

  //For using nicer alerts
  $('.alert-button').on('click',function(){
    swal("Here's a message!", "It's pretty, isn't it?");
  });

  //For running table sorter
  $("#myTable").tablesorter();

  // Function for display Highchart
  $(function () {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Fruit Consumption'
        },
        xAxis: {
            categories: ['Apples', 'Bananas', 'Oranges']
        },
        yAxis: {
            title: {
                text: 'Fruit eaten'
            }
        },
        series: [{
            name: 'Jane',
            data: [1, 0, 4]
        }, {
            name: 'John',
            data: [5, 7, 3]
        }]
    });
  });

});
