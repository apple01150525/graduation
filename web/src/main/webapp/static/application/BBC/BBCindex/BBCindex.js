angular.module('myApp')
.controller('BBCindexController',['$http', '$state', '$scope', '$rootScope','$document','$window',
    function($http, $state, $scope, $rootScope,$document,$window){
    	$rootScope.menuForBBC = true;
    	$scope.bbcIndexList = {
    		'pageSizes': [
						{
							'name': 10,
							'number': 10
						},
      					{
      						'name': 20,
      						'number': 20
      					},
				      	{
				      		'name': 100,
				      		'number': 100
				      	},
				      	{
				      		'name': 'all',
				      		'number': ''
				      	}
					],
			'Ajax': {
					'url': '/tiezi/tiezis',
					'params':{
						'pageSize':10,
						'pageNum':100
					}
				},
				'asyn': false,
    	};

    	$scope.send = function(){
    		$('#myModal').modal('show');
    	}
    	$scope.clickOK = function(){
    		$http({
    			url:"/tiezi/addTiezi",
    			method:"post",
    			params:{
    				authorId:1,
    				title:$scope.sendTitle,
    				content:$scope.sendContent,
    				typeId:1,
    			}
    		}).success(function(data){
    			if(data.code == 00){
    				$('#myModal').modal('hide');
    				window.location.reload();
    			}
    		}).error(function(){});
    	}
    	$scope.$on("$destroy", function() {
           $rootScope.menuForAsk = false;
        });
    }]);