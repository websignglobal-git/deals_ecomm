<?php
 $images = [['test.php', './assets/images/buyers/5.jpg', 'red'],['test.php', './assets/images/buyers/5.jpg', 'green'],['test.php', './assets/images/buyers/5.jpg', 'blue'],['test.php', './assets/images/buyers/5.jpg', '#ccc']];
?>

  <div class="carousel_main_div" >
    <div class="cmn_cursl">
    <div id="owl-carousel1ban" class="owl-carousel owlcarosel_cmn">
       <?php for($i=0; $i<count($images); $i++){ 
          ?>
            <div class="item">
                <div class="bans_imgs">
                    <img
                            src="<?php echo $images[$i][1]; ?>"
                            class="img-fluid ban_imgs" />
                </div>
            </div>
            <?php  } ?>
        </div>
    </div>
  </div>
  </section>

    <script type="text/javascript" src="{{ URL::asset('assets/js/home-slider.js')}}"></script>