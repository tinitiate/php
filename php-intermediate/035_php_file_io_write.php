<!--
TOPIC:
PHP - FILE IO Writing to a File

NOTES:
+ PHP FILE IO
+ Write to files from PHP using Built in functions
+ file_put_contents() : Writes a string to file
+ fwrite and fopen, writing to files

FILE-NAME:
034_php_file_io_write.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
033_php_file_io_read.php and 034_php_tnitiate_file.txt
Place both the files in the the .htdocs of the webserver folder

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP File IO. </h3>";
   echo "<h6> <font color=red> FILE NAME:- 035_php_file_io_write.php </font> </h6>";
   echo "</br>";
   echo "<hr>";
   echo "<h6> <font color=blue> PHP File IO Demonstration </font> </h6>";
   echo "<hr>";

   // =========================================================
   // WRITING TO A FILE USING THE file_put_contents() Function
   // =========================================================

   $file_name = "035_php_tnitiate_write.txt";
   $data      = "Tinitiate PHP Tutorials";

   // Write to file using file_put_contents()
   file_put_contents($file_name, $data);
   echo "<br/>";

   // The file will be writtento the htdocs folder of the webserver
   // To generate in a specfic path use the dirctory full path

   file_put_contents($file_name, $data);

   // ==================================
   // WRITING TO A FILE USING THE fwrite
   // ==================================

   // File Name
   $dateFile = "c:\\tinitiate\\035_data.txt";

   // Content to write
   $dataContent = "This is Tinitiate PHP Tutorials and Examples section.";

   // Create an fopen object in "a" append mode
   $newFile  = fopen($dateFile,"a");

   // Use fwrite to write to file
   $WriteFile   = fwrite($newFile, $dataContent);

   // Close the file object
   fclose($newFile);
?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Object Oriented Programming File IO
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->
