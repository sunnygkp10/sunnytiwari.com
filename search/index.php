   <?php 
$url=$_SERVER['REQUEST_URI'];

       $meta='<meta property="og:title" content="Sunny Prakash Tiwari :: Search " />
<meta property="og:type" content="website" />
<meta property="og:description" content="It is personal website of me (sunny prakash tiwari) for showing my skills and works an to build my online presence.I am a student of Third year Student of B.tech (Information Technology) at Kamla Nehru Institute Of Technology, sultanpur (Uttar Pradesh), India.   " />
<meta property="og:url" content="https://sunnytiwari.com'.$url.'" />
<meta name="keywords" content="sunny , sunny tiwari , sunny prakash tiwari , sunnygkp10, tiwari , KNIT, KNIT sultanpur, kamla nehru institute of technology,Freelancer, web developer, software engineer, IT, Information Technology, Personal website," />
<meta property="og:image" content="https://sunnytiwari.com/image/snyb.png" />
<meta property="og:site_name" content="https://Sunnytiwari.com" />';

       $title='Sunny Prakash Tiwari :: Search';
       $nav=1;
       include '../header.php';
?>
<div class="container">
<div class="row">
<div class="col-xs-12">
    <div class="panel panel-default" style="min-height: 400px;">
                       <div class="panel-body detail">
                       <p class="title" style="margin-top: -40px;">Search results for <i><?php echo $_GET['q'] ?></i></p>
<gcse:searchresults-only></gcse:searchresults-only>
</div>
</div>
</div>
</div>

</div>

<?php include '../footer.php' ?>
<script>
  (function() {
    var cx = '008801790672599485380:c4kaibogywa';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
</body>
</html>
