<?php
//paths
$tpl = 'includes/templates/'; //templates Directory
$css='layout/css/';//css Directory
$functions='includes/functions/';//functions Directory
$js='layout/js/';//js Directory
$language='includes/languages/'; //language Directory
include "connect.php";//connection file

//include important files
include $language ."english.php";
include $functions ."functions.php";

include $tpl."header.php" ;
// if the variable $navexist founded in any file we will not include the file nav.php in thif file
if(!isset($navexist)){
include $tpl."nav.php" ;
}
