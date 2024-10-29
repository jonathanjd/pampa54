<?php /* Template Name: Mission */ ?>
<?php get_header(); ?>
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/bread.jpg);"></div>
            <div class="container">
                <h2 class="page-header__title">Mission</h2>
                <ul class="pampa-breadcrumb list-unstyled">
                    <li><a href="<?php echo _HOMEURL_; ?>">Home</a></li>
                    <li><span>About us</span></li>
                </ul>
            </div>
        </section>

        <section class="about-three section-space" id="about">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-4 wow fadeInLeft" data-wow-duration="1500ms">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/about/about-3-2.jpg" alt="" class="about-three__image__two">
                        
                    </div>
                    <div class="col-lg-8 wow fadeInRight" data-wow-duration="1500ms">
                        <div class="about-three__content">
                            <div class="sec-title @@extraClassName">

                                <h6 class="sec-title__tagline">ABOUT PAMPA54</h6>

                                <h2 class="sec-title__title">OUR  MISSION</h2>
                            </div>
                            <p class="about-three__text" style="text-align: justify;">At <b>PAMPA54</b>, our mission is to bring the authentic taste of Argentina’s finest meats to the United States, rooted in a legacy of quality, tradition, and excellence. Founded by a passionate and visionary entrepreneur, <b>PAMPA54</b> is driven by a commitment to integrity and a deep respect for the art of fine meats. We provide only the highest quality products, featuring Argentine Angus beef renowned worldwide for its exceptional marbling, tenderness, and rich flavor. </p>         
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>