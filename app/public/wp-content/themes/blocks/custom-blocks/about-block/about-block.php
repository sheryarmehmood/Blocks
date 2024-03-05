<section class="about__note" id="about_us_section">
    <!-- Start a new section with a CSS class 'about__note' -->
    <div class="container">
        <!-- Create a container div -->
        <div class="inner">
            <!-- Create an inner div -->
            <div class="sec__head">
                <!-- Create a section header div -->
                <div class="sec__head--title">
                    <!-- Create a div for the section title -->
                    <h2>
                    <p><?php echo get_field('about_note_heading_one'); ?></p>
                        
                    
                    </h2> <!-- Output the 'about_note_title' within an h2 element -->
                    <span class="sec__head--title-arc"></span> <!-- Create a decorative span element -->
                </div>
               >
                <div class="sec__head--headline">
                    <!-- Create a div for the section headline -->
                        
                        <p><?php echo get_field('about_note_headline'); ?></p>
                    <!-- Output the 'about_note_headline' -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about__banner">
    <!-- Start a new section with a CSS class 'about__banner' -->
    <div class="about__banner--bg"
        style="background-image: url('<?php echo get_field('about_banner_background_image'); ?>')">
        <!-- Create a div for the background image with inline CSS -->
    </div>
   
    <div class="container">
        <!-- Create a container div -->
        <div class="inner">
            <!-- Create an inner div -->

            <h2><?php echo get_field('about_banner_heading_one'); ?> <br> <?php echo get_field('about_banner_heading_two'); ?>.</h2>
            <!-- <h2>Focused on Results <br> Driven by Performance.</h2> -->
            <!-- Output the 'about_banner_title' within an h2 element -->
        </div>
    </div>
</section>