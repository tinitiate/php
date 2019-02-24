<!--
TOPIC:
PHP - ERROR HANDLING

NOTES:
+ PHP ERROR HANDLING
+ DIE() or the exit() function, This exits the script with a message
  when an error condition is encountered.

FILE-NAME:
032_php_error_handling.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php

   echo "<h3> Tinitiate.com PHP PHP OBJECT ORIENTED PROGRAMMING ERROR HANDLING. </h3>";
   echo "<h6> <font color=red> FILE NAME:- 032_php_error_handling.php </font> </h6>";
   echo "</br>";
   echo "<hr>";
   echo "<h6> <font color=blue> PHP ERROR HANDLING </font> </h6>";
   echo "<hr>";

   // ===============
   // ERROR SCENARIO
   // ===============
   // Create a Exception Scenario
   // Try to Open a non existent file
   $file=fopen("tinitiate.txt","r"); // This will create an error message

   
   // ========================
   // ERROR HANDLING SCENARIO
   // ========================  

   // Syntax #1
   // Checking the function using the "IF" Condition, with die()
   if(!file_exists("tinitiate.txt")) {
     die("File tinitiate.txt not found");
   }


   // Syntax #2
   // Checking the function using the "exit()" Function with "or" Condition
   // NOTE: This wont execute as the Syntax#1 already exited the program
   file_exists("tinitiate.txt") or  exit("File tinitiate.txt not found");


   // Syntax #3
   // Checking the function using the "die()" Function with "or" Condition
   // NOTE: This wont execute as the Syntax#1 already exited the program
   file_exists("tinitiate.txt") or  die("File tinitiate.txt not found");
?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Object Oriented Programming Exceptions
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->