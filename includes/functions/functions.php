<?php

function gettittle(){

    global $pagetitle;

    if(isset($pagetitle)){

        echo  $pagetitle;

    }else{

        echo 'Default';
    }

}