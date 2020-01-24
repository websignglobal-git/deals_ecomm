<?php
 $images = [['test.php', './assets/images/buyers/banner1.png', 'red'],['test.php', './assets/images/buyers/banner2.png', 'green'],['test.php', './assets/images/buyers/banner3.png', 'blue'],['test.php', './assets/images/buyers/banner4.png', '#ccc']];
?>

  <div class="top_bancontainer_width" >
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
    </div>
  </section>

    <script type="text/javascript" src="{{ URL::asset('assets/js/home-slider.js')}}"></script>