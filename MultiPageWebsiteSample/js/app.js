myApp = angular.module("myApp", [ 'ngRoute']);

myApp.config(function($routeProvider) {

	$routeProvider.when("/dashboard", {
		templateUrl : "dashboard.php"
	}).when("/products", {

		templateUrl : "products.php"
	}).when("/accounts", {
		templateUrl : "accounts.php"
	}).when("/", {
		templateUrl : "dashboard.php"
	}).otherwise({

		redirectTo : "/"

	});
});


