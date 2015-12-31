topicController = require('../controller/topicController');
postController = require('../controller/postController');
commentController = require('../controller/commentController');

module.exports.route = function(app){

  app.all('/', function(req,res){
    res.sendFile('index.html');
  });

  app.post('/api/topic', function(req,res){
    topicController.createTopic(req,res);
  });

  app.get('/api/topic', function(req,res){
    topicController.readTopic(req,res);
  });

  app.get('/api/topic/:id', function(req,res){
    topicController.readOneTopic(req,res);
  });

  app.post('/api/post', function(req,res){
    postController.createPost(req,res);
  });

  app.get('/api/post/:id', function(req,res){
    postController.readPost(req,res);
  });

  app.post('/api/comment', function(req,res){
    commentController.createComment(req,res);
  });

  app.get('/api/comment/:id', function(req,res){
    commentController.readComment(req,res);
  });

  app.put('/api/post/upvote', function(req,res){
    postController.updateUpVotePost(req,res);
  });

  app.put('/api/post/downvote', function(req,res){
    postController.updateDownVotePost(req,res);
  });

}
