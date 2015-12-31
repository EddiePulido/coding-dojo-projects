app.factory('postFactory', ['$http', function($http){

  var factory = {};

  factory.createPost = function(username, id, topic){
    topic.username = username;
    topic.id = id;
    topic.upVote = 0;
    topic.downVote = 0;
    $http.post('/api/post', topic).then(function(response){
      console.log("Success : [" + response.status + "]" + " You have successfully added the post.");
    },function(response){
      console.log("Error : [" + response.status + "]" + " There was an error adding the post.");
    });
  }

  factory.readPost = function(id, callback){
    // api call to get all the post
    $http.get('/api/post/' + id).then(function(response){
      console.log("Success : [" + response.status + "]" + " You have successfully retrieved all the post.");
      for (var i = 0; i < response.data.length; i++) {
        var post = response.data[i];
        //api call to get all comments related to the post
        getComment(i, response, $http, post);
      }
      callback(response.data);
    },function(response){
      console.log("Error : [" + response.status + "]" + " There was an error retrieving all the post.");
    });
  }

  factory.updateUpVotePost = function(id){
    $http.put('/api/post/upvote', {_id : id}).then(function(response){
      console.log("Success : [" + response.status + "]" + " You have successfully updated the vote.");
    },function(response){
      console.log("Error : [" + response.status + "]" + " There was an error updating the vote.");
    });
  }

  factory.updateDownVotePost = function(id){
    $http.put('/api/post/downvote', {_id : id}).then(function(response){
      console.log("Success : [" + response.status + "]" + " You have successfully updated the vote.");
    },function(response){
      console.log("Error : [" + response.status + "]" + " There was an error updating the vote.");
    });
  }

  function getComment(i, response, $http, post){
    $http.get('/api/comment/' + response.data[i]._id).then(function(commentResponse){
      console.log("Success : [" + commentResponse.status + "]" + " You have successfully retrieved all the comment.");
      post.comment = commentResponse.data;
    },function(commentResponse){
      console.log("Error : [" + commentResponse.status + "]" + " There was an error retrieving all the comment.");
    });
  }

  return factory;

}]);
