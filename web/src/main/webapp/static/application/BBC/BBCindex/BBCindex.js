angular.module('myApp')
.controller('BBCindexController',['$http', '$state', '$scope', '$rootScope','$document','$window',
    function($http, $state, $scope, $rootScope,$document,$window){
    	$rootScope.menuForBBC = true;
    	$scope.$on("$destroy", function() {
           $rootScope.menuForAsk = false;
        });
    }]);