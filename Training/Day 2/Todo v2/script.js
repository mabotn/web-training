var app = angular.module('app', [])

app.controller('ctrl', function($scope) {
  $scope.newTask = ''
  $scope.todoItems = []

  $scope.add = function() {
    $scope.todoItems.push($scope.newTask)
    $scope.newTask = ''
  }

  $scope.delete = function(index) {
    $scope.todoItems.splice(index, 1)
  }

  $scope.clear = function() {
    $scope.todoItems = []
  }

  $scope.edit = function(index) {

    $scope.todoItems.splice(index, 1)
    $scope.todoItems.splice(index,0,$scope.newTask)

  
    
   }


})