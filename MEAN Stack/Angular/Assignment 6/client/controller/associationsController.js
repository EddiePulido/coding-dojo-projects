app.controller('associationsController', function($scope, playerFactory, teamFactory){

  $scope.players = [];
  $scope.teams = [];
  $scope.associations = [];

  playerFactory.getPlayers(function(player){
    $scope.players = player;
  });

  teamFactory.getTeams(function(team){
    $scope.teams = team;
  });

  teamFactory.getAssociations(function(association){
    $scope.associations = association;
  });

  $scope.addAssociation = function(){
    teamFactory.addAssociation($scope.association);
    $scope.association = {};
  }

  $scope.removeAssociation = function(association){
    teamFactory.removeAssociation(association);
  }

});
