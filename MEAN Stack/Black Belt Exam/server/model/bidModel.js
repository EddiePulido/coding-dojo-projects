var mongoose = require('mongoose');
var Schema = mongoose.Schema;

var bidSchema = new Schema({
  product : String,
  username : String,
  bid : Number
});

module.exports = mongoose.model('Bid', bidSchema);
