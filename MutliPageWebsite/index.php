<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Bootstrap Example</title>
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

                        <a href="products.php">
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
        <!-- sections section -->
        <div class="col-sm-12 col-md-12 col-lg-12 content">

            <div class="col-sm-6 col-md-6 col-lg-6 contentBox "  >               
                <div class="col-sm-12 col-md-12 col-lg-12 sections" >
                    <div class="headings"><b>Latest Hits</b></div>
                    <img src="img/Performance.png" style="padding: 25px;height: 300px;" />
                </div>


            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 contentBox" >
                <div class="col-sm-12 col-md-12 col-lg-12 sections" > 
                    <div class="headings"><b>Performance</b></div>
                    <img src="img/latestHits.png" style="padding: 25px;height: 300px;" /> 
                </div>

            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 contentBox"  >
                <div class="col-sm-12 col-md-12 col-lg-12 sections" > 
                    <div class="headings"><b>Storage Information</b></div>
                    <img src="img/StorageInformation.png" style="padding: 25px;height: 300px;" /> 
                </div>

            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 contentBox"  >
                <div class="col-sm-12 col-md-12 col-lg-12 sections" > 
                    <div class="headings"><b>Notification List</b></div>
                    <div class="col-sm-12 col-md-12 col-lg-12 notificationScrollable">
                        <div class="col-sm-12 col-md-12 col-lg-12 notification" >
                            <div class="col-sm-2 col-md-2 col-lg-2" >
                                <img src="img/user_1.jpg" style="border-radius: 50%;width: 100%"/>                             
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Jessica and 3 others sent you new product updates.Check new orders.
                                <div>6h ago.</div>
                            </div>

                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-12 notification" >
                            <div class="col-sm-2 col-md-2 col-lg-2" >
                                <img src="img/user_2.jpg" style="border-radius: 50%;width: 100%"/>                             
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Jessica and 3 others sent you new product updates.Check new orders.
                                <div>6h ago.</div>
                            </div>

                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-12 notification" >
                            <div class="col-sm-2 col-md-2 col-lg-2" >
                                <img src="img/user_3.jpg" style="border-radius: 50%;width: 100%"/>                             
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Jessica and 3 others sent you new product updates.Check new orders.
                                <div>6h ago.</div>
                            </div>

                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-12 notification" >
                            <div class="col-sm-2 col-md-2 col-lg-2" >
                                <img src="img/user_2.jpg" style="border-radius: 50%;width: 100%"/>                             
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Jessica and 3 others sent you new product updates.Check new orders.
                                <div>6h ago.</div>
                            </div>

                        </div>


                        <div class="col-sm-12 col-md-12 col-lg-12 notification" >
                            <div class="col-sm-2 col-md-2 col-lg-2" >
                                <img src="img/user_1.jpg" style="border-radius: 50%;width: 100%"/>                             
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Jessica and 3 others sent you new product updates.Check new orders.
                                <div>6h ago.</div>
                            </div>

                        </div>


                        <div class="col-sm-12 col-md-12 col-lg-12 notification" >
                            <div class="col-sm-2 col-md-2 col-lg-2" >
                                <img src="img/user_2.jpg" style="border-radius: 50%;width: 100%"/>                             
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Jessica and 3 others sent you new product updates.Check new orders.
                                <div>6h ago.</div>
                            </div>

                        </div>


                        <div class="col-sm-12 col-md-12 col-lg-12 notification" >
                            <div class="col-sm-2 col-md-2 col-lg-2" >
                                <img src="img/user_3.jpg" style="border-radius: 50%;width: 100%"/>                             
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Jessica and 3 others sent you new product updates.Check new orders.
                                <div>6h ago.</div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <!-- table section -->
            <!-- fetching data from table using PHP-->
            <div class="col-sm-12 col-md-12 col-lg-12 contentBox" >

                <div class="col-sm-12 col-md-12 col-lg-12 sections table ">
                    <div class="headings"> Order List: </div> 
                    <table >
                        <tr>
                            <th>ORDER NUMBER</th>
                            <th>STATUS</th> 
                            <th>OPERATORS</th>
                            <th>LOCATION</th>
                            <th>DISTANCE</th>
                            <th>START DATE</th>
                            <th>EST DELIVERY DUE</th>
                        </tr>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "Dharanic210";
                        $dbname = "dashboard";
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        $array = array();
                        $query = " SELECT orderNumber,productStatus,operator,location,distance,startDate,estimatedDeliveryDate FROM orderLists  ";
                        $result = $conn->query($query);

                        while ($row = $result->fetch_assoc()) {
                            $array[] = $row;
                        }
                        foreach ($array as $item) {

                            echo "<tr>";
                            echo "<td>" . $item['orderNumber'] . "</td>";
                            echo "<td>" . $item['productStatus'] . "</td>";
                            echo "<td>" . $item['operator'] . "</td>";
                            echo "<td>" . $item['location'] . "</td>";
                            echo "<td>" . $item['distance'] . "km" . "</td>";
                            echo "<td>" . $item['startDate'] . "</td>";
                            echo "<td>" . $item['estimatedDeliveryDate'] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="text-center">
                <div ng-view="myView"></div>
            </div>
        </div>


    </body>
</html>