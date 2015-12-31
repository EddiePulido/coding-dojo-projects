var friendController = require('../controller/friendController');

module.exports.route = function(app){

  app.all('/', function(req,res){
    res.sendFile('index.html');
  });

  app.get('/friend', function(req,res){
    friendController.getFriend(req,res);
  });

  app.get('/friend/:friend',function(req,res){
    friendController.addFriend(req,res);
  });

  app.get('/friend/remove/:id',function(req,res){
    friendController.removeFriend(req,res);
  });

}
