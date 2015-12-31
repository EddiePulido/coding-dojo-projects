// Load all the core node modules
var bodyParser = require('body-parser');
var express = require('express');
var mongoose = require('mongoose');

// Load all of our own node modules
var mongooseConfig = require('./server/config/mongoose');
var routeConfig = require('./server/config/route');

// Save our port
var port = process.env.PORT || 3000;

// Load the express application
var app = express();

// Load the mongoose connection
mongoose.connect(mongooseConfig.url);

// Set up our views folder
app.set('views', __dirname + '/client/views');

// Load all of our middleware
app.use(express.static(__dirname + '/client/static'));
app.use(express.static(__dirname + '/client'));
app.use(bodyParser.urlencoded({ extended: true }));

// Configure all of our routes
routeConfig.route(app);

// Listen our applicationon the specified port
app.listen(port, function(){
  console.log('Listening on port: ' + port);
});
