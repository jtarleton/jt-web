
<h1>Pictures</h1>

<?php 

define('SBASEHREF', 'https://www.jamestarleton.com/');
foreach($pics as $pic): ?>

<?php

echo $pic; ?>

<?php endforeach; ?>



<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators 
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
-->
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img style="width:500px; height:500px;" src="
https://www.jamestarleton.com/images/mypics/beautiful-scenery-wallpapers-184.jpg" alt="">
      <div class="carousel-caption">
        Caption
      </div>
    </div>
<?php 
if ($handle = opendir('/var/jt-web/web/images/mypics/')):

 while (false !== ($file = readdir($handle))) :  

  if($file!='.' && $file!='..'):
 // do something with the file
?><div class="item"><?php
      
       echo link_to(sprintf('<img src="%simages/mypics/%s" style="border:0; margin:0; padding:0; width:500px; height:500px;" />', SBASEHREF, $file), sprintf('%simages/mypics/%s', SBASEHREF, $file) );
       // note that '.' and '..' is returned even
       ?>
    <div class="carousel-caption">
    Caption
    </div>
  </div>
 <?php
endif;
 endwhile;
 closedir($handle);
endif;



    ?>
     




    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>  
