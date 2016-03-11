<?php 

$url=$_SERVER['REQUEST_URI'];

       $meta='<meta property="og:title" content="Sunny Prakash Tiwari :: Add Testimonial " />
<meta property="og:type" content="website" />
<meta property="og:description" content="It is personal website of me (sunny prakash tiwari) for showing my skills and works an to build my online presence.I am a student of Third year Student of B.tech (Information Technology) at Kamla Nehru Institute Of Technology, sultanpur (Uttar Pradesh), India.   " />
<meta property="og:url" content="http://localhost'.$url.'" />
<meta name="keywords" content="sunny , sunny tiwari , sunny prakash tiwari , sunnygkp10, tiwari , KNIT, KNIT sultanpur, kamla nehru institute of technology,Freelancer, web developer, software engineer, IT, Information Technology, Personal website," />
<meta property="og:image" content="http://localhost/sunnytiwari.com/image/snyb.png" />
<meta property="og:site_name" content="Sunnytiwari.com" />';

       $title='Sunny Prakash Tiwari :: Add Testimonial';
       $nav=7;
       include '../header.php';
$_SESSION['lastSiteId'] = 'spambot';
$_SESSION['lastSiteRequest'] = time();
?>

 <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    
                     <!--alert message display-->
        <?php if(isset($_GET['q'])){
    echo '
            <div class="alert alert-dismissible alert-success" style="background:#8BC34A">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Thank you !!</strong> '.$_GET['q'].'
</div>';
}
      ?>    
                    
                  <div class="panel panel-primary" >
 <div  class="panel-heading panel-heading-custom" style="background: #F44336; color: #fff; font-size:20px;">Add Testimonial ! <span class="pull-right hidden-xs">Thanks :)</span></div>
                    
  <div class="panel-body" style="padding:65px;">
<p>I am glad that you decided to write about me :) Thanks for your time. Please provide me with the following details and your testimonial will appear soon on my website !</p>
      <br>
      <div class="row">
     <div class="col-xs-12 col-sm-8 col-sm-offset-2">
      <form action="update.php" method="post">
      
      <div class="form-group label-floating">
  <label class="control-label" for="name">Enter Your Name</label>
  <input class="form-control" id="name" name="name" type="text">
</div>
          
          <div class="form-group label-floating">
  <label class="control-label" for="email">Enter your email</label>
  <input class="form-control" id="email" name="email" type="email">
</div>
          
          <div class="form-group label-floating">
  <label class="control-label" for="relation">Relationship with Sunny (ex:-Freind,mentor)</label>
  <input class="form-control" id="relation" name="relation" type="text">
</div>
          
         
                 <div class="form-group label-floating">
  <label class="control-label" for="feedback">Write testimonial here ...</label>
     <textarea class="form-control" name="feedback" rows="3" id="feedback"></textarea>

</div>

              <center><button type="submit" class="btn btn-danger  btn-raised" ><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp;&nbsp;Submit</button></center> 

      </div>
      
      </form>
         </div>
           </div>
                      </div>
                    </div>
                </div>
                
                
     </div>
</div>
<?php include '../footer.php' ?>
