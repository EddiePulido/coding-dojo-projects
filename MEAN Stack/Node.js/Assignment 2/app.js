var http = require('http');
var fs = require('fs');

var server = http.createServer(function(req,res){

  if (req.url === '/') {
    fs.readFile('index.html', 'utf8', function(err,data){
      res.writeHead(200, {'Content-Type':'text/html'});
      res.write(data);
      res.end();
    });
  }else if(req.url === '/dojos/new'){
    fs.readFile('dojos.html', 'utf8', function(err,data){
      res.writeHead(200, {'Content-Type':'text/html'});
      res.write(data);
      res.end();
    });
  }else if(req.url === '/ninjas'){
    fs.readFile('ninjas.html', 'utf8', function(err,data){
      res.writeHead(200, {'Content-Type':'text/html'});
      res.write(data);
      res.end();
    });
  }else{
    res.writeHead(404);
    res.end();
  }

});

server.listen(3000);
console.log("Listening on port: 3000.");
