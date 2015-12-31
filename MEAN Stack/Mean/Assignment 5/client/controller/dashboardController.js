app.controller('dashboardController', ['$scope', '$location', 'userFactory', 'topicFactory', 'userFactory', function($scope, $location, userFactory, topicFactory, userFactory){

  $scope.username = '';
  $scope.topics = [];


  userFactory.readLogin(function(username){
    $scope.username = username;
    if (username === '') {
      $location.path('/login');
    }
  });

  topicFactory.readTopic(function(topics){
    $scope.topics = topics;
  });

  $scope.setId = function(id){
    topicFactory.setId(id);
  }

  $scope.createTopic = function(){
    topicFactory.createTopic($scope.username, $scope.topic);
    $scope.topic = {};
    topicFactory.readTopic(function(topics){
      $scope.topics = topics;
    });
  }

  $scope.createUser = function(username){
    userFactory.createUserInfo(username);
    $location.path('/user');
  }

  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus();
  })

}]);
