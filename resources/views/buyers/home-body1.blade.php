<section class="end_footer">
    @foreach ($allCatData as $index => $xy)
    <section class="owl_carousel producut1_cmn">
        <div class="prodct1_head_container">
            <div class="prodct1_head">
                {{$categories[$index]}}
            </div>
        </div>
        <div class="container_width owl_crsl">
            <div id="owl-carousel{{$index+1}}" class="owl-carousel owlcarosel_cmn">

                @foreach ($xy as $cat)
                <div class="item">
                    <div class="product_items">
                        <div class="product_imgs">
                            <a href="{{ URL('view-product/'.$cat->home_product_id )}}"><img
                                    src="<?php $images=json_decode($cat->home_product_images);?>{{$images[0]}}"
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
    @endforeach
</section>
