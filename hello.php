<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">  
  <script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>  
  <style>
      img {
  max-width: 100%;
  height: auto;
}
      </style>
  

</head>
<body class="bg-light">

   <?php
    include("navbarhead.php");
    ?>
   
    <div class="container-fluid bg-light">
<!--navbar-->
<!--

-->
 <!--    below this side list -->
   <div class="float-left col-md-2">
<!--    <div class="list-group col-md-4 text-center">-->
    <h3 class="text-center" style="margin-left:-30px;">Related Topics</h3>
    <div class="card" style=" width:215px;margin-left:-16px; ">
<a href="Introduction.php" class="list-group-item list-group-item-action " id="link" ><strong>Introduction</strong></a>
        <a href="Environment.php" class="list-group-item list-group-item-action" id="link"><strong>Environment</strong> </a>
        <a href="hello.php" class="list-group-item list-group-item-action" id="link"><strong>Hello World!</strong></a>
        <a href="#" class="list-group-item list-group-item-action" id="link"><strong> Basics Concepts</strong></a>
<a href="#" class="list-group-item list-group-item-action" id="link">Variables </a>
<a href="#" class="list-group-item list-group-item-action" id="link">If Statement </a>
<a href="#" class="list-group-item list-group-item-action" id="link">Loops </a>
<a href="#" class="list-group-item list-group-item-action" id="link">Functions </a>
<a href="#" class="list-group-item list-group-item-action" id="link"> Forms</a>
<a href="#" class="list-group-item list-group-item-action"  id="link">form in Html </a>
<a href="#" class="list-group-item list-group-item-action" id="link">1st Form</a>
<a href="#" class="list-group-item list-group-item-action" id="link">Handling ip/op </a>
<a href="#" class="list-group-item list-group-item-action" id="link">This is a </a>
<a href="#" class="list-group-item list-group-item-action" id="link">This is a </a>
<a href="#" class="list-group-item list-group-item-action">This is a </a>
<a href="#" class="list-group-item list-group-item-action">This is a </a>

	
       </div>
</div>
    
    
<!--    above this list-->
        <div class="container bg-white" style="margin-left:225px; ">
            <h2 class="text-center text-success">   <strong>Your First php program</strong></h2>
       <p>   As We know that Php is an Server side scripting language. We runs our programs on server. There are a list of Php servers whch are free and open source:-
            </p>
            <ul>
    
                    <li>XAMPP<br></li>
                    <li>WAMP <br></li>
                    <li>LAMP<br></li>
                    <li>LEMP<br></li>
                    <li>MAMP<br></li>
                    <li>AMPPS</li>
                    <li>EASYPHP </li>
            </ul>
            
            <div class="container">
	<h2 class="text-center text-success">Php Environment Setup</h2>
 <p>
                           These are the list of some servers are used 
                           to run our php programs. Here We used XAMPP server For running of our program first of all we need to setup our 
                           file and our server.                           
            <p/> <h3>  <ol>
          <li> Syntax</li>
            </ol></h3>
           <div class="row">
           <img src="Images/Syntaxphp.jpg" alt="Image not found">
                 </div>
         
    <h3>  <ol>
          <li>  Variables</li>
            </ol></h3> <p>Variables are a fundamental part of any programming language. A  variable  is simply a container that holds a certain 
            value. Variables get their name because that certain value can change throughout the execution of the script. It ’ s this 
            ability to contain changing values that make variables so useful. In Php varibale is represented by $ symbol, for e.g. $x=12,<br>
            Variable names are case - sensitive ( $Variable  and  $variable  are two distinct variables).</p><br>
             
            <h4>Rules for declaring a variable</h4>
         A variable consists of two parts: the variable’s name and the variable’s value.<br>
        The first character after the dollar sign must be a letter or an underscore.<br>
        The remaining characters in the name may be letters, numbers, or underscores without a fixed limit.<br><br>
                 Some examples of PHP variable names: 
           $my_first_variable<br>
            $anotherVariable<br> $x <br>$_123    
          <br>
           <h4>Data types </h4> 
           PHP supports four scalar data types. Scalar  data means data that contains only a single value.Some e.g of Data types are given below-<br>
           Integer,float,String,boolean;<br>
           1. Integer contains only whole number e.g 11,223,9<br>
           2. Float contains decimal number e.g 2.34,77.66<br>
           3.String conatns set of character in e.g "Amit" or 'Raju'<br> 
           4.Represent either true or false e.g true<br><br>
              Now let's move towards our first Php program-
              
               <div class="row">
           <img src="Images/Helo.jpg" alt="Image not found">
                 </div>
                   <br>
<!--    Buton slider for output-->
                <center>   <button type="button" onclick="myFunction()" class="btn btn-outline-primary">Output</button> </center>
                
<br>
<div id="myDIV">
<div class="row">
<img src="Images/HeloOP.jpg" alt="Image not found!">
    </div>
</div> 
    
<!--    Buton slider for output-->
</div>   
       
        
<!--                feedback form-->
</div>
<?php
    include("footer.html");
    ?>
        </div>

</body>
</html>