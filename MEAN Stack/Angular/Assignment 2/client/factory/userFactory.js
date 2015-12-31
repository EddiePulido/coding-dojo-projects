app.factory('userFactory', function(){

  var users = [];
  var factory = {};

  factory.getUser = function(callback){
    callback(users);
  }

  factory.addUser = function(user){
    users.push(user);
  }

  factory.removeUser = function(user){
    users.splice(users.indexOf(user), 1);
  }

  return factory;

});
