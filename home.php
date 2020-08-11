<?php get_header(); ?>


        
    <div class="panel-overlay"></div>

    <!-- Left panel -->
    <div id="panel-left"></div>
    <!-- Right panel -->
    <div id="panel-right"></div>
    <!-- Bottom panel -->
    <div id="panel-bottom"></div>

<div class="views">
    <div class="view view-main">
        <div class="pages">
            <div data-page="index" class="page homepage">
            <div class="page-content">
            <div class="navbar navbar--fixed navbar--fixed-top">
                <div class="navbar__col navbar__col--title">
                    <a href="<?php home_url(); ?>">
                        <img class="app-logo" src="/images/logo-app.svg" alt="Sense Living App" />
                    </a>
                </div>
                <div class="navbar__col navbar__col--icon navbar__col--icon-menu">
                    <a href="#" data-panel="left" class="open-panel"><span></span><span></span><span></span><span></span></a>
                </div>			
            </div>
            <!-- Slider -->
            <div class="swiper-container introslider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(<?php get_theme_file_uri('/images/slide1.jpg') ?>);">
                        <div class="slider-caption">
                                <div class="slider-caption__line" data-swiper-parallax="-200%">01</div>
                            <h2 data-swiper-parallax="-100%">The secret to creativity is knowing how to hide your sources</h2>
                            <a href="about.html" class="slider-caption__more" data-swiper-parallax="-60%">VIEW MORE</a>
                        </div>
                    </div> 
                        
                    <div class="swiper-slide" style="background-image:url(<?php get_theme_file_uri('/images/slide2.jpg') ?>);">
                        <div class="slider-caption">
                            <div class="slider-caption__line" data-swiper-parallax="-200%">02</div>
                            <h2 data-swiper-parallax="-100%">I never think of the future – it comes soon enough</h2>
                            <a href="about.html" class="slider-caption__more" data-swiper-parallax="-60%">VIEW MORE</a>
                        </div>	
                    </div>
                    <div class="swiper-slide" style="background-image:url(<?php get_theme_file_uri('/images/slide3.jpg') ?>);">
                        <div class="slider-caption">
                            <div class="slider-caption__line" data-swiper-parallax="-200%">03</div>
                            <h2 data-swiper-parallax="-100%">Creativity makes life more fun and more interesting</h2>
                            <a href="about.html" class="slider-caption__more" data-swiper-parallax="-60%">VIEW MORE</a>
                        </div> 
                    </div> 		   
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>	
            </div>
            <div class="bottom-menu-open">
                    <div class="bottom-menu-open__left"></div>
                <div class="bottom-menu-open__container">
                    <div id="bottom-menu-icon" class="bottom-menu-open__icon open-panel" data-panel="bottom">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
                <div class="bottom-menu-open__right"></div>			
            </div>  
            </div>
            </div>
        </div>
    </div>
</div>

    <!-- Login Popup -->
    <div id="popup-login"></div>

    <!-- Register Popup -->
    <div id="popup-signup"></div>

    <!-- Forgot Password Popup -->
    <div id="popup-forgot"></div>

    <!-- Social Icons Popup -->
    <div id="popup-social"></div>


<?php get_footer(); ?>