angular.module('myApp')
.controller('reviewAController',['$http', '$state', '$scope', '$rootScope','$document','$window',
    function($http, $state, $scope, $rootScope,$document,$window)
    {
    	$rootScope.menuForA = true;
    	$scope.time = [];
    	$scope.w = new Array();
    	$http({
    		url:"/api/get/weight",
    		method:"POST"
    	}).success(function(data){
    		console.log(data);
    		$scope.data = data.result;
    		$.each(data.result,function(index){
    			// console.log(this);
                $scope.time.push(this.dayTime);
				$scope.w.push(this.weight);
			});
            lineOption.xAxis.data = $scope.time;
            lineOption.series.data = $scope.w;
            var myCharts = echarts.init(document.getElementById("canvasA"));
            myCharts.setOption(lineOption);
    	}).error(function(data){});
    	$scope.subA = function(){
    		$http({
    		url:"/api/add/weight",
    		method:"POST",
    		data:{
    			'type' : "weight",
    			'sub' : 0,
    			'weight' : $scope.weight
    		}
    	}).success(function(data){
    		if(data.code == 00){
    			alert("记录成功");
			}
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
                name:"日期",
		        type: 'category',
		        splitLine: {
		            show: false
		        },
		        data:$scope.time
		    },
		    yAxis: {
                name:"体重",
		        type: 'value',
		        boundaryGap: [0, '100%'],
		        splitLine: {
		            show: false
		        }
		    },
		    series: [{
	            name:'体重',
	            type:'line',
	            data:$scope.w,
	        },]
        }

    	$scope.$on("$destroy", function() {
           $rootScope.menuForA = false;
        });
    }]);