app.controller('topicController', ['$scope', '$location', 'topicFactory', 'userFactory', 'postFactory', 'commentFactory', function($scope, $location, topicFactory, userFactory, postFactory, commentFactory){

    $scope.username = '';
    $scope.oneTopic = [];
    $scope.id = '';
    $scope.posts = [];

    userFactory.readLogin(function(username){
      $scope.username = username;
      if (username === '') {
        $location.path('/login');
      }
    });

    topicFactory.getId(function(_id){
      $scope.id = _id;
    });

    if ($scope.id !== '') {

      topicFactory.readOneTopic($scope.id, function(topic){
        $scope.oneTopic = topic;
      });

      postFactory.readPost($scope.id, function(post){
        $scope.posts = post;
      });

    }

    $scope.createPost = function(id){
      postFactory.createPost($scope.username, id, $scope.post);
      $scope.post = {};
      postFactory.readPost($scope.id, function(post){
        $scope.posts = post;
      });
    }

    $scope.createComment = function(id, comment){
      commentFactory.createComment(id, $scope.username, comment);
      postFactory.readPost($scope.id, function(post){
        $scope.posts = post;
      });
    }

    $scope.createUser = function(username){
      userFactory.createUserInfo(username);
      $location.path('/user');
    }

    $scope.updateUpVotePost = function(id){
      postFactory.updateUpVotePost(id);
      postFactory.readPost($scope.id, function(post){
        $scope.posts = post;
      });
    }

    $scope.updateDownVotePost = function(id){
      postFactory.updateDownVotePost(id);
      postFactory.readPost($scope.id, function(post){
        $scope.posts = post;
      });
    }

    $scope.logout = function(){
      window.location.assign('/');
    }

    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus();
    })

}]);
