<link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600%7CNunito:400,600,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/icon-fonts.css">
<link rel="stylesheet" type="text/css" href="css/plugins.css">
<link rel="stylesheet" type="text/css" href="style.css">
<header id="header">
    <div class="header-area container">
        <div class="row">
            <div class="col-xs-12 hidden visible-xs">
                <ul class="list-unstyled social-network text-center">
                    <li><a href="mailto:petty@support.com"><i class="icon-message" aria-hidden="true"></i></a></li>
                    <li><a href="tell:1345678000"><i class="icon-phone-call" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="icon-user" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="icon-cart" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 hidden-xs">
                <ul class="list-unstyled contact-info">
                    <li>
                        <a href="mailto:petty@support.com" class="icon pull-left"><i class="icon-message"></i></a>
                        <div class="align-left pull-left hidden-xs">
                            <strong>Mail us:</strong>
                            <a href="mailto:petty@support.com">petty@support.com</a>
                        </div>
                    </li>
                    <li>
                        <a href="tell:1345678000" class="icon pull-left"><i class="icon-phone-call"></i></a>
                        <div class="align-left pull-left hidden-xs">
                            <strong>Call us:</strong>
                            <a href="tell:1345678000">(+1) 345 678 000</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 hidden-xs">
                <div class="social-list">
                    <ul class="list-unstyled social-network">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                    <ul class="list-unstyled account-cart">
                        <?php
                        if(!isset($_SESSION['l']))

                        {

                        ?>
                        <li><span class="glyphicon glyphicon-bookmark" href="signup.php"></span><a href="signup.php">s'inscrire</a></li>
                        <li><span class="glyphicon glyphicon-log-in" href="login.php"></span><a href="Login.php">se connecter</a></li>
<?php

}

else {?>
                        <li><a href="account.php"><i class="icon-user"href="account.php"></i><span class="hidden-xs">Account</span></a></li>
                        <li>   <span class="glyphicon glyphicon-log-out" href="logout.php"></span><a href="Logout.php">se déconnecter</a></li>
                     <?php } ?>
                        <li><a href="#"><i class="icon-cart"></i><span class="hidden-xs">Cart</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="logo pull-left hidden visible-xs">
                    <a href="index-2.html"><img class="img-responsive" src="images/logo.png" alt="PetShop"></a>
                </div>
                <a href="#" class="nav-opener pull-right hidden visible-xs"><i class="fa fa-bars"></i></a>
                <nav id="nav">
                    <ul class="list-unstyled text-uppercase menu-left">
                        <li><a href="index-2.html">home</a></li>
                        <li>
                            <a href="javascript:void(0);">pages <i class="fa fa-angle-down"></i></a>
                            <ul class="list-unstyled text-uppercase dropdown">
                                <li><a href="services.html">services</a></li>
                                <li><a href="aboutus.html">about us</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="404page.html">404 page</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);">shop <i class="fa fa-angle-down"></i></a>
                            <ul class="list-unstyled text-uppercase dropdown">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-detail.html">Shop Detail</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="logo hidden-xs"><a href="index-2.html"><img class="img-responsive" src="images/logo.png" alt="PetShop"></a></li>
                        <li class="mar-zero">
                            <a href="javascript:void(0);">blog</a>
                            <ul class="list-unstyled text-uppercase dropdown">
                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                <li><a href="single-blog.html">Single Blog</a></li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html">contact us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>