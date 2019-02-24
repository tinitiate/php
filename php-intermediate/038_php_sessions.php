<!--
TOPIC:
PHP - SESSIONS

NOTES:
+ PHP Handling Sessions
+ Session is a method to pass information across PHP pages
+ HTTP is stateless, When there is a need to pass information from one 
  page to another the we use sessions.
+ The session information is stored in a directory, the name and location
  of this directory can be mentioned in the php.ini by the
  session.save_path
+ The path can be retrieved using the function session_save_path()
+ Saving session information is very easy in PHP
  - Make sure the session tracing is enabled using 
    the function session_start();
  - This will enable all the $_SESSION[] variables.
+ Session information is reset or Unset using the "session_unset()" function
+ The entire session can be destroyed, data freed/deleted from the 
  webserver using the "session_destroy()"

FILE-NAME:
038_php_sessions.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com Handling sessions in PHP </h3>";
   echo "<h6> <font color=red> FILE NAME:- 038_php_sessions.php </font> </h6>";
   echo "</br>";
   echo "<hr>";

   // ==============================================================================
   // Handling PHP Sessions
   // ==============================================================================

   echo "Session State Saved on webserver Location".session_save_path();
   echo "</br>";

   // ======================================================
   // Creating a session to check the number of page visits
   // ======================================================
   
   // 1) Enable the session tracking using the built-in $_SESSION[] variable
   //    using the session_start();
   session_start();


   // 2) Create a session variable and make sure it is initialized once 
   //    on initial page load, To make sure we probe the variable 
   //    using the "isset" function, isset() will return true if 
   //    the variable is set else will return false.
   if (isset($_SESSION['MyVariable']))
      {
         $_SESSION['MyVariable'] = $_SESSION['MyVariable'] + 1;
      }
   else
      {
         // Set initial value to the session variable $_SESSION['MyVariable']
         $_SESSION['MyVariable'] = 1;
      }

   echo "<hr>";
   echo "Current Session Visit Number: <b>".$_SESSION['MyVariable']."</b>";
   echo "<hr>";   

   echo "</br>";
   echo "Please refresh [F5] and see the above counter increased";
   echo "</br>";
   echo $_SERVER['SCRIPT_NAME'];
   

   // ====================
   // Destroy the Session
   // ====================

   if (isset($_GET['run']) && $_GET['run'] == 'clear_session')
   {
      echo "<br/><br/>"."<b><u>Session will be destroyed. Click on the \"Reload to see the counter reset\"</u></b><br/>";
      
      // This function resets all the $_SESSION[] variables
      session_unset();

      // This Function destroys the session
      session_destroy();
   }
?>
<br/><br/>
<a href='<?php $_SERVER['SCRIPT_NAME'] ?>'>Click here Reload and See the counter Increase</a>

<br/><br/>
<a href = '<?php echo $_SERVER['SCRIPT_NAME']."?run=clear_session" ?>'>Click here to Clear Session</a>

<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Handling Sessions
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->