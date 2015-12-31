var mongoose = require('mongoose');

var birthSchema = new mongoose.Schema({
  name : String
});

module.exports = mongoose.model('Birth', birthSchema);
