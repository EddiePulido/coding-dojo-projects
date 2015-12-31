var orderModel = require('../model/orderModel');

var operation = {};

operation.createOrder = function(req,res){

  var now = new Date();
  var month = now.getMonth() + 1;
  var day = now.getDate();
  var year = now.getFullYear();
  var time = month + '/' + day + '/' + year;

  var order = new orderModel({name : req.params.customer, quantity : req.params.quantity, product : req.params.product, createAt : time});

  order.save(function(error){
    if (error) {
      console.log("There was an error adding the order.");
    }else {
      console.log("Successfully added order.");
      res.json({});
    }
  });

}

operation.readOrder = function(req,res){

  orderModel.find({}, function(error, data){
    if (error) {
      console.log("There was an error retrieving all the order.");
    }else {
      console.log("Successfully retrieved all the order.");
      res.json(data);
    }
  });

}

module.exports = operation;
