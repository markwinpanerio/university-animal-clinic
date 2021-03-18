<?php if(have_rows('our_team')): ?>
    <?php while ( have_rows('our_team') ) : the_row(); ?>
    <?php 
        $upper_title = get_sub_field('upper_title');
        $main_title = get_sub_field('main_title');
        $catch_image = get_sub_field('catch_image');
        $main_button = get_sub_field('main_button');
        $team = get_sub_field('team');
    ?>
    <div class="home-team">
        <div class="team-banner">
            <?php if($catch_image): ?>
            <div class="banner-image">
                <img src="<?php echo $catch_image; ?>" alt="Team" />
            </div>
            <?php endif; ?>
        </div>
        <div class="team-content">
            <div class="container">
                <div class="team-wrap">
                    <?php if($upper_title): ?>
                        <h4 class="optinal-h4"><?php echo $upper_title; ?></h4>
                    <?php endif; ?>
                    <?php if($main_title): ?>
                        <h1><?php echo $main_title; ?></h1>
                    <?php endif; ?>
                    <div class="row">
                        <?php if(have_rows('team')): ?>
                            <?php while ( have_rows('team') ) : the_row(); ?>
                            <?php 
                                $name = get_sub_field('name');
                                $icon = get_sub_field('icon');
                                $image = get_sub_field('image');
                                $button = get_sub_field('button');
                                $team = get_sub_field('team');
                            ?>
                            <div class="col-md-4">
                                <div class="team-box">
                                    <div class="team-image">
                                        <img src="<?php echo $image; ?>" alt="Team" />
                                        <div class="team-hover">
                                            <div class="team-h-inner">
                                                <div class="comman-icon">
                                                    <?php if($icon): ?>
                                                    <span class="icon-<?php echo $icon; ?>"></span>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="more-div">
                                                    <?php if($button): ?>
                                                        <a href="<?php $button['url']; ?>" class="learn-more yellow-link"><?php echo $button['title']; ?><span class="icon-arrow-right"></span></a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if($name): ?>
                                    <div class="team-title">
                                        <?php echo $name; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="meet-button">
                        <?php if($main_button): ?>
                        <a href="<?php $main_button['url']; ?>" class="btn btn-secondary"><?php echo $main_button['title']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>