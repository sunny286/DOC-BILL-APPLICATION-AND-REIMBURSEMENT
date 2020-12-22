<?php
   session_start();
   
   if(session_destroy()) {
      header("Location:http://172.16.0.195/DOC/index.php");
   }
?>