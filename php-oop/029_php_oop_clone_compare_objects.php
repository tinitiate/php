<!--
TOPIC:
PHP OBJECT ORIENTED PROGRAMMING - Clone and Compare Objects

NOTES:
+ PHP OBJECT ORIENTED PROGRAMMING - CLASS
+ OBJECT ORIENTED PROGRAMMING (OOP), Clone and Compare Objects
+ Compare Objects, In PHP the objects can be compared using the == 
  operator, Identity operator (===), object variables are identical 
  if and only if they refer to the same instance of the same class
+ Cloning Objects using the Clone keyword

FILE-NAME:
029_php_oop_clone_compare_objects.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   //======================================
   // NOTE THIS SCRIPT WILL THORW AN ERROR
   //======================================
   echo"<h3>Tinitiate.com PHP PHP OBJECT ORIENTED PROGRAMMING Clone and
             Compare Objects</h3>";
   echo"<h6><font color=red> FILE NAME:-029_php_oop_clone_compare_objects.php</font>
        </h6>";
   echo"</br>";
   echo"<hr>";
   echo"<h6><font color=blue>OOP Clone and Compare Objects Demonstration</font></h6>";
   echo"<hr>";

   // Create a test class
   class testTin {

      public $ClassVAR;

      // Create Getters and Setters
      function setClassVAR($ClassVAR){
         $this->ClassVAR = $ClassVAR;
      }
      function getClassVAR(){
         echo $this->$ClassVAR ."<br/>";
      }
   }

   //--------------------------------
   // The Double equal operator (==)
   //--------------------------------

   // This is used to compare objects of different instances of the

   // Create an Object(1) of the Class testTin
   $Object1 = new testTin();
   $Object1->setClassVAR("Value1");

   // Create an Object(2) of the Class testTin, with
   // a different object value
   $Object2 = new testTin();
   $Object1->setClassVAR("Value2");

   // Compare the Objects, using the "==" operator
   if ($Object1->ClassVAR == $Object2->ClassVAR) {
      echo '$Object1 and $Object2 are equal'."<br/>";
   } else {
      echo '$Object1 and $Object2 are NOT equal'."<br/>";
   }

   // expected OUTPUT should be: $Object1 and $Object2 are NOT equal


   //--------------------------------
   // The Identity operator (===)
   //--------------------------------

   // identity operator (===), object variables are identical if and only if they 
   // refer to the same instance of the same class.
   // Create an Object(1) of the Class testTin
   $Object1 = new testTin();
   $Object1->setClassVAR("Value1");

   //create another object by cloning the
   // By cloning the objects become identical
   $Object2 = clone $Object1;

   // Compare the Objects, using the "==" operator
   if ($Object1->ClassVAR == $Object2->ClassVAR) {
      echo '$Object1 and $Object2 are equal'."<br/>";
   } else {
      echo '$Object1 and $Object2 are NOT equal'."<br/>";
   }

   // expected OUTPUT should be: $Object1 and $Object2 are equal

?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Object Oriented Programming Clone and Compare Objects
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->