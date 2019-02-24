<!--
TOPIC:
PHP OBJECT ORIENTED PROGRAMMING - TRAITS

NOTES:
+ PHP OBJECT ORIENTED PROGRAMMING - CLASS
+ OBJECT ORIENTED PROGRAMMING (OOP), ABSTRACT CLASS
+ TRAITS
  Traits are implementations of the methods similar to interface, 
  but the implementation is already done in the trait
+ Since PHP supports only single inheritance traits are very useful;
+ Difference between Abstract Class and Interface and Trait
+ ABSTRACT CLASS
  Its part of inheritance, where the Child class, Must implement
  (define what the method must do), if any method is declared as 
  ABSTRACT, for all other methods in the abstract class, they may or 
  may not be implemented
+ INTERFACE
  Its part of inheritance where a class "implements" all the methods from the interface.
  An interface defines a set of methods that the implementing class must implement. 

FILE-NAME:
028_php_oop_traits.php 

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   //======================================
   // NOTE THIS SCRIPT WILL THORW AN ERROR
   //======================================
   echo "<h3> Tinitiate.com PHP PHP OBJECT ORIENTED PROGRAMMING Traits. </h3>";
   echo "<h6> <font color=red> FILE NAME:- 028_php_oop_traits.php </font> </h6>";
   echo "</br>";
   echo "<hr>";
   echo "<h6> <font color=blue> OOP Traits Demonstration </font> </h6>";
   echo "<hr>";

   // Traits declaration and implementation
   trait TraitTinitiate
   {
      // Method greatMethod declared and implemented in the trait
      public function greatMethod() {
         echo "PHP is COOL"."<br/>";
      }
      // Delared and implemented the method coolMethod()
      public function coolMethod($var1) {
         echo '$var1 value'.":$var1"."<br/>";
      }
   }

   // Class "Using" the trait "TraitTinitiate"
   class tUser
   {
      // To use the TRAIT, the keyword "USE" is applied
      use TraitTinitiate;
   }

   // Create an object of the class and execute the method
   $obj = new tUser();
   $obj->greatMethod();
   $obj->coolMethod("Tinitiate");

?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Object Oriented Programming Traits
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->