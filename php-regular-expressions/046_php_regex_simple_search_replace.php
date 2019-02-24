<!--
TOPIC:
PHP - Regular Expressions Examples for various search patterns

NOTES:
+ Regular Expressions are a sequence of characters that forms a search pattern.
+ The search pattern is used to match (search/replace) in strings.
+ Demonstration of Regular Expression PERL Style Functions

   preg_match_all()	 The preg_match_all() function matches all occurrences of
                      pattern in a given string.

   preg_replace()	    The preg_replace() replaces a given pattern in a string with,
                      the replacement string.

FILE-NAME:
046_php_regex_simple_search_replace.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A
                      
AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2015
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP Regular Expressions PERL Functions</h3>";
   echo "<h6> <font color=red> FILE NAME:- 046_php_regex_simple_search_replace.php </font> </h6>";
   echo "</br>";
   echo "<hr>";
   echo "<h6> <font color=blue> PHP Regular Expressions PERL Functions</font> </h6>";
   echo "<hr>";

   
   // -------------------------------------------------
   // Change the start of the string with another value
   // Start of the string (^)
   // -------------------------------------------------
   $string_1 = "Welcome to tinitiate.com";

   // This will Add "Hello " to the start of the string
   echo preg_replace('/^/', 'Hello ', $string_1);    echo "</br>";
   
   // OUTPUT: Hello Welcome to tinitiate.com
   // -------



   // -------------------------------------------
   // Change the End of string with another value
   // End of the string ($)
   // -------------------------------------------
   $string_1 = "Welcome to tinitiate.com";
   
   // This will Add " Free IT tutorials" to the end of the string
   echo preg_replace('/$/', ' Free IT tutorials', $string_1);    echo "</br>";
   
   // OUTPUT: Welcome to tinitiate.com Free IT tutorials
   // -------



   // ------------------------------------------------
   // Change strings to some other value
   // ------------------------------------------------
   $string_1 = "Tinitiate Tinitiate Tinitiate tinitiate";
   
   // Replace "Tinitiate"  change case "tinitiate"
   echo preg_replace('/Tinitiate/', 'tinitiate', $string_1);    echo "</br>";

   // OUTPUT:  tinitiate tinitiate tinitiate tinitiate
   // -------
   
   
   // Case insensitive replace, using "/<pattern>/i"
   // Replace Tinitiate with PHP
   echo preg_replace('/Tinitiate/i', 'PHP', $string_1);    echo "</br>"; 
   
   
   // OUTPUT: PHP PHP PHP PHP
   // -------
   
   
   
   // ----------------------------------------------
   // Change any digit \d any Digit
   // ----------------------------------------------
   $string_1 = "Menu 1.PHP, 2.PERL, 3.PYTHON";
   
   // Replace digits and the (.) with "*"
   echo preg_replace('/\d(\.)/', '*', $string_1);    echo "</br>";
   
   // OUTPUT: Menu *PHP, *PERL, *PYTHON
   // -------
   
   
   
   // ------------------------------------------------
   // Replace "P{m}" m Repetitions of a sequence
   // ------------------------------------------------

   $string = "PHHHP PHHHP PHHHHP PHHHHHP";
   
   // Replace 3 continuous H's with X
   echo preg_replace('/H{3}/', 'X', $string);    echo "</br>";
   
   // OUTPUT:  PXP PXP PXHP PXHHP
   // -------

   
   
   // --------------------------------------------------
   // Replace "P{m,n}" m to n Repetitions of a sequence
   // --------------------------------------------------

   $string = "PHP PHHP PHHHP PHHHHP PHHHHHP";
   
   // Replace 1 to 3 continuous "H's" with a Single "X"
   // but not more than 3 "H's"
   echo preg_replace('/H{1,3}/', 'X', $string);    echo "</br>";

   // OUTPUT:  PXP PXP PXP PXXP PXXP
   // -------

   
   
   // --------------------------------------------------
   // Replace Zero or More repetitions, using "M*"
   // --------------------------------------------------
   
   $string1 = "PHHHHHHHHHHP";
   
   // Replace Zero of more "H's" with X
   echo preg_replace('/H*/', 'X', $string1);    echo "</br>";
   
   // This will replace all patterns or characters and any number of continous H's
   // with X
   
   // OUTPUT: XPXXPX
   // -------
   // Reason, Replace the first P with XP
   //         Replace all the HHHHHHHHHH with X
   //         Replace the last P with X
   //         Replace the end o
   
   
   
   // --------------------------------------------------
   // Optional ? character replace
   // --------------------------------------------------   
   
   $string1 = "POP POXP";
   
   
   // Replace O or OX with H
   // Here X is optional, either O or OX is replaced with H
   echo preg_replace('/OX?/', 'H', $string1);    echo "</br>";
   
   // OUTPUT:  PHP PHP
   // -------

   
   
   // --------------------------------------------------
   // Replace special characters or regular expression 
   // characters, escape using "\"
   // --------------------------------------------------
   
   $string = "..\\//{}()|";


   // Replace . with A
   echo preg_replace('/\./', 'A', $string);    echo "</br>";

   // Replace \ with A
   echo preg_replace('/\\\/', 'A', $string);    echo "</br>";

   // Replace {} with A
   echo preg_replace('/\{\}/', 'A', $string);    echo "</br>";
   
   // Replace () with A
   echo preg_replace('/\(\)/', 'A', $string);    echo "</br>";
   
   // Replace | with A
   echo preg_replace('/\|/', 'A', $string);    echo "</br>";

?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Regular Expressions Examples using PERL Style Functions
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->