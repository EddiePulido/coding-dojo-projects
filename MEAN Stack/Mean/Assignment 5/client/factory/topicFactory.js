app.factory('topicFactory', ['$http', function($http){

  var id = '';
  var factory = {};

  factory.setId = function(_id){
    id = _id;
  }

  factory.getId = function(callback){
    callback(id);
  };

  factory.createTopic = function(username, topic){
    topic.username = username;
    $http.post('/api/topic', topic).then(function(response){
      console.log("Success : [" + response.status + "]" + " You have successfully added the topic.");
    },function(response){
      console.log("Error : [" + response.status + "]" + " There was an error adding the topic.");
    });
  }

  factory.readTopic = function(callback){
    $http.get('/api/topic').then(function(response){
      console.log("Success : [" + response.status + "]" + " You have successfully retrieved all the topic.");
      callback(response.data);
    },function(response){
      console.log("Error : [" + response.status + "]" + " There was an error retrieving all the topic.");
    });
  }

  factory.readOneTopic = function(id, callback){
    $http.get('/api/topic/' + id).then(function(response){
      console.log("Success : [" + response.status + "]" + " You have successfully retrieved the topic.");
      callback(response.data);
    },function(response){
      console.log("Error : [" + response.status + "]" + " There was an error retrieving the topic.");
    });
  }

  return factory;

}]);
