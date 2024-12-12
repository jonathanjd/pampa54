<?php /* Template Name: News */ ?>
<?php get_header(); ?>
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/bread.jpg);"></div>
           
            <div class="container">
                <h2 class="page-header__title">News</h2>
                <ul class="pampa-breadcrumb list-unstyled">
                    <li><a href="<?php echo _HOMEURL_; ?>">Home</a></li>
                    <li><span>About us</span></li>
                </ul>
            </div>
            
        </section>

        <div class="main-header__right__inner" style="background-color: #000; text-align:center; color:#fff;">
                            <div class="main-header__right__left">
                                <nav class="main-header__nav main-menu">
                                    <ul class="main-menu__list">

                                    <li>
                                        <a href="<?php echo _HOMEURL_; ?>">Home</a>
                                    </li>
									<li class="dropdown active">
                                        <a href="#">Our Company</a>
                                        <ul>
                                            <li><a href="<?php echo _ABOUTURL_; ?>">About Us</a></li>
                                            <li><a href="<?php echo _MISSIONURL_; ?>">Our Mission</a></li>
                                            <li><a href="<?php echo _FEATUREURL_; ?>">Our Services</a></li>
                                        </ul>
                                    </li>
									<li class="dropdown">
                                        <a href="#">Our Brand</a>
                                        <ul>
                                            <li><a href="<?php echo _PAMPA54URL_; ?>">Pampa54</a></li>
                                            <!-- <li><a href="<?php echo _MANIFESTOURL_; ?>">Manifesto</a></li>
                                            <li><a href="<?php echo _BRANDPURPOSEURL_; ?>">Brand Purpose</a></li> -->
                                            <li><a href="<?php echo _BENEFITSURL_; ?>">What we offer</a></li>
                                        </ul>
                                    </li>
									<li class="dropdown">
                                        <a href="<?php echo _PRODUCTSURL_; ?>">Our Products</a>
                                        <ul>
                                            <li><a href="<?php echo _SAUSAGEURL_; ?>">Our Chorizos</a></li>
                                            <li><a href="<?php echo _MEATCUTSURL_; ?>">Our Beef</a></li>
											<li><a href="<?php echo _CATALOGSURL_; ?>">Catalogs</a></li>
                                        </ul>
                                    </li> 
                                    <li class="dropdown">
                                        <a href="<?php echo _CONTACTURL_; ?>">Contact Us</a>
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
                              
                            </div>
                        </div>

        <section class="about-three section-space" id="about">
            
            <div class="container">
                
                <div class="row gutter-y-60">
                    <div class="col-lg-4 wow fadeInLeft" data-wow-duration="1500ms">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery-instagram-1.jpg" alt="" class="about-three__image__two">
                        
                    </div>
                    <div class="col-lg-8 wow fadeInRight" data-wow-duration="1500ms">
                        <div class="about-three__content">
                            <div class="sec-title @@extraClassName">

                                <h6 class="sec-title__tagline">ABOUT PAMPA54</h6>

                                <h2 class="sec-title__title">NEWS TITLE</h2>
                            </div>
                            <p class="about-three__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in sem a massa porta ultricies ac vitae tortor. Phasellus eu mattis urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam accumsan nibh vitae orci rutrum, imperdiet suscipit nisi semper. Nunc malesuada mauris ut eros eleifend, eget semper quam lobortis. Nulla commodo nisi ac vehicula pulvinar. Nunc at lacinia nibh, ut suscipit libero. Pellentesque risus augue, iaculis tristique nunc luctus, interdum venenatis tortor. Etiam non pulvinar orci, et condimentum nulla. Fusce malesuada facilisis lorem, sed dignissim felis. Maecenas auctor ullamcorper cursus. Quisque id turpis quis velit placerat molestie sed sed risus. Proin accumsan libero quam. Proin ultrices ex quis felis sollicitudin finibus. </p>
                            
                        </div>
                    </div>
					<div class="col-lg-12 wow fadeInRight" data-wow-duration="1500ms" style="margin-top: 0px;">
                        <p class="about-three__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in sem a massa porta ultricies ac vitae tortor. Phasellus eu mattis urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam accumsan nibh vitae orci rutrum, imperdiet suscipit nisi semper. Nunc malesuada mauris ut eros eleifend, eget semper quam lobortis. Nulla commodo nisi ac vehicula pulvinar. Nunc at lacinia nibh, ut suscipit libero. Pellentesque risus augue, iaculis tristique nunc luctus, interdum venenatis tortor. Etiam non pulvinar orci, et condimentum nulla. Fusce malesuada facilisis lorem, sed dignissim felis. Maecenas auctor ullamcorper cursus. Quisque id turpis quis velit placerat molestie sed sed risus. Proin accumsan libero quam. Proin ultrices ex quis felis sollicitudin finibus. </p>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>