
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="<?php echo $css; ?>nav.css" />



</head>
<body>
<!--start upper-bar-->
<div class="upper-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                    <i class="fa fa-mobile" ></i> <span>01011755619</span>,    
                     <i class="fa fa-envelope-o" ></i><span>fakharany00@gmail.com</span>
            </div>
            <div class="col-sm">
                  <span>  Let's Worl Together, </span>
                  <span class="get-quote"> Get Quote</span>
                </div>
        </div>
    </div>
</div>
<!--end upper-bar-->
<!--start navbar-->
<nav class="navbar navbar-invers-lg navbar-light" id="n">
    <div class="container">
        <a class="navbar-brand" href="#">
            <span>BFCAI</span><span class="spa">SHOP</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navmain" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navmain">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="member.php?do==Edit&userid=<?php echo $_SESSION['ID']?> "><?php echo lang("Edit_pa")?></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#features"><?php echo lang("About_pa")?>  <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#work"><?php echo lang("Work_pa")?></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#view"><?php echo lang("Contact_pa")?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php"><?php echo lang("Logout_pa")?></a>
            </li>
          </ul>
         
        </div>
        </div>
      </nav>
<!--end navbar-->
</body>
</html>