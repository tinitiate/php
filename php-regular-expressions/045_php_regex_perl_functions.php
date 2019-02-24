<!--
TOPIC:
PHP - Regular Expressions PERL Style Functions

NOTES:
+ Regular Expressions are a sequence of characters that forms a search pattern.
+ The search pattern is used to match (search/replace) in strings.
+ PERL Style Functions

   preg_match()	    The preg_match() function searches a given string for pattern,
                      returns true if pattern exists else returns false.

   preg_match_all()	 The preg_match_all() function matches all occurrences of 
                      pattern in a given string.

   preg_replace()	    The preg_replace() replaces a given pattern in a string with,
                      the replacement string.

   preg_split()	    Splits given string into array by pattern specified by a 
                      regular expression

   preg_grep()	       The preg_grep() function searches all elements of input_array,
                      return all elements matching the regular expression pattern.

   preg_quote()	    Quote regular expression characters, Useful for searching
                      special characters.

FILE-NAME:
045_php_regex_perl_functions.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2015
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP Regular Expressions PERL Functions</h3>";
   echo "<h6> <font color=red> FILE NAME:- 045_php_regex_perl_functions.php </font> </h6>";
   echo "</br>";
   echo "<hr>";
   echo "<h6> <font color=blue> PHP Regular Expressions PERL Functions</font> </h6>";
   echo "<hr>";


   // FUNCTION:  preg_match()
   // ------------------------------------------------------------------------
   // preg_match()  The preg_match() function searches a given string for pattern,
   //               returns true if pattern exists else returns false.
   //
   // USAGE :       int preg_match ( string $pattern,
   //                                string $subject [, array &$matches [
   //                                                 , int $flags = 0 [
   //                                                 , int $offset = 0 ]]] )
   // ------------------------------------------------------------------------

   // Here we are searching "P" in the string "PHP is cool"
   echo preg_match("/P/", "PHP is cool", $matches);
   print_r($matches);
   
   // Print the first matching element of the array $match
   echo $matches[0];


   
   // FUNCTION:  preg_match_all()
   // ------------------------------------------------------------------------
   // preg_match_all()   The preg_match_all() function matches all occurrences of 
   //                    pattern in a given string.
   //
   // USAGE :         int preg_match_all ( string $pattern,
   //                                      string $subject [
   //                                            , array &$matches [
   //                                            , int $flags = PREG_PATTERN_ORDER [
   //                                            , int $offset = 0 ]]] )
   // ------------------------------------------------------------------------

   // Here we are searching "P" in the string "PHP is cool"
   echo preg_match_all("/[P]/", "PHP is cool", $matches);


   // Print the each matching matching element of the array $match
   // We hardcode it to TWO
   foreach ($matches as $val) {
       echo $val[0] . "\n";
       echo $val[1] . "\n";
   }


   
   // FUNCTION:  preg_replace()
   // ------------------------------------------------------------------------
   // preg_replace()	  The preg_replace() replaces a given pattern in a string 
   //                  with, the replacement string.
   // 
   // USAGE  :         mixed preg_replace ( mixed $pattern 
   //                                     , mixed $replacement 
   //                                     , mixed $subject [
   //                                     , int $limit = -1 [, int &$count ]] )
   // ------------------------------------------------------------------------

   // Replaces JAVA with PHP in the string "JAVA is cool"
   // OUTPUT: "PHP is cool"
   echo preg_replace("/JAVA/", "PHP", "JAVA is cool");
   
   
   
   // FUNCTION:  preg_split()
   // ------------------------------------------------------------------------
   // preg_split()	Splits given string into array by pattern specified by a 
   //                regular expression
   //
   // USAGE  :       array preg_split ( string $pattern 
   //                                 , string $subject [
   //                                 , int $limit = -1 [
   //                                 , int $flags = 0 ]] )
   // ------------------------------------------------------------------------

   // Split the "Welcome to tinitiate" by SPACE delimiter
   $keywords = preg_split("/[\s,]+/", "Welcome to tinitiate");
   print_r($keywords);
   
   // Print each array element
   echo $keywords[0]."\n";
   echo $keywords[1]."\n";
   echo $keywords[2]."\n";
   
   
   
   // FUNCTION:  preg_grep()
   // ------------------------------------------------------------------------
   // preg_grep()	  The preg_grep() function searches all elements of input_array,
   //               return all elements matching the regular expression pattern.
   //
   // USAGE  :      array preg_grep ( string $pattern 
   //                               , array $input [
   //                               , int $flags = 0 ] )
   // ------------------------------------------------------------------------

   // Input Array
   $tinitiate = array("PHP", "C++", "JAVA", "PYTHON");
   
   // find elements beginning with letter "P"
   $languages_with_p = preg_grep("/P(\w+)/", $tinitiate);

   print_r($languages_with_p);

   
   
   // FUNCTION:  preg_quote()
   // ------------------------------------------------------------------------
   // preg_quote()  Quote regular expression characters, Useful for searching
   //               special characters. preg_quote() puts a backslash in 
   //               front of every regular expression syntax character.
   //
   // USAGE  :      string preg_quote ( string $str [
   //                                 , string $delimiter = NULL ] )
   // ------------------------------------------------------------------------
   
   // Consider a string with Regular Expression Characters
   $regex_string = 'abc^xyz/$';
   
   $regex_string = preg_quote($regex_string, '/');
   echo $regex_string;
   
?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Regular Expressions PERL Style Functions, preg_quote,preg_grep,preg_split,
preg_replace,preg_match_all,preg_match,regular expressions,regex,regexp,learn,tutorial
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->