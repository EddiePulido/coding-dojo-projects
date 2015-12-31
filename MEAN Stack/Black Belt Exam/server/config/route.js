var bidController = require('../controller/bidController');

module.exports.route = function(app){

  app.all('/', function(req,res){
    res.sendFile('index.html');
  });

  app.post('/api/bid/p1', function(req,res){
    bidController.createP1Bid(req,res);
  });

  app.post('/api/bid/p2', function(req,res){
    bidController.createP2Bid(req,res);
  });

  app.post('/api/bid/p3', function(req,res){
    bidController.createP3Bid(req,res);
  });

  app.get('/api/bid/p1', function(req,res){
    bidController.readP1Bid(req,res);
  });

  app.get('/api/bid/p2', function(req,res){
    bidController.readP2Bid(req,res);
  });

  app.get('/api/bid/p3', function(req,res){
    bidController.readP3Bid(req,res);
  });

  app.delete('/api/bid', function(req,res){
    bidController.clear(req,res);
  });

}
