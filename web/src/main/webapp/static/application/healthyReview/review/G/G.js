angular.module('myApp')
.controller('reviewGController',['$http', '$state', '$scope', '$rootScope','$document','$window',
    function($http, $state, $scope, $rootScope,$document,$window)
    {
    	$rootScope.menuForG = true;
    	// $http({
    	// 	url:"#",
    	// 	method:"POST",
    	// }).success(function(data){
    	// 	$scope.data = data.data;
    	// }).error(function(data){});
    	$scope.subA = function(){
            alert("记录成功");
    	// 	$http({
    	// 	url:"#",
    	// 	method:"POST",
    	// 	data:{
    	// 		'type' : "weight",
    	// 		'sub' : 0,
    	// 		'weight' : $scope.weight
    	// 	}
    	// }).success(function(data){
    	// 	console.log(data);
    	// }).error(function(data){});
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
		        name:"血脂",
		        splitLine: {
		            show: false
		        }
		    },
		    series: [{
	            name:'胆固醇',
	            type:'line',
	            data:[175, 180, 179, 175, 174]
	        },
            {
                name:'甘油三酯',
                type:'line',
                data:[145, 130, 135, 140, 140]
            },
            {
                name:'高密度蛋白',
                type:'line',
                data:[110, 100, 105, 100, 110]
            },
            {
                name:'低密度蛋白',
                type:'line',
                data:[30, 40, 35, 30, 35]
            }]
        }
        var myCharts = echarts.init(document.getElementById("canvasG"));
        myCharts.setOption(lineOption);
    	$scope.$on("$destroy", function() {
           $rootScope.menuForG = false;
        });
    }]);