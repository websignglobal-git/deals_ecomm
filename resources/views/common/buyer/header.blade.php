<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
        <link rel="stylesheet" type="text/css" href="assets/css/common/header.css">
        <link rel="stylesheet" type="text/css" href="assets/css/common/footer.css">
        <title>header</title>
    </head>
                    
    <body onscroll="scroll()">
        <section class="header_bg_clr">
            <div class="header_sticky">
                <div id="scroll_full" class="header">
                    <div class="logo">
                        <h1 class="logo_title">Deals of Market</h1>
                        <img class="cart_logo" src="assets/images/common/cartlist.png">
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
                            <div class="btn-group">
                                <button type="button" class="btn dropdown_btn dropdown_btn_name">Categories</button>
                                <button type="button" class="btn dropdown_btn dropdown-toggle dropdown-toggle-split" onclick="icon_change1(this)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="link_arrow_icon"><i class="fas fa-angle-down btn dropdown-toggle dropdown-toggle-split" id="arrow_change1"></i></span>
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
                            </div>
                        </div>
                        <div class="userimg_accnts">
                            <!--  <div class="user_detail"><img class="img-fluid cart_icon" src="assets/images/common/user_img.png"></div> -->
                            <div class="my_accnt">
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown_btn dropdown_btn_name">My Account</button>
                                    <button type="button" class="btn dropdown_btn dropdown-toggle dropdown-toggle-split" onclick="icon_change2(this)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="link_arrow_icon"><i class="fas fa-angle-down btn dropdown-toggle dropdown-toggle-split" id="arrow_change2"></i></span>
                                    </button>
                                    <div class="dropdown-menu accounts_dropdown accounts_dropdown_arrow">
                                        <a class="dropdown-item" href="#"><h5 class="accounts_dropdown_title">My Account and List's</h5></a>
                                        <a class="dropdown-item" href="#">My Account</a>
                                        <a class="dropdown-item" href="#">My Order</a>
                                        <a class="dropdown-item" href="#">My Favourites</a>
                                        <a class="dropdown-item account_signout" href="#">Signout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shopping_carts">
                            <img class="img-fluid shop_cart_img" src="assets/images/common/cart_box.png">
                            <a href="view-cart"><p class="shop_cart_text">Cart</p></a>
                        </div>
                    </div>
                </div>
            </div>
