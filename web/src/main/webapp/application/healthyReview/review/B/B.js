angular.module('myApp')
.controller('reviewBController',['$http', '$state', '$scope', '$rootScope','$document','$window',
    function($http, $state, $scope, $rootScope,$document,$window)
    {
    	$rootScope.menuForB = true;
    	$http({
    		url:"#",
    		method:"POST",
    		data:{
    			weight:100,
    			heigth:100
    		}
    	}).success(function(data){}).error(function(data){});
    	$scope.$on("$destroy", function() {
           $rootScope.menuForB = false;
        });
    }]);