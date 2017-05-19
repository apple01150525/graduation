angular.module('myApp')
.controller('BBCDetailController',['$http', '$state', '$scope', '$rootScope','$stateParams',
    function($http, $state, $scope, $rootScope,$stateParams)
    {
    	$rootScope.menuForBBC = true;
    	$scope.id = $stateParams.id;
    	$scope.$on("$destroy", function() {
           $rootScope.menuForBBC = false;
        });
    }]);