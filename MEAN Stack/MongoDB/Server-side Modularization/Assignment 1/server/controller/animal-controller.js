var animalModel = require('../model/animal-model');
var operations = {};

operations['readAnimal'] = function(req,res){
  animalModel.find({}, function(error, animals){
    if (error) {
      console.log("Couldn't find animals.");
    }else{
      var data = {};
      data['animals'] = animals;
      res.render('index', data);
    }
  });
}

operations['readOneAnimal'] = function(req,res){
  animalModel.find({ _id : req.params.id }, function(error, animal){
    if (error) {
      console.log("Couldn't find the animal");
    }else{
      var data = {};
      data['animal'] = animal;
      res.render('show-one-animal', data);
    }
  });
}

operations['createAnimal'] = function(req,res){
  var animal = new animalModel({name: req.body.name, info : req.body.info});

  animal.save(function(error){
    if (error) {
      console.log("There was a error saving the animal.");
      res.redirect('/');
    }else{
      console.log("Success the animal was saved.");
      res.redirect('/');
    }
  });
}

operations['showUpdateAnimal'] = function(req,res){
  animalModel.find({ _id : req.params.id }, function(error, animal){
    if (error) {
      console.log("Couldn't find the animal");
    }else{
      var data = {};
      data['animal'] = animal;
      res.render('edit-animal', data);
    }
  });
}

operations['updateAnimal'] = function(req,res){
  animalModel.update({ _id : req.params.id} , {name : req.body.name , info : req.body.info}, function(error){
    if (error) {
      console.log("There was an error updating the animal.");
    }else{
      res.redirect('/');
    }
  });
}

operations['deleteAnimal'] = function(req,res){
  animalModel.remove({ _id : req.params.id }, function(error){
    if (error) {
      console.log("There was an error remove the animal.");
      res.redirect('/');
    }else{
      res.redirect('/');
    }
  });
}

module.exports = operations;
