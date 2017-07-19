var app = angular.module('app', [])

app.controller('ctrl', function($scope) {
  $scope.todoItems = ['Task 1', 'Task 2', 'Task 3']

  $scope.add = function() {}
  $scope.delete = function() {}
  $scope.clear = function() {}
})
