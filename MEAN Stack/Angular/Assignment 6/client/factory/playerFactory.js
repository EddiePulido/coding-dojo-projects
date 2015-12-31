app.factory('playerFactory', function(){

  var players = [];
  var factory = {};

  factory.getPlayers = function(callback){
    callback(players);
  }

  factory.addPlayer = function(player){
    players.push(player);
  }

  factory.removePlayer = function(player){
    players.splice(players.indexOf(player), 1);
  }

  return factory;

});
