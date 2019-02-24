<!--
TOPIC:
PHP OBJECT ORIENTED PROGRAMMING - Access Modifiers

NOTES:
+ PHP OBJECT ORIENTED PROGRAMMING - CLASS
+ OBJECT ORIENTED PROGRAMMING (OOP), Access Modfiers
+ Access Modfiers are directives that define the visibility of Class members
  - Variables and Methods
  - There are THREE types of access modifiers
  -  public: Variables and functions can be accessed anywhere
             in a script after the object has been instantiated
  -  protected: Variables and functions can be accessed only within the
                class that defines them, parent classes,or inherited classes
  -  private: Private properties and methods can only be accessed by the 
              class that defines them

FILE-NAME:
021_php_oop_access_modifiers.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP PHP OBJECT ORIENTED PROGRAMMING Access Modifiers. </h3>";
   echo "<h6> <font color=red> FILE NAME:- 021_php_oop_access_modifiers.php</font></h6>";
   echo "</br>";
   echo "<hr>";
   echo "<h6> <font color=blue> OOP Access Modifiers Demonstration </font> </h6>";
   echo "<hr>";

   class parentClass {

      //================
      // PUBLIC Variable
      //================
      // Creating a Public variable, This should be accessable by All Classes
      // (Inherited and a class creating its object)
      public  $PUBLIC_VAR  = "This is a Public Variable";

      //================
      // PRIVATE Variable
      //================
      // Creating a private variable, This should be only accessable this Class
      private  $PRIVATE_VAR = "This is a Private Variable";

      //================
      // PROTECTED Variable
      //================
      // Creating a protcted variable, This should be accessable by this Class
      // and the Inherited class
      protected  $PROTECTED_VAR = "This is a Protected Variable";

      // Access the private Variable
      // and print them to screen from this function
      public function printPrivate() {
         echo "This is a message from Parent Class"."</br>";
         echo "Private Var value: $this->PRIVATE_VAR"."</br>";
      }

      // Access the private Variable
      // and print them to screen from this function
      public function printProtected() {
         echo "This is a message from Parent Class"."</br>";
         echo "Protected Var value: $this->PROTECTED_VAR"."</br>";
      }


   }

   $Object1 = new parentClass();
   $Object1->printPrivate();

   // Create a child class "child", Inheriting parentClass
   class childClass extends parentClass {

   }

   // Create an Object of the ChildClass
   $Object2 = new childClass();

   // Access and Print Variables from the Parent Class,
   // Using the Child Class objects
   echo "$Object2->PUBLIC_VAR"."<br/>";
   // Call the printProtected() function
   $Object2->printProtected();
?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Object Oriented Programming Access Modifiers Public Private Protected
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->