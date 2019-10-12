</section>
<style type="text/css">
.header_bg_clr{
	background: transparent;
}
body{
	background-color: #fff;
}
</style>
<?php
	$list_all_category1 = [['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off']]; 

   $list_all_category2 = [['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off']];

   $list_all_category3 = [['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off']];

   $list_all_category4 = [['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off']];
?>
	<section class="end_footer">
		<div class="cmn_list_all_category">
			<div class="list_all_category_first">
				<section class="prod_viewowl_carousel producut1_cmn">
			      <div class="container_width_prod_view">
			        <div class="prodct1_head">
			          <span class="prod_car_head"> Recommened for you</span>
			        </div>
			        <div id="owl-carousel6" class="owl_carousel_catgry_pg owl-carousel owlcarosel_cmn">
			         <?php for($i=0; $i<count($list_all_category1); $i++){ 
			            ?>
			          <div class="item">
			            <div class="product_items">
			              <div class="product_imgs">
			                <img src="<?php echo $list_all_category1[$i][1]; ?>" class="img-fluid product_imgs">
			              </div>
			              <div class="product_txt">
			                <p><?php echo $list_all_category1[$i][2]; ?></p>
			              </div>
			              <div class="price_txt">
			                <div class="prod_price"><?php echo $list_all_category1[$i][3]; ?></div>
			                <div class="prod_dics"><strike><?php echo $list_all_category1[$i][4]; ?></strike></div>
			                <div class="prod_off"> <?php echo $list_all_category1[$i][5]; ?></div>
			              </div>
			            </div>
			          </div>
			          <?php  } ?>
			      	</div>
			   		 </div>
			    </section> 
			</div>
			<div class="list_all_category_second">
				<section class="prod_viewowl_carousel producut1_cmn">
			      <div class="container_width_prod_view">
			        <div class="prodct1_head">
			          <span class="prod_car_head"> Recommened for you</span>
			        </div>
			        <div id="owl-carousel7" class="owl_carousel_catgry_pg owl-carousel owlcarosel_cmn">
			         <?php for($i=0; $i<count($list_all_category2); $i++){ 
			            ?>
			          <div class="item">
			            <div class="product_items">
			              <div class="product_imgs">
			                <img src="<?php echo $list_all_category2[$i][1]; ?>" class="img-fluid product_imgs">
			              </div>
			              <div class="product_txt">
			                <p><?php echo $list_all_category2[$i][2]; ?></p>
			              </div>
			              <div class="price_txt">
			                <div class="prod_price"><?php echo $list_all_category2[$i][3]; ?></div>
			                <div class="prod_dics"><strike><?php echo $list_all_category2[$i][4]; ?></strike></div>
			                <div class="prod_off"> <?php echo $list_all_category2[$i][5]; ?></div>
			              </div>
			            </div>
			          </div>
			          <?php  } ?>
			      	</div>
			   		 </div>
			    </section> 
			</div>
			<div class="list_all_category_third">
				<section class="prod_viewowl_carousel producut1_cmn">
			      <div class="container_width_prod_view">
			        <div class="prodct1_head">
			          <span class="prod_car_head"> Recommened for you</span>
			        </div>
			        <div id="owl-carousel8" class="owl_carousel_catgry_pg owl-carousel owlcarosel_cmn">
			         <?php for($i=0; $i<count($list_all_category3); $i++){ 
			            ?>
			          <div class="item">
			            <div class="product_items">
			              <div class="product_imgs">
			                <img src="<?php echo $list_all_category3[$i][1]; ?>" class="img-fluid product_imgs">
			              </div>
			              <div class="product_txt">
			                <p><?php echo $list_all_category3[$i][2]; ?></p>
			              </div>
			              <div class="price_txt">
			                <div class="prod_price"><?php echo $list_all_category3[$i][3]; ?></div>
			                <div class="prod_dics"><strike><?php echo $list_all_category3[$i][4]; ?></strike></div>
			                <div class="prod_off"> <?php echo $list_all_category3[$i][5]; ?></div>
			              </div>
			            </div>
			          </div>
			          <?php  } ?>
			      	</div>
			   		 </div>
			    </section> 
			</div>
			<div class="list_all_category_fourth">
				<section class="prod_viewowl_carousel producut1_cmn">
			      <div class="container_width_prod_view">
			        <div class="prodct1_head">
			          <span class="prod_car_head"> Recommened for you</span>
			        </div>
			        <div id="owl-carousel9" class="owl_carousel_catgry_pg owl-carousel owlcarosel_cmn">
			         <?php for($i=0; $i<count($list_all_category4); $i++){ 
			            ?>
			          <div class="item">
			            <div class="product_items">
			              <div class="product_imgs">
			                <img src="<?php echo $list_all_category4[$i][1]; ?>" class="img-fluid product_imgs">
			              </div>
			              <div class="product_txt">
			                <p><?php echo $list_all_category4[$i][2]; ?></p>
			              </div>
			              <div class="price_txt">
			                <div class="prod_price"><?php echo $list_all_category4[$i][3]; ?></div>
			                <div class="prod_dics"><strike><?php echo $list_all_category4[$i][4]; ?></strike></div>
			                <div class="prod_off"> <?php echo $list_all_category4[$i][5]; ?></div>
			              </div>
			            </div>
			          </div>
			          <?php  } ?>
			      	</div>
			   		 </div>
			    </section> 
			</div>
		</div>
	</section>