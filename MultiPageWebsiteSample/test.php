<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Multi Page Website</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css" />
        <script src="js/angular.js"></script>
        <script src="js/angular-route.js"></script>
        <script src="js/app.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body class="contentBody" ng-app="myApp">
        <nav class="navbar navbar-default " role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>    
                <a class="navbar-brand" href="index.php">PRODUCT ADMIN</a>
            </div>
            <div class="navbar-collapse collapse">       
                <ul class="nav navbar-nav navbar-center">
                    <li  >
                        <a href="index.php"><i class="fa fa-dashboard" style="font-size:36px;color: white"></i><div>Dashboard</div></a>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-file-text-o" style="font-size:36px;color:white;"></i>
                            <div>Reports</div>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" >
                            <li ><a href="#">Daily Report</a></li>
                            <li><a href="#">Weekly Report</a></li>
                            <li><a href="#">Yearly Report</a></li>
                        </ul>
                    </li>

                    <li>

                        <a href="#/products">
                            <i class="material-icons" style="font-size:36px;color:white;">shopping_cart</i>
                            <div>  Products  </div>
                        </a>
                    </li>
                    <li>

                        <a href="accounts.php">
                            <i class="material-icons" style="font-size:36px;color:white;">account_box</i>
                            <div>Accounts </div>
                        </a>
                    </li>    

                    <li class="dropdown">

                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="material-icons" style="font-size:36px;color: white;">settings</i>
                            <div> Settings </div>
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Billing</a></li>
                            <li><a href="#">Customize</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Admin, Logout</a></li>
                </ul>
            </div>
        </nav>
        <!-- end of navigation bar -->
        <div class="col-sm-12 col-md-12 col-lg-12 headings">

            Welcome Back,<b> Admin </b>
        </div>
    

        <div class="container-fluid">
            <div class="text-center">
                <div ng-view="myView"></div>
            </div>
        </div>


    </body>
</html>