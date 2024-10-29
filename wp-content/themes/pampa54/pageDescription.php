<?php /* Template Name: Description */ ?>
<?php get_header(); ?>
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/bread.jpg);"></div>
            <div class="container">
                <h2 class="page-header__title">Description</h2>
                <ul class="pampa-breadcrumb list-unstyled">
                    <li><a href="<?php echo _HOMEURL_; ?>">Home</a></li>
                    <li><span>About us / Our Company</span></li>
                </ul>
            </div>
        </section>

        <section class="about-three section-space" id="about">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-4 wow fadeInLeft" data-wow-duration="1500ms">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery-instagram-1.jpg" alt="about image" class="about-three__image__two">
                    </div>
                    <div class="col-lg-8 wow fadeInRight" data-wow-duration="1500ms">
                        <div class="about-three__content">
                            <div class="sec-title @@extraClassName">

                                <h6 class="sec-title__tagline">About us / Our Company</h6>

                                <h2 class="sec-title__title">Description</h2>
                            </div>
                            <p class="about-three__text" style="text-align: justify;">A Premium Meat distribution company, located in Miami, Fl, US.<br><br><b>PAMPA54</b> is a company founded by a visionary entrepreneur driven by passion, integrity, and a deep-rooted connection to the world of meat. 
                            At <b>PAMPA54</b>, we pride ourselves on offering only the highest quality meat products. Our selection features the renowned Argentine Angus beef, celebrated globally for its superior marbling, tenderness, and rich flavor. We ensure that each cut meets our rigorous standards.<br><br><b>PAMPA54</b>, with Argentine roots, offers an authentic line of gourmet chorizos, made from a traditional recipe and natural ingredients. Ideal for complementing an “asado”, it never disappoints.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>