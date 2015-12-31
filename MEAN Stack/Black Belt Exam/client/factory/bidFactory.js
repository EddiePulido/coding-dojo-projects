app.factory('bidFactory',['$http', function($http){

  var p1HighestBid = [];
  var p2HighestBid = [];
  var p3HighestBid = [];

  var factory = {};

  factory.createP1Bid = function(bid, username){
    bid.username = username;
    $http.post('/api/bid/p1', bid).then(function(response){
      console.log("Success : [" + response.status + "] You have successfully created a bid for Product 1.");
    }, function(response){
      console.log("Success : [" + response.status + "] There was an error creating a bid for Product 1.");
    });
  }

  factory.createP2Bid = function(bid, username){
    bid.username = username;
    $http.post('/api/bid/p2', bid).then(function(response){
      console.log("Success : [" + response.status + "] You have successfully created a bid for Product 2.");
    }, function(response){
      console.log("Success : [" + response.status + "] There was an error creating a bid for Product 2.");
    });
  }

  factory.createP3Bid = function(bid, username){
    bid.username = username;
    $http.post('/api/bid/p3', bid).then(function(response){
      console.log("Success : [" + response.status + "] You have successfully created a bid for Product 3.");
    }, function(response){
      console.log("Success : [" + response.status + "] There was an error creating a bid for Product 3.");
    });
  }

  factory.readP1Bid = function(callback){
    $http.get('/api/bid/p1').then(function(response){
      console.log("Success : [" + response.status + "] You have successfully retrieved all the bid for Product 1.");
      callback(response.data);
    }, function(response){
      console.log("Success : [" + response.status + "] There was an error retrieving all the bid for Product 1.");
    });
  }

  factory.readP2Bid = function(callback){
    $http.get('/api/bid/p2').then(function(response){
      console.log("Success : [" + response.status + "] You have successfully retrieved all the bid for Product 2.");
      callback(response.data);
    }, function(response){
      console.log("Success : [" + response.status + "] There was an error retrieving all the bid for Product 2.");
    });
  }

  factory.readP3Bid = function(callback){
    $http.get('/api/bid/p3').then(function(response){
      console.log("Success : [" + response.status + "] You have successfully retrieved all the bid for Product 3.");
      callback(response.data);
    }, function(response){
      console.log("Success : [" + response.status + "] There was an error retrieving all the bid for Product 3.");
    });
  }

  factory.createp1HighestBid = function(highestBid){
    p1HighestBid = highestBid;
  }

  factory.createp2HighestBid = function(highestBid){
    p2HighestBid = highestBid;
  }

  factory.createp3HighestBid = function(highestBid){
    p3HighestBid = highestBid;
  }

  factory.readp1HighestBid = function(callback){
    callback(p1HighestBid);
  }

  factory.readp2HighestBid = function(callback){
    callback(p2HighestBid);
  }

  factory.readp3HighestBid = function(callback){
    callback(p3HighestBid);
  }

  factory.clear = function(){
    $http.delete('/api/bid').then(function(response){
      console.log("Success : [" + response.status + "] You have successfully removed all the bids.");
    }, function(response){
      console.log("Success : [" + response.status + "] There was an error removing all the bids.");
    });
  }

  return factory;

}]);
