
<?php

 $products = [['test.php', './assets/images/buyers/1.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/1.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/1.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/1.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/1.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/1.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/1.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off']]; 

 $products2 = [['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off']];

  $products3 = [['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off']];

 ?>

  <section class="owl_carousel">
    <div class="container_width">
      <div class="prodct1_head">
        Top Picks for you
      </div>
      <div id="owl-carousel1" class="owl-carousel owl-theme">
       <?php for($i=0; $i<count($products); $i++){ 
          ?>
        <div class="item">
          <div class="product_items">
            <div class="product_imgs">
              <img src="<?php echo $products[$i][1]; ?>" class="img-fluid product_imgs">
            </div>
            <div class="product_txt">
              <p><?php echo $products[$i][2]; ?></p>
            </div>
            <div class="price_txt">
              <div class="prod_price"><?php echo $products[$i][3]; ?></div>
              <div class="prod_dics"><strike><?php echo $products[$i][4]; ?></strike></div>
              <div class="prod_off"> <?php echo $products[$i][5]; ?></div>
            </div>
          </div>
        </div>
        <?php  } ?>
    </div>
  </div>
  </section> 

   <section class="owl_carousel producut2_cmn">
    <div class="container_width">
      <div class="prodct1_head">
        Deal of the day
      </div>
      <div id="owl-carousel2" class="owl-carousel owl-theme">
       <?php for($i=0; $i<count($products2); $i++){ 
          ?>
        <div class="item">
          <div class="product_items">
            <div class="product_imgs">
              <img src="<?php echo $products2[$i][1]; ?>" class="img-fluid product_imgs">
            </div>
            <div class="product_txt">
              <p><?php echo $products2[$i][2]; ?></p>
            </div>
            <div class="price_txt">
              <div class="prod_price"><?php echo $products2[$i][3]; ?></div>
              <div class="prod_dics"><strike><?php echo $products2[$i][4]; ?></strike></div>
              <div class="prod_off"> <?php echo $products2[$i][5]; ?></div>
            </div>
          </div>
        </div>
        <?php  } ?>
    </div>
  </div>
  </section>
  <section class="owl_carousel producut3_cmn">
    <div class="container_width">
      <div class="prodct1_head">
        Deal of the day
      </div>
      <div id="owl-carousel3" class="owl-carousel owl-theme">
       <?php for($i=0; $i<count($products3); $i++){ 
          ?>
        <div class="item">
          <div class="product_items">
            <div class="product_imgs">
              <img src="<?php echo $products3[$i][1]; ?>" class="img-fluid product_imgs">
            </div>
            <div class="product_txt">
              <p><?php echo $products3[$i][2]; ?></p>
            </div>
            <div class="price_txt">
              <div class="prod_price"><?php echo $products3[$i][3]; ?></div>
              <div class="prod_dics"><strike><?php echo $products3[$i][4]; ?></strike></div>
              <div class="prod_off"> <?php echo $products3[$i][5]; ?></div>
            </div>
          </div>
        </div>
        <?php  } ?>
    </div>
  </div>
  </section>