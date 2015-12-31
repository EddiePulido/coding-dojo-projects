app.controller('friendController', ['$scope', 'friendFactory', function($scope, friendFactory){

  $scope.friends = [];

  friendFactory.getFriend(function(data){
      $scope.friends = data;
  });

  $scope.addFriend = function(){
    friendFactory.addFriend($scope.friend);
    $scope.friend = '';
  }

  $scope.removeFriend = function(id){
    friendFactory.removeFriend(id);
  }

}]);
