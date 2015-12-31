var express = require('express');
var app = express();
var server = require('http').Server(app);
var io = require('socket.io')(server);
var count = 0;

app.set('views', __dirname + '/static/view');
app.set('view engine', 'ejs');
app.use(express.static(__dirname + '/static'));

app.get('/', function(req,res){
  res.render('index');
});

io.on('connection', function(socket){

  io.sockets.emit('count', count);

  socket.on('epic-button-clicked', function(){
    count++;
    io.sockets.emit('count', count);
  });

  socket.on('reset-button-clicked', function(){
    count = 0;
    io.sockets.emit('count', count);
  });

});

server.listen(3000, function(){
  console.log("Listening on port 3000.");
});
