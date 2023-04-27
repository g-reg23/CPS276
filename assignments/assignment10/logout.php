<?php
  session_start();

  /* DELETES THE COOKIE BY SETTING BACK ONE HOUR */
  setcookie("PHPSESSID", "", time() - 3600, "/");

  /* DELETE THE SESSION VALUES*/
  session_destroy();
  return header('Location: index.php?page=login'); 
?>