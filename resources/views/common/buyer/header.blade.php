    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php if(session_status() == PHP_SESSION_NONE){session_start();} ?>
  
    <body  onscroll="scroll()">
        <section class="header_bg_clr">
            <div class="header_sticky">
                <div id="scroll_full" class="header">
                    <div class="logo">
                        <a href="{{ URL('/')}}"><h1 class="logo_title">Deals of Market</h1></a>
                        <img class="cart_logo" src="{{ URL::asset('assets/images/common/cart.png')}}">
                    </div>
                    <div class="search_box">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control search_box" placeholder="Search here..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a class="search_btn_link" href="#"><span class="input-group-text search_btn" id="basic-addon2"><i class="fas fa-search"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="accnt_sec">
                        <div class="acc_list_carts">
                            <div class="my_catgry">
                                <div class="dropdown deal_nav_drpdwn">
                                  <button class="dropbtn deal_nav_drpdwn_btn vr_headr_catbtn">Categories<span class="link_arrow_icon"><i class="fas fa-angle-down fa_arrow" ></i></span></button>
                                  <div class="dropdown-content deal_nav_drpdwn_cnt">
                                    <a class="deals_nav_dropdown_a" href="#"><h5 class="categories_dropdown_title">Categories</h5></a>
                                        <a class="deals_nav_dropdown_a" href="{{ URL('category')}}">Electronics</a>
                                        <a class="deals_nav_dropdown_a" href="{{ URL('category')}}">TV and Appliances</a>
                                        <a class="deals_nav_dropdown_a" href="{{ URL('category')}}">Mens wear</a>
                                        <a class="deals_nav_dropdown_a" href="{{ URL('category')}}">Womens wear</a>
                                        <a class="deals_nav_dropdown_a" href="{{ URL('category')}}">Baby and Kids</a>
                                        <a class="deals_nav_dropdown_a" href="{{ URL('category')}}">Home and Furniture</a>
                                        <a class="deals_nav_dropdown_a" href="{{ URL('category')}}">Sports</a>
                                        <a class="deals_nav_dropdown_a" href="{{ URL('category')}}">Books</a>
                                        <a class="deals_nav_dropdown_a" href="{{ URL('category')}}">More</a>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="userimg_accnts">
                            <div class="my_accnt">
                                <div class="dropdown deal_nav_drpdwn">
                                  <button class="dropbtn deal_nav_drpdwn_btn vr_headr_catbtn">My Account <span class="link_arrow_icon"><i class="fas fa-angle-down fa_arrow" ></i></span></button>
                                  <div class="dropdown-content deal_nav_drpdwn_cnt">
                                    <a class="deals_nav_dropdown_a" href="#"><h5 class="accounts_dropdown_title">My Account and List's</h5></a>
                                    <a class="deals_nav_dropdown_a" href="#" onclick="myaccount()">My Account</a>
                                    <a class="deals_nav_dropdown_a" href="#">My Order</a>
                                    <a class="deals_nav_dropdown_a" href="#">My Favourites</a>
                                    @if(isset($_SESSION['user_id']))
                                        <a class="deals_nav_dropdown_a account_signout" id="signout" onclick="logout()">Signout</a>
                                    @else
                                        <a class="deals_nav_dropdown_a account_signout" id="signin" href="{{ URL('login')}}">Sign in</a>
                                    @endif
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="name_nav">
                            <div class="shopping_name_nav">
                               @if(isset($_SESSION['user_name']))
                                {{ $_SESSION['user_name'] }}
                                @else
                                Hi,sign in
                               @endif
                            </div>
                        </div>
                        <div class="shopping_carts">
                            <a href="{{ url('view-cart') }}"><img class="img-fluid shop_cart_img" src="{{ URL::asset('assets/images/common/cart.png')}}">
                              <span class="shop_cart_text save_cart_text badge"></span></a>
                        </div>
                    </div>
                </div>
            </div>


<script type="text/javascript">
  function cartprod() {
        var id = localStorage.getItem("product_id");
        var idval = JSON.parse(id)
        document.querySelector('.shop_cart_text').innerHTML = idval.length;
    }
    cartprod()
</script>