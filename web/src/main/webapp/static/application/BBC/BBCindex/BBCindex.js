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
					'url': '/paper/getQuestions',
				},
				'asyn': false,
    	};
    	$scope.$on("$destroy", function() {
           $rootScope.menuForAsk = false;
        });
    }]);