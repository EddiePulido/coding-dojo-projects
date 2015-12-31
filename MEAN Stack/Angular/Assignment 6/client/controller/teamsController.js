app.controller('teamsController', function($scope, teamFactory){

  $scope.teams = [];

  teamFactory.getTeams(function(team){
    $scope.teams = team;
  });

  $scope.addTeam = function(){
    teamFactory.addTeam($scope.team);
    $scope.team = {};
  }

  $scope.removeTeam = function(team){
    teamFactory.removeTeam(team);
  }

});
