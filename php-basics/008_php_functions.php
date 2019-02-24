<!--
TOPIC:
PHP - FUNCTIONS

NOTES:
+ PHP Functions are named code blocks.The advantages of creating functions is
  to call the function name instead of repeating the entire code over and over.
+ Function will not execute automatically when a page loads, but will be executed 
  when a the function is called.
+ Functions with arguments
+ Functions with return statement

FILE-NAME:
008_php_functions.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->

<html>
   <body>
      <h3> Tinitiate.com PHP ARRAYS. </h3>
      <h6> <font color=red> FILE NAME:- 008_php_functions.php </font></h6>
      </br>
      <!-- PHP Code from here -->
      <?php
         // ===============
         // PHP FUNCTIONS
         // ===============
         
         // Create a function using the keyword "function", followed by function-name
         // in this case TinitiateFn, also note the brackets.
         function TinitiateFn()
         {
            // Code Block
            echo "Welcome to Tinitiate"."<br>";
         }

         TinitiateFn(); // calling the function TinitiateFn

         
         // =========================
         // FUNCTIONS WITH ARGUMENTS
         // =========================
   
         // ARGUMENTS: They are inputs to functions
         // Create functions with arguments
         function TinArgsFn($data1)
         {
            // Code Block
            echo "The input argument to the function TinArgsFn is: $data1"."<br>";
         }

         TinArgsFn("Tinitiate");
         // calling the function TinArgsFn with argument "Tinitiate" 
         TinArgsFn("Test"); // calling the function TinArgsFn with argument "Test"
         
         // ==================================
         // FUNCTION WITH MULTIPLE ARGUMENTS
         // ==================================
         
         // Create functions with arguments
         function AdderFn($Num1, $Num2)
         {
            // Code Block
            $sum = $Num1 + $Num2;
            echo "$Num1 + $Num2 = $sum"."<br>";
         }

         // Call the AdderFn
         AdderFn(1, 10);
         AdderFn(11, 19);
         
         // =============================
         // FUNCTIONS RETURNING VALUES
         // =============================
         function AdderRetFn($num1, $num2)
         {
            $sum=$num1+$num2;
            return $sum;
         }

         // Calling a returning function
         $mySum = AdderRetFn(1,2);
         echo $mySum;
      ?>

<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Functions
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->