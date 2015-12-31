var birthController = require('../controller/birthController');

module.exports.route = function(app){

  app.get('/', function(req,res){
    birthController.readPeople(req,res);
  });

  app.get('/new/:name', function(req,res){
    birthController.createPeople(req,res);
  });

  app.get('/remove/:name', function(req,res){
    birthController.deletePeople(req,res);
  });

  app.get('/:name', function(req,res){
    birthController.readOnePerson(req,res);
  });

}
