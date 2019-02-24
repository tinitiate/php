<!--
TOPIC:
PHP - ARRAYS

NOTES:
+ PHP Arrays, Arrays are special variables used to store multiple values
+ Normal variables store a singe value.
+ the "array" function is used to create an array in PHP
+ Array elements are indexed, starting from ZERO,
+ Array functions are used to get properties of arrays, such as
  size of array using count() function.
+ PHP Associative Arrays are Key-Value pairs of data.
  Where a "KEY" is the data identifier and "VALUE" is the data
  Syntax: ("KEY"=>"VALUE")  
  Example: ("FRUIT"=>"APPLE", "VEGETABLE"=>"POTATO")


FILE-NAME:
007_php_arrays.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->

<html>
   <body>
      <h3> Tinitiate.com PHP ARRAYS. </h3>
      <h6> <font color=red> FILE NAME:- 007_php_arrays.php </font></h6>
      </br>
      <!-- PHP Code from here -->
      <?php
         // ==========
         // PHP ARRAY
         // ==========

         $programming=array("Java","C++","PYTHON","PHP");
         echo "programming Array elements " . $programming[0]." |
              ".$programming[1]." | ".$programming[2]." | ".$programming[3]."<br>";
         
         // Array elements are indexed, starting from ZERO,
         
         // ======================================
         // Difference between variable and array
         // ======================================

         // Variables
         $data1 = "Java";
         $data2 = "C++";
         $data3 = "PHP";

         // Array
         $languages = array("Java","C++","PHP");
         echo $languages[0]." ".$languages[1]." ".$languages[2]."<br>";
        
         // Array properties
         // Count of array elements, using count() function
         
         echo 'Number of elements in array $languages: '.count($languages)."<br>";
         
         // Loop through an Array
         echo 'Looping through array $languages elements.'."<br>";
         for($x=0;$x<count($languages);$x++)
         {
            echo $languages[$x]."<br>";
         }

         // =======================
         // PHP Associative Arrays
         // =======================
         $Food_Associative_array = array("FRUIT"=>"APPLE", "VEGETABLE"=>"POTATO",
         "DAIRY" => "CHEESE");
         
         // Print Associative Array elements
         echo $Food_Associative_array['FRUIT']."<br>";
         echo $Food_Associative_array['VEGETABLE']."<br>";
         echo $Food_Associative_array['DAIRY']."<br>";
         
         // Print Associative Array elements, by Looping through
         foreach($Food_Associative_array as $KEY=>$VALUE)
         {
            echo "Key=" . $KEY . ", Value=" . $VALUE."<br>";
         }
      ?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Arrays creating arrays indexed arrays Associative Arrays sorting arrays
counting array elements sorting arrays
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->