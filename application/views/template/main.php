<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <?php /* codeigniter-boilerplate: Page Title *******************************/ ?>
  <?php if($title):?>
  <?php /* Page title: used if the page object has a title */?>
  <title><?php echo $title?></title>
  <?else:?>
  <?php /* Generic site title: used if the page object has not a title */?>
  <title>__YOUR SITE TITLE HERE__</title>
  <?php endif;?>

  <?php /* codeigniter-boilerplate: Page Description**************************/ ?>
  <?php if($description):?>
  <?php /* Page description: used if the page object has a description */?>
  <meta name="description" content="<?php echo $description?>">
  <?else:?>
  <?php /* Generic site description: used if the page object has not a description */?>
  <meta name="description" content="__SITE DESCRIPTION HERE__">
  <?php endif;?>

  <meta name="viewport" content="width=824">
  <?php /* codeigniter-boilerplate: Styles **********************************/ ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url()?>css/normalize.css">
  <link rel="stylesheet" href="<?php echo base_url()?>css/style.css">
  <link rel="stylesheet" href="http://www.marghoobsuleman.com/mywork/jcomponents/image-dropdown/samples/css/msdropdown/dd.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.2.0/css/bootstrap-slider.min.css" />
  <link rel="stylesheet" href="http://circle.firchow.net/assets/css/circle.css" />
  
  <?php foreach($css as $c):?>
  <link rel="stylesheet" href="<?php echo base_url()?>css/<?php echo $c?>">
  <?php endforeach;?>

  <script src="<?php echo base_url()?>js/vendor/modernizr-2.6.1.min.js"></script>

  <?php /* codeigniter-boilerplate: Google Fonts ****************************/ ?>
  <?php foreach($GFont as $f):?>
  <link  href="http://fonts.googleapis.com/css?family=<?php echo $f?>" rel="stylesheet" type="text/css" >
  <?php endforeach;?>
  
   <link href="//cdn.jsdelivr.net/npm/jquery-easy-loading/dist/jquery.loading.min.css" rel="stylesheet">
   <link rel="stylesheet" href="<?php echo base_url()?>css/custom.css">
   
</head>
<body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

<!-- <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1&appId=2033411990237563&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> -->

<div id="container">
    <header>
    <?php
    /* codeigniter-boilerplate: main navigation *******************************/
    echo $nav
    ?>
    </header>
    <div id="main" role="main">
    <?php
    /* codeigniter-boilerplate: content from single views *********************/
    echo $content
    ?>
    </div>
    <footer>

    </footer>
  </div> <!--! end of #container -->


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <!-- <script src="http://www.marghoobsuleman.com/mywork/jcomponents/image-dropdown/samples/js/msdropdown/jquery.dd.js"></script> -->
  <script>window.jQuery || document.write('<script src="<?php echo base_url()?>js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
  <!-- Latest compiled and minified JavaScript -->
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.js">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.2.0/bootstrap-slider.min.js"></script>
  </script>
  </script>

  <!-- scripts concatenated and minified via ant build script-->
  <script src="<?php echo base_url()?>js/plugins.js"></script>
  <!-- <script src="<?php echo base_url()?>js/champion.js"></script> -->
  <script src="<?php echo base_url()?>js/main.js"></script>
  <script src="//cdn.jsdelivr.net/npm/jquery-easy-loading/dist/jquery.loading.min.js"></script>
  <script src="<?php echo base_url()?>js/v2.js"></script>
  

  <!-- end scripts-->

  <?php /* codeigniter-boilerplate: Scripts *********************************/?>
  <?php foreach($javascript as $js):?>
  <script src="<?php echo base_url()?>js/<?php echo $js?>"></script>
  <?php endforeach;?>

      <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
      <script>
          var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
          (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
          g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
          s.parentNode.insertBefore(g,s)}(document,'script'));
      </script>
    </body>
</html>

<script language="javascript">
// $(document).ready(function(e) {
// try {
// $("html select").msDropDown();
// } catch(e) {
// alert(e.message);
// }
// });

</script>







