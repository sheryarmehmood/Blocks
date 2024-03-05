<section class="video__gallery">
    <div class="container">
        <div class="inner">
            <div class="sec__head">
                <div class="sec__head--title">
                    <h2>
                        <!-- <p>Discover Our Projects</p> -->
                        <?php echo get_field('projects_heading'); ?>
                        <!-- Display the video gallery title -->
                    </h2>
                    <span class="sec__head--title-arc"></span>
                </div>
                <div class="sec__head--headline">
                    <?php echo get_field('projects_headline'); ?>    
                </div>
            </div>
        </div>
    </div>



    <div class="swiper video__gallery--slider">
        <div class="swiper-wrapper">
            <?php
            // Get the repeater field values
            $projects_videos = get_field('projects_videos');
            foreach ($projects_videos as $project_video)
            {
                $url = $project_video['url'];  
                ?>
        
            <div class="swiper-slide slide">
                <div class="slide__thumbnail">
                    <a href="">
                        <p><iframe loading="lazy" width="560" height="315"
                                src="<?php echo $url ?>"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe></p>
                        <!-- Display the video gallery slide thumbnail -->
                    </a>
                </div>
            </div>

            <?php 
            } ?> 
        </div>
        <div class="swiper__nav">
            <div class="nav__btn swiper-button-prev"></div>
            <div class="nav__btn swiper-button-next"></div>
        </div>
    </div>
</section>