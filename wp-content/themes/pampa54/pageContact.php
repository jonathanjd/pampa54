<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/bread.jpg);"></div>
            <div class="container">
                <h2 class="page-header__title">Contact Us</h2>
                <ul class="pampa-breadcrumb list-unstyled">
                    <li><a href="<?php echo _HOMEURL_; ?>">Home</a></li>
                    <li><span>Contact Us</span></li>
                </ul>
            </div>
        </section>

        <section class="contact-page section-space-top">
            <div class="container">
                <div class="contact-page__wrapper">
                    <div class="contact-page__content">
                        <div class="contact-page__sec-title">
                            <h2 class="contact-page__title">Get In Touch</h2>
                            <p class="contact-page__text">Consectetur adipiscing elit phasellus et metus augue. Mauris ut libero eget erat scelerisque vehicula. Phasellus nec blandit metus.</p>
                        </div>
                        <form id="emailForm" action="" method="post" class="contact-page__form form-one">
                            <div class="form-one__group">
                                <div class="form-one__control wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <input type="text" name="name" placeholder="Full Name">
                                </div>
                                <div class="form-one__control wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                    <input type="email" name="email" placeholder="Email">
                                </div>
								<div class="form-one__control wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                  <input type="text" name="phone" placeholder="Phone">
                                </div>
                                <div class="form-one__control wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                  <input type="text" name="location" placeholder="Location">
                                </div>								
                                <div class="form-one__control wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                  <input type="text" name="company" placeholder="Company Name">
                                </div>
								<div class="form-one__control wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                  <input type="text" name="type" placeholder="Retailer / Restaurant / Food Service">
                                </div>
                                <div class="form-one__control form-one__control--full wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                  <textarea name="message" placeholder="Reason for contact"></textarea>
                                </div>
                                <div class="form-one__control form-one__control--full wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="150ms">
                                    <button type="submit" name="submit_email" class="pampa-btn">
                                        <span class="pampa-btn__hover"></span>
                                        <span class="pampa-btn__hover"></span>
                                        <span class="pampa-btn__hover"></span>
                                        <span class="pampa-btn__hover"></span>
                                        <span class="pampa-btn__hover"></span>
                                        <span class="pampa-btn__hover"></span>
                                        <span class="pampa-btn__text">send message</span>
                                        <i class="icon-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                    <div class="contact-page__image wow fadeInRight" data-wow-duration="1500ms">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery-instagram-5.jpg" alt="contact">
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-info section-space-bottom">
            <div class="contact-info__bg pampa-jarallax" data-jarallax data-speed="0.3" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/contact-bg.jpg);"></div>
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="contact-info__contact">
                            <div class="contact-info__contact__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/shapes/contact-bg-1-1.png);"></div>
                            <div class="contact-info__contact__content">
                                <div class="contact-info__top">
                                    <h4 class="contact-info__title">Contact Us</h4>
                                    <p class="contact-info__text">We serve retailers, restaurants, and food service companies.</p>
                                </div>
                                <div class="contact-info__contact-list">
                                    <div class="contact-info__contact-list__item">
                                        <span class="contact-info__contact-list__icon icon-phone-call"></span>
                                        <div class="contact-info__contact-list__content">
                                            <span class="contact-info__contact-list__title">call now</span>
                                            <a href="tel:+17863269846" class="contact-info__contact-list__link"><?php echo _PHONE_; ?></a>
                                        </div>
                                    </div>
                                    <div class="contact-info__contact-list__item">
                                        <span class="contact-info__contact-list__icon icon-paper-plane"></span>
                                        <div class="contact-info__contact-list__content">
                                            <span class="contact-info__contact-list__title">email</span>
                                            <a href="mailto:info@pampa54.com" class="contact-info__contact-list__link"><?php echo _EMAIL_; ?></a>
                                        </div>
                                    </div>
                                    <div class="contact-info__contact-list__item">
                                        <span class="contact-info__contact-list__icon icon-maps-and-flags"></span>
                                        <div class="contact-info__contact-list__content" style="color:#1e1d1d;">
                                            <span class="contact-info__contact-list__title" style="color: #7a7373;">Office/Warehouse/Order Pick-up</span>
                                            <?php echo _ADDRESS_; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="contact-info__business-hours">
                            <div class="contact-info__business-hours__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/shapes/contact-bg-1-1.png);"></div>
                            <div class="contact-info__contact__content">
                                <div class="contact-info__top">
                                    <h4 class="contact-info__title">Connect with Us</h4>
                                    <p class="contact-info__text" style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                <div class="contact-info__contact-list">
                                    <div class="contact-info__contact-list__item">
                                        <span class="contact-info__contact-list__icon icon-instagram" style="background:#535352;"></span>
                                        <div class="contact-info__contact-list__content" style="top: -4px;">
                                            <a href="#" style="color: #fff;">@pampa-54 </a>
                                        </div>
                                    </div>
                                    <div class="contact-info__contact-list__item">
                                        <span class="contact-info__contact-list__icon icon-linkedin-big-logo" style="background:#535352;"></span>
                                        <div class="contact-info__contact-list__content" style="top: -4px;">
                                            <a href="#" style="color: #fff;">pampa54</a>
                                        </div>
                                    </div>
                                    <div class="contact-info__contact-list__item">
                                        <span class="contact-info__contact-list__icon fa-google-plus-g" style="background:#535352;"></span>
                                        <div class="contact-info__contact-list__content" style="top: -4px;">
                                            <a href="#" style="color: #fff;">Pampa54</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>