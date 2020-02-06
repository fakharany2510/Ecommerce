<?php
$navexist="";
$pagetitle="Login";
session_start();
if(isset($_SESSION['name'])){
    header('location:dash.php');
    exit();
}

include "init.php";
include $tpl."header.php" ;
//check if user comming from post request or not
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username=$_POST['user'];
    $password=$_POST['pass'];
   
    $hashedpass=sha1($password);
    //check if user exist in database
    $stmt =$db->prepare("SELECT 
                               	UserID, Username , Password 
                                 FROM
                                  users
                                   WHERE
                                    Username = ?
                                     AND
                                      Password = ?
                                       AND
                                        GroupID=1
                                        LIMIT 1");
    $stmt->execute(array($username , $hashedpass));
    $row=$stmt -> fetch();
   $count=$stmt->rowcount();
 
    //check if count > 0 this means that there exist a record with this username in database
    if($count >0){
        $_SESSION['name']=$username;
        $_SESSION['ID'] =$row['UserID'];
    header('location:dash.php');
    exit();
    }
    
}
?>
  
  <form class="log" action= "<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

  <div class="form-group">
    <label class="lb" >Email address</label>
    <input type="text" name="user" class="form-control"  placeholder="Enter your name" autocoomplete="off"> 
  </div>

  <div class="form-group">
    <label class="lb" >Password</label>
    <input type="password" name=pass class="form-control"  placeholder="Enter Password">
  </div>

  <div class="form-group">
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck2">
      <label class="lb" >
        Remember me
      </label>
    </div>
  </div>

  <button type="submit" class="btn btn-primary" id="btn1">Log in</button>
</form>


<?php
include $tpl ."footer.php" ;
?>