<?php
 $images = [['test.php', './assets/images/buyers/5.jpg', 'red'],['test.php', './assets/images/buyers/5.jpg', 'green'],['test.php', './assets/images/buyers/5.jpg', 'blue'],['test.php', './assets/images/buyers/5.jpg', '#ccc']];
?>

  <div class="carousel_main_div" >
    <div class="cmn_cursl">
      <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
         <?php for($i=0; $i<count($images); $i++){ 
          ?>
         <!--  <p><?php echo $images[$i][2]; ?></p> -->
        <li data-target="#demo" data-slide-to="<?php echo $i; ?>" class="active_ind"></li>
         <?php  } ?>
      </ul>
      
      <!-- The slideshow -->
      <div class="carousel-inner">
        <?php for($i=0; $i<count($images); $i++){ 
          ?>
        <div class="carousel-item ">
          <img src="<?php echo $images[$i][1]; ?>" class="img-fluid ban_imgs">
        </div>
        
        <?php  } ?>

      </div>

      
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
         <span class="fa fa-arrow-left"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="fa fa-arrow-right"></span>
      </a>
    </div>
    </div>
  </div>
  </section>

  