angular.module('myApp')
.controller('questionNewsController',['$http', '$state', '$scope', '$rootScope','$document','$window',
    function($http, $state, $scope, $rootScope,$document,$window)
    {
    	$http({
    		url:"/get/healthNews",
    		method:"POST"
    	}).success(function(data){
    		$scope.healthyNews = data;
    		console.log(data);
    	}).error(function(){});
    }]);