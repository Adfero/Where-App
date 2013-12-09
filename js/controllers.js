var whereApp = angular.module('whereApp', []);

whereApp.controller('DevTeam', ['$scope', '$http', function($scope, $http) {
	$http.get('inc/users.php').success(function(data) {
		$scope.people = data;
	});

	$scope.orderProp = 'name';
}]);