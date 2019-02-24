<!--
TOPIC:
PHP OBJECT ORIENTED PROGRAMMING - Overloading

NOTES:
+ PHP OBJECT ORIENTED PROGRAMMING - CLASS
+ OBJECT ORIENTED PROGRAMMING (OOP), Overloading
+ Overloading:
  Its a feature provided many programming languages, To have the same method/Function
  name but different Argument list (Signature)
+ Overloading in PHP provides means to dynamically "create" properties and methods.
  These dynamic entities are processed via magic methods one can establish in a 
  class for various action types.
+ All overloading methods must be defined as public.

FILE-NAME:
023_php_oop_overloading.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP PHP OBJECT ORIENTED PROGRAMMING Overloading. </h3>";
   echo "<h6> <font color=red> FILE NAME:- 023_php_oop_overloading.php</font></h6>";
   echo "</br>";
   echo "<hr>";
   echo "<h6> <font color=blue> OOP Overloading Demonstration </font> </h6>";
   echo "<hr>";

   // A class with same name methods
   class OverLoadTest {

      // Create a Function
      public function overloaded() {
       // Read all the arguments passed to the function
       // using the function "func_get_args()"
       // The "func_get_args()" retrives all the arguments or parameters
       // as an array

       echo "Printing all arguments"."<br/>";
       foreach (func_get_args() as $params) {
        echo"This is an argument passed to the function overloaded:$params"."<br/>";
         }
      }
   }

   // Create an object of the class and call the over loaded methods

   $obj1 = new OverLoadTest();

   $obj1->overloaded();
   $obj1->overloaded(1);
   $obj1->overloaded(2,3);

?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Object Oriented Programming Overloading
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->