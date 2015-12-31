var http = require('http');
var fs = require('fs');

var server = http.createServer(function(req,res){

  function fileRead(file, encoding, contentType){
    fs.readFile(file,encoding, function(error, data){
      res.writeHead(200, {'Content-Type':contentType});
      res.write(data);
      res.end();
    });
  }

  var url = req.url;

  switch (url) {
    case '/cars':
      fileRead('views/cars.html', 'utf8', 'text/html');
      break;
    case '/cats':
      fileRead('views/cats.html', 'utf8', 'text/html');
      break;
      case '/cars/new':
        fileRead('views/add_cars.html', 'utf8', 'text/html');
        break;
    case '/stylesheets/styles.css':
      fileRead('stylesheets/styles.css', 'utf8', 'text/css');
      break;
    case '/images/cars/cars1.jpg':
      fileRead('images/cars/cars1.jpg', null, 'image/jpg');
      break;
    case '/images/cars/cars2.jpg':
      fileRead('images/cars/cars2.jpg', null, 'image/jpg');
      break;
    case '/images/cars/cars3.jpg':
      fileRead('images/cars/cars3.jpg', null, 'image/jpg');
      break;
    case '/images/cats/cats1.jpg':
      fileRead('images/cats/cats1.jpg', null, 'image/jpg');
      break;
    case '/images/cats/cats2.jpg':
      fileRead('images/cats/cats2.jpg', null, 'image/jpg');
      break;
    case '/images/cats/cats3.jpg':
      fileRead('images/cats/cats3.jpg', null, 'image/jpg');
      break;
  }

});

server.listen(3000);
console.log("The server is connected on port: 3000.");
