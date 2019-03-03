<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Band</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    </head>
    <style>
        .myslides{
            display: none;
        }
    </style>
    <body>
        <!-- nav bar -->
        <div class="w3-top">
            <div class="w3-bar w3-black w3-card">
                <a href="#home" class="w3-bar-item w3-button w3-wide">HOME</a>
                <a href="" class="w3-bar-item w3-button">BAND</a>
                <a href="" class="w3-bar-item w3-button">TOUR</a>
                <a href="" class="w3-bar-item w3-button">CONTACT</a>
                <a href="" class="w3-bar-item w3-button">MORE</a>
                <div class="w3-right"></div>
                <a href="" class="w3-bar-item w3-button"><i class="fa fa-search"></i></a> 
            </div>
        </div>
        <!-- page content -->       
        <div class="w3-content w3-border w3-black" >
            <!-- automatic slider -->`
            <div class="myslides w3-display-container">
                <img src="img/band.jpg" alt="band"/> 
                <div class="w3-display-bottom-middle">
                    <h3>Los Angeles</h3>
                    <p>>We had the best time playing at Venice Beach!</p>
                </div>
            </div>
            <div class="myslides w3-display-container">
                <img src="img/band1.jpg" alt="band"/> 
                <div class="w3-display-bottom-middle">
                    <h3>Los Angeles</h3>
                    <p>>We had the best time playing at Venice Beach!</p>
                </div>
            </div>
            <div class="myslides w3-display-container">
                <img src="img/band2.jpg" alt="band"/> 
                <div class="w3-display-bottom-middle">
                    <h3>Los Angeles</h3>
                    <p>>We had the best time playing at Venice Beach!</p>
                </div>
            </div>            
        </div>

        <!-- band -->
        <div class="w3-content w3-padding-64 w3-center">
            <h4>THE BAND</h4>
            <p><i>We love music</i>   </p>
            <p>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <div class="w3-row w3-border w3-padding-32 ">
                <div class="w3-third ">
                    <p>Name</p>
                    <img src="img/jane.jpg" alt="image" class="w3-round w3-margin-bottom" style="width:60%;object-fit: contain"/> 
                </div>
                <div class="w3-third "  >
                    <p>Name</p>
                    <img src="img/dan.jpg" alt="image" class="w3-round w3-margin-bottom" style="width:60%;object-fit: contain"/> 
                </div>
                <div class="w3-third "  >
                    <p>Name</p>
                    <img src="img/john.jpg" alt="image" class="w3-round w3-margin-bottom" style="width:60%;object-fit: contain"/> 
                </div>

            </div>
        </div>
        <!--tour dates -->
        <div class="w3-display-container w3-padding-32 w3-border w3-black">
            <div class=" w3-container">
                <h3 class="w3-center">TOUR DATES</h3>
                <p  class="w3-center"> <i >Remember to book your tickets</i> </p>
            </div>
            <div class="w3-container" style="border:1px solid gray;margin:0px 100px;background-color: white" >
                <div style="margin:0px 50px;color: black" style="background-color: white">September
                    <span style="color:red" >sold out</span>
                </div> <hr>
                <div style="margin:0px 50px;color:black" style="background-color: white">October
                    <span style="color:red" >sold out</span>
                </div> <hr>
                <div style="margin:0px 50px;color:black" style="background-color: white">November
                 <span style="color:red">3</span><hr>
                
            </div>
        </div>
            
            
        </div>
    </body>
</html>
