</section>
<style type="text/css">
.header_bg_clr{
	background: transparent;
}
body{
	background-color: #fff;
}
.prodct_pg_carosl .carousel{
  margin-top:22px;
}
/* Make the image fully responsive */
.prodct_pg_carosl .carousel-inner img {
  width: 100%;
  height: 100%;
}
.prodct_pg_carosl .carousel-indicators{
  display:inline-block;
  height: auto;
  overflow-x: hidden;
  position:static;
  direction: rtl;
}
@media screen and (max-width:992px){
 .prodct_pg_carosl .carousel-indicators{
    display: block;
    direction: inherit;
    height: auto;
    width: 100%;
    max-width:800px;
    overflow-x: auto;
    position: relative;
    margin-left: 0;
    margin-right: 0;
    overflow-y: hidden;
    justify-content: normal;
    margin-bottom:20px;
  }
 .prodct_pg_carosl .carousel-inner{
    margin-left:0!important;
  }
}
.prodct_pg_carosl .item{
  margin-bottom:10px;
  margin-left: 10px;
  cursor:pointer;
}
.prodct_pg_carosl .item.active img{
  border:1px solid red;
  opacity:1;
}
.prodct_pg_carosl .item img{
  border:1px solid transparent;
  opacity:0.5;
  transition:0.5s;
}
.prodct_pg_carosl .item:hover img{
  border:1px solid red;
  opacity:1;
}
.prodct_pg_carosl .content {
  position: absolute;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5); /* Black background with transparency */
  color: #f1f1f1;
  width: 100%;
  padding: 10px;
}
.prodct_pg_carosl .content p{
  font-size:15px;
}
/* width */
::-webkit-scrollbar {
  width: 5px;
    height: 5px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}


.vert .carousel-item-next.carousel-item-left,
.vert .carousel-item-prev.carousel-item-right {
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.vert .carousel-item-next,
.vert .active.carousel-item-right {
    -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100% 0);
}

.vert .carousel-item-prev,
.vert .active.carousel-item-left {
-webkit-transform: translate3d(0,-100%, 0);
        transform: translate3d(0,-100%, 0);
}

</style>
<?php

 $product_img_parts = [['test.php', './assets/images/buyers/prod1.jpg'],['test.php', './assets/images/buyers/prod2.jpg'],['test.php', './assets/images/buyers/prod3.jpg'],['test.php', './assets/images/buyers/prod4.jpg'],['test.php', './assets/images/buyers/prod5.jpg']]; 

  $product_img_full = [['test.php', './assets/images/buyers/prod1.jpg'],['test.php', './assets/images/buyers/prod2.jpg'],['test.php', './assets/images/buyers/prod3.jpg'],['test.php', './assets/images/buyers/prod4.jpg'],['test.php', './assets/images/buyers/prod5.jpg']];


   $products_view1 = [['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off']]; 

   $products_view2 = [['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off'],['test.php', './assets/images/buyers/2.png','Girls Cosmetic products (bundle)','₹500','₹1000',' 50% Off']];
 ?>
<section class="end_footer">
	<div class="prodct_main_cmn">
		<div class="prodct_cmn">
			<div class="prodct_pg_carosl">
				<div id="demo" class="carousel slide vert" data-ride="carousel" data-interval="3000">
			    <div class="cmn_prod_crsl">
			      <div class="prodct_pg_carosl_sub">
			        <div class="carousel-indicators">
			        	<?php for($i=0; $i<count($product_img_parts); $i++){ ?>
			          <div data-target="#demo" data-slide-to="<?php echo $i; ?>" class="item"><img src="<?php echo $product_img_parts[$i][1]; ?>" class="img-fluid img_ful_wid"></div>
			           <?php  } ?>
			        </div>
			      </div><!-- col-sm-4 Indicators -->
			      <div class="prodct_pg_details_sub">
			        <div class="carousel-inner adst_border_img">
		        	<?php for($i=0; $i<count($product_img_full); $i++){ ?>
			          <div class="carousel-item">
			      	<div class="heart_iconm"><i class="fa fa-heart"></i></div>
			            <img src="<?php echo $product_img_full[$i][1]; ?>" class="img-fluid img_full_wid">
			          </div>
		           <?php  } ?>
			        </div>
			        <div class="cmn_prod_btns">
				        <div class="cmn_prod_btns_addcart addcart_btn">
				        	<button class="btn_add" type="button">Add to cart</button>
				        </div>
				        <div class="cmn_prod_btns_addcart buynow_btn">
				        	<button class="btn_add" type="button">Add to cart</button>
				        </div>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="prodct_pg_details">
				<div class="product_view_menu"><a href="" class="pro_view_home">Home</a><i class="fa fa-chevron-right"></i></div>
				<div class="product_view_head">Product Name</div>
				<div class="product_view_rating_cmn"><span class="product_view_rating">5.0 <i class="fa fa-star satr"></i></span><span class="product_view_rate_txt">Rating & Reviews Count</span></div>
				<div class="product_view_disc_amnt">Discount Amount</div>
				<div class="product_view_price"><span class="price_p">price</span><span class="price_cut">Real Price</span><span class="price_original">Offer Price</span></div>
				<div class="product_view_color"><span class="color_p">color</span><span class="color_colon">:</span><span class="color_col">red</span></div>
				<div class="product_color"><span class="color_box1"></span><span class="color_box2"></span></div>
				<div class="delivery_pincode">Delivery Pincode Check</div>
				<div class="delivery_pincode_input"> 
					<div class="input-group mb-3">
					    <input type="text" class="form-control input_pincode" placeholder="enter pincode">
					    <div class="input-group-append">
					      <span class="input-group-text check_txt">check</span>
					    </div>
					  </div>
				</div>
				<div class="prodct_highlit_cmn">
					<div class="prodct_highlit">
						<p class="prodct_highlit_head"> Highlights </p>
						<p class="prodct_highlit_point">points</p>
						<p class="prodct_highlit_point">points</p>
						<p class="prodct_highlit_point">points</p>
						<p class="prodct_highlit_point">points</p>
					</div>
					<div class="prodct_payoption">
						<p class="prodct_highlit_head"> Payment Options </p>
						<p class="prodct_highlit_point">Credit / Debit Card </p>
						<p class="prodct_highlit_point">Cash on Delivery</p>
					</div>
				</div>
			</div>
		</div>
		<div class="detail_cmn">
			<div class="detail_technical">
				<p class="tech_detail_head">Additional Details</p>
				<div>
					<table class="table table-bordered product_view_tbl">
				    <tbody>
				      <tr class="prodct_tr">
				        <td class="lft_tbl"></td>
				        <td class="rht_tbl"></td>
				      </tr>
				      <tr class="prodct_tr">
				        <td class="lft_tbl"></td>
				        <td class="rht_tbl"></td>
				      </tr> 
				      <tr class="prodct_tr">
				        <td class="lft_tbl"></td>
				        <td class="rht_tbl"></td>
				      </tr> 
				      <tr class="prodct_tr">
				        <td class="lft_tbl"></td>
				        <td class="rht_tbl"></td>
				      </tr>
				       <tr class="prodct_tr">
				        <td class="lft_tbl"></td>
				        <td class="rht_tbl"></td>
				      </tr> 
				      <tr class="prodct_tr">
				        <td class="lft_tbl"></td>
				        <td class="rht_tbl"></td>
				      </tr> 
				      <tr class="prodct_tr">
				        <td class="lft_tbl"></td>
				        <td class="rht_tbl"></td>
				      </tr> 
				      <tr class="prodct_tr">
				        <td class="lft_tbl"></td>
				        <td class="rht_tbl"></td>
				      </tr>
				       <tr class="prodct_tr">
				        <td class="lft_tbl"></td>
				        <td class="rht_tbl"></td>
				      </tr>
				       <tr class="prodct_tr">
				        <td class="lft_tbl"></td>
				        <td class="rht_tbl"></td>
				      </tr> 
				      <tr class="prodct_tr">
				        <td class="lft_tbl"></td>
				        <td class="rht_tbl"></td>
				      </tr>
				    </tbody>
				  </table>
				</div>
			</div>
			<div class="detail_additional">
				<p class="tech_detail_head">Additional Details</p>
				<div class="detail_addi_txt">
					<div class="detail_addi_warrnt">
						<p class="detail_addi_warrnt_head">
							 Warrent & Support 
						</p>
						<p class="detail_addi_warrnt_txt">
							1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase
						</p>
					</div>
					<div class="detail_addi_feedback">
						<p class="detail_addi_feedback_head">
							Feedback
						</p>
						<p class="detail_addi_feedback_txt">
							Would you like to tell us about a lower price?
							If you are a seller for this product, would you like to suggest updates through seller support?
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="product_view_carosl">
		 	<section class="prod_viewowl_carousel producut1_cmn">
		      <div class="container_width_prod_view">
		        <div class="prodct1_head">
		          <span class="prod_car_head"> Deal of the day </span><span class="prod_car_icon"><i class="fa fa-clock"></i></span><span class="prod_car_time">(12.42 hrs left)</span>
		        </div>
		        <div id="owl-carousel4" class="owl-carousel owlcarosel_cmn">
		         <?php for($i=0; $i<count($products_view1); $i++){ 
		            ?>
		          <div class="item">
		            <div class="product_items">
		              <div class="product_imgs">
		                <img src="<?php echo $products_view1[$i][1]; ?>" class="img-fluid product_imgs">
		              </div>
		              <div class="product_txt">
		                <p><?php echo $products_view1[$i][2]; ?></p>
		              </div>
		              <div class="price_txt">
		                <div class="prod_price"><?php echo $products_view1[$i][3]; ?></div>
		                <div class="prod_dics"><strike><?php echo $products_view1[$i][4]; ?></strike></div>
		                <div class="prod_off"> <?php echo $products_view1[$i][5]; ?></div>
		              </div>
		            </div>
		          </div>
		          <?php  } ?>
		      </div>
		    </div>
		    </section> 

		    <section class="prod_viewowl_carousel producut1_cmn">
		      <div class="container_width_prod_view">
		        <div class="prodct1_head">
		          <span class="prod_car_head"> Recommened for you</span>
		        </div>
		        <div id="owl-carousel5" class="owl-carousel owlcarosel_cmn">
		         <?php for($i=0; $i<count($products_view2); $i++){ 
		            ?>
		          <div class="item">
		            <div class="product_items">
		              <div class="product_imgs">
		                <img src="<?php echo $products_view2[$i][1]; ?>" class="img-fluid product_imgs">
		              </div>
		              <div class="product_txt">
		                <p><?php echo $products_view2[$i][2]; ?></p>
		              </div>
		              <div class="price_txt">
		                <div class="prod_price"><?php echo $products_view2[$i][3]; ?></div>
		                <div class="prod_dics"><strike><?php echo $products_view2[$i][4]; ?></strike></div>
		                <div class="prod_off"> <?php echo $products_view2[$i][5]; ?></div>
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
