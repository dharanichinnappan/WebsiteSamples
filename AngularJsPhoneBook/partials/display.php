
<?php include 'database.php'; ?>
<?php $number= $_GET['number']?>
<?php
$query = "select * from contacts where mobilenumber='$number'";
$result = $conn->query($query);
$row = $result->fetch_assoc();

?>
<html>
<head>
<script src="../js/angular.js"></script>
<script src="../js/angular-route.js"></script>
<script type="text/javascript" src="../js/controller.js"></script>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/style.css">
</head>
<body ng-app="myApp" ng-controller="contactModifyCntrl">
	<div class="col-sm-12 col-md-4 col-md-offset-4 col-lg-4 container">
		<div class="col-sm-12 col-md-12 col-lg-12 outerContainer">
			<div class="col-sm-12 col-md-12 col-lg-12 contactImageContainer"
				style="background-image: url()">

				<div class="col-sm-1 col-md-1 col-lg-1">
					<a href="index.php"> <i class="fa fa-arrow-left"></i></a>
				</div>

				<div class="col-sm-11 col-md-11 col-lg-11 contactModify">
					<a ng-click="update(<?php echo $row['mobilenumber']?>)"> <i
						class="fa fa-pencil"></i></a> <a
						ng-click="delete(<?php echo $row['mobilenumber']?>)"><i
						class="fa fa-trash"></i></a>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 contactImage">
				<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" width="100%" height="200px" />'; ?>
				
				</div>

			</div>
			<div class="col-sm-12 col-md-12 col-lg-12 ">
				<div class="col-sm-12 col-md-12 col-lg-12 contactDetails">
					<div class="col-sm-1 col-md-1 col-lg-1">
						<i class="fa fa-user"></i>
					</div>
					<div class="col-sm-11 col-md-11 col-lg-11 borderBottom"><?php echo $row['contactname'] . '  '.$row['lastname']?></div>

					<div class="col-sm-1 col-md-1 col-lg-1">
						<i class="fa fa-phone"></i>
					</div>
					<div class="col-sm-11 col-md-11 col-lg-11 borderBottom"><?php echo $row['mobilenumber']?></div>

					<div class="col-sm-1 col-md-1 col-lg-1">
						<i class="fa fa-whatsapp"></i>
					</div>
					<div class="col-sm-11 col-md-11 col-lg-11 borderBottom">Voice call <?php echo $row['mobilenumber']?> </div>

					<div class="col-sm-1 col-md-1 col-lg-1">
						<i class="fa fa-whatsapp"></i>
					</div>
					<div class="col-sm-11 col-md-11 col-lg-11 borderBottom">Video call <?php echo $row['mobilenumber']?></div>
				</div>

			</div>
		</div>

	</div>
</body>
</html>