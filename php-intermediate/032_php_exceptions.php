<!--
TOPIC:
PHP - EXCEPTIONS

NOTES:
+ PHP EXCEPTIONS
+ Exceptions are runtime errors, caused by unhandled code.
+ Most common exception is type mismatch or divide by zero or
  any other business condition.
+ All exceptions are handled in a TRY {} block and the
  code to handle the exception is handled in the catch {} block.
+ When an exception is thrown, code following the statement
  will not be executed.

FILE-NAME:
032_php_exceptions.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php

   echo "<h3> Tinitiate.com PHP PHP OBJECT ORIENTED PROGRAMMING Exceptions. </h3>";
   echo "<h6> <font color=red> FILE NAME:- 032_php_exceptions.php </font> </h6>";
   echo "</br>";
   echo "<hr>";
   echo "<h6> <font color=blue> OOP EXCEPTION Demonstration </font> </h6>";
   echo "<hr>";

   // Define an exception
   function bonusCheck($bonusPercent) {
      // Check if the bonus is greater than 20% and if yes raise an exception
      if($bonusPercent > 20) {
        // Raise an exception using THROW keyword
        throw new exception ("Bonus Cannot be Greater than 20%");
      }
      // Return something
      return true;
   }
   // Sample block with exception
   try {
      // =====================
      // EXCEPTION SIMULATION
      // =====================
      // Try to simulate a bonus failure scenario
      $GreatEmployeeBounsPercent = 30;
      bonusCheck($GreatEmployeeBounsPercent);

      // More code
      echo "Bounus is $GreatEmployeeBounsPercent";
      //--------------------------------
      // THIS CODE WILL NOT BE EXECUTED
      // AS EXCEPTION IS ENCOUNTERED
      //--------------------------------
      echo "This is Tinitiate PHP Coding";
   }
   // The CATCH block will execute, once the exception
   // code is encountered in execution
   catch (Exception $e) {
      echo "Exception Message".$e->getMessage(); // Print the error message
   }
?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Object Oriented Programming Exceptions
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->