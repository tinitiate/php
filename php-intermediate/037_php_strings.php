<!--
TOPIC:
PHP - Handling Strings and String Functions

NOTES:
+ PHP working with strings
+ PHP String functions, Change String Case strtoupper() strtolower()
+ PHP strpos(), get the position of a pattern from a string
+ PHP substr(), Extract a part of the string

FILE-NAME:
037_php_strings.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP Working with Strings </h3>";
   echo "<h6> <font color=red> FILE NAME:- 037_php_strings.php </font> </h6>";
   echo "</br>";
   echo "<hr>";

   // PHP working with Strings
   $var_string_1 = "Welcome to Tinitiate.com";
   $var_string_2 = "Lets Learn to Code !!";

   // ===============================================================
   // strlen() : built-in function to display the length of a string
   // ===============================================================
   echo strlen($var_string_1); // Display string variable's length
   echo "<br/>";

   echo strlen("tinitiate.com"); // display the length of a literal string
   echo "<br/>";


   // ====================================================================
   // Concatenating Strings : Append two strings with the DOT(.) operator
   // ====================================================================
   echo $var_string_1.$var_string_2; // Appending String Variables
   echo "<br/>";

   echo "tinitiate".".com"; // Appending String Literals
   echo "<br/>";


   // ==============================
   // Strings UpperCase / LowerCase
   // ==============================
   echo strtoupper("tIniTiATe")."<br/>";
   echo strtolower("tIniTiATe")."<br/>";

   // Title Case / Camel Case
   echo ucwords("this is tinitiate")."<br/>";


   // ===============================================
   // String Accessing Parts of Strings, by position
   // ===============================================

   // Find the position of the word "code"
   echo strpos("learn to code","code");   // OUTPUT: 9
   echo "<br/>";

   // SUBSTR: Sub-String, Extract part of the string between a position
   // and length from that position
   echo substr("tinitiate", 1, 8);
   echo "<br/>";
   
   // In the above substr() we extract from position 1 to 8 positions from "1"
   // STRING:   tinitiate
   // POSITION: 012345678
   //            initiate   (Start from 1 count 8), this is substr("tinitiate", 1, 8);

   // A trivial Substring Example
   // extract the email provider from the below email address:

   $myEmail = "supercoder@email.com";

   $ampPos = strpos($myEmail,"@"); // Get Ampersand(@) position

   // get the length of the string from the "@" to end of email string
   $mailHostLength = strlen($myEmail)-$ampPos;

   // now extract the mail host, excluding the "@" position   
   // Using the "substr" function
   echo substr($myEmail,$ampPos+1,$mailHostLength); // OUTPUT: email.com
?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP working with Strings String Functions strtoupper() strtolower()
substr()  strpos()
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->