app.factory('userFactory', function(){

  var username = '';
  var userNameInfo = '';
  var factory = {};

  factory.createLogin = function(name){
    username = name['username'];
  }

  factory.readLogin = function(callback){
    callback(username);
  }

  factory.createUserInfo = function(user){
    userNameInfo = user;
  }

  factory.readUserInfo = function(callback){
    callback(userNameInfo);
  }

  return factory;

});
