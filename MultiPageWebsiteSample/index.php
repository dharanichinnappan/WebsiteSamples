<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Multi Page Website</title>
         <link rel="stylesheet" href="style.css" />        
    </head>
    
    <body ng-app="myApp" >
        <?php include 'nav.php'; ?>
               
        <div class="container-fluid" >
            <div class="text-center">
                <div ng-view="myView"></div>
            </div>
        </div>
       

    </body>
</html>
