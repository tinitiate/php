<!--
TOPIC:
PHP OBJECT ORIENTED PROGRAMMING - CLASS and OBJECTS

NOTES:
+ PHP OBJECT ORIENTED PROGRAMMING - CLASS
+ OBJECT ORIENTED PROGRAMMING (OOP), 
+ Member Functions with arguments / parameters.

FILE-NAME:
018_php_oop_constructors.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP PHP OBJECT ORIENTED PROGRAMMING </h3>";
   echo "<h6><font color=red> FILE NAME:- 018_php_oop_constructors.php</font></h6>";
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

       // Create a method without parameters
       public function PrintData() {
           echo ""."<br/>";
           echo $this->string_var."<br/>";
           echo $this->int_var."<br/>";
       }
       
       // Create a Method with parameters (or Arguments)
       public function AddNumbers($Num1, $Num2) {
            // Print the SUM of the parameters of this method $Num1, $Num2
            echo "Sum of $Num1 + $Num2 : ".$Num1 + $Num2;
       }
   }

   // Create an Object of the Class
   $obj_phpclass = new PHPClass();

   // Call the method of the Class from the Object of the class
   $obj_phpclass->PrintData();

   // Call the method of the Class from the Object of the class
   $obj_phpclass->AddNumbers(10, 20);

?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Object Oriented Programming Class and Objects
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->