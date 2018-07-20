<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
?>
 <?php  get_header(); ?>

<div class="page-home">
    <section class="hero-banner bg-primary text-light">
    <div class="container">
        <h1 class="text-light text-center py-5 mb-5">
            <strong><?php the_field('panel-title', $post->ID); ?></strong>
        </h1>
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <div class="card card-feature d-flex align-items-center" data-aos="fade-up">
                    <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/building.svg" alt="Wholesalers">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong><?php the_field('panel-img1-text', $post->ID); ?></strong></h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card card-feature d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                    <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/rate.svg" alt="Wholesalers">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong><?php the_field('panel-img2-text', $post->ID); ?></strong></h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card card-feature d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
                    <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/price.svg" alt="Wholesalers">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong><?php the_field('panel-img3-text', $post->ID); ?></strong></h5>
                    </div>
                </div>
            </div>
            <div class="col-8 col-sm-6 d-block d-md-none">
                <a href="#" class="btn btn-secondary btn-rounded btn-block btn-lg">SIGN UP TODAY</a>
            </div>
        </div>
    </div>
    <div class="divider">
        <img src="<?php bloginfo('template_url'); ?>/travel/assets/divider-1.jpg" />
    </div>
</section>    <section class="contact mt-5 mt-lg-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="media media-contact mb-4 mb-md-0">
                    <img class="mr-3" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/location.svg" alt="Location">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><strong><?php the_field('location', $post->ID); ?></strong></h5>
                        <small><?php the_field('location-sup', $post->ID); ?></small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="media media-contact mb-4 mb-md-0">
                    <img class="mr-3" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/customer-service.svg" alt="Location">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><strong><?php the_field('email', $post->ID); ?></strong></h5>
                        <small><?php the_field('email-sup', $post->ID); ?></small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="media media-contact mb-4 mb-md-0">
                    <img class="mr-3" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/phone.svg" alt="Location">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><strong><?php the_field('call', $post->ID); ?></strong></h5>
                        <small><?php the_field('call-sup', $post->ID); ?></small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3 d-flex justify-content-center">
                <button class="btn btn-lg btn-outline-primary btn-rounded mt-4 mt-lg-2 contact-button"><?php the_field('contact-btn', $post->ID); ?></button>
            </div>
        </div>
    </div>
</section>    <section class="partner pt-5">
    <div class="container">
        <h4 class="text-uppercase text-center my-5 text-trusted-by">
            Trusted by 100 + Wholesalers worldwide
        </h4>
        <div class="row justify-content-center">
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-1.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-2.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-3.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-4.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-5.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-6.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-7.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-8.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-9.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-10.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-11.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-12.png" alt="TravelWard Partners">
                </div>
            </div>
        </div>
    </div>
</section>    <section class="own-price full-width-feature my-3 py-5">
    <div class="container">
        <div class="row justify-content-end">
            <div class="hero-image d-none d-md-block">
                <img src="<?php bloginfo('template_url'); ?>/travel/assets/macbook.png" data-aos="fade-right"/>
            </div>
            
            <div class="col-12 col-md-6">
                <h3><strong>Set your Own Price!</strong></h3>
                <p class="my-5">
                    <strong>We don’t just offer the best prices, we also let Travel Agents control the final price.</strong> Our
                    platform searches wholesalers finding the best rates and then allows agents to pick their own final price,
                    ensuring that you can not only price beat for your customers but can also control your earnings.
                </p>
                <div class="d-md-none">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/macbook.png"/>
                </div>
                <div class="row mt-4">
                    <div class="col-4">
                        <div class="card card-feature d-flex align-items-start" data-aos="fade-up">
                            <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/percentage-1.png" alt="Wholesalers">
                            <div class="card-body">
                                <h5 class="card-title mt-4"><strong>average profit with other platforms </strong></h5>
                                <span class="badge badge-pill badge-secondary">&nbsp;</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card card-feature d-flex align-items-start" data-aos="fade-up" data-aos-delay="200">
                            <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/percentage-2.png" alt="Wholesalers">
                            <div class="card-body">
                                <h5 class="card-title mt-4"><strong>average profit<br/>with us</strong></h5>
                                <span class="badge badge-pill badge-primary">&nbsp;</span>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card card-feature d-flex align-items-start" data-aos="fade-up" data-aos-delay="400">
                            <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/percentage-3.png" alt="Wholesalers">
                            <div class="card-body">
                                <h5 class="card-title mt-4"><strong>In your<br/>control</strong></h5>
                                <span class="badge badge-pill badge-primary">&nbsp;</span>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>    <section class="stats  my-3 py-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 border-right mb-4">
                <div class="statistic text-center">
                    <div class="number">100<span class="superscript">+</span></div>
                    <div class="text text-black-50">SUPPLIERS</div>
                </div>
            </div>
            <div class="col-6 col-md-3 border-right mb-4">
                <div class="statistic text-center">
                    <div class="number">650k<span class="superscript">+</span></div>
                    <div class="text text-black-50">HOTELS</div>
                </div>
            </div>
            <div class="col-6 col-md-3 border-right mb-4">
                <div class="statistic text-center">
                    <div class="number">19<span class="superscript">%</span></div>
                    <div class="text text-black-50">AVERAGE PROFIT</div>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <div class="statistic text-center">
                    <div class="number">9-8</div>
                    <div class="text text-black-50">SERVICE</div>
                </div>
            </div>
        </div>
    </div>
</section>    <section class="too-good full-width-feature mt-3 pt-5">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12 col-md-6">
                <h3><strong>Sound too good to be true?</strong></h3>
                <p class="my-5">
We get asked all the time how we do this, and its pretty simple! While our competitors offer their travel agents a set margin rate we’ve switched it around and offer travel agents the ability to set their own margin while we take the lowest mark up. That way we put the money back in Travel Agents pockets!  
                </p>
                <div class="pt-0 pt-lg-5 d-none d-md-block">
                    <a href="#" class="btn btn-secondary btn-rounded mr-0 mr-md-4">FIND OUT MORE</a>
                    <a href="#" class="btn btn-outline-primary btn-rounded mt-4 mt-lg-0">REQUEST A CALL</a>
                </div>
            </div>
            <div class="hero-image d-none d-md-block">
                <img src="<?php bloginfo('template_url'); ?>/travel/assets/chart.png" class=" mt-5 " data-aos="fade-left"/>
            </div>
            <div class="col-12 d-md-none">
                <img src="<?php bloginfo('template_url'); ?>/travel/assets/chart-2.png"/>
            </div>
            <div class="col-12 d-md-none justify-content-center text-center">
                <a href="#" class="btn btn-lg btn-secondary btn-rounded">FIND OUT MORE</a>
            </div>
        </div>
    </div>
</section>
<div class="divider">
    <img src="<?php bloginfo('template_url'); ?>/travel/assets/divider-2.svg" />
</div>    <section class="how-it-works">
    <div class="container">
        <h1 class="section-title text-center">
            <strong>How it Works</strong>
        </h1>
        <p class="section-description text-center">
            Use our platform to search over 650,000 of the best international hotels across 100+ suppliers worldwide all in one place. Find the best rates for your clients and then control your final price so you make the most from your bookings.
        </p>
        <div class="row">
            <div class="col-sm-4">
                <div class="card card-feature d-flex align-items-center my-2 my-md-5" data-aos="fade-up">
                    <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/search.svg" alt="Wholesalers">
                    <div class="card-body">
                        <h4 class="card-title text-center"><strong>Search</strong></h4>
                        <p class="text-center">Search our platform, select your hotel and room type using TrustYou ratings, photos, and room descriptions.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card card-feature d-flex align-items-center my-2 my-md-5" data-aos="fade-up" data-aos-delay="500">
                    <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/set.svg" alt="Wholesalers">
                    <div class="card-body">
                        <h4 class="card-title text-center"><strong>Set</strong></h4>
                        <p class="text-center">Set your own price, so you and your clients get the best deal. Pay safely online using a credit card.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card card-feature d-flex align-items-center my-2 my-md-5" data-aos="fade-up" data-aos-delay="1000">
                    <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/send.svg" alt="Wholesalers">
                    <div class="card-body">
                        <h4 class="card-title text-center"><strong>Send</strong></h4>
                        <p class="text-center">Send your clients a booking voucher with a confirmation code from the supplier.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>    <section class="trust-you">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12">
                <div class="p-5 bg-light text-center">
                <img class="trust-you-image" src="<?php bloginfo('template_url'); ?>/travel/assets/trust-you.svg" alt="Trust You">
                <p>We know you not only want to ensure you get the best price for your clients, but also the best quality hotels. That's why we use TrustYou, the world’s largest guest feedback platform. TrustYou collects and analyzes over 3 million guest reviews, surveys, and social media posts from all across the world, every week. We have integrated TrustYou ratings on our site, so you get the most up to date insight into the hotels you are booking.</p>
                </div>
            </div> 
        </div>
    </div>
</section>
    <section class="how-to-use py-5">
    <div class="container">
        <h1 class="section-title text-center">
            <strong>How to Use Travelwards</strong>
        </h1>
        <p class="section-description text-center">
        Click through to watch and learn tips and tricks on how to get the best website experience.
        </p>
        <div class="row">
            <div class="col-sm-4 ">
                <a href="#" class="card card-video d-flex align-items-center my-5">
                    <div class="video">
                        <img class="video-thumbnail-placeholder" src="<?php bloginfo('template_url'); ?>/travel/assets/others/video-thumbnail-placeholder.jpg" alt="Video">
                        <button class="play-button"><img src="<?php bloginfo('template_url'); ?>/travel/assets/play-button.svg" alt="Play"></button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">How to Add New Users to Your Agency</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 d-none d-md-block">
                <a href="#" class="card card-video d-flex align-items-center my-5">
                    <div class="video">
                        <img class="video-thumbnail-placeholder" src="<?php bloginfo('template_url'); ?>/travel/assets/others/video-thumbnail-placeholder.jpg" alt="Video">
                        <button class="play-button"><img src="<?php bloginfo('template_url'); ?>/travel/assets/play-button.svg" alt="Play"></button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Destination Guide to Los Angeles</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 d-none d-md-block">
                <a href="#" class="card card-video d-flex align-items-center my-5">
                    <div class="video">
                        <img class="video-thumbnail-placeholder" src="<?php bloginfo('template_url'); ?>/travel/assets/others/video-thumbnail-placeholder.jpg" alt="Video">
                        <button class="play-button"><img src="<?php bloginfo('template_url'); ?>/travel/assets/play-button.svg" alt="Play"></button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Register and Update your Company Information</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <a href="#" class="btn btn-primary btn-rounded browse-video">BROWSE VIDEOS</a>
        </div>
    </div>
    <div class="divider">
        <img src="<?php bloginfo('template_url'); ?>/travel/assets/divider-2.svg" />
    </div>
</section>
    <section class="partner pt-5">
    <div class="container">
        <h1 class="section-title text-center mb-5">
            <strong>Who do we get our Inventory from?</strong>
        </h1>
        <div class="row justify-content-center">
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-1.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-2.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-3.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-4.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-5.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-6.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-7.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-8.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-9.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-10.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-11.png" alt="TravelWard Partners">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="partner-icon mb-4">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/partners/partner-12.png" alt="TravelWard Partners">
                </div>
            </div>
        </div>
        <h5 class="text-black-50 text-center mb-5">
            <strong>The Biggest Players Internationally </strong>
        </h5>
    </div>
</section>    <div class="request-call py-3 d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex align-items-center justify-content-center">
                <h4 class="m-0 mr-2 p-0">Have any Questions?  We will take care of you</h4>
                <a href="#" class="btn btn-outline-primary btn-rounded">REQUEST A CALL</a>
            </div>
        </div>
    </div>
</div></div>

 <?php  get_footer(); ?>