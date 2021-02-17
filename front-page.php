<?php
get_header();?>
<header class="header container-fluid">
            <div class="row">
            <div class="header-content col-12 col-lg-6 col-xl-5  d-flex  flex-column justify-content-between align-items-center">
                <img src="<?php echo get_theme_file_uri('/img/bike-me.svg')?>" alt="Bike-me logo">
                <div>
                <h1 class="heading-primary">Vernon’s Cycle and Accessory Store</h1>
                <p>Spring is just around the corner and we have everything your cycle needs for all of your adventures. Shop our products in-store today.</p>
                </div>
                <a href="#location" class="btn btn-primary btn-lg btn-custom">Locate us</a>
            </div>
            <div class="header-banner d-none d-lg-block col-lg-6 col-xl-7" style="background: url(<?php echo get_theme_file_uri('/img/main.png')?>); background-repeat: no-repeat; background-size: cover;"></div>
            </div>
        </header>
        <section class="products container  px-0">
            <div class="row px-0">
                <div class="col col-lg-4 d-flex justify-content-center">
                    <div class="card ">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri('/img/card1.png')?> 1x, <?php echo get_theme_file_uri('/img/card1_lg.png')?> 2x" media="(max-width: 37.5em)">
                            <img srcset="<?php echo get_theme_file_uri('/img/card1.png')?> 1x, <?php echo get_theme_file_uri('/img/card1_lg.png')?> 2x" alt="mountain bike" width="376" height="216">
                        </picture>
                       
                        <div class="card-content">
                            <h2 class="heading-primary">
                                Product A
                            </h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel impedit magnam non doloribus vitae fugiat laborum, repellat vero, necessitatibus, consectetur soluta quasi sapiente nobis, error. 
                            </p>
                            <a href="#" class="btn btn-primary btn-custom">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 d-flex justify-content-center">
                <div class="card">
                <picture>
                            <source srcset="<?php echo get_theme_file_uri('/img/card2.png')?> 1x, <?php echo get_theme_file_uri('/img/card2_lg.png')?> 2x" media="(max-width: 37.5em)">
                            <img srcset="<?php echo get_theme_file_uri('/img/card2.png')?> 1x, <?php echo get_theme_file_uri('/img/card2_lg.png')?> 2x" alt="mountain bike" width="376" height="216">
                        </picture>
                    <div class="card-content">
                        <h2 class="heading-primary">
                            Product B
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum sequi ratione repellendus dignissimos autem veniam.
                        </p>
                        <a href="#" class="btn btn-primary btn-custom">Learn more</a>
                    </div>
                </div>
                </div>

                <div class="col col-lg-4 d-flex justify-content-center">
                <div class="card">
                <picture>
                            <source srcset="<?php echo get_theme_file_uri('/img/card3.png')?> 1x, <?php echo get_theme_file_uri('/img/card3_lg.png')?> 2x" media="(max-width: 37.5em)">
                            <img srcset="<?php echo get_theme_file_uri('/img/card3.png')?> 1x, <?php echo get_theme_file_uri('/img/card3_lg.png')?> 2x" alt="mountain bike" width="376" height="216">
                        </picture>
                    <div class="card-content">
                        <h2 class="heading-primary">
                            Product C
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure a natus quasi laboriosam sequi fugiat, ducimus fugit eveniet odit, officiis inventore voluptatum blanditiis.
                        </p>
                        <a href="#" class="btn btn-primary btn-custom">Learn more</a>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="contacts container my-5" id="location">
            <div class="row">
                <div class="col col-lg-6">
                  
                    <h2 class="heading-primary ">Get in Touch</h2>
                    <div class="contacts-content">
        
                        <div class="contacts-content_main mt-5">
                            
        <p>
            Do you have a question for us, or are you looking for a specific product for your cycle? We would love to hear from you. 
        </p>
        <p>Call Us: <a href="tel:250-549-1200" class="text-success">(250) 549-1200</a> </p>
        <p>Get Directions: <a class="text-success" href="#"> 2520 53 Ave #302, Vernon, BC V1T 9W8</a></p>
        
        <h3 class="heading-secondary mt-5">Sign up to Our Newsletter</h3>
        <p class=" mt-2">Receive all the latest news about Bike-Me</p>
        
        <form  class="form">
            <input type="email" placeholder="Enter your email address" class="form__input">
            <button class="btn btn-primary btn-custom mb-5 mb-lg-0">Submit</button>
        </form>
                        </div>
                </div>
                

            </div>
            
            <div class="col col-lg-6 d-flex justify-content-center">
            
            
         
              
                     <a href="#">   <picture>
                            <source srcset="<?php echo get_theme_file_uri('/img/map.png')?> 1x, <?php echo get_theme_file_uri('/img/map_lg.png')?> 2x" media="(max-width: 37.5em)">
                            <img srcset="<?php echo get_theme_file_uri('/img/map.png')?> 1x, <?php echo get_theme_file_uri('/img/map_lg.png')?> 2x" alt="Bike me location on google map" >
                        </picture></a> 
            
             </div>
            </div>
        </section>
        <section class="blog pt-5">
            <div class="banner d-flex justify-content-lg-end justify-content-center align-items-center" style="background: url(<?php echo get_theme_file_uri('/img/banner.png')?>); background-repeat: no-repeat; background-size: cover;">
                <div class="banner-content d-flex flex-column justify-content-between align-items-center">
                    <h2 class="heading-primary text-white">Get yourself ready for spring!</h2>
                    <p class="lead-custom text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, vero?</p>
                    <a href="<?php echo site_url('/blog');?>" class="btn btn-primary btn-custom">Blog</a>
                </div>
                
            </div>
        </section>

<?php
get_footer();
?>