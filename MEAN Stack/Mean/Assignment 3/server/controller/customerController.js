var customerModel = require('../model/customerModel');

var operation = {};

operation.createCustomer = function(req,res){

  var now = new Date();
  var month = now.getMonth() + 1;
  var day = now.getDate();
  var year = now.getFullYear();
  var time = month + '/' + day + '/' + year;

  var customer = new customerModel({name : req.params.name, createAt : time});

  customer.save(function(error){
    if (error) {
      console.log("There was an error adding the customer name.");
    }else {
      console.log("Successfully added customer name.");
      res.json({});
    }
  });

}

operation.readCustomer = function(req,res){

  customerModel.find({}, function(error, data){
    if (error) {
      console.log("There was an error retrieving all the customer name.");
    }else {
      console.log("Successfully retrieved all the customer name.");
      res.json(data);
    }
  });

}

operation.deleteCustomer = function(req,res){

  customerModel.remove({_id : req.params.id}, function(error){
    if (error) {
      console.log("There was an error deleting the customer name.");
    }else {
      console.log("Successfully deleted the customer name.");
      res.json({});
    }
  });

}

module.exports = operation;
