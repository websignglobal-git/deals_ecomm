</section>
<style type="text/css">
    .header_bg_clr {
        background: transparent;
    }

    body {
        background-color: #fff;
    }

    .prodct_pg_carosl .carousel {
        margin-top: 22px;
    }

    /* Make the image fully responsive */
    .prodct_pg_carosl .carousel-inner img {
        width: 100%;
        height: 100%;
    }

    .prodct_pg_carosl .carousel-indicators {
        display: inline-block;
        height: auto;
        overflow-x: hidden;
        position: static;
        direction: rtl;
    }

    @media screen and (max-width:992px) {
        .prodct_pg_carosl .carousel-indicators {
            display: block;
            direction: inherit;
            height: auto;
            width: 100%;
            max-width: 800px;
            overflow-x: auto;
            position: relative;
            margin-left: 0;
            margin-right: 0;
            overflow-y: hidden;
            justify-content: normal;
            margin-bottom: 20px;
        }

        .prodct_pg_carosl .carousel-inner {
            margin-left: 0 !important;
        }
    }

    .prodct_pg_carosl .item {
        margin-bottom: 10px;
        margin-left: 10px;
        cursor: pointer;
    }

    .prodct_pg_carosl .item.active img {
        border: 1px solid red;
        opacity: 1;
    }

    .prodct_pg_carosl .item img {
        border: 1px solid transparent;
        opacity: 0.5;
        transition: 0.5s;
    }

    .prodct_pg_carosl .item:hover img {
        border: 1px solid red;
        opacity: 1;
    }

    .prodct_pg_carosl .content {
        position: absolute;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        /* Black background with transparency */
        color: #f1f1f1;
        width: 100%;
        padding: 10px;
    }

    .prodct_pg_carosl .content p {
        font-size: 15px;
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
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
    }

</style>

<section class="end_footer">
    <div class="prodct_main_cmn">
        <div class="prodct_cmn">
            <div class="prodct_pg_carosl">
                <div id="demo" class="carousel slide vert" data-ride="carousel" data-interval="3000">
                    <div class="cmn_prod_crsl">
                        <div class="prodct_pg_carosl_sub">
                            <div class="carousel-indicators">

                                <?php
			           if($imgs){
     					for($i=0; $i<count($imgs); $i++){ ?>
                                <div data-target="#demo" data-slide-to="<?php echo $i; ?>" class="item"><img
                                        src="{{ URL::asset($imgs[$i])}}" class="img-fluid img_ful_wid"></div>
                                <?php  } } ?>
                            </div>
                        </div><!-- col-sm-4 Indicators -->
                        <div class="prodct_pg_details_sub">
                            <div class="carousel-inner adst_border_img">
                                <?php if($imgs){ 
			        	for($i=0; $i<count($imgs); $i++){ ?>
                                <div class="carousel-item">
                                    <div class="heart_iconm"><i class="fa fa-heart"></i></div>
                                    <img src="{{ URL::asset($imgs[$i])}}" class="img-fluid img_full_wid">
                                </div>
                                <?php  }}

				         
				         ?>
                            </div>
                            <div class="cmn_prod_btns">
                                <div class="cmn_prod_btns_addcart addcart_btn">
                                    <button class="btn_add addtocart_id" cid="{{ $datas[0]->home_product_id }}"
                                        onclick="setproductid()" type="button">Add to cart</button>
                                </div>
                                <div class="cmn_prod_btns_addcart buynow_btn">
                                    <button class="btn_add" onclick="buynow(this)" type="button">Buy now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="prodct_pg_details">
                <div class="product_view_menu"><a href="" class="pro_view_home">Home</a><i
                        class="fa fa-chevron-right"></i></div>
                <div class="product_view_head">
                    {{ $datas[0]->home_product_name }}

                </div>
                <!-- <div class="product_view_rating_cmn"><span class="product_view_rating">5.0 <i class="fa fa-star satr"></i></span><span class="product_view_rate_txt">Rating & Reviews Count</span></div> -->
                <div class="product_view_price">
                    <span class="price_p">
                        <?php $amount=json_decode($datas[0]->home_product_amount);

					?>
                        {{ $amount->actual_price }}
                    </span>
                    <span class="price_cut">{{ $amount->cost }}</span><span class="price_original">
                        {{ $amount->discount }}</span></div>

                <div class="product_view_color">
                    <span class="color_p">color</span><span class="color_colon">:</span>
                    <span class="color_col"></span>
                </div>
                <div class="product_color">
                    <?php if($datas[0]->home_product_attributes){ $general=json_decode($datas[0]->home_product_attributes);
						for($i=0; $i<count($general); $i++){
							if(isset($general[$i]->color)){
							  $color = $general[$i]->color;
								for($j=0; $j<count($color); $j++){
						?>
                    <span class="color_box1" style="background-color: {{$color[$j]}}"></span>
                    <?php }}} }?>

                </div>
                <div class="prodct_highlit_cmn">
                    <div class="prodct_highlit">
                        <p class="prodct_highlit_head"> Highlights </p>
                        <?php $highlihts=json_decode($datas[0]->home_products_highlights);
					
						foreach($highlihts as $key=>$value){
							?>
                        <div class="cmn_prodct_highlit">
                            <span class="prodct_highlit_point lft_span_prodt">{{$key}}</span> : <span
                                class="prodct_highlit_point rht_span_prodt">{!!$value!!}</span>
                        </div>
                        <?php
						}
						?>
                    </div>
                    <div class="prodct_payoption">
                        <p class="prodct_highlit_head"> Payment Options </p>
                        <p class="prodct_highlit_point"><a href="#" class="payment_proct_view"> Credit / Debit Card </a>
                        </p>
                        <p class="prodct_highlit_point"><a href="#" class="payment_proct_view">Cash on Delivery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail_cmn">
            <div class="detail_technical">
                <p class="tech_detail_head">specifications</p>
                <div>
                    <table class="table table-bordered product_view_tbl">
                        <tbody>
                            <?php $specification=json_decode($datas[0]->home_product_specification);
						foreach($specification as $key=>$value){
							?>
                            <tr class="prodct_tr">
                                <td class="lft_tbl">{{$key}}</td>
                                <td class="rht_tbl">{!!$value!!}</td>
                            </tr>
                            <?php
						}

						?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="detail_additional">
                <p class="tech_detail_head">Description</p>
                <div class="detail_addi_txt">
                    <div class="detail_addi_warrnt">
                        <div class="detail_addi_warrnt_txt">
                            <?php $prod_desc=json_decode($datas[0]->home_product_description);
							?>

                            {!! $prod_desc->productDescription !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product_view_carosl">
            <section class="prod_viewowl_carousel producut1_cmn">
                <div class="container_width_prod_view">
                    <div class="prodct1_head">
                        <span class="prod_car_head"> Deal of the day </span><span class="prod_car_icon"><i
                                class="fa fa-clock"></i></span><span class="prod_car_time">(12.42 hrs left)</span>
                    </div>
                    <div id="owl-carousel4" class="owl-carousel owlcarosel_cmn">
                        @foreach ($getCat as $cat)
                        <div class="item">
                            <div class="product_items">
                                <div class="product_imgs">
                                    <a href="{{ URL('view-product/'.$cat->home_product_id )}}"><img
                                            src="../<?php $images=json_decode($cat->home_product_images);?>{{$images[0]}}"
                                            class="img-fluid product_imgs" /></a>
                                </div>
                                <div class="product_txt">
                                    <p>{{ $cat->home_product_name }}</p>
                                </div>
                                <div class="price_txt">
                                    <div class="prod_price">
                                        ₹<?php $amount=json_decode($cat->home_product_amount);?>{{ $amount->actual_price }}
                                    </div>
                                    <div class="prod_dics"><strike>₹{{ $amount->cost }}</strike></div>
                                    <div class="prod_off">₹{{ $amount->discount }} Off</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('.carousel-item')[0].classList.add('active');

    // by Ranto
    function buynow(e) {
        var prodID = e.parentElement.previousElementSibling.firstElementChild.id
        localStorage.setItem('buynow_prod_id', prodID)
        window.location.href = '../checkout-address'
    }

    function addtocart(e) {
        var prodID = e.id
        localStorage.setItem('buynow_prod_id', prodID)

    }

</script>
