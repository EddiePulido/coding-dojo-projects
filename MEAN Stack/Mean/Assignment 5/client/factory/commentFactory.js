app.factory('commentFactory', ['$http', function($http){

    var factory = {};

    factory.createComment = function(id, username, comment){
      comment.postId = id;
      comment.username = username;
      $http.post('/api/comment', comment).then(function(response){
        console.log("Success : [" + response.status + "]" + " You have successfully added the comment.");
      },function(response){
        console.log("Error : [" + response.status + "]" + " There was an error adding the comment.");
      });
    }

    return factory;

}]);
