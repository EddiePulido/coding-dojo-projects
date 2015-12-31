var mongoose = require('mongoose');
var Schema = mongoose.Schema;

var commentSchema = new Schema({
  postId : String,
  username : String,
  description : String
});

module.exports = mongoose.model('Comment', commentSchema);
