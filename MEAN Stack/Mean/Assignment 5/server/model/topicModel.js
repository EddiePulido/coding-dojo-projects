var mongoose = require('mongoose');
var Schema = mongoose.Schema;

var topicSchema = new Schema({
  topic : String,
  description : String,
  category : String,
  username : String
});

module.exports = mongoose.model('Topic', topicSchema);
