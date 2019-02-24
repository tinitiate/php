<!--
TOPIC:
PHP - INCULDE, REQUIRE, REQUIRE_ONCE functions

NOTES:
+ PHP The include (or require) statement takes all the text/code/markup 
  that exists in the specified file and copies it into the file that 
  uses the include statement.
+ Include function enables us to insert the content of one PHP file into 
  another PHP file, before the server executes the script.
+ Require Function is same as include function, except that require() raises 
  a fatal error, and stops the script execution.
+ Require_once Function is identical to require(), but it will check if the 
  file has already been included, and if so not include/require it again.

FILE-NAME:
042_php_include_require.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2015
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP INCLUDE() REQUIRE() REQUIRE_ONCE() Functions </h3>";
   echo "<h6> <font color=red> FILE NAME:- 042_php_include_require.php </font> </h6>";
   echo "</br>";
   echo "<hr>";

   // INCLUDE FUNCTION
   //   Include function enables us to insert the content of one PHP file 
   //   into another PHP file, before the server executes the script.


   // Include Function;
   //  + Make sure the path and file name are mentioned
   //    This will bring the code from the "MyPHPfile.php" into this file.
   //    and compile them as a single file.
   //  + Include function ignores all errors in the include file and 
   //    reports a warning.
   include('home/users/tinitiate/MyPHPfile.php');
   
   
   // Require Function;
   //  + This is same as include function, except that require() raises 
   //    a fatal error, and stops the script execution.
   require('home/users/tinitiate/MyPHPfile.php');
   

   // Require_once Function;
   //  + The require_once() statement is identical to require(), but it will 
   //    check if the file has already been included, and if so not include/require 
   //    it again.
   require_once('home/users/tinitiate/MyPHPfile.php');
  
?>

<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Include Require Require_once
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->