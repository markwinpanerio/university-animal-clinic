<?php if(have_rows('fun_fact')): ?>
    <?php while ( have_rows('fun_fact') ) : the_row(); ?>
    <?php 
        $upper_title = get_sub_field('upper_title');
        $lower_title = get_sub_field('lower_title');
    ?>
    <div class="fun-fact line-bg">
        <div class="container">
            <div class="fun-friday">
                <?php if($upper_title): ?>
                    <?php echo $upper_title; ?>
                <?php endif; ?>
                <?php if($lower_title): ?>
                <span class="friday-label"><?php echo $lower_title?></span>
                <?php endif; ?>
            </div>
            <div class="fun-fact-owl owl-carousel">
                <?php if(have_rows('slider_item')): ?>
                    <?php while ( have_rows('slider_item') ) : the_row(); ?>
                    <?php 
                        $thumbnail_image = get_sub_field('thumbnail_image');
                        $youtube_video_url = get_sub_field('youtube_video_url');
                        $description = get_sub_field('description');
                        $button = get_sub_field('button');
                    ?>
                    <div class="item">
                        <div class="fun-image">
                            <?php if($thumbnail_image): ?>
                                <img src="<?php echo $thumbnail_image; ?>" alt="Video">
                            <?php endif; ?>
                            <a class="play-icon icon-youtube" href="<?php echo $youtube_video_url; ?>"></a>
                        </div>
                        <div class="fun-content">
                            <?php if($thumbnail_image): ?>
                                <?php echo $description; ?>
                            <?php endif; ?>
                            <?php if($button): ?>
                                <a class="btn btn-primary" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
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