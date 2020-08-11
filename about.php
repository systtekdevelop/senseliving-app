<?php get_header(); ?>

<body id="mobile-wrap" <?php body_class(); ?>>
        
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
            <div data-page="about" class="page">
                <div class="page-content">
                <div class="navbar navbar--fixed navbar--fixed-top navbar--page" id="header-page"></div>                   
                <div id="pages_maincontent">
                
                    <h2 class="page_title">Creativity makes life  more fun and more interesting</h2>
                        
                            <!-- Slider -->
                            <div class="swiper-container-pages">
                                <div class="swiper-wrapper">
                                
                                <div class="swiper-slide">
                        <img src="images/page_photo.jpg" alt="" title="" />
                                </div>
                                <div class="swiper-slide">
                        <img src="images/page_photo2.jpg" alt="" title="" />
                                </div>
                                <div class="swiper-slide">
                        <img src="images/page_photo3.jpg" alt="" title="" />
                                </div>		   
                                
                                </div>
                                <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                            </div>		  
                        
                <div class="page_single layout_fullwidth_padding">	
                
                        <blockquote>
                        This mobile template that can be used to create a mobile website, a mobile web app, or even a native mobile app. The design is using a full width layout that works perfectly on tablets and desktop also. <span>SINDEVO.COM</span>
                        </blockquote>
                        
                        <h3>Short features list</h3>   
                        <ul class="features_list">
                    <li><a href="features.html"><img src="images/icons/white/electronics.png" alt="" title="" /><span>For all devices</span></a></li>
                    <li><a href="shop.html"><img src="images/icons/white/shop.png" alt="" title="" /><span>Shop pages</span></a></li>
                            <li><a href="#" data-panel="right" class="open-panel"><img src="images/icons/white/users.png" alt="" title="" /><span>User friendly</span></a></li>
                            <li><a href="photos.html"><img src="images/icons/white/photos.png" alt="" title="" /><span>Photo gallery</span></a></li>
                            <li><a href="blog.html"><img src="images/icons/white/blog.png" alt="" title="" /><span>Blog layout</span></a></li>  
                            <li><a href="contact.html"><img src="images/icons/white/contact.png" alt="" title="" /><span>Contact form</span></a></li>
                            <li><a href="tabs.html"><img src="images/icons/white/tabs.png" alt="" title="" /><span>Responsive tabs</span></a></li>
                            <li><a href="Toggle.html"><img src="images/icons/white/toggle.png" alt="" title="" /><span>Toggles</span></a></li>	  
                            <li><a href="#" data-popup=".popup-social" class="open-popup"><img src="images/icons/white/love.png" alt="" title="" /><span>Social share</span></a></li>
                        </ul>
                        
                        <a href="features.html" class="btn btn--full">VIEW ALL FEATURES</a>

                        <h4>You can use this mobile template for:</h4>
                        <ul class="simple_list">
                        <li>Creating a mobile website</li>
                        <li>Creating a mobile web app</li>
                        <li>Creating a mobile native app (integrated with solutions like phonegap or cordova)</li>
                        <li>Works perfectly on tablets and desktop also</li>
                        </ul>
                        
                        
                        <a href="http://themeforest.net/user/sindevo" class="btn btn--full">BUY IT NOW!</a>
                        
                        
                    </div>
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

    <?php wp_footer(); ?>
</body>


<?php get_footer(); ?>