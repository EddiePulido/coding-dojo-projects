var express = require('express');
var mongoose = require('mongoose');
var bodyParser = require('body-parser');

var dbConfig = require('./server/config/db');
var routeConfig = require('./server/config/route');

var app = express();

mongoose.connect(dbConfig.url);

app.set('port', process.env.PORT || 3000);
app.set('views', __dirname + '/client/partial');

app.use(express.static(__dirname + '/client/static'));
app.use(express.static(__dirname + '/client'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

routeConfig.route(app);

app.listen(app.get('port'), function(){
  console.log("Listening on port: " + app.get('port'));
});
