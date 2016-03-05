<?php
//intialize $nav and $sidemenu if they are not initialize
if(!isset($nav)){
    $nav=0;
}
if(!isset($sidemenu)){
    $sidemenu=0;
}

date_default_timezone_set('Asia/Calcutta');
error_reporting(E_ALL);
ini_set("display_errors",1);
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=yes" >
    <!-- The above 3 meta tags *must* come first in the head; any other head 
         content must come *after* these tags -->
    
    <title><?php echo $title ?></title> 
     <link rel="shortcut icon" href="http://localhost/sunnytiwari.com/image/snyw.png">
    <?php echo $meta; ?>
    <!-- Material Design fonts -->
    <!--title image-->
   
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Bootstrap and material css -->
<!-- build:css styles/main.css -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href="http://localhost/sunnytiwari.com/css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link href="http://localhost/sunnytiwari.com/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/sunnytiwari.com/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="http://localhost/sunnytiwari.com/css/bootstrap-material-design.min.css" rel="stylesheet">
    <link href="http://localhost/sunnytiwari.com/css/ripples.min.css" rel="stylesheet">
     <link href="http://localhost/sunnytiwari.com/css/main.css" rel="stylesheet">
    <script src="http://localhost/sunnytiwari.com/js/jquery.min.js"></script>
       <!--include the css file for social media icon-->
<link rel="stylesheet" href="//cdn.materialdesignicons.com/1.4.57/css/materialdesignicons.min.css"> 

    
 <!-- endbuild -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     
</head>
    <body>
        <header>
            <!--navbar start-->
            <div class="row">
            <div class="col-xs-12">
                <nav class="navbar navbar-fixed-top navbar-danger " role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="http://localhost/sunnytiwari.com"><h4><img src="http://localhost/sunnytiwari.com/image/snyb.png" alt="my image" style="height:35px;width:35px; margin-top:-15px;"> <span class="hidden-xs">Sunny Prakash Tiwari <span class="hidden-sm"> , <small>~aka sunnygkp10</small></span></span></h4></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li <?php if ($nav == 1) echo 'class="active"';?> ><a href="http://localhost/sunnytiwari.com"><i class="mdi mdi-home"></i>&nbsp;Home<span class="sr-only">(current)</span></a></li>
        <li <?php if ($nav == 2) echo 'class="active"';?> ><a href="http://localhost/sunnytiwari.com/aboutme/"><i class="mdi mdi-account-circle"></i>&nbsp;About me</a></li>
              <li <?php if ($nav == 3) echo 'class="active"';?> ><a href="http://localhost/sunnytiwari.com/portofolio/"><i class="mdi mdi-laptop-mac"></i>&nbsp;Skills</a></li>
          <li class="dropdown <?php if ($nav == 4) echo 'active';?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-school"></i>&nbsp;Career<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://localhost/sunnytiwari.com/career/academic">Academic Career</a></li>
            <li><a href="http://localhost/sunnytiwari.com/career/professional">Professional Career</a></li>
            
          </ul>
        </li>
          <li <?php if ($nav == 5) echo 'class="active"';?> ><a href="http://localhost/sunnytiwari.com/achievements/"><i class="mdi mdi-certificate"></i>&nbsp;Achievements</a></li>
          <li <?php if ($nav == 6) echo 'class="active"';?> ><a href="#"><i class="mdi mdi-wordpress"></i>&nbsp;Blog</a></li>
          <li <?php if ($nav == 7) echo 'class="active"';?> ><a href="http://localhost/sunnytiwari.com/contact/"><i class="mdi mdi-contact-mail"></i>&nbsp;Contact</a></li>
        
      </ul>
         
       
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
                </div></div>
            
       
       </header>
