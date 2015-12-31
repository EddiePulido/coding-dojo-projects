var bidModel = require('../model/bidModel');

var operation = {};

operation.createP1Bid = function(req,res){
  var p1 = new bidModel({product : 'p1', username : req.body.username, bid : req.body.p1});
  p1.save(function(error){
    if (error) {
      console.log("There was an error creating a bid for Product 1.");
    }else{
      console.log("You have successfully created a bid for Product 1.");
      res.json({});
    }
  });
}

operation.createP2Bid = function(req,res){
  console.log(req.body);
  var p2 = new bidModel({product : 'p2', username : req.body.username, bid : req.body.p2});
  p2.save(function(error){
    if (error) {
      console.log("There was an error creating a bid for Product 2.");
    }else{
      console.log("You have successfully created a bid for Product 2.");
      res.json({});
    }
  });
}

operation.createP3Bid = function(req,res){
  var p3 = new bidModel({product : 'p3', username : req.body.username, bid : req.body.p3});
  p3.save(function(error){
    if (error) {
      console.log("There was an error creating a bid for Product 3.");
    }else{
      console.log("You have successfully created a bid for Product 3.");
      res.json({});
    }
  });
}

operation.readP1Bid = function(req,res){
  bidModel.find({product : 'p1'}, function(error, bid){
    if (error) {
      console.log("There was an error retrieving all the bid for Product 1.");
    }else {
      console.log("You have successfully retrieved all the bid for Product 1.");
      res.json(bid);
    }
  });
}

operation.readP2Bid = function(req,res){
  bidModel.find({product : 'p2'}, function(error, bid){
    if (error) {
      console.log("There was an error retrieving all the bid for Product 2.");
    }else {
      console.log("You have successfully retrieved all the bid for Product 2.");
      res.json(bid);
    }
  });
}

operation.readP3Bid = function(req,res){
  bidModel.find({product : 'p3'}, function(error, bid){
    if (error) {
      console.log("There was an error retrieving all the bid for Product 3.");
    }else {
      console.log("You have successfully retrieved all the bid for Product 3.");
      res.json(bid);
    }
  });
}

operation.clear = function(req,res){
  console.log("deleted");
  bidModel.remove({}, function(error){
    if (error) {
      console.log("There was an error removing all the bids.");
    }else {
      console.log("You have successfully removed all the bids.");
      res.json({});
    }
  });
}

module.exports = operation;
