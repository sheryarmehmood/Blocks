<section class="testimonials">
    <!-- Start displaying HTML markup for a container -->
    <div class="container">
        <div class="inner">
            <div class="sec__head">
                <div class="sec__head--title">
                    <!-- Display the 'testimonial_title' value within an <h2> element -->
                    <h2>
                        Testimonials </h2>
                    <!-- Create a decorative arc element -->
                    <span class="sec__head--title-arc"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- End HTML markup for a container -->
    <!-- Start HTML markup for a testimonial slider using Swiper library -->
    <div class="swiper testimonials__slider">
        <div class="swiper-wrapper">
            <?php
            // Get the repeater field values
            $testimonial_cards = get_field('testimonial_cards');
            foreach ($testimonial_cards as $testimonial_card)
            {
                $testimonial_title = $testimonial_card['testimonial_title'];
                $testimonial_text = $testimonial_card['testimonial_text'];
                $testimonial_image = $testimonial_card['testimonial_image'];   
                ?>
    
                <div class="swiper-slide slide">
                        <div class="testimonial__card">
                            <div class="testimonial__card--image">
                            
                                <img width="150" height="150"
                                    src="<?php echo $testimonial_image ?>"
                                    class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                                    decoding="async" loading="lazy"
                                    srcset="<?php echo $testimonial_image ?> 150w, <?php echo $testimonial_image ?> 160w"

                                    sizes="(max-width: 150px) 100vw, 150px" /> </div>
                            <div class="testimonial__card--rating">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i> </div>
                            <div class="testimonial__card--text">
                                <p>
                                
                                    <p><?php echo $testimonial_text ?></p>
                                    <!-- <p>The team at ANKR is awesome. So good at what they do, while also being
                                        utterly reachable, creative and strategic. Great agency. Great people.</p> -->
                                </p>
                            </div>
                            <h5 class="testimonial__card--title">
                            <?php echo $testimonial_title ?> </h5>
                        </div>
                    </div>
                <?php 
            } ?>


        </div>
        <!-- HTML markup for navigation buttons within the Swiper slider -->
        <div class="swiper__nav">
            <div class="nav__btn swiper-button-prev"></div>
            <div class="nav__btn swiper-button-next"></div>
        </div>
    </div>
    <!-- End HTML markup for the testimonial slider -->
</section>