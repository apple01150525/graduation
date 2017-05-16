angular.module('myApp')
.controller('reviewEController',['$http', '$state', '$scope', '$rootScope','$document','$window',
    function($http, $state, $scope, $rootScope,$document,$window)
    {
    	$rootScope.menuForE = true;
    	$http({
    		url:"/api/get/temper",
    		method:"POST",
    	}).success(function(data){
            $.each(data.result,function(index){
                lineOption.series[0].data.push(this.temper);
                lineOption.xAxis.data.push(this.time);
            });
            var myCharts = echarts.init(document.getElementById("canvasE"));
            myCharts.setOption(lineOption);
    	}).error(function(data){});
    	$scope.subA = function(){
    		$http({
    		url:"/api/add/temper",
    		method:"POST",
    		data:{
    			'type' : "temperature",
    			'sub' : 0,
    			'temper' : $scope.temper
    		}
    	}).success(function(data){
    		if(data.code == 00){
                alert("记录成功");
            }else{
                alert(data.msg);
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
		        name:"体温",
		        splitLine: {
		            show: false
		        }
		    },
		    series: [{
	            name:'体温',
	            type:'line',
	            data:[]
	        }]
        }
    	$scope.$on("$destroy", function() {
           $rootScope.menuForE = false;
        });
    }]);