angular.module('myApp')
.controller('reviewController',['$http', '$state', '$scope', '$rootScope','$document','$window',
    function($http, $state, $scope, $rootScope,$document,$window)
    {
    	$rootScope.menuForAsk = true;
    	$scope.$on("$destroy", function() {
           $rootScope.menuForAsk = false;
        });
    }]);