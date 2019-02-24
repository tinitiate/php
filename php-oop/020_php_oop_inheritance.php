<!--
TOPIC:
PHP OBJECT ORIENTED PROGRAMMING - CONSTRUCTORS

NOTES:
+ PHP OBJECT ORIENTED PROGRAMMING - CLASS
+ OBJECT ORIENTED PROGRAMMING (OOP), 
+ Inheritance is the ability of php class to inherit methods and variables of a 
  parent class ,   This feature is very useful to eliminate code rewriting and 
  provides functionality separation and over all application maintainability.
+ Upon inheritance, the child class can use the functions and variables 
  of the parent class as its own.

FILE-NAME:
020_php_oop_inheritance.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP PHP OBJECT ORIENTED PROGRAMMING INHERITANCE. </h3>";
   echo "<h6> <font color=red> FILE NAME:- 020_php_oop_inheritance.php</font></h6>";
   echo "</br>";
   echo "<hr>";
   echo "<h6> <font color=blue> OOP Inheritance Demonstration </font> </h6>";
   echo "<hr>";

   // Create a Parent Class
   class PHPClassParent
   {
       // Create an Attribute of the class
       var $parent_var1 = 'This is Parent Var 1';
       var $parent_var2 = 'This is Parent Var 1';
      
       // Create parent class function that prints a message
       public function ParentFunction1()
       {
           echo "This is parent class function 1"."<br/>";
       }
       
       // Create another parent class function that prints a message
       public function ParentFunction2()
       {
           echo "This is parent class function 2"."<br/>";
       }
   }

   // This is the child class "EXTENDING" the Parent Class
   class PHPClassChild extends PHPClassParent
   {
      // Attributes of Child Class
      var $child_var1 = 'This is a Child Class variable';
      
      // No methods in this class
   }

   // Create an Object of the Class
   // This will automatically run the 
   // contents in the CONSTRUCTOR
   $obj_phpclass = new PHPClassChild();

   // Call the method of the ChildClass object
   $obj_phpclass->ParentFunction1();
   $obj_phpclass->ParentFunction2();

   // Destroy the object using the "unset"
   unset($obj_phpclass);

?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Object Oriented Programming Inheritance
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->