var express = require('express');
var bodyParser = require('body-parser');
var app = express();

app.set('views', __dirname + '/static/view');
app.set('view engine', 'ejs');
app.use(express.static(__dirname + '/static'));
app.use(bodyParser.urlencoded({ extended: true }));

app.get('/', function(req,res){
  res.render('index');
});

app.post('/result', function(req,res){
  res.render('results', {data : req.body});
});

app.listen(3000, function(){
    console.log("Listening on port 3000.");
});
