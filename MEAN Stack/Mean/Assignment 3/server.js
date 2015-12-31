var express = require('express');
var mongoose = require('mongoose');
var bodyParser = require('body-parser');

var dbConfig = require('./server/config/db');
var routeConfig = require('./server/config/route');

var port = process.env.PORT || 3000;

var app = express();

mongoose.connect(dbConfig.url);

app.set('views', __dirname + '/client/views');

app.use(express.static(__dirname + '/client/static'));
app.use(express.static(__dirname + '/client'));
app.use(bodyParser.urlencoded({ extended: true }));

routeConfig.route(app);

app.listen(port, function(){
  console.log("Listening on port: " + port);
});
