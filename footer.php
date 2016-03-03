<footer class="page-footer" style="background:#212121;">
          <div class="container">
            <div class="row">
               
              <div class="col-xs-12 col-sm-4">
                <br>
                <p class="title1">This Website</p>
                  <p>Developed by me<br>
                  Credits:<a href="http://getbootstrap.com/" style="color:#fff">Bootstrap</a>,<a href="https://jquery.com" style="color:#fff">jQuery</a>,<a href="http://fezvrasta.github.io/bootstrap-material-design/" style="color:#fff">Material Design</a>,<a href="github.com" style="color:#fff">Github</a><br>
                  This site is non-commercial.</p>
    
                </div>
                
                
              <div class="col-xs-12 col-sm-4 col-sm-offset-4" >
                <br>
                <p class="title1">SEARCH THIS SITE</p>
                <form action="#" method="post">
                  <div class="form-group label-floating">

  <label class="control-label" for="addon2">Enter Keywords</label>
  <div class="input-group">
    <input type="text" id="addon2" class="form-control">
    <span class="input-group-btn">
      <button type="submit" class="btn btn-fab btn-fab-mini">
        <i class="material-icons">search</i>
      </button>
    </span>
  </div>
</div>
                  </form>
                  
                  
              </div>
                
                
              
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <div class="row">
            <div class="col-md-6">
            © 2016 Copyright Sunny Prakash Tiwari 
             </div>
            <div class="col-md-6">
         <center>  This website is developed by me.<a href="#" style="blue"> See Website Code</a></center>
            </div></div>
          </div></div>
        </footer>

   <!--modal for officers login-->
<div class="modal fade" id="offlogin" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background:#03A9F4">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><p class="modal-title" style="font-size:20px;margin-bottom:20px;">Officer's Login</p></center>
      </div>
      <div class="modal-body">
        <div class="row">
  
<div class="col-md-offset-3 col-md-6">
 <form role="form" method="post" action="http://localhost/sunnytiwari.com/login.php?type=2">
     
     <div class="form-group label-floating">
  <label class="control-label" for="id">Enter unique voter id</label>
  <input class="form-control" id="id" name="id" type="text">
</div>
     
     <p><a href="forget/" style="color:blue;">Forget voter id??</a><br> </p>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-info btn-raised" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--login modal close-->    

<!--essential javascript for website-->
        
        <script src="http://localhost/sunnytiwari.com/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="http://localhost/sunnytiwari.com/js/bootstrap.min.js" ></script>
        <script src="http://localhost/sunnytiwari.com/js/material.min.js"></script>
        <script src="http://localhost/sunnytiwari.com/js/ripples.min.js"></script>
        <script src="http://localhost/sunnytiwari.com/js/alertify.js"></script>
      
        <script>
            $.material.init();
            $.material.ripples();
            $.material.input();
            $.material.checkbox();
            $.material.radio();
            $(".select").dropdown({ "autoinit" : ".select" });
        </script>
        <script src="http://localhost/sunnytiwari.com/js/main.js"></script>
        
    </body>
    
    
</html>

