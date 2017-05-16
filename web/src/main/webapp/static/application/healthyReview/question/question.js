angular.module('myApp')
.controller('questionController',['$http', '$state', '$scope', '$rootScope','$document','$window',
    function($http, $state, $scope, $rootScope,$document,$window)
    {
    	$rootScope.menuForQuestion = true;
    	$scope.questionList = {
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
				'asyn': true,
		};
		$scope.submit = function(){
			alert("提交成功");
		}
		$scope.$on("$destroy", function() {
           $rootScope.menuForQuestion = false;
        });
    }]);