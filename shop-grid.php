<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mart System</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>RM 150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/malaysia.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <form action="Login/index.php" method="get">
                    <button type="submit" id="loginBtn" href="Login/index.php"><i class="fa fa-user"></i> Login</button>
                </form>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                        <li><a href="./Cart/checkout.php">Check Out</a></li>
                       
                    </ul>
                </li>
               
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i>mart@gmail.com</li>
                <li>Free Shipping for all Order of RM 99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

        <!-- Header Section Begin -->
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="header__top__left">
                                <ul>
                                    <li><i class="fa fa-envelope"></i> <a href="mailto:mart@gmail.com">mart@gmail.com</a></li>
                                    <li>Free Shipping for all Order up to RM10!!!</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="header__top__right">
    
                                <div class="header__top__right__language">
                                    <img src="img/malaysia.png" alt="">
                                    <div>English</div>
                                    <span class="arrow_carrot-down"></span>
                                    <ul>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                                <!-- Login Modal Begin -->
                                <div id="loginModal" class="modal">
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <h2>Login</h2>
                                        <form action="index.php" method="get">
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" id="username" name="username" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" id="password" name="password" required>
                                            </div>
                                            <button type="submit" class="site-btn">Login</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- Login Modal End -->
                                <!-- Login Button -->
                                <div class="header__top__right__auth">
                                    <form action="Login/index.php" method="get">
                                        <button type="submit" id="loginBtn" href="Login/index.php"><i class="fa fa-user"></i> Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="./index.php">Home</a></li>
                                <li><a href="./shop-grid.html">Shop</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                        <li><a href="./Cart/checkout.php">Check Out</a></li>
                                        
                                    </ul>
                                </li>
                               
                                <li><a href="./contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="header__cart">
                            <ul>
                                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                            </ul>
                            <div class="header__cart__price">item: <span>RM 150.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="humberger__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </header>
        <!-- Header Section End -->

    <!-- Hero Section Begin -->
  <!--  <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Dried Nuts</a></li>
                            <li><a href="#">Fresh Fruits</a></li>
                            <li><a href="#">Juices</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+60 111122233</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
  -->   <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Organi Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="../index.php">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2> Product Categories </h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".fresh-fruit">Fresh Fruit</li>
                        <li data-filter=".fresh-meat">Fresh Meat</li>
                        <li data-filter=".dairy">Dairy</li>
                        <li data-filter=".vegetables">Vegetables</li>
                        <li data-filter=".snacks">Snack</li>
                        <li data-filter=".essential">Essential</li>
                        <li data-filter=".cleaning">Cleaning Supplies</li>
                        <li data-filter=".beverage">Beverage</li>
                        <li data-filter=".healthcare">Healthcare</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-fruit">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/item/banana.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="Cart/add_cart.php" method="get">
                                <input type="hidden" name="item" value="Banana: 500g">
                                <input type="hidden" name="price" value="2.00">
                                <button type="submit">BUY</button>
                            </form>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Banana: 500g</a></h6>
                        <h5>RM 2.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-fruit">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/item/oranges.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="Cart/add_cart.php" method="get">
                                <input type="hidden" name="item" value="Oranges: 4 pcs">
                                <input type="hidden" name="price" value="6.00">
                                <button type="submit">BUY</button>
                            </form>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Oranges: 4 pcs</a></h6>
                        <h5>RM 6.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix dairy">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/item/barista-milk.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="Cart/add_cart.php" method="get">
                                <input type="hidden" name="item" value="Barista Milk 1L">
                                <input type="hidden" name="price" value="12.00">
                                <button type="submit">BUY</button>
                            </form>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Barista Milk 1L</a></h6>
                        <h5>RM 12.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix dairy">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/item/low-fat-milk.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="Cart/add_cart.php" method="get">
                                <input type="hidden" name="item" value="Low Fat Milk 1L">
                                <input type="hidden" name="price" value="6.00">
                                <button type="submit">BUY</button>
                            </form>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Low Fat Milk 1L</a></h6>
                        <h5>RM 6.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix dairy">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/item/farmfresh.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="Cart/add_cart.php" method="get">
                                <input type="hidden" name="item" value="Fresh Milk 2L">
                                <input type="hidden" name="price" value="12.00">
                                <button type="submit">BUY</button>
                            </form>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Fresh Milk 2L</a></h6>
                        <h5>RM 12.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/item/bawangmerah.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="Cart/add_cart.php" method="get">
                                <input type="hidden" name="item" value="Bawang Merah(Red Onion): 500g">
                                <input type="hidden" name="price" value="2.00">
                                <button type="submit">BUY</button>
                            </form>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Bawang Merah(Red Onion): 500g</a></h6>
                        <h5>RM 2.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/item/cauliflower.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="Cart/add_cart.php" method="get">
                                <input type="hidden" name="item" value="Cauliflower: 1 pcs">
                                <input type="hidden" name="price" value="5.00">
                                <button type="submit">BUY</button>
                            </form>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Cauliflower: 1 pcs</a></h6>
                        <h5>RM 5.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/item/cucumber.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="Cart/add_cart.php" method="get">
                                <input type="hidden" name="item" value="Cucumber: 1 pcs">
                                <input type="hidden" name="price" value="2.00">
                                <button type="submit">BUY</button>
                            </form>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Cucumber: 1 pcs</a></h6>
                        <h5>RM 2.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix snacks">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/item/nips.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="Cart/add_cart.php" method="get">
                                <input type="hidden" name="item" value="Nips: 1 pcs">
                                <input type="hidden" name="price" value="3.50">
                                <button type="submit">BUY</button>
                            </form>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Nips: 1 pcs</a></h6>
                        <h5>RM 3.50</h5>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-3 col-md-4 col-sm-6 mix essential">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/item/egg.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="Cart/add_cart.php" method="get">
                                <input type="hidden" name="item" value="Egg: 6 pcs">
                                <input type="hidden" name="price" value="7.00">
                                <button type="submit" id="loginBtn" href="/shoping-cart.html"> BUY</button>
                            </form>
                        </ul>
                    </div>
            
                    <div class="featured__item__text">
                        <h6><a href="#">Egg: 6 pcs</a></h6>
                        <h5>RM 7.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix essential">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/item/beras.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="Cart/add_cart.php" method="get">
                                <input type="hidden" name="item" value="Rice: 1 pcs">
                                <input type="hidden" name="price" value="4.00">
                                <button type="submit" id="loginBtn" href="/shoping-cart.html"> BUY</button>
                            </form>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Beras(Rice): 1kg</a></h6>
                        <h5>RM 4.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix cleaning">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/item/daia.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="Cart/add_cart.php" method="get">
                                <input type="hidden" name="item" value="Daia Detergent">
                                <input type="hidden" name="price" value="9.00">
                                <button type="submit" id="loginBtn" href="/addcart.html"> BUY</button>
                            </form>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Daia Detergent</a></h6>
                        <h5>RM 9.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix cleaning">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/item/floor-cleaner.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="Cart/add_cart.php" method="get">
                                <input type="hidden" name="item" value="Floor Cleaner">
                                <input type="hidden" name="price" value="10.00">
                                <button type="submit" id="loginBtn" href="/shoping-cart.html"> BUY</button>
                            </form>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Floor Cleaner</a></h6>
                        <h5>RM 10.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat ">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/item/ikanbawal.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="Cart/add_cart.php" method="get">
                                <input type="hidden" name="item" value="Ikan Bawal: 500g">
                                <input type="hidden" name="price" value="20.00">
                                <button type="submit" id="loginBtn" href="/shoping-cart.html"> BUY</button>
                            </form>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Ikan Bawal: 500g</a></h6>
                        <h5>RM 20.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat ">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/item/meat.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="Cart/add_cart.php" method="get">
                                <input type="hidden" name="item" value="Meat: 500g">
                                <input type="hidden" name="price" value="15.00">
                                <button type="submit" id="loginBtn" href="/shoping-cart.html"> BUY</button>
                            </form>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Meat: 500g</a></h6>
                        <h5>RM 15.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat ">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/item/chickenfillet.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="Cart/add_cart.php" method="get">
                                <input type="hidden" name="item" value="Chicken Fillet:500g">
                                <input type="hidden" name="price" value="9.00">
                                <button type="submit" id="loginBtn" href="/shoping-cart.html"> BUY</button>
                            </form>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Chiken Fillet: 500g</a></h6>
                        <h5>RM 9.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix beverage">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/item/hausboom-lemonade.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="Cart/add_cart.php" method="get">
                                <input type="hidden" name="item" value="Hausboom Lemonade">
                                <input type="hidden" name="price" value="4.00">
                                <button type="submit" id="loginBtn" href="/shoping-cart.html"> BUY</button>
                            </form>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Hausboom Lemonade</a></h6>
                        <h5>RM 4.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix beverage">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/item/hausboom-strawberry.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="Cart/add_cart.php" method="get">
                                <input type="hidden" name="item" value="Hausboom strawberry">
                                <input type="hidden" name="price" value="4.00">
                                <button type="submit" id="loginBtn" href="/shoping-cart.html"> BUY</button>
                            </form>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Hausboom Strawbery</a></h6>
                        <h5>RM 4.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix healthcare">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/item/panadol.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="Cart/add_cart.php" method="get">
                                <input type="hidden" name="item" value="Panadol">
                                <input type="hidden" name="price" value="5.00">
                                <button type="submit" id="loginBtn" href="/shoping-cart.html"> BUY</button>
                            </form>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Panadol</a></h6>
                        <h5>RM 5.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix healthcare">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/item/koolfever.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="Cart/add_cart.php" method="get">
                                <input type="hidden" name="item" value="Koolfever">
                                <input type="hidden" name="price" value="8.00">
                                <button type="submit" id="loginBtn" href="/shoping-cart.html"> BUY</button>
                            </form>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Koolfever</a></h6>
                        <h5>RM 8.00</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






    <!-- Product Section Begin -->
  <!--  <section class="product spad">
        <div class="container">
            <div class="row">          
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-1.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">RM 30.00 <span>RM 36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-2.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Vegetables</span>
                                            <h5><a href="#">Vegetables’package</a></h5>
                                            <div class="product__item__price">RM 30.00 <span>RM 36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-3.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Mixed Fruitss</a></h5>
                                            <div class="product__item__price">RM 30.00 <span>RM 36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-4.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">RM 30.00 <span>RM 36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-5.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">RM 30.00 <span>RM 36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-6.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">RM 30.00 <span>RM 36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>16</span> Products found</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/cucumber.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Cucumber 350g</a></h6>
                                    <h5>RM 4.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Banana</a></h6>
                                    <h5>RM 6.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/bawangmerah.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Bawang Merah 500g </a></h6>
                                    <h5>RM 3.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/egg.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Nutri Plus Egg 10pcs</a></h6>
                                    <h5>RM 8.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/gradenia.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Gardenia</a></h6>
                                    <h5>RM 3.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/gradenia-breakthru.jpeg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Gradenia Breakthru</a></h6>
                                    <h5>RM 5.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/chilimerah.jpeg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Chili Merah 500g</a></h6>
                                    <h5>RM 3.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/ikanbawal.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Ikan Bawal</a></h6>
                                    <h5>RM 30.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-9.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Crab Pool Security</a></h6>
                                    <h5>RM 30.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-10.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Crab Pool Security</a></h6>
                                    <h5>RM 30.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-11.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Crab Pool Security</a></h6>
                                    <h5>RM 30.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-12.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Crab Pool Security</a></h6>
                                    <h5>RM 30.00</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> --> 
    <!-- Product Section End -->

<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                    <ul>
                        <li>Universiti Teknologi Malaysia, Skudai, Johor</li>
                        <li>+60 11122233</li>
                        <li>mart@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href="index.html">About Us</a></li>
                        <li><a href="shop-grid.html">Shop With Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->
    
<!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>