<?php /* Template Name: Products */ ?>
<?php get_header(); ?>
        
<section class="page-header">
            <div class="page-header__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/bread.jpg);"></div>
            <div class="container">
                <h2 class="page-header__title">Products</h2>
                <ul class="pampa-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Products</span></li>
                </ul>
            </div>
        </section>

        <section class="team-two section-space-two" id="team">
            <div class="container">
                <div class="sec-title sec-title--center">
                    <h6 class="sec-title__tagline">From the Pampas to your grill</h6>
                    <h2 class="sec-title__title">Our Products</h2>
                </div>
                <div class="team-two__item-wrapper">
                    <div class="team-two__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="team-two__item__bg"></div>
                        <div class="row gutter-y-20 align-items-center">
                            <div class="col-xl-3 col-lg-6">
                                <h3 class="team-two__name"><a href="<?php echo _SAUSAGEURL_; ?>">Sausages</a></h3>
                            </div>
                            <div class="col-xl-5 col-lg-3">
                                <span class="team-two__designation" style="text-transform: none;">Each bite reveals the result of a time-honored process, meticulously perfected over the years. The distinctive blend of spices and seasonings, combined with the finest cuts of pork, delivers a unique flavor that resonates with the smoky allure of an authentic Argentine asado. </span>
                            </div>
                            <div class="col-xl-4 col-lg-3">
                                <div class="team-two__image">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/products/product1.jpg" alt="">                                    
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="team-two__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                        <div class="team-two__item__bg"></div>
                        <div class="row gutter-y-20 align-items-center">
                            <div class="col-xl-3 col-lg-6">
                                <h3 class="team-two__name"><a href="<?php echo _MEATCUTSURL_; ?>">Meat Cuts</a></h3>
                            </div>
                            <div class="col-xl-5 col-lg-3">
                                <span class="team-two__designation" style="text-transform: none;">At <strong>PAMPA54</strong>, we pride ourselves on offering only the highest quality meat products. Our selection features the renowned Argentine Angus beef, celebrated globally for its superior marbling, tenderness, and rich flavor. We ensure that each cut meets our rigorous standards.</span>
                            </div>
                            <div class="col-xl-4 col-lg-3">
                                <div class="team-two__image">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/products/product2.jpg" alt="">                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-two__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="team-two__item__bg"></div>
                        <div class="row gutter-y-20 align-items-center">
                            <div class="col-xl-3 col-lg-6">
                                <h3 class="team-two__name"><a href="<?php echo _OTHERSURL_; ?>">Others</a></h3>
                            </div>
                            <div class="col-xl-5 col-lg-3">
                                <span class="team-two__designation" style="text-transform: none;">Each bite reveals the result of a time-honored process, meticulously perfected over the years. The distinctive blend of spices and seasonings, combined with the finest cuts of pork, delivers a unique flavor that resonates with the smoky allure of an authentic Argentine asado. </span>
                            </div>
                            <div class="col-xl-4 col-lg-3">
                                <div class="team-two__image">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/products/product3.jpg" alt="">                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </section>

<?php get_footer(); ?>