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