<?php 
       //including header
        $meta='<meta property="og:title" content="Sunny Prakash Tiwari :: Clef authentication" />
<meta property="og:type" content="website" />
<meta property="og:description" content="It is a sample Two factor authentication using Clef. " />
<meta property="og:url" content="http://localhost'.$url.'" />
<meta name="keywords" content="Clef,GSOC,moodle,Two factor authentication" />
<meta property="og:image" content="http://localhost/sunnytiwari.com/image/snyb.png" />
<meta property="og:site_name" content="Sunnytiwari.com" />';

       $title='Sunny Prakash Tiwari :: Clef authentication ';
       include '../header.php' ;
     ?>

                                
<?php require_once('config.php'); ?>
<?php

function base64url_encode($data) {
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

function generate_state_parameter() {
    if (isset($_SESSION['state'])) {
        return $_SESSION['state'];
    } else {
        $state = base64url_encode(openssl_random_pseudo_bytes(32));
        $_SESSION['state'] = $state;
        return $state;
    }
}

if (!session_id()) {
    session_start();
}
$state = generate_state_parameter();

?>

<!-- #################################code for clef button#############################-->
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-4 col-sm-offset-4">
    <div class="panel panel-default" style="min-height: 400px;">
                       <div class="panel-body" style="padding:20px;">
                       <p class="title">Clef Authentication sample for moodle</p>
                           <hr><br><br>
                           
           <center>          
        <script src='https://clef.io/v3/clef.js'
                class='clef-button'
                data-app-id='<?php echo APP_ID ?>'
                data-redirect-url='https://sunnytiwari.com/clef/clef.php'
                data-state='<?php echo $state ?>'>
        </script>
</center>

                           </div>
        </div>
    </div>
    </div>
    </div>

<!--footer start-->
<?php include '../footer.php'; ?>

