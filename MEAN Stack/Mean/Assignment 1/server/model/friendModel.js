var mongoose = require('mongoose');
var Schema = mongoose.Schema;

var friendSchema = new Schema({
  name : String
});

module.exports = mongoose.model('Friend', friendSchema);
