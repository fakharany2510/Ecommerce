<?php
$pagetitle='Dashboard';
session_start();
if(isset($_SESSION['name'])){
   include "init.php";
  print_r($_SESSION);
   include $tpl ."footer.php" ;
}
else{
    header('location:index.php');
}