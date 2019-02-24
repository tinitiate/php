<!--
TOPIC:
PHP - Regular Expressions Examples using Multiple patterns in one go

NOTES:
+ Regular Expressions are a sequence of characters that forms a search pattern.
+ Search multiple patterns in a single go
+ Demonstration of Regular Expression PERL Style Functions
  with preg_match_all()

+ There are many applications where we might need to extract multiple layers
  of information, from the same data set, This will require to create patterns in groups.

FILE-NAME:
047_php_regex_mutiple_patterns.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2015
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP Regular Expressions PERL Functions</h3>";
   echo "<h6> <font color=red> FILE NAME:- 047_php_regex_mutiple_patterns.php </font> </h6>";
   echo "</br>";
   echo "<hr>";



   // -----------------------------------
   // Regex groups explained
   // -----------------------------------

   // Extract the text between the <h2> and </h2> tags in a given strings
   // There are FOUR h2 tags in the below string,
   $string = '<h2>Dataset-1</h2>
          <p>Some text here 1234</p>

          <h2>Dataset-2</h2>
         <p>Some text here 5678</p>

         <h2>Dataset-3</h2>
         <p>Some text here 90123</p>

         <h2>Dataset-4</h2>
         <p>Some text here 72307023</p>';

   // Print the content between <h2> and </h2>
   if ( preg_match_all("/<h2.*?>([^<]*?)<\/h2>/", $string, $matches) )
   {
      echo $matches[0][0]."</br>";
      echo $matches[0][1]."</br>";
      echo $matches[0][2]."</br>";
      echo $matches[0][3]."</br>";
   }


   echo "</br>";

   // Print the content between <h2> and </h2> and <p> and </p>
   // in one go.
   if ( preg_match_all("/<(h2|p).*?>([^<]*?)<\/(h2|p)>/", $string, $matches) )
   {
      echo $matches[0][0]."</br>";
      echo $matches[0][1]."</br>";
      echo $matches[0][2]."</br>";
      echo $matches[0][3]."</br>";
      echo $matches[0][4]."</br>";
      echo $matches[0][5]."</br>";
      echo $matches[0][6]."</br>";
      echo $matches[0][7]."</br>";
   }



   // ---------------------------------------
   // Nested Regular Expression Groups
   // Extract contents from <div> <h3> and<p>
   // ---------------------------------------
   $string = "<div>
                 <h2>This is Heading</h2>
                 <p>This is Paragraph </p> 
              </div>";



   // ---------------------------------------
   // RegEx to extract content between
   // <div> <h3> and<p> tags
   // ---------------------------------------

   preg_match_all('#<div>\s+?<h2>(.*?)</h2>\s+?<p>(.*?)</p>\s+?</div>#', $string, $data);

   echo $data[1][0];
   echo "<br/>";
   echo $data[2][0];

   
   
   // ---------------------------------------------
   // PHP Regular Expressions regex over Multiline 
   // Use the "sm" switches for searching.
   // ---------------------------------------------
   
   $data_string = "This is a
   multiline text
   <interesting> This is    
   TINITIATE.COM </interesting>
   lets retrive the text between 
   the 'interesting' tags";

    
   preg_match_all('#<interesting>(.*?)</interesting>#sm', $data_string, $data1);
   echo $data1[1][0];
   
   // use var_dump to check which array element the match occurs
   // var_dump($data1);

?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP PERL, PHP, regexone, multiline,regular expressions,regex,regexp,learn,tutorials,Multiple patterns, groups,
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->