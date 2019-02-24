<!--
TOPIC:
PHP OBJECT ORIENTED PROGRAMMING - CLASS

NOTES:
+ PHP OBJECT ORIENTED PROGRAMMING - CLASS
+ OBJECT ORIENTED PROGRAMMING (OOP), 
+ OOP is a programming approach to write modular code
  where the code can be reused by writing once.
+ Its radically different from traditional functional programming.
+ Class is a DataType + Some Operations (Properties).
+ Class has Attributes and Methods (Functions)
+ An instance (A runtime copy) of a class is Object.
+ Objects enable re-usable code (copy of the class)

FILE-NAME:
017_php_oop_class.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP PHP OBJECT ORIENTED PROGRAMMING </h3>";
   echo "<h6> <font color=red> FILE NAME:- 017_php_oop_class.php </font> </h6>";
   echo "</br>";
   echo "<hr>";
   echo "<h6> <font color=blue> CLASS and Object Demonstration </font> </h6>";
   echo "<hr>";

   // Create a Simple Class
   class PHPClass
   {
       // Create an Attribute of the class
       var $string_var = 'A String Value';
       var $int_var    = 12345;

       // Create a method of the class
       public function PrintData() {
           echo ""."<br/>";
           echo $this->string_var."<br/>";
           echo $this->int_var."<br/>";
       }
   }

   // Create an Object of the Class
   $obj_phpclass = new PHPClass();

   // Call the method of the Class
   $obj_phpclass->PrintData();
?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Object Oriented Programming Class example
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->