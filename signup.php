<?php

require 'C:\wamp\www\ecommerce\includes\common.php';

//can be visited by logged out users only
if (isset($_SESSION['email'])) 
    {  
    header('location: products.php'); 
    } 
 ?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sign Up</title>
   <!-- External css file index.css placed in the folder css is linked -->
       
   <link rel="stylesheet" href="mycss.css" type="text/css"> 
        
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <body>
        
         <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.phph"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
        </div>
      </div>
    </nav>
        
        
        
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>SIGN UP</h4>
                        </div>
                        <div class="panel-body">
                            
                            <form action="signup_script.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Name" name="name" required = "true">
                                </div>
                                    
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Contact" name="contact" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Address" name="adress" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="City" name="city" required = "true">
                                </div>
                                
                                
                                <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                            </form><br/>
                        </div>
                    </div>
                </div>
            </div>
        
   
     
    <?php
    
        include 'C:\wamp\www\ecommerce\includes\footer.php';
       
    ?>
    </body>
</html>


