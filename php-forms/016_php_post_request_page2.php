<!--
TOPIC:
PHP FORMS - POST Method with TWO PHP Pages

NOTES:
+ PHP FORMS sending information from one PHP page to another
+ We have 2 PHP files
  - 016_php_post_request_page1.php
  - 016_php_post_request_page2.php
+ Data from Page1 will be transferred to Page2, on the button click
+ Here 016_php_post_request_page1.php calls 016_php_post_request_page2.php 
  when the text is entered in 016_php_post_request_page1.php and the submit button
  is clicked, the page 016_php_post_request_page2.php displays the text from page1
  which is transferred using $_POST() function.

FILE-NAME:
016_php_post_request_page2.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
016_php_post_request_page1.php, 016_php_post_request_page2.php

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->

<html>
   <body>
      <h3> Tinitiate.com PHP FORMS POST Request Passing data from one PHP page to another </h3>
      <h6> <font color=red> FILE NAME:- 016_php_post_request_page2.php </font> </h6>
      </br>
      <!-- HTML FORM POST Actions -->
      <hr>
      <h6> <font color=blue> PHP POST demonstration of Receiving Data </font> </h6>

      <hr>
      <?php
         // Check if the Variable from the $_POST() function from PHP page 
         // 016_php_post_request_page1.php, is SET (Has a value assigned to it)
         if( isset($_POST["Data1"]) )
         {
            // Using the "$_POST" function to get the
            $Data1 = $_POST['Data1'];
            echo "This PHP page prints data received from 016_php_post_request_page1.php ";
            echo "using POST Request "."<br />";
            echo "DATA: "."<br/>";
            echo $_POST['Data1'];
         }
       ?>
  </body>
</html>

<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Forms GET and POST calling another PHP page
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->