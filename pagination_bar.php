<html ng-app="pagination_bar">
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
		<script src="js/pagination_bar.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/pagination_bar.css">
	</head>
	
	<body>
		
		<div ng-controller="pagination_bar">
			<div class = "pagination_bar"">
				<a class = "arrow"> << </a>
					<a ng-class = "[pagination_link, {'pagination_link active' : $index === active_index}]" 
					ng-click="curr_page_update($index+1);" 
					ng-repeat="n in number_of_pages track by $index">
						{{$index+1}}
					</a>
				<a class = "arrow"> >> </a>
			</div>	
		<div>
		
		<div ng-controller="page-test">
			<input input="number" min="0" placeholder="insira um numero" ng-model="page_amtn" ng-Change="number_of_pages_update()"></input>
		</div>
	</body>
</html>