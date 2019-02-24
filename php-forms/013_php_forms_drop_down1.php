<!--
TOPIC:
PHP FORMS - DROP DOWN BOX

NOTES:
+ PHP Forms DROP DOWN BOX
+ All form elements are placed in the <FORM> tag.
+ DROP DOWN BOX in HTML are areas which enable user select ONE options
  From a list of values that appear in a "DROP DOWN"
+ DROP DOWN BOX Values in this program are populated / set text boxes from a PHP 
  Variables.

FILE-NAME:
013_php_forms_drop_down1.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->

<html>
   <body>
      <h3> Tinitiate.com PHP FORMS DROP DOWN BOX Values's are populated / set 
           from a PHP Variables.</h3>
      <h6> <font color=red> FILE NAME:- 013_php_forms_drop_down1.php </font> </h6>
      </br>
      <!-- HTML FORM Code to create DROP DOWN BOX -->
      <?php
         // Create PHP Variables that can be used to populate the FORMS
         // DROP DOWN BOX Labels
         $DropDown1 = "PHP";
         $DropDown2 = "PERL";
         $DropDown3 = "PYTHON";
      ?>
      <hr>
      <h6> <font color=blue> The Below DROP DOWN BOX set is populated from PHP variables.
      </font> </h6>
      <!-- HTML FORM DROP DOWN BOX populated from PHP variables -->
      <form action="">
         <!-- SELECT TAG creates a DropDown -->
         <select name="cars">
            <option value="DropDown1"> <?php echo $DropDown1 ?> </option>
            <option value="DropDown2"> <?php echo $DropDown2 ?> </option>
            <option value="DropDown3"> <?php echo $DropDown3 ?> </option>
      </select>
      </form>
   </body>
</html>

<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Forms DROP DOWN BOX Setting values of DROP DOWN BOX from php variables
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->