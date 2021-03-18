<?php if(have_rows('welcome_section')): ?>
    <?php while ( have_rows('welcome_section') ) : the_row(); ?>
        <div class="welcome-block">
            <div class="container">
                <div class="row">
                <?php if(have_rows('left_content')): ?>
                    <?php while ( have_rows('left_content') ) : the_row(); ?>
                    <?php
                        $image = get_sub_field('image');
                        $text_below_image = get_sub_field('text_below_image');
                    ?>
                    <div class="col-lg-5 col-md-4 mobile-order2">
                        <div class="welcome-box team-box">
                            <?php if($image): ?>
                            <div class="team-image">
                                <img src="<?php echo $image;?>" alt="Welcome" />
                            </div>
                            <?php endif; ?>
                            <?php if($image): ?>
                            <div class="team-title">
                                <?php echo $text_below_image; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if(have_rows('right_content')): ?>
                    <?php while ( have_rows('right_content') ) : the_row(); ?>
                    <?php 
                        $upper_title = get_sub_field('upper_title');
                        $main_title = get_sub_field('main_title');
                        $description = get_sub_field('description');
                        $button = get_sub_field('button');
                    ?>
                    <div class="col-lg-7 col-md-8">
                        <div class="welcome-content">
                            <?php if($upper_title): ?>
                                <h4 class="optinal-h4"><?php echo $upper_title; ?></h4>
                            <?php endif; ?>
                            <?php if($main_title): ?>
                                <h1><?php echo $main_title; ?></h1>
                            <?php endif; ?>
                            <?php if($description): ?>
                                <?php echo $description; ?>
                            <?php endif; ?>
                            <?php if($button): ?>
                                <a href="<?php echo $button['url']; ?>" class="btn btn-primary"><?php echo $button['title']; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>