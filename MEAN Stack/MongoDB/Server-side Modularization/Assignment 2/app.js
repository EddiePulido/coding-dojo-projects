var express = require('express');
var bodyParser = require('body-parser');
var mongoose = require('mongoose');

var mongooseConfig = require('./server/config/mongoose');
var routeConfig = require('./server/config/route');

var port = process.env.PORT || 3000;
var app = express();

mongoose.connect(mongooseConfig.url);
routeConfig.route(app);

app.listen(port, function(){
  console.log("Listening on port: " + port);
});
