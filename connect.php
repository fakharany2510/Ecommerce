<?php
$dsn ='mysql:local=localhost;dbname=shop';
$user='root';
$pass="";
$options =array(

    PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
);

try{
    $db=new PDO($dsn, $user, $pass ,$options);
    $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

    echo"u connect";

}
catch(PDOException $e){
    echo 'failed to connect with database' .$e->getMessage();
}