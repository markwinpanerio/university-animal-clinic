<?php if(have_rows('exotic_care')): ?>
    <?php while ( have_rows('exotic_care') ) : the_row(); ?>
        <?php 
            $upper_title = get_sub_field('upper_title');
            $main_title = get_sub_field('main_title');
            $description = get_sub_field('description');
            $button = get_sub_field('button');
            $images = get_sub_field('images');
        ?>
        <div class="exotic-care">
            <div class="container">
                <div class="exotic-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <?php if($upper_title): ?>
                                <h4 class="optinal-h4"><?php echo $upper_title; ?></h4>
                            <?php endif; ?>
                            <?php if($main_title): ?>
                                <h1><?php $main_title; ?></h1>
                            <?php endif; ?>
                            <?php if($description): ?>
                                <?php echo $description; ?>
                            <?php endif; ?>
                            <?php if($button): ?>
                                <a href="<?php echo $button['url']; ?>" class="btn btn-primary"><?php echo $button['title']; ?></a>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-5">
                            <div class="exotic-images">
                                <?php if(have_rows('images')): $count = 1; ?>
                                    <?php while ( have_rows('images') ) : the_row(); ?>
                                        <?php 
                                            $image = get_sub_field('image');
                                            $name = get_sub_field('name');
                                        ?>
                                    <div class="exotic-image<?php echo $count; ?> team-box">
                                        <?php if($image): ?>
                                            <div class="team-image">
                                                <img src="<?php echo $image; ?>" alt="Exotic" />
                                            </div>
                                        <?php endif; ?>
                                        <?php if($name): ?>
                                            <div class="team-title"><?php echo $name; ?></div>
                                        <?php endif; ?>
                                    </div>
                                    <?php $count++; endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>