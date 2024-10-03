<?php /* Template Name: Our Company */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>:: Pampa54 ::</title>
    <meta name="description" content="" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Cormorant:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/style-icons/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/owl-carousel/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/swiper/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css" />
	<?php wp_head(); ?>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    
    <div class="page-wrapper">
        <header class="main-header main-header--one sticky-header sticky-header--normal">
            <div class="main-header__container-fluid container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="<?php echo _HOMEURL_; ?>">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/logo-light.png" alt="" width="200">
                        </a>
                    </div>
                    <div class="main-header__right">
                        <div class="topbar">
                            <div class="container-fluid">
                                <div class="topbar__inner">
                                    <ul class="list-unstyled topbar__info">
                                        <li>
                            <i class="icon-paper-plane"></i>
                            <a href="mailto:<?php echo _EMAIL_; ?>"><?php echo _EMAIL_; ?></a>
                        </li>
                        <li>
                            <i class="icon-maps-and-flags"></i>
                            <i class="ui-icon-home"><?php echo _ADDRESS_; ?></i>
                        </li>
                                    </ul>
                                    <div class="topbar__right">
                                        <ul class="list-unstyled topbar__pages">
                                            <li><a href="contact.html">Contact</a></li>
											<li style="color:#ffffff;">Español</li>
                                        </ul>
                                        <div class="topbar__social">
                                            <a href="<?php echo _FACEBOOK_; ?>">
											<i class="fab fa-facebook-f" aria-hidden="true"></i>
											<span class="sr-only">Facebook</span>
											</a>
											<a href="<?php echo _INSTAGRAM_; ?>">
											<i class="fab fa-instagram" aria-hidden="true"></i>
											<span class="sr-only">Instagram</span>
											</a>
											<a href="<?php echo _YOUTUBE_; ?>">
											<i class="fab fa-youtube" aria-hidden="true"></i>
											<span class="sr-only">Youtube</span>
											</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-header__right__inner">
                            <div class="main-header__right__left">
                                <nav class="main-header__nav main-menu">
                                    <ul class="main-menu__list">

                                    <li>
                                        <a href="<?php echo _HOMEURL_; ?>">Home</a>
                                    </li>
									<li class="dropdown active">
                                        <a href="about.html">About us</a>
                                        <ul>
                                            <li><a href="<?php echo _OURCOMPANYURL_; ?>">Our Company</a></li>
                                            <li><a href="founder.html">Founder</a></li>
                                            <li><a href="news.html">News</a></li>
                                        </ul>
                                    </li>
									<li class="dropdown">
                                        <a href="pampa54.html">Pampa54</a>
                                        <ul>
                                            <li><a href="manifesto.html">Manifesto</a></li>
                                            <li><a href="brand_purpose.html">Brand Purpose</a></li>
                                            <li><a href="benefits.html">Benefits</a></li>
                                        </ul>
                                    </li>
									<li class="dropdown">
                                        <a href="products.html">Products</a>
                                        <ul>
                                            <li><a href="sausages.html">Sausages</a></li>
                                            <li><a href="meat_cuts.html">Meat Cuts</a></li>
                                            <li><a href="others.html">Others</a></li>
											<li><a href="catalogs.html">Catalogs</a></li>
                                        </ul>
                                    </li> 
                                    <li>
                                        <a href="contact.html">Contact Us</a>
                                    </li>
                                </ul>
                                </nav>
                            </div>
                            <div class="main-header__right__right" style="margin-right: 20px;">
                                <div class="mobile-nav__btn mobile-nav__toggler">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="main-header__call">
                                    <span class="main-header__call__icon icon-mobile"></span>
                                    <div class="main-header__call__inner">
                                        <span class="main-header__call__tagline">Call Anytime</span>
                                        <a href="tel:+17863269846" class="main-header__call__number">+1 (786) 326-9846</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>