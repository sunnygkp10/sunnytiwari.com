<?php 
       //including header
        $meta='<meta property="og:title" content="Sunny Prakash Tiwari :: welcome" />
<meta property="og:type" content="website" />
<meta property="og:description" content="It is a sample Two factor authentication using Clef. " />
<meta property="og:url" content="http://localhost'.$url.'" />
<meta name="keywords" content="Clef,GSOC,moodle,Two factor authentication" />
<meta property="og:image" content="http://localhost/sunnytiwari.com/image/snyb.png" />
<meta property="og:site_name" content="Sunnytiwari.com" />';

       $title='Sunny Prakash Tiwari :: welcome';
       include '../header.php' ;
     ?>


<?php
    require('config.php');

    session_start();

    // redirect from here if not login
    if(!isset($_SESSION["user_id"])) {
        header("Location: index.php");
    }

    require('mysql.php');
    $user = get_user($_SESSION['user_id'], $mysql);
    if (!$user) header("Location: index.php");

    if (isset($user['logged_out_at'])) {
        $logged_out_at = $user['logged_out_at'];
        if (!isset($_SESSION['logged_in_at']) || $_SESSION['logged_in_at'] < $logged_out_at) {
            session_destroy();
            header('Location: index.php');
        }
    }
?>

<!-- #################################code for displaying information#############################-->
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-4 col-sm-offset-4">
   
    <!--alert for successful login -->
    <div class="alert alert-dismissible alert-success" style="background:#8BC34A">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Thank you !!</strong>For Try my sample login using clef.
    </div>
    
    <div class="panel panel-default" style="min-height: 400px;">
                       <div class="panel-body" style="padding:20px;">
                       <p class="title">Clef Authentication</p>
                           <hr>
      <div class='user-info'>
        <h2>Welcome to the clef sample login !  Here's your info:</h2>
        <h3>Clef ID: <?=$_SESSION["user_id"]?></h3>
        <h3>Name: <?=$_SESSION['name']?></h3>
        <h3>Email: <?=$_SESSION['email']?></h3>
    </div>

                           </div>
        </div>
    </div>
    </div>
    </div>

<!--footer start-->
<?php include '../footer.php'; ?>
