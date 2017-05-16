angular.module('myApp')
.controller('reviewDController',['$http', '$state', '$scope', '$rootScope','$document','$window',
    function($http, $state, $scope, $rootScope,$document,$window)
    {
    	$rootScope.menuForD = true;
    	$http({
    		url:"#",
    		method:"POST",
    	}).success(function(data){
    		$scope.data = data.data;
    	}).error(function(data){});
    	$scope.subA = function(){
            alert("记录成功");
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
		        data:["2017-05-12","2017-05-13","2017-05-14","2017-05-15","2017-05-16"]
		    },
		    yAxis: {
		        type: 'value',
		        name:"腰围",
		        splitLine: {
		            show: false
		        }
		    },
		    series: [{
	            name:'体重',
	            type:'line',
	            data:["78", "76", "77", "76", "77"]
	        }]
        }
        var myCharts = echarts.init(document.getElementById("canvasD"));
        myCharts.setOption(lineOption);
    	$scope.$on("$destroy", function() {
           $rootScope.menuForD = false;
        });
    }]);