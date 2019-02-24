<!--
TOPIC:
PHP FORMS - GET Method

NOTES:
+ PHP Forms GET method is use for the transer the 
  data from the one php web page to another.
+ This is in reality the client browser sending data to the web server.
+ GET Method, Data is sent in the URL, or the website link itself.
  GET REQUEST Example:  
   www.<some>bank.com/data.php?MyBankAccountNumber=1234&Balence=$1000.00
   - GET requests cannot be cached
   - GET requests should never be used to send data,
     especially sensitive data.
   - GET requests have length restrictions
   - GET requests should be used only to retrieve data

FILE-NAME:
014_php_forms_get_request.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->

<html>
   <body>
      <h3> Tinitiate.com PHP FORMS GET Request Basics </h3>
      <h6> <font color=red> FILE NAME:- 014_php_forms_get_request.php </font> </h6>
      </br>
      <!-- HTML FORM GET and POST Actions -->
      <hr>
      <h6> <font color=blue> PHP GET demonstration, FORM CODE </font> </h6>

      <!-- HTML FORM With 2 text boxes and a submit button -->
      <form action="<?php $_PHP_SELF ?>" method="GET">
         Data1 Value: <input type="text" name="Data1" /> <br/>
         Data2 Value: <input type="text" name="Data2" /> <br/>
         <input type="submit" />
      </form>

      <hr>
      <!-- PHP Code -->
      <h6> <font color=blue> PHP GET demonstration, PHP CODE OUTPUT </font> </h6>
      <p> <i> <font color=blue> 
         OUTPUT will ONLY be printed if there are values 
         from GET function [$_GET()]
      </font> </i> </p>
      <?php
         // Check if the Variable from the $_GET() function
         // is SET (Has a value assigned to it)
         if( isset($_GET["Data1"]) && isset($_GET["Data2"]) )
         {
            // Using the "$_GET" function to get the
            $Data1 = $_GET['Data1'];
            $Data2 = $_GET['Data2'];
            echo $_GET['Data1']. "<br />";
            echo $_GET['Data2'];
         }
       ?>
  </body>
</html>

<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Forms GET request POST request
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->