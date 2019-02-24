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
016_php_post_request_page1.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
016_php_post_request_page1.php, 016_php_post_request_page2.php

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->

<html>
   <body>
      <h3> Tinitiate.com PHP FORMS POST Request Passing data from one PHP page to another </h3>
      <h6> <font color=red> FILE NAME:- 016_php_post_request_page1.php </font> </h6>
      </br>
      <!-- HTML FORM POST Actions -->
      <hr>
      <h6> <font color=blue> PHP POST demonstration of Sending Data </font> </h6>

      <!-- HTML FORM With text box and a submit button -->
      <!-- Here the ACTION is calling the 016_php_post_request_page2.php file -->
      <form action="016_php_post_request_page2.php" method="POST">
         DATA to be passed to 016_php_post_request_page2.php file
         <input type="text" name="Data1" /> <br/>
         <!-- Submit button which will transfer data from 016_php_post_request_page1.php -->
         <!-- file to 016_php_post_request_page2.php -->
         <input type="submit" />
      </form>
      
      <hr>
      <?php
         // PHP message from page 016_php_post_request_page1.php
         echo "This PHP page 016_php_post_request_page1.php Sends data using POST Request";
         echo " to 016_php_post_request_page2.php "."<br />";
       ?>
  </body>
</html>

<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Forms GET and POST calling another PHP page
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->