app.factory('orderFactory', ['$http', function($http){

  var factory = {};

  factory.createOrder = function(order){
    $http.post('/api/order/' + order.customer + '/' + order.number + '/' + order.item).then(function(response){
      console.log("Status : (" + response.status + ") Successfully added order.");
    },function(response){
      console.log("Status : (" + response.status + ") There was an error adding the order.");
    });
  }

  factory.readOrder = function(callback){
    $http.get('/api/order').then(function(response){
      console.log("Status : (" + response.status + ") Successfully retrieved all the order.");
      callback(response.data);
    },function(response){
      console.log("Status : (" + response.status + ") There was an error retrieving all the order.");
    });
  }

  return factory;

}]);
