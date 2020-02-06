<?php 
 
 function lang($phrase){

      static $lang= array(

           "MESSAGE" =>"اهلا بك",

            "ADMIN" =>"يااحمد"
      );

    return $lang[$phrase];
 }