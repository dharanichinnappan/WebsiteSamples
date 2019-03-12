<html>
<head>
<title>Phone Book</title>


        
<script src="../js/angular.js"></script>
<script src="../js/angular-route.js"></script>
<script type="text/javascript" src="../js/controller.js"></script>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/style.css">

        
        
</head>
<body ng-app="myApp" ng-controller="indexController">
	<div class="col-sm-12 col-md-4 col-md-offset-4 col-lg-4 container">
		<div class="col-sm-12 col-md-12 col-lg-12 outerContainer">
			<div class="col-sm-12 col-md-12 col-lg-12 contacts ">
				<div class="col-sm-6 col-md-6 col-lg-6">CONTACTS</div>
				<div class="col-sm-6 col-md-6 col-lg-6 rightAlign"
					ng-click="addNewContact()">
					<a><i class="fa fa-plus-circle plus "></i></a>
				</div>
			</div>

			<div class="col-sm-12 col-md-12 col-lg-12">
				<table class="table">

					<tr ng-repeat="contact in contactList track by $index "
						ng-click="display(contact.mobilenumber)">
						
					 <td><img src="data:image/jpeg;base64,{{contact.image}}" width="100%" height="50px" style="border-radius: 50%;"/></td> 
						
						 <td >{{contact.contactname}}</td> 
						  <td >{{contact.mobilenumber}}</td> 
						
					</tr>

				</table>
			</div>

		</div>

	</div>

</body>
</html>