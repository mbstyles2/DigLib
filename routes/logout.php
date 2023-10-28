<?php
   session_start();
   session_destroy();
   //redirect to login 
   header("Location: http://localhost/E-Library-master/index.php");
?>