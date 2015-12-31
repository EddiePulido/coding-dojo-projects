var Birth = require('../model/birthModel');
var operation = {};

operation['readPeople'] = function(req,res){
  Birth.find({}, function(error, people){
    if (error) {
      console.log("There was an error finding all the people.");
    }else {
      console.log("Successfully found all the people.");
      res.json(people);
    }
  });
}

operation['createPeople'] = function(req,res){
  var birth = new Birth({name : req.params.name});
  birth.save(function(error){
    if (error) {
      console.log("There was an error creating a person.");
      res.redirect('/');
    }else{
      console.log("Successfully created a person.");
      res.redirect('/');
    }
  });
}

operation['deletePeople'] = function(req,res){
  Birth.remove({name : req.params.name}, function(error){
    if (error) {
      console.log("There was an error removing the person.");
      res.redirect('/');
    }else{
      console.log("Successfully removed the person.");
      res.redirect('/');
    }
  });
}

operation['readOnePerson'] = function(req,res){
  Birth.find({name : req.params.name}, function(error, people){
    if (error) {
      console.log("There was an error finding the person.");
    }else {
      console.log("Successfully found the person.");
      res.json(people);
    }
  });
}

module.exports = operation;
