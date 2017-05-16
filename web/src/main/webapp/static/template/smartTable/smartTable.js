angular.module('myApp')
	.directive('smartTable', ['$http', function ($http) {
	    return {
	        restrict: 'E',
	        transclude: true,
	        templateUrl: 'static/template/smartTable/smartTable.html',
	        scope: {
	        	smartTable: '=id'
	        },
	        link: function (scope, ele, attrs) {
	        	if (scope.smartTable.Ajax !== undefined ) {
	        		scope.smartTable.from = 0;
		        	scope.smartTable.to = scope.smartTable.pageSizes[0].number;
					scope.smartTable.pageSize = scope.smartTable.pageSizes[0];
		        	scope.smartTable.searchKey = '';
		        	scope.smartTable.currentPage = 1;
		        	scope.smartTable.filterSelectKey = {};
		        	if(scope.smartTable.filterSelect) {
		        		scope.smartTable.filterSelect.forEach(function(item){
		        			scope.smartTable.filterSelectKey[item.key] = item.options[0].key;
		        		});
		        	}
		        	if (scope.smartTable.asyn) {
		        		if (scope.smartTable.Ajax.data === undefined) {
		        			scope.smartTable.Ajax.data = {};
		        		}
		        		scope.smartTable.Ajax.data.search_key = scope.smartTable.searchKey;
		        		scope.smartTable.Ajax.data.start = scope.smartTable.from;
		        		scope.smartTable.Ajax.data.length = scope.smartTable.pageSizes[0].number;
		        		scope.smartTable.Ajax.data.query = scope.smartTable.filterSelectKey;
		        		scope.smartTable.Ajax.data.currentPage = scope.smartTable.currentPage;
		        	}
		        	scope.smartTable.getData = getData;
		        	scope.smartTable.initPagination= initPagination;
		        	scope.smartTable.sortBy = sortBy;
		        	getData(true);
		        }
		        else {
		        	console.log("Ajax.url is not defined!");
		        }
		        function getData(initPagin) {
		        	$http({
						url: scope.smartTable.Ajax.url,
						method: 'POST',
						data: scope.smartTable.Ajax.data
					}).success(function (data) {
						$.extend(scope.smartTable, data);
		            	if (initPagin) {
		            		initPagination();
		            	}
			        });
		        }
		        function initPagination() {
		        	scope.smartTable.pages = [1];
		        	scope.smartTable.currentPage = 1;
		        	scope.smartTable.from = 0;
	        		scope.smartTable.startLimit = scope.smartTable.from;
	        		if(scope.smartTable.pageSize.name == "all"){
		        		scope.smartTable.to = scope.smartTable.count;
		        		scope.smartTable.totalPage = 1;
		        		return;
		        	}
		        	scope.smartTable.to = Math.min(scope.smartTable.currentPage * scope.smartTable.pageSize.number,scope.smartTable.count);
		        	scope.smartTable.totalPage = Math.ceil(scope.smartTable.count / scope.smartTable.pageSize.number);
		        	if (scope.smartTable.totalPage > 4) {
		        		scope.smartTable.pages = [1,2,3,'...',scope.smartTable.totalPage];
		        	}
		        	else {
		        		for (var i = 0; i < scope.smartTable.totalPage; i++){
		        			scope.smartTable.pages[i] = i + 1;
		        		}
		        	}
		        }
		        function getRealTimeData(initPagin) {
		        	if (scope.smartTable.asyn) {
		        		scope.smartTable.from = (scope.smartTable.currentPage - 1) * scope.smartTable.pageSize.number;
			        	scope.smartTable.to = (scope.smartTable.pageSize.name == "all")? scope.smartTable.count : Math.min(scope.smartTable.currentPage * scope.smartTable.pageSize.number,scope.smartTable.count);
			        	scope.smartTable.startLimit = 0;
		        		scope.smartTable.Ajax.data.search_key = scope.smartTable.searchKey;
		        		scope.smartTable.Ajax.data.start = scope.smartTable.from;
		        		scope.smartTable.Ajax.data.length = scope.smartTable.pageSize.number;
		        		scope.smartTable.Ajax.data.currentPage = scope.smartTable.currentPage;
		        		getData(initPagin);
		        	}
		        }
		        function sortBy(propertyName) {
					scope.smartTable.reverse = (scope.smartTable.orderBy === propertyName) ? !scope.smartTable.reverse : false;
		          	scope.smartTable.orderBy = propertyName;
					if (scope.smartTable.asyn) {
						scope.smartTable.Ajax.data.order_by = propertyName;
						scope.smartTable.Ajax.data.order_rule = scope.smartTable.reverse? 'desc':'asc';
						getRealTimeData(true);
					}
		        }
		        scope.flip = function(page) {
		        	if (page > 0 && page <= scope.smartTable.totalPage) {
		        		scope.smartTable.currentPage = page;
			        	scope.smartTable.from = (page - 1) * scope.smartTable.pageSize.number;
			        	scope.smartTable.startLimit = scope.smartTable.from;
			        	scope.smartTable.to = Math.min(page * scope.smartTable.pageSize.number,scope.smartTable.count);
			        	if (scope.smartTable.totalPage > 4) {
			        		scope.smartTable.pages[0] = Math.min(Math.max(page - 1, 1), scope.smartTable.totalPage - 3);
			        		scope.smartTable.pages[1] = Math.min(Math.max(page, 2), scope.smartTable.totalPage - 2);
			        		scope.smartTable.pages[2] = Math.min(Math.max(page + 1, 3), scope.smartTable.totalPage - 1);
			        	}
			        	getRealTimeData(false);
		        	}
		        }
		        scope.changePageSize = function() {
		        	initPagination();
		        	getRealTimeData(false);
		        }
				scope.changeSearch = function() {
		        	getRealTimeData(true);
				}
				scope.loadDownExcel = function() {
					$http({
					    url: scope.smartTable.Ajax.url,
					    method: "POST",
					    headers: {
					       'Content-type': 'application/json'
					    },
					    responseType: 'arraybuffer'
					}).success(function (data, status, headers, config) {
					    var blob = new Blob([data], {type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"});
					    var objectUrl = URL.createObjectURL(blob);
					    window.open(objectUrl);
					}).error(function (data, status, headers, config) {
						console.log('123');
					});
				}
		        scope.changeSelect = function(item, selected) {
		        	scope.smartTable.filterSelectKey[item.key] = selected.key;
		        	if (scope.smartTable.asyn) {
		        		getRealTimeData(true);
		        	}
		        }
	        }
	    }
	}]);
