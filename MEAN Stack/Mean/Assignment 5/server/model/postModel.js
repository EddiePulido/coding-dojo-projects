var mongoose = require('mongoose');
var Schema = mongoose.Schema;

var postSchema = new Schema({
  topicId : String,
  username : String,
  description : String,
  downVote : Number,
  upVote : Number
});

module.exports = mongoose.model('Post', postSchema);
