app.controller('resultController', ['$scope', '$location', 'userFactory', 'bidFactory', function($scope, $location, userFactory, bidFactory){

    $scope.username = '';
    $scope.p1Bids = [];
    $scope.p2Bids = [];
    $scope.p3Bids = [];

    $scope.p1HighestBid = [];
    $scope.p2HighestBid = [];
    $scope.p3HighestBid = [];

    // get the user logged in
    userFactory.readUser(function(user){
      $scope.username = user;
    });

    // check if the user is empty redirect if it is empty
    if ($scope.username === '') {
      $location.path('/login');
    }else {

      bidFactory.readp1HighestBid(function(bid){
        $scope.p1HighestBid = bid;
      });

      bidFactory.readp2HighestBid(function(bid){
        $scope.p2HighestBid = bid;
      });

      bidFactory.readp3HighestBid(function(bid){
        $scope.p3HighestBid = bid;
      });

    }

    // clear the factory and log you out
    $scope.logout = function(){
      userFactory.logout();
      $location.path('/login');
    }

    $scope.clear = function(){
      bidFactory.clear();
      $location.path('/bids');
    }

}]);
