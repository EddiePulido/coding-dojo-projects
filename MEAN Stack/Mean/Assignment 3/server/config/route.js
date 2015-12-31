var customerController = require('../controller/customerController');
var orderController = require('../controller/orderController');

module.exports.route = function(app){

  app.all('/', function(req,res){
    res.sendFile('index.html');
  });

  app.post('/api/customer/:name', function(req,res){
    customerController.createCustomer(req,res);
  });

  app.get('/api/customer', function(req,res){
    customerController.readCustomer(req,res);
  });

  app.delete('/api/customer/:id', function(req,res){
    customerController.deleteCustomer(req,res);
  });

  app.post('/api/order/:customer/:quantity/:product', function(req,res){
    orderController.createOrder(req,res);
  });

  app.get('/api/order', function(req,res){
    orderController.readOrder(req,res);
  });

}
