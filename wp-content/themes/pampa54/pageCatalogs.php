<?php /* Template Name: Catalogs */ ?>
<?php get_header(); ?>
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/bread.jpg);"></div>
            <div class="container">
                <h2 class="page-header__title">Catalogs</h2>
                <ul class="pampa-breadcrumb list-unstyled">
                    <li><a href="<?php echo _HOMEURL_; ?>">Home</a></li>
                    <li><span>Products</span></li>
                </ul>
            </div>
        </section>

        <section class="about-one section-space-top" id="about">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="about-one__image">
                            <div class="about-one__image__inner">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/about/about-1-1.jpg" alt="about image">                                
                                <div class="about-one__image__border"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-duration="1500ms">
                        <div class="about-one__content">
                            <div class="sec-title @@extraClassName">
                                <h6 class="sec-title__tagline">We Provide Best Products.<br>You can download our catalogs below.</h6>

                                <h2 class="sec-title__title">OUR CATALOGS</h2>
                            </div>
                            <p class="about-one__text">With over 30 years of expertise and Argentinean roots, <strong>PAMPA54</strong> guarantees consistent quality and flavor in every product. <strong>PAMPA54</strong> is a company founded by a visionary entrepreneur driven by passion, integrity, and a deep-rooted connection to the world of meat. A Legacy of Quality  and Tradition.</p>
                            <div class="about-one__inner">
                                <h5 class="about-one__info-title">DOWNLOAD CATALOG MEAT CUTS PRODUCTS</h5>                                
                            </div>
                            <div class="about-one__bottom">
                                <a href="#" class="pampa-btn">
                                    <span class="pampa-btn__hover"></span>
                                    <span class="pampa-btn__hover"></span>
                                    <span class="pampa-btn__hover"></span>
                                    <span class="pampa-btn__hover"></span>
                                    <span class="pampa-btn__hover"></span>
                                    <span class="pampa-btn__hover"></span>
                                    <span class="pampa-btn__text">PAMPA54 CATALOG MEAT CUTS</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
							<div class="about-one__inner" style="margin-top: 40px;">
                                <h5 class="about-one__info-title">DOWNLOAD CATALOG SAUSAGES PRODUCTS</h5>                                
                            </div>
                            <div class="about-one__bottom">
                                <a href="#" class="pampa-btn">
                                    <span class="pampa-btn__hover"></span>
                                    <span class="pampa-btn__hover"></span>
                                    <span class="pampa-btn__hover"></span>
                                    <span class="pampa-btn__hover"></span>
                                    <span class="pampa-btn__hover"></span>
                                    <span class="pampa-btn__hover"></span>
                                    <span class="pampa-btn__text">PAMPA54 CATALOG SAUSAGES</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>