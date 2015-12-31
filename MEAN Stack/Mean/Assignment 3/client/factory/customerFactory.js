app.factory('customerFactory', ['$http', function($http){

  var factory = {};

  factory.createCustomer = function(customer){
    $http.post('/api/customer/' + customer).then(function(response){
      console.log("Status : (" + response.status + ") Successfully added customer name.");
    },function(response){
      console.log("Status : (" + response.status + ") There was an error adding the customer name.");
    });
  }

  factory.readCustomer = function(callback){
    $http.get('/api/customer').then(function(response){
      console.log("Status : (" + response.status + ") Successfully retrieved all the customer name.");
      callback(response.data);
    },function(response){
      console.log("Status : (" + response.status + ") There was an error retrieving all the customer name.");
    });
  }

  factory.deleteCustomer = function(id){
    $http.delete('/api/customer/' + id).then(function(response){
      console.log("Status : (" + response.status + ") Successfully deleted the customer name.");
    },function(response){
      console.log("Status : (" + response.status + ") There was an error deleting the customer name.");
    });
  }

  return factory;

}]);
