var express = require('express');

var port = process.env.PORT || 3000;

var app = express();

app.use(express.static(__dirname + '/client/static'));
app.use(express.static(__dirname + '/client'));

app.get('/', function(req,res){
  res.sendFile(__dirname + '/client/index.html');
});

app.listen(port, function(){
    console.log("Listening on port: " + port);
});
