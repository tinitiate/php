<!--
TOPIC:
PHP OBJECT ORIENTED PROGRAMMING - Object Serialization

NOTES:
+ PHP OBJECT ORIENTED PROGRAMMING - CLASS
+ OBJECT ORIENTED PROGRAMMING (OOP), Object Serialization
+ serialization creates a byte-stream representation of an object,
  Since all objects are binary datatype, we can save an object,using the
  serialize() function. This will save the state of the object
  with all the original variable values.
+ To retrive the object back, we use the method unserialize()

FILE-NAME:
031_php_oop_object_serialization.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   //======================================
   // NOTE THIS SCRIPT WILL THORW AN ERROR
   //======================================
   echo "<h3>
             Tinitiate.com PHP PHP OBJECT ORIENTED PROGRAMMING  Object Serialization 
         </h3>";
   echo "<h6>
            <font color=red> FILE NAME:- 031_php_oop_object_serialization.php</font> 
         </h6>";
   echo "</br>";
   echo "<hr>";
   echo "<h6> <font color=blue> OOP Object Serialization Demonstration</font></h6>";
   echo "<hr>";

   // Create a Class
   class TinTest {

      // Create a variable
      public $Var1;

      // Create a function
      public function TinFunc($Param) {
         // Print the value
         echo "Value of the Param: $Param ";
      }
   }

   // Create an object of the class
   $obj = new Tintest();

   // Assign a value to the Objects (class) Variable
   $obj->var1 = 100;
   // Call the function with a parameter value
   $obj->TinFunc(1000);

   // Serialize the object and save in variable $SavedObject
   $SavedObject = serialize($obj);

   // remove all references to the object (Clear the variable)
   // using UNSET function
   unset($obj);

   // The below line will throw an error,as the object is cleared
   // echo $obj->Var1;

   // Retrive the object again from the variable $SavedObject
   // using the UNSERIALIZE() function
   $obj = unserialize($SavedObject);

   // Now the value will be printed as we recreated the object
   echo "<br/>".$obj->var1;

?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Object Oriented Programming  Object Serialization
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->