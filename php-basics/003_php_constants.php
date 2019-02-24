<!--
TOPIC: PHP - Constants

NOTES:
+ A constant is an identifier (name) for a simple value. As the name suggests, 
  that value cannot change during the execution of the script.

FILE-NAME:
003_php_constants.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->

<html>
   <body>
      <h3> Tinitiate.com PHP Constants and Operators. </h3>
      <h6> <font color=red> FILE NAME:- 003_php_constants_operators.php </font></h6>
      </br>
      <!-- PHP Code from here -->
      <?php
         // ==============
         // PHP CONSTANTS
         // ==============
         // 1) To create a PHP Constant, use the define() function 
         // First param is the variable name and the second is the variable value
         define("TINITIATE","Welcome to Tinitiate.com!!");
         echo TINITIATE."</br>";
         
         // Using this will raise an exception in the output as the constant is CASE
         -SENSITIVE
         // echo tinitiate."</br>"; 
         
         // 2) The name of the constant TINITIATE is case in-sensitive
         // to create a case-insensitive constant use:
         define("TINITIATE_NEW","Welcome to Tinitiate.com!!",true);
         echo TINITIATE_NEW."</br>";
         echo tinitiate_new."</br>";
      ?>
   </body>
</html>

<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Constants
TAGS-END -->