var mongoose = require('mongoose');
var Schema = mongoose.Schema;

var customerSchema = new Schema({
  name : String,
  createAt : String
});

module.exports = mongoose.model('Customer', customerSchema);
