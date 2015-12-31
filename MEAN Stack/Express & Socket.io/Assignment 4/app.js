var express = require('express');
var app = express();
var server = require('http').Server(app);
var io = require('socket.io')(server);
var querystring = require('querystring');
var user = [];
var comment = [];

app.set('views', __dirname + '/static/view');
app.set('view engine', 'ejs');
app.use(express.static(__dirname + '/static'));

app.get('/', function(req,res){
  res.render('index');
});

app.get('/board', function(req,res){
  res.render('board');
});

io.on('connection', function(socket){

  socket.on('new-member', function(data){
    var nameObject = querystring.parse(data);
    var userObject = {id : user.length + 1, name : nameObject.name};
    socket['user'] = userObject;
    user.push(userObject);
    console.log(socket['user']);
  });

  socket.on('disconnect', function(){
    socket.broadcast.emit('user-left', socket['user']);
  });

});

server.listen(3000, function(){
  console.log("listen on port 3000.");
});
