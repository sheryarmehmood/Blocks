<!-- Include and echo the hero module template part -->
<section class="hero"
    style="background-image: url('<?php echo get_field('hero_background_image'); ?>')">
    <div class="container">
        <div class="inner">
            <div class="hero__text">
                <h1>
                    <p><?php echo get_field('hero_title_one'); ?> <i><?php echo get_field('hero_title_two'); ?></i><br />
                    <?php echo get_field('hero_title_three'); ?></p>
                    <!-- Output the hero text--->
                </h1>
                <div class="description">
                    <P><?php echo get_field('hero_description'); ?></p>
                </div>
                <?php
                    // Get the hero button field (which returns an array)
                    $hero_btn = get_field('hero_btn');

                    // Check if the hero_btn field exists and is not empty
                    if ($hero_btn && is_array($hero_btn)) {
                        // Extract URL and Link Text from the array
                        $url = $hero_btn['url'];
                        $link_text = $hero_btn['title'];

                        // Output the hero button HTML
                        echo '<a href="' . esc_url($url) . '" class="btn">' . esc_html($link_text) . '</a>';
                    } else {
                        // Fallback if the hero_btn field is empty or not found
                        echo '<a href="#contactUs-section" class="btn">Begin Today</a>';
                    }
                ?>


            </div>
        </div>
    </div>
</section>
