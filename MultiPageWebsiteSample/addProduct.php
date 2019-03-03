<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Add Products</title>
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
<?php include 'nav.php'; ?>

        
        <div class="col-sm-8 col-md-8 col-lg-8  " >
            <div class="col-sm-12 col-md-12 col-lg-12 addProductsSection " >
                <div class="headings">
                    Add Products
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6" >
                    <div class="innerheadings">  Product Name </div> 
                    <div>
                        <input type="text" class="input" />
                    </div>
                    <div class="innerheadings"> Description </div> 
                    <div>
                        <textarea name="desciption" style="width: 100%">Enter text here...</textarea>
                    </div>
                    <div class="innerheadings"> Category</div> 
                    <div>
                        <select style="width: 100%;color:black;height: 50px;">
                            <option value="">Select a Category</option>
                            <option value="admin">New Arrival</option>
                            <option value="customer">Most Popular</option>
                            <option value="editor">Trending</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6" >
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="innerheadings">Expire Date</div>
                            <input type="text" class="input" />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6" >
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="innerheadings">Units In Stock</div>
                            <input type="text" class="input" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6" >
                    <div class="innerheadings">
                        Update your profile
                    </div>

                    <div>
                        <img src="img/user_4.png"/>
                        <button class="productButton">UPDATE PRODUCT IMAGE</button>
                    </div>
                </div>
                <div>
                    <button class="productButton">DELETE YOUR ACCOUNT</button>
                </div>
            </div>
        </div>
    </body>
</html>
