app.controller('peopleController', ['$scope', 'peopleFactory', function($scope, peopleFactory){

  $scope.people = [];
  $scope.singlePersonData = "";

  peopleFactory.getPeople(function(data){
      $scope.people = data;
  });

  $scope.findOnePerson = function(id){
    peopleFactory.findOnePerson(id, function(data){
      $scope.singlePersonData = data;
    });
  }

  $scope.addPeople = function(){
    peopleFactory.addPeople($scope.person);
    $scope.person = '';
  }

  $scope.removePeople = function(id){
    peopleFactory.removePeople(id);
    $scope.singlePersonData = "";
  }

}]);
