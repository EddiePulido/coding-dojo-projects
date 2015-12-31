app.controller('playersController', function($scope, playerFactory){

  $scope.players = [];

  playerFactory.getPlayers(function(player){
    $scope.players = player;
  });

  $scope.addPlayer = function(){
    playerFactory.addPlayer($scope.player);
    $scope.player = {};
  }

  $scope.removePlayer = function(player){
    playerFactory.removePlayer(player);
  }

});
