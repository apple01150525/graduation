angular.module('myApp')
.controller('reviewCController',['$http', '$state', '$scope', '$rootScope','$document','$window',
    function($http, $state, $scope, $rootScope,$document,$window)
    {
    	$rootScope.menuForC = true;
    	$http({
    		url:"/api/get/bloodglucose",
    		method:"POST",
    	}).success(function(data){
    		$scope.data = data.data;
            $.each(data.result,function(index){
                lineOption.xAxis.data.push(this.time);
                lineOption.series[0].data.push(this.glucose);
            });
        var myCharts = echarts.init(document.getElementById("canvasC"));
        myCharts.setOption(lineOption);
            console.log(data.result);
    	}).error(function(data){});
    	$scope.subA = function(){
    		$http({
    		url:"/api/add/bloodglucose",
    		method:"POST",
    		data:{
    			'type' : "bloodglucose",
    			'sub' : 0,
    			'glucose' : $scope.glucose
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
		        type: 'category',
		        name:"日期",
		        splitLine: {
		            show: false
		        },
		        data:[]
		    },
		    yAxis: {
		        type: 'value',
		        name:"血糖",
		        splitLine: {
		            show: false
		        }
		    },
		    series: [{
	            name:'血糖',
	            type:'line',
	            data:[]
	        }]
        }
    	$scope.$on("$destroy", function() {
           $rootScope.menuForC = false;
        });
    }]);