<!--
TOPIC:
PHP OBJECT ORIENTED PROGRAMMING - FINAL

NOTES:
+ PHP OBJECT ORIENTED PROGRAMMING - CLASS
+ OBJECT ORIENTED PROGRAMMING (OOP), Overloading
+ FINAL KEYWORD : Any method or class that declared as Final
  cannot be overridden or inherited by another class

FILE-NAME:
024_php_oop_final_keyword.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   //======================================
   // NOTE THIS SCRIPT WILL THORW AN ERROR
   //======================================
   echo "<h3> Tinitiate.com PHP PHP OBJECT ORIENTED PROGRAMMING FINAL. </h3>";
   echo "<h6><font color=red> FILE NAME:- 024_php_oop_final_keyword.php</font></h6>";
   echo "</br>";
   echo "<hr>";
   echo "<h6> <font color=blue> OOP FINAL KEYWORD Demonstration </font> </h6>";
   echo "<hr>";

   // A class with same name methods
   class FinalTestParent {

      // Final Attribute/variable
      final public $var1 =  "This is a test";

      // Final Create a Function
      // This function cannot be overridden in the child class
      final public function cannot_override() {
         //
         echo "This Is FinalTestParent.cannot0override"."<br/>";
      }
   }

   class FinalTestChild extends FinalTestParent {

      // This will throw an error
      public function cannot_override() {}
   }

?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Object Oriented Programming Final Keyword
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->