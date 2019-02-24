<!--
TOPIC:
PHP FORMS - RADIO BUTTONS

NOTES:
+ PHP Forms RADIO BUTTONS
+ All form elements are placed in the <FORM> tag.
+ RADIO BUTTONS in HTML are areas which enable to
  select ONLY ONE of a limited set of choices.
+ Radio Buttons Labels in this program are populated / set text boxes from a PHP 
  Variables.

FILE-NAME:
011_php_forms_radio_buttons1.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->

<html>
   <body>
      <h3> Tinitiate.com PHP FORMS Radio Buttons Label's are populated / set 
           text boxes from a PHP Variables.</h3>
      <h6> <font color=red> FILE NAME:- 011_php_forms_radio_buttons1.php </font> </h6>
      </br>
      <!-- HTML FORM Code to create Text Area -->
      <?php
         // Create PHP Variables that can be used to populate the FORMS
         // Radio Buttons' Labels
         $RadioButton1 = "PHP";
         $RadioButton2 = "PERL";
         $RadioButton3 = "PYTHON";
      ?>
      <hr>
      <h6> <font color=blue> The Below Radio Button set is populated from PHP variables. 
      </font> </h6>
      <!-- HTML FORM Radio Buttons populated from PHP variables -->
      <form>
         <input type="radio" name="RadoiSet1" value="<?php echo $RadioButton1 ?>">
         <?php echo $RadioButton1 ?><br>
         <input type="radio" name="RadoiSet1" value="<?php echo $RadioButton2 ?>">
         <?php echo $RadioButton2 ?><br>
         <input type="radio" name="RadoiSet1" value="<?php echo $RadioButton3 ?>">
         <?php echo $RadioButton3 ?>
      </form>
   </body>
</html>

<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Forms Radio Buttons Setting values of Radio Buttons from php variables
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->