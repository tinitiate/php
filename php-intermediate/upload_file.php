<?php
   //=====================================================
   // PHP Code to Handle File Uploads
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
