var friendController = require('../controller/peopleController');

module.exports.route = function(app){

  app.all('/', function(req,res){
    res.sendFile('index.html');
  });

  app.get('/people', function(req,res){
    friendController.getPeople(req,res);
  });

  app.get('/people/:id', function(req,res){
    friendController.findOnePerson(req,res);
  });

  app.get('/people/new/:person',function(req,res){
    friendController.addPeople(req,res);
  });

  app.get('/people/remove/:id',function(req,res){
    friendController.removePeople(req,res);
  });

}
