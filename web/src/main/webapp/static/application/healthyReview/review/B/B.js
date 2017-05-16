angular.module('myApp')
.controller('reviewBController',['$http', '$state', '$scope', '$rootScope','$document','$window',
    function($http, $state, $scope, $rootScope,$document,$window)
    {
    	$rootScope.menuForB = true;
        $scope.tip = [true];
        $scope.choose = function(index){
            $scope.tip = [];
            $scope.tip[index] = true;
        }
    	$http({
    		url:"/api/get/bloodfat",
    		method:"POST",
    	}).success(function(data){
    	    $scope.b = data.result;
            $.each(data.result,function(index){
                lineOption.xAxis.data.push(this.time);
                lineOption.series[0].data.push(this.highCholesterol);
                lineOption.series[1].data.push(this.lowCholesterol);
            });
            var myCharts = echarts.init(document.getElementById("canvasB_1"));
            myCharts.setOption(lineOption);
        }).error(function(data){});
    	$scope.$on("$destroy", function() {
           $rootScope.menuForB = false;
        });
        var lineOption = {
            tooltip: {
                trigger: 'axis'
            },
            toolbox: {
                feature: {
                    saveAsImage: {}
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
                name:"血压",
                splitLine: {
                    show: false
                }
            },
            series: [{
                name:'舒张压',
                type:'line',
                data:[]
            },
            {
                name:'收缩压',
                type:'line',
                data:[]
            }]
        };
        var myCharts_2 = echarts.init(document.getElementById("canvasB_2"));
        myCharts_2.setOption(lineOption);
        $scope.$on("$destroy", function() {
           $rootScope.menuForB = false;
        });
    }]);