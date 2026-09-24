var app = angular.module('app', [])

app.service('UserService', function($http) {
    this.getUser = function (user_id) {
        return $http({
            method: 'GET',
            url: `http://localhost:8000/usuario/${user_id}`,
            headers: {
                'Content-Type': 'application/json'
            }
        })
    }
})

app.controller('AppController', function($scope, UserService) {
    $scope.user_id = null;
    $scope.usuario = null;
    $scope.error = null;

    $scope.get = function () {
        if($scope.user_id) {
         UserService.getUser($scope.user_id)
            .then(function (response) {
                $scope.usuario = response.data;
                $scope.error = null;
            }).catch(function (error) {
                $scope.error = error.data.erro;
                $scope.usuario = null;
            })
            
        }
    }
})