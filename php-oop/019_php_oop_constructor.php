<!--
TOPIC:
PHP OBJECT ORIENTED PROGRAMMING - CONSTRUCTORS

NOTES:
+ PHP OBJECT ORIENTED PROGRAMMING - CLASS
+ OBJECT ORIENTED PROGRAMMING (OOP), 
+ Constructor is a function / method that automatically runs when a class object 
  is created.
+ Constructor is a function with the name  __construct()
+ These are very useful in scenarios where a inital setup of data (variables/Arrays)
  is required.
+ Destructor is a function that is used to destroy or remove
  the object from the memory.

FILE-NAME:
019_php_oop_constructor.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP PHP OBJECT ORIENTED PROGRAMMING </h3>";
   echo "<h6><font color=red> FILE NAME:- 019_php_oop_constructor.php</font></h6>";
   echo "</br>";
   echo "<hr>";
   echo "<h6> <font color=blue> OOP Constructor Demonstration </font> </h6>";
   echo "<hr>";

   // Create a Simple Class
   class PHPClass
   {
       // Create an Attribute of the class
       var $string_var = 'A String Value';

       public function __construct()
       {
           echo "This is a message from the CONSTRUCTOR"."<br/>";
       }
   }

   // Create an Object of the Class
   // This will automatically run the 
   // contents in the CONSTRUCTOR
   $obj_phpclass = new PHPClass();

   // Destroy the object using the "unset"
   unset($obj_phpclass);

?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Object Oriented Programming Constructors and Destructors
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->