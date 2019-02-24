<!--
TOPIC:
PHP OBJECT ORIENTED PROGRAMMING - FINAL

NOTES:
+ PHP OBJECT ORIENTED PROGRAMMING - CLASS
+ OBJECT ORIENTED PROGRAMMING (OOP), Overloading
+ STATIC KEYWORD : static class properties or methods are
  accessible without the need of and object of the class.
  A property declared as static cannot be accessed with an
  instantiated class object (though a static method can).
+ Static properties cannot be accessed through the object using the 
  arrow operator ->.
+ PHP static variable, static properties may only be initialized 
  using a literal or constant

FILE-NAME:
025_php_oop_static_keyword.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   //======================================
   // NOTE THIS SCRIPT WILL THORW AN ERROR
   //======================================
   echo"<h3>Tinitiate.com PHP PHP OBJECT ORIENTED PROGRAMMING Static Keyword.</h3>";
   echo"<h6><font color=red> FILE NAME:-023_php_oop_Static_keyword.php</font></h6>";
   echo"</br>";
   echo"<hr>";
   echo"<h6> <font color=blue> OOP STATIC KEYWORD Demonstration </font> </h6>";
   echo"<hr>";

   // A class with same name methods
   class StaticTest {
      // Declare a STATIC attribute
      static $var1 = "This value is fixed and cannot be changed";

      // Static method
      public static function StaticMet() {
         echo "This is a message from the Static method: StaticMet";
      }
   }

   // Call the Static Method and member without creating an object.
   echo "Static variable value: ".StaticTest::$var1."<br/>";

   // Call the Static Method
   StaticTest::StaticMet();
?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Object Oriented Programming Static Keyword
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->