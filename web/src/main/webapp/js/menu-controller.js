angular.module('myApp')
    .controller('menuController',['$http', '$state', '$scope', '$rootScope','$document',
        function($http, $state, $scope, $rootScope,$document)
        {
            $rootScope.isTransparent = "transparent";

            // $http({
            //     url:"#",
            //     method:"POST"
            // }).success(function(data){

            // }).error(function(){
            //     alert("你的网络似乎有问题呢。。。");
            // });
        }]);