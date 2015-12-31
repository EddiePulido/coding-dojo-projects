app.factory('productFactory', function(){

  var products = [];
  var factory = {};

  factory.getProduct = function(callback){
    callback(products);
  }

  factory.addProduct = function(product){
    products.push(product);
  }

  factory.removeProduct = function(product){
    products.splice(products.indexOf(product), 1);
  }

  factory.buyProduct = function(product){
    products[products.indexOf(product)].qty -= 1;
  }

  return factory;

});
