app.controller('bidController', ['$scope', '$location', 'userFactory', 'bidFactory', function($scope, $location, userFactory, bidFactory){

  $scope.username = '';
  $scope.error = "";

  $scope.p1Bids = [];
  $scope.p2Bids = [];
  $scope.p3Bids = [];

  // get the user logged in
  userFactory.readUser(function(user){
    $scope.username = user;
  });

  // check if the user is empty redirect if it is empty
  if ($scope.username === '') {
    $location.path('/login');
  }else {

    // calls factory to get all the bids for all the product

    bidFactory.readP1Bid(function(bids){
      $scope.p1Bids = bids;
    });

    bidFactory.readP2Bid(function(bids){
      $scope.p2Bids = bids;
    });

    bidFactory.readP3Bid(function(bids){
      $scope.p3Bids = bids;
    });

  }

  // clear the factory and log you out
  $scope.logout = function(){
    userFactory.logout();
    $location.path('/login');
  }

  $scope.endBid = function(){
    var noBid = 0;
    // check to see if any of the product have any bids
    // if no then increase noBid
    if ($scope.p1Bids.length === 0) {
      noBid++;
    }
    if ($scope.p2Bids.length === 0) {
      noBid++;
    }
    if ($scope.p3Bids.length === 0) {
      noBid++;
    }
    // redirect to results or give an error to the users
    if (noBid === 0) {
      // store the highest bid in the factory
      bidFactory.createp1HighestBid($scope.p1Bids[$scope.p1Bids.length-1]);
      bidFactory.createp2HighestBid($scope.p2Bids[$scope.p2Bids.length-1]);
      bidFactory.createp3HighestBid($scope.p3Bids[$scope.p3Bids.length-1]);
      $location.path('/result');
    }else{
      alert("Cannot end the bid. " + noBid + " product does not have any bid yet.");
    }
  }

  $scope.createP1Bid = function(){
    // check to see if bid is empty
    if ($scope.bid !== undefined) {
      // check to see if bid is equal to 0
      if ($scope.bid.p1 !== 0) {
        // check if there is any bid placed or else keep track of the last bid
        if ($scope.p1Bids.length === 0) {
          $scope.error = "";
          bidFactory.createP1Bid($scope.bid, $scope.username);
          $scope.bid = {};

          bidFactory.readP1Bid(function(bids){
            $scope.p1Bids = bids;
          });
        }else{
          // check to see if the bid is greater than the last bid
          if ($scope.bid.p1 > $scope.p1Bids[$scope.p1Bids.length-1].bid) {
            $scope.error = "";
            bidFactory.createP1Bid($scope.bid, $scope.username);
            $scope.bid = {};

            bidFactory.readP1Bid(function(bids){
              $scope.p1Bids = bids;
            });
          }else {
            $scope.error = "The bid for Product 1 has to be higher than the previous bid.";
            $scope.bid = {};
          }
        }
      }else {
        $scope.error = "The bid for Product 1 cannot be $0.";
        $scope.bid = {};
      }
    }else{
      $scope.error = "The bid for Product 1 cannot be empty.";
    }
  }

  $scope.createP2Bid = function(){
    if ($scope.bid !== undefined) {
      if ($scope.bid.p2 !== 0) {
        if ($scope.p2Bids.length === 0) {
          $scope.error = "";
          bidFactory.createP2Bid($scope.bid, $scope.username);
          $scope.bid = {};

          bidFactory.readP2Bid(function(bids){
            $scope.p2Bids = bids;
          });
        }else {
          if ($scope.bid.p2 > $scope.p2Bids[$scope.p2Bids.length-1].bid) {
            $scope.error = "";
            bidFactory.createP2Bid($scope.bid, $scope.username);
            $scope.bid = {};

            bidFactory.readP2Bid(function(bids){
              $scope.p2Bids = bids;
            });
          }else {
            $scope.error = "The bid for Product 2 has to be higher than the previous bid.";
            $scope.bid = {};
          }
        }
      }else {
        $scope.error = "The bid for Product 2 cannot be $0.";
        $scope.bid = {};
      }
    }else{
      $scope.error = "The bid for Product 2 cannot be empty.";
    }
  }

  $scope.createP3Bid = function(){
    if ($scope.bid !== undefined) {
      if ($scope.bid.p3 !== 0) {
        if ($scope.p3Bids.length === 0) {
          $scope.error = "";
          bidFactory.createP3Bid($scope.bid, $scope.username);
          $scope.bid = {};

          bidFactory.readP3Bid(function(bids){
            $scope.p3Bids = bids;
          });
        }else {
          if ($scope.bid.p3 > $scope.p3Bids[$scope.p3Bids.length-1].bid) {
            $scope.error = "";
            bidFactory.createP3Bid($scope.bid, $scope.username);
            $scope.bid = {};

            bidFactory.readP3Bid(function(bids){
              $scope.p3Bids = bids;
            });
          }else {
            $scope.error = "The bid for Product 3 has to be higher than the previous bid.";
            $scope.bid = {};
          }
        }
      }else {
        $scope.error = "The bid for Product 3 cannot be $0.";
        $scope.bid = {};
      }
    }else{
      $scope.error = "The bid for Product 3 cannot be empty.";
    }
  }

}]);
