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
        <div class="topbar topbar--two">
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
							<li style="color:#cbb17c;">Español</li>
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

        <header class="main-header main-header--two sticky-header sticky-header--normal">
            <div class="main-header__container-fluid container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="<?php echo _HOMEURL_; ?>">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/logo-light.png" alt="">
                        </a>
                    </div>
                    <div class="main-header__right">
                        <div class="main-header__right__left">
                            <nav class="main-header__nav main-menu">
                                <ul class="main-menu__list">

                                    <li class="active">
                                        <a href="<?php echo _HOMEURL_; ?>">Home</a>
                                    </li>
									<li class="dropdown">
                                        <a href="<?php echo _ABOUTURL_; ?>">About us</a>
                                        <ul>
                                            <li><a href="<?php echo _OURCOMPANYURL_; ?>">Our Company</a></li>
                                            <li><a href="<?php echo _FOUNDERURL_; ?>">Founder</a></li>
                                            <li><a href="<?php echo _NEWSURL_; ?>">News</a></li>
                                        </ul>
                                    </li>
									<li class="dropdown">
                                        <a href="<?php echo _PAMPA54URL_; ?>">Pampa54</a>
                                        <ul>
                                            <li><a href="<?php echo _MANIFESTOURL_; ?>">Manifesto</a></li>
                                            <li><a href="<?php echo _BRANDPURPOSEURL_; ?>">Brand Purpose</a></li>
                                            <li><a href="<?php echo _BENEFITSURL_; ?>">Benefits</a></li>
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
                        <div class="main-header__right__right">
                            <div class="mobile-nav__btn mobile-nav__toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="main-header__call">
                                <span class="main-header__call__icon icon-mobile"></span>
                                <div class="main-header__call__inner">
                                    <span class="main-header__call__tagline">Call Anytime</span>
                                    <a href="tel:<?php echo _PHONE_; ?>" class="main-header__call__number"><?php echo _PHONE_; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="hero-slider-two" id="home">
            <div class="hero-slider-two__carousel pampa-owl__carousel pampa-owl__carousel--basic-nav owl-carousel" 
				 data-owl-options='{
		"loop": true,
		"animateIn": "fadeIn",
		"animateOut": "slideOutDown",
		"items": 1,
		"autoplay": true,
		"autoplayTimeout": 7000,
		"smartSpeed": 1000,
		"nav": true,
        "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
		"dots": false,
		"margin": 0
	    }'>
                <div class="item">
                    <div class="hero-slider-two__item">
                        <div class="hero-slider-two__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/slider-2-3.jpg);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-12 col-xl-10 col-lg-10 mx-auto">
                                    <div class="hero-slider-two__content">
                                        <h5 class="hero-slider-two__sub-title">
                                            The Art of Meats
                                            <span class="hero-slider-two__sub-title__border hero-slider-two__sub-title__border--left"></span>
                                            <span class="hero-slider-two__sub-title__border hero-slider-two__sub-title__border--right"></span>
                                        </h5>
                                        <h2 class="hero-slider-two__title">
                                            Pampa54
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="hero-slider-two__item">
                        <div class="hero-slider-two__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/slider-2-2.jpg);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-12 col-xl-10 col-lg-10 mx-auto">
                                    <div class="hero-slider-two__content">
                                        <h5 class="hero-slider-two__sub-title">
                                            Gourmet Chorizos
                                            <span class="hero-slider-two__sub-title__border hero-slider-two__sub-title__border--left"></span>
                                            <span class="hero-slider-two__sub-title__border hero-slider-two__sub-title__border--right"></span>
                                        </h5>
                                        <h2 class="hero-slider-two__title">
                                            Quality
                                        </h2>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="hero-slider-two__item">
                        <div class="hero-slider-two__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/slider-2-1.jpg);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-12 col-xl-10 col-lg-10 mx-auto">
                                    <div class="hero-slider-two__content">
                                        <h5 class="hero-slider-two__sub-title">
                                            Authentic Flavor
                                            <span class="hero-slider-two__sub-title__border hero-slider-two__sub-title__border--left"></span>
                                            <span class="hero-slider-two__sub-title__border hero-slider-two__sub-title__border--right"></span>
                                        </h5>
                                        <h2 class="hero-slider-two__title">
                                            Premium
                                        </h2>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>