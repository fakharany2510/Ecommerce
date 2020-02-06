<?php 


      function lang( $phrase ){

         static $lang= array(
//navbar links
          "Edit_pa"      =>"Edit Profile",
          "About_pa"     =>"About",
          "Work_pa"      =>"Work",
          "Contact_pa"   =>"Contact",
          "Logout_pa"    =>"Logout",

          );

             return $lang[$phrase];
     }
