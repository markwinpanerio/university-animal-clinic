<div class="home-slider owl-carousel owl-theme">
    <?php if(have_rows('slider')): ?>
        <?php while ( have_rows('slider') ) : the_row(); ?>
        <?php 
            $image = get_sub_field('image');
            $upper_title = get_sub_field('upper_title');
            $main_title = get_sub_field('main_title');
            $button = get_sub_field('button');
        ?>
        <div class="item">
            <div class="slide-image">
                <img src="<?php echo $image; ?>" alt="Slide" />
            </div>
            <div class="container">
                <div class="slide-content">
                    <h4 class="optinal-h4"><?php echo $upper_title; ?></h4>
                    <h3><?php echo $main_title; ?></h3>
                    <a href="<?php echo $button['url']; ?>" class="btn btn-primary"><?php echo $button['title']; ?></a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>