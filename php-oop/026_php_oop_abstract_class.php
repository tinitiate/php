<!--
TOPIC:
PHP OBJECT ORIENTED PROGRAMMING - ABSTRACT CLASS

NOTES:
+ PHP OBJECT ORIENTED PROGRAMMING - CLASS
+ OBJECT ORIENTED PROGRAMMING (OOP), ABSTRACT CLASS
+ Abstract Classes are templates, which have methods declared 
  but not defined.
+ Abstract Classes need to be inherited and the child class defines 
  (or has the code) for the methods in the abstract class.
+ All the methods in the abstract class defined as abstract MUST be 
  implemented in the child class

FILE-NAME:
026_php_oop_abstract_class.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   //======================================
   // NOTE THIS SCRIPT WILL THORW AN ERROR
   //======================================
   echo"<h3>Tinitiate.com PHP PHP OBJECT ORIENTED PROGRAMMING Abstract Class.</h3>";
   echo"<h6><font color=red> FILE NAME:-026php_oop_abstract_class.php</font></h6>";
   echo"</br>";
   echo"<hr>";
   echo"<h6> <font color=blue> OOP Abstract Class Demonstration </font> </h6>";
   echo"<hr>";

   // Declare an Abstract Class with the keyword "ABSTRACT CLASS"
   abstract class AbstractClass
   {
       // abstract keyword enforces the child class to implement these methods
       abstract protected function MustImplement1();
       abstract public function MustImplement2($var1, $var2);

       // A common method
       public function Printdata() {
           echo $this->MustImplement1() . "<br/>";
       }
   }

   // Create a child class that implements the abstract class
   class implementer extends AbstractClass {

      // Implement the abstract class methods
      protected function MustImplement1() {
         return "SomeValue";
      }

      public function MustImplement2($var1, $var2) {
         // Print a message
         echo "Values of params: $var1 and $var2";
      }

   }


   // Create an object and run the class members
   $Obj1 = new implementer();

   $Obj1 -> Printdata();
   $Obj1 -> MustImplement2("A", 100);
?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Object Oriented Programming Abstract Class
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->