<!--
TOPIC:
PHP - Pass by reference and pass by value

NOTES:
+ PHP Pass by reference and pass by value
+ By default when a variable is assigned to another variable
  EXAMPLE:
      $v1 = 1
      $v2 = $v1
+ The above assignment "$v2 = $v1" is called as pass by Value. Where in the value 
  of $v1 is assigned to $v2
+ If $v1 is changed to say 2, the value of $v2 remains unchanged (1 in this case)
+ In order to make sure the variables $v1 and $v2 stays the same if either one 
  is changed then pass by reference must be used.
  EXAMPLE
      $v1 = 1
      $v2 = &$v1 // This is the syntax for passing by reference

FILE-NAME:
029_php_pass_by_reference_value.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP PASS BY REFERENCE and VALUE </h3>";
   echo "<h6> <font color=red> FILE NAME:- 029_php_pass_by_reference_value.php
        </font> </h6>";
   echo "</br>";
   echo "<hr>";
   echo "<h6> <font color=blue> Pass by reference and pass by value Demonstration
         </font> </h6>";
   echo "<hr>";

   //==========================
   // Passing by Value example
   //==========================

   //create a variable
   $V1 = 10;

   //Assign the $v1 to another variable
   $V2 = $V1;

   // Print the value of $v1 and $v2
   echo $V1." ".$V2."<br/>";  // OUTPUT:  10 10

   // Change $v1
   $V1 = 100;

   // Print the value of $v1 and $v2
   echo $V1." ".$V2."<br/>"; // OUTPUT:  100 10

   // Here the value of $v2 didnt change from 10to 100
   // when $v1 is changed, this because, the assignment
   // is passed by value

   //============================
   // Passing by Value Reference
   //============================

   //create a variable
   $R1 = 10;

   //Assign the $v1 to another variable, By reference,
   // using the "&" symbol
   $R2 = &$R1;

   // Print the value of $v1 and $v2
   echo $R1." ".$R2."<br/>";  // OUTPUT:  10 10

   // Change $v1
   $R1 = 100;

   // Print the value of $v1 and $v2
   echo $R1." ".$R2."<br/>"; // OUTPUT:  100 10

   // Here the value of $v2 didnt change from 10to 100
   // when $v1 is changed, this because, the assignment
   // is passed by value

   // PASSING A FUNCTION as a REFERENCE
   // The AMPERSAND (&) can be used to create
   // the pass by reference functions
   // ONLY for functions that return a value
   function &ref() {

      $Data = 100;
      // Return a value,only such functions can be passed by reference
      return $Data;
   }

   $test = ref();
   echo $test;
?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Pass by reference pass by value
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->
