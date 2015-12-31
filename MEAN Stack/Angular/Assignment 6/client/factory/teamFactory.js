app.factory('teamFactory', function(){

  var teams = [];
  var associations = [];
  var factory = {};

  factory.getTeams = function(callback){
    callback(teams);
  }

  factory.addTeam = function(team){
    teams.push(team);
  }

  factory.removeTeam = function(team){
    teams.splice(teams.indexOf(team), 1);
  }

  factory.getAssociations = function(callback){
    callback(associations);
  }

  factory.addAssociation = function(association){
    associations.push(association);
  }

  factory.removeAssociation = function(association){
    associations.splice(associations.indexOf(association), 1);
  }

  return factory;

});
