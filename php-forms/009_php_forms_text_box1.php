<!--
TOPIC:
PHP FORMS - TEXT FIELDS

NOTES:
+ PHP Forms TEXT FIELDS
+ All form elements are placed in the <FORM> tag.
+ Text Boxes in HTML are areas where we can enter text.
+ We will populate / set text boxes from a PHP Variables.

FILE-NAME:
009_php_forms_text_fields.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->

<html>
   <body>
      <h3> Tinitiate.com PHP FORMS Text Box Populated / Set by PHP variables </h3>
      <h6> <font color=red> FILE NAME:- 009_php_forms_text_fields.php </font> </h6>
      </br>
      <!-- HTML FORM Code to create Text Box -->
      <?php
         // Create PHP Variables that can be used to populate the FORMS
         $TextBox1 = "Tinitiate";
         $TextBox2 = "PHP Forms";
      ?>
      <hr>
      <h6> <font color=blue> The Below text boxes are populated from PHP variables. 
      </font> </h6>
      <!-- HTML FORM Text Boxes populated from PHP variables -->
      <form>
         Text Box 1:<input type="text" name="TextBox1" value="<?php echo $TextBox1; ?>">
         <br>
         Text Box 2:<input type="text" name="TextBox2" value="<?php echo $TextBox2; ?>">
         <br>
      </form>
   </body>
</html>

<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Forms Text Boxes Setting values of Text boxes
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->