
myApp.controller('indexController',function($scope,$rootScope){
	
	$scope.submit=function(){
		alert("controller");
		
	};
	
});

myApp.controller('ajaxController',function($scope,$rootScope){
	alert("ajaxController");
	$scope.submit=function(){
		alert("controller");
		
	};
	
});


myApp.controller('myController',function($scope,$rootScope){
	//alert("myController");
	 sessionStorage.nextId=3;
	 $scope.nextId=sessionStorage.nextId;
	 //alert($scope.nextId);
	 
	 $scope.selectedAnswer=$scope.selectedOption;
	// alert($scope.selectedAnswer);
	 
	 $scope.next=function(){
		 $scope.selectedAnswer=$scope.selectedOption;
		 //alert($scope.selectedAnswer);
	 };
	
});


