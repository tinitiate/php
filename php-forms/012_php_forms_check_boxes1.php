<!--
TOPIC:
PHP FORMS - CHECK BOXES

NOTES:
+ PHP Forms CHECK BOXES
+ All form elements are placed in the <FORM> tag.
+ CHECK BOXES in HTML are areas which enable user select ZERO or MORE options
  of a limited number of choices.
+ CHECK BOXES Labels in this program are populated / set text boxes from a PHP 
  Variables.

FILE-NAME:
011_php_forms_check_boxes1.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->

<html>
   <body>
      <h3> Tinitiate.com PHP FORMS CHECK BOXES Label's are populated / set 
           text boxes from a PHP Variables.</h3>
      <h6> <font color=red> FILE NAME:- 011_php_forms_check_boxes1.php </font> </h6>
      </br>
      <!-- HTML FORM Code to create Check Boxes -->
      <?php
         // Create PHP Variables that can be used to populate the FORMS
         // CHECK BOXES' Labels
         $CheckBoxes1 = "PHP";
         $CheckBoxes2 = "PERL";
         $CheckBoxes3 = "PYTHON";
      ?>
      <hr>
      <h6> <font color=blue> The Below Check Boxes set is populated from PHP variables.
      </font> </h6>
      <!-- HTML FORM CHECK BOXES populated from PHP variables -->
      <form>
         <input type="checkbox" name="CheckSet1" value="<?php echo $CheckBoxes1 ?>">
         <?php echo $CheckBoxes1 ?><br>
         <input type="checkbox" name="CheckSet1" value="<?php echo $CheckBoxes2 ?>">
         <?php echo $CheckBoxes2 ?><br>
         <input type="checkbox" name="CheckSet1" value="<?php echo $CheckBoxes3 ?>">
         <?php echo $CheckBoxes3 ?>
      </form>
   </body>
</html>

<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Forms CHECK BOXES Setting values of CHECK BOXES from php variables
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->