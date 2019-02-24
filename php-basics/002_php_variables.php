<!--
TOPIC:
PHP - Variables

NOTES:
* A variable is a storage area to hold a value of a specific datatype
* PHP variable syntax usage it must start with a "$" sign
* variable names can only start with a letter or underscore (_) and
  must contain only alpha-numeric characters
* Variable names are case sensitive

FILE-NAME:
002_php_variables.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->

<html>
   <body>
      <h3> Tinitiate.com PHP Variables. </h3>
      <h6> <font color=red> FILE NAME:- 002_php_variables.php </font></h6>
      </br>
      <!-- PHP Code from here -->
      <?php
         // Create Numeric variables and assign values to them
         echo "Create variables \$v1 and \$v2 </br>";
         $v1 = 5;
         $v2 = 6;

         // Using basic ADDITION (+) operator
         echo 'Add the variables $v1 and $v2'."</br>";
         $v3 = $v1+$v2;

                  // Print the variable $v3
         echo 'Value of $v3: '."$v3";

         // Create different types of variables
         $String = "Tinitiate";
         $Integer = 123;
         $Float = 99.99;

         echo '$String  value:'," $String </br>";
         echo '$Integer value:'." $Integer </br>";
         echo '$Float value:'." $Float </br>";

      ?>
   </body>
</html>

<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Variables
TAGS-END -->