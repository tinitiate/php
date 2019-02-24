<!--
TOPIC:
PHP - Date and Time

NOTES:
+ PHP Date Function prints the current "date-time"
+ Date function output can be formatted with various options

FILE-NAME:
043_php_date_time.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2015
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP Date and Time </h3>";
   echo "<h6> <font color=red> FILE NAME:- 043_php_date_time.php </font> </h6>";
   echo "</br>";
   echo "<hr>";

   
   // date() Function
   //    + It prints the current date and time; 
   //      Basic Year, Month and Day if month parameters
   echo date("Y/m/d");
   echo "</br>";
   
     
   // Date Function Format characters
   // -------------------------------

   //       a  am / pm lowercase
   //       A  AM / PM uppercase
   echo date('A');
   echo "</br>";

   
   //       d  Day of month, Number with leading zero 01
   //       j  Day of the month without leading zero  1
   //       D  Three Letter Day of week               Mon
   //       l  Full name of day of the week           Monday
   //       z  Day of year                            0 - 365
   echo date('l');
   echo "</br>";
   
   
   //       F  Full Month name
   //       M  Month of year (three letters)          Jan
   //       m  Month Number of year with leading zero 01
   //       n  Month number of year no leading zero   1
   echo date('F');
   echo "</br>";
   
   
   //       h  Hour 12 hour format with leading zero  02
   //       g  Hour 12 hour format no leading zero    2
   //       H  Hour 24 hour format with leading zero  23
   //       G  Hour 24 hour format no leading zero    23
   echo date('H');
   echo "</br>";
   
   
   //       i  Minutes                                0 - 59
   //       s  Seconds of hour                        0 - 59
   echo date('i');
   
   
   //       r  Formatted date
   //       U  Time stamp
   echo date('r');
   echo "</br>";
   
   
   //       L  Leap year                              1 - yes / 0 - no
   //       y  Year two digits
   //       Y  Year four digits
   echo date('L');
   echo "</br>";   
?>

<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Date and Time
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->