var mongoose = require('mongoose');
var Schema = mongoose.Schema;

var peopleSchema = new Schema({
  name : String
});

module.exports = mongoose.model('People', peopleSchema);
