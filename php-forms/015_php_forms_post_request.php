<!--
TOPIC:
PHP FORMS - POST Method

NOTES:
+ PHP Forms POST method is use for the transer the 
  data from the one php web page to another.
+ This is in reality the client browser sending data to the web server.
+ POST Method, Form element data is passed from the header response.
   - POST requests do not remain in the browser history
   - POST requests data length restrictions.

FILE-NAME:
015_php_forms_post_request.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->

<html>
   <body>
      <h3> Tinitiate.com PHP FORMS POST Request Basics </h3>
      <h6> <font color=red> FILE NAME:- 015_php_forms_post_request.php </font> </h6>
      </br>
      <!-- HTML FORM POST Actions -->
      <hr>
      <h6> <font color=blue> PHP POST demonstration, FORM CODE </font> </h6>

      <!-- HTML FORM With 2 text boxes and a submit button -->
      <form action="<?php $_PHP_SELF ?>" method="POST">
         Data1 Value: <input type="text" name="Data1" /> <br/>
         Data2 Value: <input type="text" name="Data2" /> <br/>
         <input type="submit" />
      </form>

      <hr>
      <!-- PHP Code for POST Response -->
      <h6> <font color=blue> PHP POST demonstration, PHP CODE OUTPUT </font> </h6>
      <p> <i> <font color=blue> 
         OUTPUT will ONLY be printed if there are values 
         from POST function [$_POST()]
      </font> </i> </p>
      <?php
         // Check if the Variable from the $_POST() function
         // is SET (Has a value assigned to it)
         if( isset($_POST["Data1"]) && isset($_POST["Data2"]) )
         {
            // Using the "$_GET" function to get the
            $Data1 = $_POST['Data1'];
            $Data2 = $_POST['Data2'];
            echo $_POST['Data1']. "<br />";
            echo $_POST['Data2'];
         }
       ?>
  </body>
</html>

<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Forms GET and POST
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->