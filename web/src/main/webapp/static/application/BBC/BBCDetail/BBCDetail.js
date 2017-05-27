angular.module('myApp')
.controller('BBCDetailController',['$http', '$state', '$scope', '$rootScope','$stateParams',
    function($http, $state, $scope, $rootScope,$stateParams)
    {
    	$rootScope.menuForBBC = true;
    	$scope.id = $stateParams.id;
    	$scope.title = $stateParams.title;
    	$scope.content = $stateParams.content;
    	$scope.rebacktimes = $stateParams.rebacktimes;
    	$http({
    		url:"/tiezi/getBack/0",
    		method:"get",
    		params:{
    			tId:$scope.id
    		}
    	}).success(function(data){
    		$scope.reback = data.result;
    		console.log($scope.reback);
    	}).error(function(data){
    		console.log();
    	});
    	$scope.flag = [];
    	$scope.replySecond = function(id){
    		$scope.flag[id] = !$scope.flag[id];
    		$http({
    		url:"/tiezi/getBack/1",
    		method:"get",
    		params:{
    			tId:id
    		}
    	}).success(function(data){
    		$scope.rebackSecond = data.result;
    		console.log($scope.rebackSecond);
    	}).error(function(data){
    		console.log();
    	});
    	}

    	$scope.reply =function(id,type){
    		$scope.tId = id;
    		$scope.tType = type;
			$('#myModal').modal('show');
		}

		$scope.clickOK = function(){
			$http({
				url:'tiezi/addTieziReback',
				method : "post",
				params:{
					tId:$scope.tId,
					type:$scope.tType,
					UserId:1,
					content:$scope.replyContent
				}
			}).success(function(data){
				if(data.code == 00){
					$('#myModal').modal('hide');
					window.location.reload();
				}
			}).error(function(){});
		}

    	$scope.$on("$destroy", function() {
           $rootScope.menuForBBC = false;
        });
    }]);