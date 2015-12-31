var commentModel = require('../model/commentModel');

var operation = {};

operation.createComment = function(req,res){

  var comment = new commentModel({postId : req.body.postId, username : req.body.username, description : req.body.description});
  comment.save(function(error){
    if (error) {
      console.log("There was an error adding the comment.");
    }else{
      console.log("You have successfully added the comment.");
      res.json({});
    }
  });

}

operation.readComment = function(req,res){

  commentModel.find({postId : req.params.id}, function(error, data){
    if (error) {
      console.log("There was an error retrieving all the comment.");
    }else {
      console.log("You have successfully retrieved all the comment.");
      res.json(data);
    }
  });

}

module.exports = operation;
