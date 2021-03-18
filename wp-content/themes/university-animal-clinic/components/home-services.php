<?php if(have_rows('services_section')): ?>
    <?php while ( have_rows('services_section') ) : the_row(); ?>
        <div class="home-services line-bg">
            <div class="container">
                <div class="row">
                    <?php if(have_rows('left_content')): ?>
                        <?php while ( have_rows('left_content') ) : the_row(); ?>
                        <?php 
                            $upper_title = get_sub_field('upper_title');
                            $main_title = get_sub_field('main_title');
                            $description = get_sub_field('description');
                            $button = get_sub_field('button');
                        ?>
                        <div class="col-lg-6">
                            <div class="service-content">
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
                    <?php if(have_rows('right_content')): ?>
                        <?php while ( have_rows('right_content') ) : the_row(); ?>
                            <div class="col-lg-6">
                                <div class="d-none d-lg-block">
                                    <div class="service-owl owl-carousel owl-theme">
                                        <?php if(have_rows('slider_item')): $count = 1; ?>
                                            <?php while ( have_rows('slider_item') ) : the_row(); ?>
                                                <?php 
                                                    $image = get_sub_field('image');
                                                    $icon = get_sub_field('icon');
                                                    $title = get_sub_field('title');
                                                    $button = get_sub_field('button');
                                                ?>
                                                <?php if($count % 4 == 1): ?>
                                                <div class="item">
                                                    <div class="row">
                                                <?php endif; ?>
                                                        <div class="col-md-6">
                                                            <div class="service-box">
                                                                <div class="service-image">
                                                                    <?php if($image): ?>
                                                                        <img src="<?php echo $image; ?>" alt="Service" />
                                                                    <?php endif; ?>
                                                                </div>
                                                                <div class="service-info">
                                                                    <div class="service-inner">
                                                                        <div class="service-icon comman-icon">
                                                                            <?php if($icon): ?>
                                                                                <span class="icon-<?php echo $icon; ?>"></span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                        <?php if($title): ?>
                                                                        <div class="service-title"><?php echo $title; ?></div>
                                                                        <?php endif; ?>
                                                                        <?php if($button): ?>
                                                                        <a class="learn-more" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?> <span class="icon-arrow-right"></span></a>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php if($count % 4 == 0): ?>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                            <?php $count++; endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="d-lg-none">
                                    <div class="service-owl owl-carousel owl-theme">
                                    <?php if(have_rows('slider_item')): ?>
                                        <?php while ( have_rows('slider_item') ) : the_row(); ?>
                                            <?php 
                                                $image = get_sub_field('image');
                                                $icon = get_sub_field('icon');
                                                $title = get_sub_field('title');
                                                $button = get_sub_field('button');
                                            ?>
                                            <div class="item">
                                                <div class="service-box">
                                                    <div class="service-image">
                                                        <?php if($image): ?>
                                                            <img src="<?php echo $image; ?>" alt="Service" />
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="service-info">
                                                        <div class="service-inner">
                                                            <div class="service-icon comman-icon">
                                                                <?php if($icon): ?>
                                                                    <span class="icon-<?php echo $icon; ?>"></span>
                                                                <?php endif; ?>
                                                            </div>
                                                            <?php if($title): ?>
                                                            <div class="service-title"><?php echo $title; ?></div>
                                                            <?php endif; ?>
                                                            <?php if($button): ?>
                                                            <a class="learn-more" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?> <span class="icon-arrow-right"></span></a>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>