<?php

$do="";
if(isset($_GET['do'])){
    $do=$_GET['do'];
}else{
    $do='Manage';
}
 if($do == 'Manage'){
     echo 'Welcome U are in manage category page<br>';
     echo '<a href="?do=Insert"> add new category + </a>';
 }
 elseif($do == 'Edit'){
    echo 'Welcome U are in add category page';
}
elseif($do == 'Insert'){
    echo 'Welcome U are in insert category page';
}
else{
    echo 'Error:No FUCKEN PAGE WITH THIS NAME ';
}