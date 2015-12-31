var postModel = require('../model/postModel');

var operation = {};

operation.createPost = function(req,res){
  var post = new postModel({topicId : req.body.id, username : req.body.username, description : req.body.description, downVote : req.body.downVote, upVote : req.body.upVote});
  post.save(function(error){
    if (error) {
      console.log("There was an error adding the post.");
    }else{
      console.log("You have successfully added the post.");
      res.json({});
    }
  });
}

operation.readPost = function(req,res){
  postModel.find({topicId : req.params.id}, function(error, data){
    if (error) {
      console.log("There was an error retrieving all the post.");
    }else{
      console.log("You have successfully retrieved all the post.");
      res.json(data);
    }
  });
}

operation.updateUpVotePost = function(req,res){
  postModel.update({_id : req.body._id}, {$inc : {upVote : 1}}, function(error,data){
    if (error) {
      console.log("There was an error updating the vote.");
    }else {
      console.log("You have successfully updated the vote.");
      res.json(data);
    }
  });
}

operation.updateDownVotePost = function(req,res){
  postModel.update({_id : req.body._id}, {$inc : {downVote : 1}}, function(error,data){
    if (error) {
      console.log("There was an error updating the vote.");
    }else {
      console.log("You have successfully updated the vote.");
      res.json(data);
    }
  });
}

module.exports = operation;
