angular.module('myApp')
.controller('reviewAController',['$http', '$state', '$scope', '$rootScope','$document','$window',
    function($http, $state, $scope, $rootScope,$document,$window)
    {
    	$rootScope.menuForA = true;
    	$http({
    		url:"#",
    		method:"POST",
    	}).success(function(data){
    		$scope.data = data.data;
    	}).error(function(data){});
    	$scope.subA = function(){
    		$http({
    		url:"#",
    		method:"POST",
    		data:{
    			'type' : "weight",
    			'sub' : 0,
    			'weight' : $scope.weight
    		}
    	}).success(function(data){
    		console.log(data);
    	}).error(function(data){});
    	}
    	var lineOption = {
            tooltip: {
		        trigger: 'axis',
		        axisPointer: {
		            animation: false
		        }
		    },
		    xAxis: {
		        type: 'time',
		        splitLine: {
		            show: false
		        },
		        data:[1,2,3,4,5,6]
		    },
		    yAxis: {
		        type: 'value',
		        boundaryGap: [0, '100%'],
		        splitLine: {
		            show: false
		        },
		        data:[1,2,3,4,5,6]
		    },
		    series: [{
	            name:'体重',
	            type:'line',
	            data:[11, 11, 15, 13, 12, 13, 10],
	        },]
        }
        var myCharts = echarts.init(document.getElementById("canvasA"));
        myCharts.setOption(lineOption);
    	$scope.$on("$destroy", function() {
           $rootScope.menuForA = false;
        });
    }]);