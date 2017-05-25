angular.module('myApp')
.controller('BBCDetailController',['$http', '$state', '$scope', '$rootScope','$stateParams',
    function($http, $state, $scope, $rootScope,$stateParams)
    {
    	$rootScope.menuForBBC = true;
    	$scope.id = $stateParams.id;
    	$http({
    		url:"/tiezi/getBack/0",
    		method:"get",
    		params:{
    			pageSize:10,
				pageNum:100,
    			tId:$scope.id
    		}
    	}).success(function(data){
    		console.log();
    	}).error(function(data){
    		console.log();
    	});
    	$scope.$on("$destroy", function() {
           $rootScope.menuForBBC = false;
        });
    }]);