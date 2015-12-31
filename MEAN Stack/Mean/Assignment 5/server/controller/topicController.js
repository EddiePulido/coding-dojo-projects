var topicModel = require('../model/topicModel');

var operation = {};

operation.createTopic = function(req,res){

  var topic = new topicModel({topic : req.body.name, description : req.body.description, category : req.body.category, username : req.body.username});

  topic.save(function(error){
    if (error) {
      console.log("There was an error adding the topic.");
    }else {
      console.log("You have successfully added the topic.");
      res.json({});
    }
  });

}

operation.readTopic = function(req,res){
  topicModel.find({}, function(error,data){
    if (error) {
      console.log("There was an error retrieving all the topic.");
    }else {
      console.log("You have successfully retrieved all the topic.");
      res.json(data);
    }
  });
}

operation.readOneTopic = function(req,res){
  topicModel.find({_id : req.params.id}, function(error,data){
    if (error) {
      console.log("There was an error retrieving the topic.");
    }else {
      console.log("You have successfully retrieved the topic.");
      res.json(data);
    }
  });
}

module.exports = operation;
