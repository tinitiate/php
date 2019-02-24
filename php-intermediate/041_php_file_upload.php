<!--
TOPIC:
PHP - FILE UPLOAD TO SERVER

NOTES:

====================================================================================
+ PHP File Upload to server
+ PHP provides the following functionalty to upload files to the server
+ Initially PHP uploads the file to a temporary directory and then to the desired
  folder, mentioned in the script.
+ Initial Settings on the Server ( php.ini file settings for file upload ):

   * Whether to allow HTTP file uploads.
   file_uploads=On
   * Temporary directory for HTTP uploaded files (will use system default if not
     specified).
   upload_tmp_dir="D:\tinitiate\tmp"
   * Maximum allowed size for uploaded files.
   upload_max_filesize=2M
   * Maximum number of files that can be uploaded via a single request
   max_file_uploads=1

+ We hae TWO files here 
  (1) 041_php_file_upload.php 
      this is the file with HTML FORM to upload file, and calls the upload_file.php 
  (2) upload_file.php 
      this is the php file that does the server side file operation
====================================================================================   
   
FILE-NAME:
041_php_file_upload.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
upload_file.php (Code added below)

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP File Upload </h3>";
   echo "<h6> <font color=red> FILE NAME:- 041_php_file_upload.php </font> </h6>";
   echo "</br>";
   echo "<hr>";


   //=====================================================
   // HTML Form Code
   // 1) Make sure the FORM users the POST
   // 2) Make sure the enctype is "multipart/form-data"
   //=====================================================
   echo "<form action=\"upload_file.php\" method=\"post\" enctype=\"multipart/form-data\">
          File: <input type=\"file\"   name=\"TINITIATE_UPLOAD_FILE\" />
                <input type=\"submit\" value=\"Upload File\" />
         </form>";

?>

<?php
   //=====================================================
   // PHP Code to Handle File Uploads
   // FILE NAME: upload_file.php
   //
   // DEPENDANT FILES NEEDED TO RUN THIS PROGRAM:
   // 041_php_file_upload.php  [Code added above]
   //=====================================================

   // The Target Folder Location on server where the file will be uploaded
   // make sure the folder exists and has write permissions
   $target_dir = "D:/xampp/TiniateUploads/";

   //=======================================================================
   // PHP Built-in variable for $_FILE[]
   // This variable has the information of the uploaded file
   //
   // Get the POST variable "TINITIATE_UPLOAD_FILE" details
   // $_FILES['TINITIATE_UPLOAD_FILE']['name'] - Name of uploaded file.
   // $_FILES['TINITIATE_UPLOAD_FILE']['size'] - Byte size of uploaded file.
   // $_FILES['TINITIATE_UPLOAD_FILE']['type'] - MIME type of uploaded file.
   // $_FILES['TINITIATE_UPLOAD_FILE']['tmp_name'] - The File at the 
   //                                                server temp location
   //=======================================================================

   // Append the Directory with the file name
   $target_path = $target_dir . basename( $_FILES['TINITIATE_UPLOAD_FILE']['name']); 

   // Check if the POST variable file is not null
   if( $_FILES['TINITIATE_UPLOAD_FILE']['name'] != "" )
   {

      // Use the function "move_uploaded_file" to move the file 
      // from the TEMP server location to the final target location
      move_uploaded_file( $_FILES['TINITIATE_UPLOAD_FILE']['tmp_name'], $target_dir ) or 
           die( "Could not copy file!");
   }
   else
   {
      die("No file specified!");
   }
?>

<!-- CODE-END -->
<!--
CODE-TAGS:
PHP File Upload 
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->