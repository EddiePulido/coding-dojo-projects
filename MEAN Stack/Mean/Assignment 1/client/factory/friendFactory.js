app.factory('friendFactory', ['$http', '$location', function($http, $location){

  var factory = {};

  factory.getFriend = function(callback){
    $http.get('/friend').then(function(res){
      callback(res.data);
    });
  }

  factory.addFriend = function(friend){
    $http.get('/friend/' + friend).then(function(){
      $location.path('#/');
    });
  }

  factory.removeFriend = function(id){
    $http.get('/friend/remove/' + id).then(function(){
      $location.path('#/');
    });
  }

  return factory;

}]);
