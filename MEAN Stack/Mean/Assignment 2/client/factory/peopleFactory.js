app.factory('peopleFactory', ['$http', '$location', function($http, $location){

  var factory = {};

  factory.getPeople = function(callback){
    $http.get('/people').then(function(res){
      callback(res.data);
    });
  }

  factory.findOnePerson = function(id, callback){
    $http.get('/people/' + id).then(function(res){
      callback(res.data);
    });
  }

  factory.addPeople = function(friend){
    $http.get('/people/new/' + friend).then(function(){
      $location.path('#/');
    });
  }

  factory.removePeople = function(id){
    $http.get('/people/remove/' + id).then(function(){
      $location.path('#/');
    });
  }

  return factory;

}]);
