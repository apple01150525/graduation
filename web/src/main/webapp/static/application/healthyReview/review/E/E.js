angular.module('myApp')
.controller('reviewEController',['$http', '$state', '$scope', '$rootScope','$document','$window',
    function($http, $state, $scope, $rootScope,$document,$window)
    {
    	$rootScope.menuForE = true;
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
		        type: 'category',
		        name:"日期",
		        splitLine: {
		            show: false
		        },
		        data:[1,2,3,4,5,6]
		    },
		    yAxis: {
		        type: 'value',
		        name:"体重",
		        splitLine: {
		            show: false
		        }
		    },
		    series: [{
	            name:'体重',
	            type:'line',
	            data:[11, 11, 15, 13, 12, 13]
	        }]
        }
        var myCharts = echarts.init(document.getElementById("canvasE"));
        myCharts.setOption(lineOption);
    	$scope.$on("$destroy", function() {
           $rootScope.menuForE = false;
        });
    }]);