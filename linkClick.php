<?php
  require_once('includes/dbh.inc.php');
  if (!isset($_COOKIE['cookies'])) {
    setcookie("cookies",time(),time()+60*60*2);
    //database increment
    $curr_time = date('d F Y, h:i:s A', time());
    $sql ='INSERT INTO uniqueuser (time) values ("'.$curr_time.'")';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      echo "SQL Failed".mysqli_stmt_error($stmt);
      exit();
    }
    else{
      mysqli_stmt_execute($stmt);
    }
  }
?>