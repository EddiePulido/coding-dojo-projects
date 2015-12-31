var friendModel = require('../model/friendModel');
var operation = {};

operation.getFriend = function(req,res){

  friendModel.find({}, function(error,data){
    if (error) {
      console.log("The friends cannot be retrieved.");
    }else{
      console.log("The friends was retrieved.");
      res.json(data);
    }
  });

}

operation.addFriend = function(req,res){

  var friend = new friendModel({name : req.params.friend});

  friend.save(function(error, data){
    if (error) {
      console.log("The friend was not saved.");
    }else{
      console.log("The friend was saved.");
      res.json(data);
    }
  });

}

operation.removeFriend = function(req,res){

  friendModel.remove({_id : req.params.id}, function(error){
    if (error) {
      console.log("Error removing friend.");
    }else{
      console.log("Successfully removed friend.");
      res.json({});
    }
  });

}

module.exports = operation;
