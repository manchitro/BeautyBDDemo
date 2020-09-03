<?php
  require_once('includes/dbh.inc.php');
  if (!isset($_COOKIE['cookies'])) {
    setcookie("cookies",time(),time()+60*60*2);
    //database increment
  }
?>