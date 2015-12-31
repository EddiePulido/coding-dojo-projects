var animalController = require('../controller/animal-controller');

module.exports.route = function(app){

  app.get('/', function(req,res){
    animalController.readAnimal(req,res);
  });

  app.get('/animal/:id', function(req,res){
    animalController.readOneAnimal(req,res);
  });

  app.get('/new', function(req,res){
    res.render('add-animal');
  });

  app.post('/animal', function(req,res){
    animalController.createAnimal(req,res);
  });

  app.get('/animal/edit/:id', function(req,res){
    animalController.showUpdateAnimal(req,res);
  });

  app.post('/animal/:id', function(req,res){
    animalController.updateAnimal(req,res);
  });

  app.get('/animal/destroy/:id', function(req,res){
    animalController.deleteAnimal(req,res);
  });

}
