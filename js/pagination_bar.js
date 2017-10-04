var app = angular.module("pagination_bar", []);

//receives number of pages, stores the current selected page and sends it
app.controller("pagination_bar", function($scope, $rootScope){
	$scope.active_index = 0; 
	
	$scope.getNumber = function(n) { //for ng-repeat, which only accept arrays
		console.log("Pagination buttons created : " + n);
		array = [];
		for(i = 0; i <  n; i++){
			array.push(i);
		}
		return array;
	}
	
	$scope.number_of_pages = $scope.getNumber(1);
	
	$rootScope.$on("number_of_pages_update", function(event, args){
		$scope.number_of_pages = $scope.getNumber(args)
		console.log("ON number_of_pages_update : " + $scope.number_of_pages);
	});
	
	$scope.curr_page_update = function(page_num){
		$rootScope.$broadcast("curr_page_update", page_num);
		console.log("curr_page_update : " + page_num);
	}
});

app.controller("page-test", function($scope, $rootScope){
	$scope.page_amtn = 0;
	
	$scope.number_of_pages_update = function(){
		$rootScope.$broadcast("number_of_pages_update", $scope.page_amtn);
		console.log("number_of_pages_update : " + $scope.page_amtn);
	}
});