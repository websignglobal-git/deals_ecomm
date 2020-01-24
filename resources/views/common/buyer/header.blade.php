    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">\
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
                          <!--   <div class="btn-group">
                                <button type="button" class="btn dropdown_btn dropdown_btn_name"  id="arrow_change1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</button>
                                <button type="button" class="btn dropdown_btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="link_arrow_icon"><i class="fas fa-angle-down btn dropdown-toggle dropdown-toggle-split"></i></span>
                                </button>
                                <div class="dropdown-menu categories_dropdown categories_dropdown_arrow">
                                    <a class="dropdown-item" href="#"><h5 class="categories_dropdown_title">Categories</h5></a>
                                    <a class="dropdown-item" href="#">Electronics</a>
                                    <a class="dropdown-item" href="#">TV and Appliances</a>
                                    <a class="dropdown-item" href="#">Mens wear</a>
                                    <a class="dropdown-item" href="#">Womens wear</a>
                                    <a class="dropdown-item" href="#">Baby and Kids</a>
                                    <a class="dropdown-item" href="#">Home and Furniture</a>
                                    <a class="dropdown-item" href="#">Sports</a>
                                    <a class="dropdown-item" href="#">Books</a>
                                    <a class="dropdown-item" href="#">More</a>
                                </div>
                            </div> -->
                            <div class="my_catgry">
                                <div class="dropdown">
                                  <button class="btn btn-secondary dropdown-toggle vr_headr_catbtn" type="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Categories <span class="link_arrow_icon"><i class="fas fa-angle-down btn dropdown-toggle dropdown-toggle-split"></i></span>
                                  </button>
                                  <div class="dropdown-menu categories_dropdown_vr" aria-labelledby="dropdownMenuLink1">
                                    <a class="dropdown-item" href="#"><h5 class="categories_dropdown_title">Categories</h5></a>
                                        <a class="dropdown-item" href="{{ URL('category')}}">Electronics</a>
                                        <a class="dropdown-item" href="{{ URL('category')}}">TV and Appliances</a>
                                        <a class="dropdown-item" href="{{ URL('category')}}">Mens wear</a>
                                        <a class="dropdown-item" href="{{ URL('category')}}">Womens wear</a>
                                        <a class="dropdown-item" href="{{ URL('category')}}">Baby and Kids</a>
                                        <a class="dropdown-item" href="{{ URL('category')}}">Home and Furniture</a>
                                        <a class="dropdown-item" href="{{ URL('category')}}">Sports</a>
                                        <a class="dropdown-item" href="{{ URL('category')}}">Books</a>
                                        <a class="dropdown-item" href="{{ URL('category')}}">More</a>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="userimg_accnts">
                            <!--  <div class="user_detail"><img class="img-fluid cart_icon" src="assets/images/common/user_img.png"></div> -->
                            <div class="my_accnt">
                                <!-- <div class="btn-group">
                                    <button type="button" class="btn dropdown_btn dropdown_btn_name" id="arrow_change2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</button>
                                    <button type="button" class="btn dropdown_btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="link_arrow_icon"><i class="fas fa-angle-down btn dropdown-toggle dropdown-toggle-split" ></i></span>
                                    </button>
                                    <div class="dropdown-menu accounts_dropdown accounts_dropdown_arrow">
                                        <a class="dropdown-item" href="#"><h5 class="accounts_dropdown_title">My Account and List's</h5></a>
                                        <a class="dropdown-item" href="#" onclick="myaccount()">My Account</a>
                                        <a class="dropdown-item" href="#">My Order</a>
                                        <a class="dropdown-item" href="#">My Favourites</a>
                                        @if(isset($_SESSION['user_id']))
                                            <a class="dropdown-item account_signout" id="signout" href="#" onclick="logout()">Signout</a>
                                        @else
                                            <a class="dropdown-item account_signout" id="signin" href="#" onclick="signin()">Sign in</a>
                                        @endif
                                    </div>
                                </div> -->
                                <div class="dropdown">
                                  <button class="btn btn-secondary dropdown-toggle vr_headr_catbtn"  type="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account<span class="link_arrow_icon"><i class="fas fa-angle-down btn dropdown-toggle dropdown-toggle-split" ></i></span>
                                  </button>
                                  <div class="dropdown-menu categories_dropdown_vr" aria-labelledby="dropdownMenuLink">
                                     <a class="dropdown-item" href="#"><h5 class="accounts_dropdown_title">My Account and List's</h5></a>
                                        <a class="dropdown-item" href="#" onclick="myaccount()">My Account</a>
                                        <a class="dropdown-item" href="#">My Order</a>
                                        <a class="dropdown-item" href="#">My Favourites</a>
                                        @if(isset($_SESSION['user_id']))
                                            <a class="dropdown-item account_signout" id="signout" onclick="logout()">Signout</a>
                                        @else
                                            <a class="dropdown-item account_signout" id="signin" href="{{ URL('login')}}">Sign in</a>
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
                            <span class="shop_cart_text badge"></span></a>
                        </div>
                    </div>
                </div>
            </div>

