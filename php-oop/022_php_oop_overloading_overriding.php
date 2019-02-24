<!--
TOPIC:
PHP OBJECT ORIENTED PROGRAMMING - Overriding

NOTES:
+ PHP OBJECT ORIENTED PROGRAMMING - CLASS
+ OBJECT ORIENTED PROGRAMMING (OOP), Overriding
+ Overriding:
  It the feature that OOP provides, where in a Child class can have methods 
  (functions) and attributes(variables) with same names as the functions and 
  variables of its inherited parent class.
+ The Child class Methods/Attributes take higher precendence over
  the parent class.

FILE-NAME:
022_php_oop_overriding.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP PHP OBJECT ORIENTED PROGRAMMING Overriding. </h3>";
   echo "<h6> <font color=red> FILE NAME:- 022_php_oop_overriding.php</font></h6>";
   echo "</br>";
   echo "<hr>";
   echo "<h6> <font color=blue> OOP Overriding Demonstration </font> </h6>";
   echo "<hr>";

   // Create a Parent Class
   // with methods and attributes
   class ParentClass {

      // Attribute / Variable
      public $Var1 = "This is Parent Class";

      // Method / Function
      public function Func1() {
         echo "This is Parent Class Func1";
      }
   }


   // Create Child class with the same method and attribute names
   // as the parent class
   class ChildClass extends ParentClass {
      // Attribute / Variable
      public $Var1 = "This is Child Class";

      // Method / Function
      public function Func1() {
         echo "This is Child Class Func1";
      }
   }

   // Create an Object of the Clhild Class
   $Obj1 = new ChildClass();

   // Print the Variable of the Object
   echo "$Obj1->Var1","<br/>";
   $Obj1->Func1();

   // This prints the data / message from the child class
   // as the same name Child class method/attribute takes a higher precedence
   // over the parent class method/attribute of similar names.
?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Object Oriented Programming Overriding
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->