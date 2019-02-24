<!--
TOPIC:
PHP - Regular Expressions POSIX Style Functions

NOTES:
+ Regular Expressions are a sequence of characters that forms a search pattern.
+ The search pattern is used to match (search/replace) in strings.
+ POSIX Functions

   ereg  — Regular expression pattern match returns 1 if found or 0 if not found.
   eregi — Case insensitive Regular expression pattern match returns 1 if found 
           or 0 if not found.

   ereg_replace  — Replace regular expression pattern in a given string.
   eregi_replace — Replace regular expression case insensitive pattern in 
                   a given string.

   split  — Split string into array by pattern specified by a regular expression
   spliti — Split string into array by regular expression case insensitive

FILE-NAME:
044_php_regex_posix.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2015
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP Regular Expressions POSIX Functions</h3>";
   echo "<h6> <font color=red> FILE NAME:- 044_php_regex_posix.php </font> </h6>";
   echo "</br>";
   echo "<hr>";
   echo "<h6> <font color=blue> PHP Regular Expressions POSIX Functions</font> </h6>";
   echo "<hr>";

   // =======================================
   // POSIX PHP REGULAR EXPRESSIONS FUNCTIONS
   // =======================================

   
   // FUNCTION:  ereg()
   // ------------------------------------------------------------------------
   // ereg() : Regular expression match, Returns True if a match is found 
   //          with the pattern.
   // USAGE  : int ereg ( string $pattern, string $string [, array &$regs ] )
   //          returns a  0 or 1
   // ------------------------------------------------------------------------

   // All functions examples consider a Simple Regular Expression
   // Check or Find letter 'A' in the word 'JAVA'

   echo ereg("A", "JAVA", $regs); // OUTPUT: 1
   echo $regs[0];                 // OUTPUT: A


   // Capture the return value from "ereg"
   $retval = ereg("A", "JAVA", $regs);
   
   echo $retval;                  // OUTPUT: 1


   echo "</br>";
   // FUNCTION:  eregi()
   // ------------------------------------------------------------------------
   // eregi() : Regular expression match, Returns True if a non case 
   //           sensitive match is found with the pattern.
   // USAGE  : int eregi ( string $pattern, string $string [, array &$regs ] )
   //          returns a  0 or 1
   // ------------------------------------------------------------------------

   // All functions examples consider a Simple Regular Expression
   // Check or Find letter 'A' in the word 'JAVA'

   echo eregi("a", "JAVA", $regs); // OUTPUT: 1
   echo $regs[0];                 // OUTPUT: A


   // Capture the return value from "ereg"
   $retval = eregi("a", "JAVA", $regs);
   
   echo $retval;                  // OUTPUT: 1



   echo "</br>";
   // FUNCTION:  ereg_replace()
   // ------------------------------------------------------------------------
   // ereg_replace() : Regular expression match, Replaces the pattern found in 
   //                  the string match with the replace string.
   // USAGE  : string ereg_replace ( string $pattern, 
   //                                string $replacement,
   //                                string $string )
   //          returns back the replaced string
   // ------------------------------------------------------------------------

   echo str_replace("JAVA", "PHP", "JAVA is cool"); // OUTPUT: PHP is cool 

   // Here the output is saved in the $output variable
   $output = str_replace("JAVA", "PHP", "JAVA is cool");
   
   // Print the variable $output
   echo $output;  // PHP is cool

   
   
   echo "</br>";
   // FUNCTION:  ereg_replacei()
   // ------------------------------------------------------------------------
   // ereg_replace() : Regular expression match, Replaces the pattern found in 
   //                  the string match with the replace string.
   // USAGE  : string ereg_replace ( string $pattern, 
   //                                string $replacement,
   //                                string $string )
   //          returns back the replaced string
   // ------------------------------------------------------------------------

   // Here we will replace JAVA in the string "JAVA is cool" with PHP
   // Results in "PHP is cool"

   echo str_replace("JAVA", "PHP", "JAVA is cool"); // OUTPUT: PHP is cool 


   // Here the output is saved in the $output variable

   $output = str_replace("JAVA", "PHP", "JAVA is cool");

   
   // Print the variable $output

   echo $output;  // PHP is cool   

   
   
   echo "</br>";
   // FUNCTION:  split()
   // ------------------------------------------------------------------------
   // split() : Split a given string into array by regular expression
   //                  pattern, The pattern acts like a delimiter.
   //
   // USAGE  : array split ( string $pattern,
   //                        string $string [, int $limit = -1 ] )
   //          returns back the replaced string
   // ------------------------------------------------------------------------

   // Here we will split the string "PHP is cool" into an array of elements 
   // PHP, is, cool by separating the string with SPACE as the delimiter

   $out_array = split(" ", "PHP is cool"); // OUTPUT: PHP is cool 

   // Print the array output
   
   echo $out_array[0]."</br>";
   echo $out_array[1]."</br>";
   echo $out_array[2]."</br>";

  
   echo "</br>";
   // FUNCTION:  spliti()
   // ------------------------------------------------------------------------
   // spliti() : Split a given string into array by regular expression
   //            case insensitive pattern, The pattern acts like a delimiter.
   //
   // USAGE  : array spliti ( string $pattern,
   //                        string $string [, int $limit = -1 ] )
   //          returns back the replaced string
   // ------------------------------------------------------------------------

   // Here we will split the string "PHP is cool" into an array of elements 
   // PHP, is, cool by separating the string with SPACE as the delimiter

   $out_array = split(" ", "PHP is cool"); // OUTPUT: PHP is cool 

   // Print the array output
   
   echo $out_array[0]."</br>";
   echo $out_array[1]."</br>";
   echo $out_array[2]."</br>";
   
?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP POSIX, PHP, REGULAR EXPRESSIONS, regexone,regular expressions,regex,regexp,learn,tutorial
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->