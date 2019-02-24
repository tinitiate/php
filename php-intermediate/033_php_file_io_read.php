<!--
TOPIC:
PHP - FILE IO Reading a File

NOTES:
+ PHP FILE IO
+ Read files from PHP using Built in functions
  + readfile()
     This is used to open a file and read its contents.
  + fopen(), fread()
     This function is used to open the file and read its contents.
  + explode()
     Reading a file into an PHP array using a dilimeter usually NEWLINE CHAR.
  + file_get_contents()
     This function is useful to read the file contents as a string.

FILE-NAME:
033_php_file_io_read.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
033_php_file_io_read.php and 034_php_tnitiate_file.txt
Place both the files in the the .htdocs of the webserver folder

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP File IO. </h3>";
   echo "<h6> <font color=red> FILE NAME:- 033_php_file_io.php </font> </h6>";
   echo "</br>";
   echo "<hr>";
   echo "<h6> <font color=blue> PHP File IO Demonstration </font> </h6>";
   echo "<hr>";
   echo "<p>Place the DATA file  034_php_tnitiate_file.txt in the .htdocs of the";
   echo "   webserver folder </p>";

   //==============================================
   // READING A FILE USING THE readfile() Function
   //==============================================
   echo readfile("034_php_tnitiate_file.txt");
   echo "<br/>";


   //==============================================
   // READING A FILE USING THE fopen() Function
   //==============================================
   $myfile = fopen("034_php_tnitiate_file.txt", "r") or die("Cannot Open File!");
   echo fread($myfile,filesize("034_php_tnitiate_file.txt"));
   fclose($myfile);
   echo "<br/>";

   //====================================================
   // READING A FILE USING THE explode() Function
   // NOTE: This uses the file_get_contents(), See Below
   //====================================================
   $myfile = explode("\n",file_get_contents("034_php_tnitiate_file.txt"));
   echo $myfile;
   echo "<br/>";

   //==================================================================
   //READING A FILE AS A STRING USING THE file_get_contents() Function
   //==================================================================

   // EXAMPLE 1
   // Reading a file which resides in the same path as this PHP file
   $myfile = file_get_contents("034_php_tnitiate_file.txt");
   echo $myfile;
   echo "<br/>";

   // EXAMPLE 2
   // Reading a file which resides in a different folder,
   // using file_get_contents()
   $myfile = file_get_contents("./034_php_tnitiate_file.txt", FILE_USE_INCLUDE_PATH);
   echo $myfile;
   echo "<br/>";

   // EXAMPLE 3
   // Calling a website page using file_get_contents()
   $myfile = file_get_contents("http://www.tinitiate.com");
   echo $myfile;
   echo "<br/>";
?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Object Oriented Programming File IO
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->
