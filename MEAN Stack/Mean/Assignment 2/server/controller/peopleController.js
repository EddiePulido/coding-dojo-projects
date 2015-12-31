var peopleModel = require('../model/peopleModel');
var operation = {};

operation.getPeople = function(req,res){

  peopleModel.find({}, function(error,data){
    if (error) {
      console.log("The people cannot be retrieved.");
    }else{
      console.log("The people was retrieved.");
      res.json(data);
    }
  });

}

operation.findOnePerson = function(req,res){

  peopleModel.find({_id : req.params.id}, function(error,data){
    if (error) {
      console.log("The person cannot be retrieved.");
    }else{
      console.log("The person was retrieved.");
      res.json(data);
    }
  });

}

operation.addPeople = function(req,res){

  var people = new peopleModel({name : req.params.person});

  people.save(function(error, data){
    if (error) {
      console.log("The person was not saved.");
    }else{
      console.log("The person was saved.");
      res.json(data);
    }
  });

}

operation.removePeople = function(req,res){

  peopleModel.remove({_id : req.params.id}, function(error){
    if (error) {
      console.log("Error removing person.");
    }else{
      console.log("Successfully removed person.");
      res.json({});
    }
  });

}

module.exports = operation;
