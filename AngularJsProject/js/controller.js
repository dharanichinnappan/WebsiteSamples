myApp.controller('LoginController', function($scope, $location,$window) {
	$scope.username = "";
	$scope.password = "";
	$scope.loginSucess = 0;
	$scope.list = [ {
		"name" : "stud101",
		"password" : "stud101"
	},

	{
		"name" : "librarian",
		"password" : "lib@123"
	},

	{
		"name" : "stud102",
		"password" : "stud102"
	} ];
	$scope.login = function() {
		for (i = 0; i < $scope.list.length; i++) {
			if ($scope.username == $scope.list[i].name
					&& $scope.password == $scope.list[i].password) {
				$scope.loginSucess++;
			}
		}
		if ($scope.loginSucess <= 0) {
			alert("Enter Valid Crendtials");
		}
		if ($scope.loginSucess > 0) {
			if($scope.username.match("stud")){
				$window.location.href="viewbooks_student.html";
			}
			else{
				$window.location.href="viewbook_librarian.html";
			}
			
			
		}
	}
});

myApp.controller("bookController_student", [
		'$scope',
		'$http',
		'$location',
		'$rootScope',
		function($scope, $http, $location, $rootScope) {

			$scope.bookList = [];
			$scope.searchValue = "";
			$scope.copyList = [];
			$scope.issue = "";
			$scope.viewbookoption = "";

			$http.get('books.json').success(function(data) {

				$rootScope.mainBookList = data;
				$scope.bookList=$rootScope.mainBookList;

			});

			
			
			$scope.checkAvailable = function() {

				angular.forEach($rootScope.mainBookList, function(item) {

					$scope.bookList.push(item);

				});
				$scope.bookList = [];

				if ($scope.viewbookoption == "Available") {
					angular.forEach($rootScope.mainBookList, function(item) {
						if ($scope.bookList.indexOf(item) == -1
								&& item.bookIssued == false) {

							$scope.bookList.push(item);
						}

					});
				}

				else if ($scope.viewbookoption == "all") {
					angular.forEach($rootScope.mainBookList, function(item) {

						$scope.bookList.push(item);

					});
				}

			};

		} ]);

myApp.controller("bookController_librarian", [
		'$scope',
		'$http',
		'$location',
		'$rootScope',
		function($scope, $http, $location, $rootScope) {

			$scope.bookList = [];
			$scope.searchValue = "";
			$scope.copyList = [];
			$scope.issue = "";
			$scope.retur = "";

			$http.get('books.json').success(function(data) {

				$scope.bookList = data;

			});
			angular.forEach($scope.bookList, function(item) {

				$scope.copyList.push(item);
			});

			$scope.searchBook = function() {

				angular.forEach($scope.bookList, function(item) {

					$scope.copyList.push(item);
				});
				$scope.bookList = [];
				angular.forEach($scope.copyList, function(item) {

					$scope.title = item.bookTitle;
					$scope.titlelowercase = angular.lowercase($scope.title);
					$scope.searchedvaluelowercase = angular
							.lowercase($scope.searchValue);

					if ($scope.titlelowercase
							.match($scope.searchedvaluelowercase)) {
						if ($scope.bookList.indexOf(item) == -1) {

							$scope.bookList.push(item);
						}

					}

				});
			};

			$scope.issueBook = function(book) {
				console.log("The book id is " + book.bookId + "and"
						+ book.bookIssued);

				angular.forEach($rootScope.mainBookList, function(item) {

					if (item.bookId == book.bookId) {
						console.log("bb");
						item.bookIssued = true;

					}

				});
				angular.forEach($rootScope.mainBookList, function(item) {
					if (item.bookId == book.bookId) {
						console.log(item.bookIssued)
					}
				});

			};

			$scope.returnBook = function() {
				console.log("value of return is:" + $scope.retur);

			};

		} ]);

/*
 * myApp.controller('LoginController', function($scope, $rootScope) {
 * alert("controller"); $rootScope.mainBookList = [];
 * 
 * $scope.list = [ { "name" : "stud101", "password" : "stud101" }, { "name" :
 * "librarian", "password" : "lib@123" }, { "name" : "stud102", "password" :
 * "stud102" } ]; $scope.showmessage = ""; $scope.username = ""; $scope.password =
 * ""; $scope.sort = "";
 * 
 * $scope.login = function() { console.log($scope.list[0].name,
 * $scope.username); console.log($scope.list[0].password, $scope.password); if
 * ($scope.list[0].name == $scope.username && $scope.list[0].password ==
 * $scope.password) { alert("success"); $scope.showmessage = "success"; } else
 * if ($scope.list[1].name == $scope.username && $scope.list[1].password ==
 * $scope.password) { alert("success"); $scope.showmessage = "success"; }
 * 
 * else if ($scope.list[2].name == $scope.username && $scope.list[2].password ==
 * $scope.password) { alert("success"); $scope.showmessage = "success"; }
 * 
 * else { alert("username or password is incorrect"); } }
 * 
 * });
 */