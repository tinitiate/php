<!--
TOPIC:
PHP - Executing Operating System Commands / Shell Commands

NOTES:
+ PHP Executing Shell Commands
+ using shell_exec function to run OS commands
+ using exec function to run OS commands

FILE-NAME:
036_php_os_commands.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP EXECUTE SHELL COMMANDS </h3>";
   echo "<h6> <font color=red> FILE NAME:- 036_php_os_commands.php </font> </h6>";
   echo "</br>";
   echo "<hr>";
   echo "<h6> <font color=blue> PHP OS Commands Execution </font> </h6>";
   echo "<hr>";

   // ============================================================
   // shell_exec function to Execute OS Commands or Shell Commands
   // ============================================================
   echo "<pre>Executing command: <b> dir /w /b </b></pre>";
   $os_output = shell_exec('dir /w /b');
   echo "<pre>$os_output</pre>";
   
   
   // ============================================================
   // exec function to Execute OS Commands or Shell Commands
   // ============================================================
   echo "<pre>Executing command: <b> dir /w /b </b></pre>";
   $exec_output = exec('dir /w /b');
   echo "<pre>$exec_output</pre>";
?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Executing Operating System Commands / Shell Commands
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->