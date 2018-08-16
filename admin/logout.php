<?php 
  session_start();
  if (isset($_SESSION['userid']) || isset($_COOKIE['userid'])) {
    session_destroy();
    setcookie('userid', $adminLoginId, time()-86400, '/');
    header("Location: al.php");
  }
  
 ?>

