<!--
TOPIC:
PHP OBJECT ORIENTED PROGRAMMING - INTERFACE

NOTES:
+ PHP OBJECT ORIENTED PROGRAMMING - CLASS
+ OBJECT ORIENTED PROGRAMMING (OOP), INTERFACE
+ Interfaces are templates, which have Method declarations
  but not definition or implementation.
+ In order to implement the method a class must,  
  "IMPLEMENT" the interface
+ Difference between Abstract Class, Interface and Traits
+ ABSTRACT CLASS
  Its part of inheretance, where the Child class, Must implement
  (define what the method must do), if any method is declared as
  ABSTRACT, for all other methods in the abstract class, they may 
  or may not be implemented
+ INTERFACE
  Its part of inheretance where a class "implements" all the
  methods from the interface.
  An interface defines a set of methods that the implementing class 
  must implement.
+ TRAITS
  Traits are implementations of the methods similar to interface, 
  but the implementation is already done in the trait

FILE-NAME:
027_php_oop_interface.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   //======================================
   // NOTE THIS SCRIPT WILL THORW AN ERROR
   //======================================
   echo "<h3> Tinitiate.com PHP PHP OBJECT ORIENTED PROGRAMMING Interface. </h3>";
   echo "<h6> <font color=red> FILE NAME:- 027_php_oop_interface.php </font> </h6>";
   echo "</br>";
   echo "<hr>";
   echo "<h6> <font color=blue> OOP Interface Demonstration </font> </h6>";
   echo "<hr>";

   // Interface declaration
   interface iTinitiate
   {
      public function coolMethod($var1);
      public function greatMethod();
   }

   // Class implementing the interface "iTinitiate"
   class tImplementer implements iTinitiate
   {
      // Method greatMethod being implemented or in simple words, code for
      // the method is written here only the Method is defined in the interface
      public function greatMethod() {
         echo "PHP is COOL"."<br/>";
      }

      // Implement the method coolMethod()
      public function coolMethod($var1) {
         echo '$var1 value'.":$var1"."<br/>";
      }
   }

   // Create an object of the class and execute the method
   $obj = new tImplementer();
   $obj->greatMethod();
   $obj->coolMethod("Tinitiate");

?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Object Oriented Programming Interface
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->