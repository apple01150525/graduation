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
    	    console.log(data);
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
                name:'舒张压',
                type:'line',
                data:[11, 11, 15, 13, 12, 13]
            },
            {
                name:'收缩压',
                type:'line',
                data:[20, 21, 25, 23, 22, 23]
            }]
        };
        var myCharts = echarts.init(document.getElementById("canvasB_1"));
        myCharts.setOption(lineOption);
        var myCharts_2 = echarts.init(document.getElementById("canvasB_2"));
        myCharts_2.setOption(lineOption);
        $scope.$on("$destroy", function() {
           $rootScope.menuForB = false;
        });
    }]);