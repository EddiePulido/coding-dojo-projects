var mongoose = require('mongoose');
var Schema = mongoose.Schema;

var orderSchema = new Schema({
  name : String,
  quantity : String,
  product : String,
  createAt : String
});

module.exports = mongoose.model('Order', orderSchema);
