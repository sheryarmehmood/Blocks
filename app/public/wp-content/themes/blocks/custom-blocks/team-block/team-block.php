<section class="team">
    <div class="container">
        <div class="inner">
            <div class="sec__head">
                <div class="sec__head--title">
                    <h2>
                    <?php echo get_field('team_heading_main'); ?>
                    </h2>
                    <span class="sec__head--title-arc"></span>
                </div>
                <div class="sec__head--headline">
                    <?php echo get_field('team_headline_main'); ?>
                </div>
            </div>

            <div class="row team__cards">
                <?php
                // Get the repeater field values
                $team_members = get_field('team_members');

                foreach ($team_members as $team_member)
                {
                    $name = $team_member['name'];
                    $designation = $team_member['designation'];
                    $image = $team_member['image'];   
                    ?>
                    <div class="col-lg-6">
                        <div class="member">
                            <div class="member__image">
                                <img width="150" height="150"
                                    src="<?php echo $image ?>"
                                    class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                                    decoding="async" loading="lazy" /> </div>
                            <h4 class="member__title">
                            <?php echo $name ?> </h4>
                            <h5 class="member__designation">
                            <?php echo $designation ?> </h5>
                        </div>
                    </div>
                    <?php 
                } ?>
                   
            </div>
        </div>
    </div>
</section>