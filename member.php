<?php

session_start();
$pagetitle='Members';
if(isset($_SESSION['name'])){
   include "init.php";
 $do=isset($_GET['do']) ? $_GET['do']:'Manage';
 if($do == 'Edit'){?>



    <h1>jhdiuhcuhe</h1>
    <?php 
 }
 elseif($do == 'Manage'){
   
}








   include $tpl ."footer.php" ;
}
else{
    header('location:index.php');
    exit();
}
?>