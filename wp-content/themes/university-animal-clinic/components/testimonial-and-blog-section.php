<?php if(have_rows('testimonial_and_blog_section')): ?>
    <?php while ( have_rows('testimonial_and_blog_section') ) : the_row(); ?>
        <div class="testi-blog">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                    <?php if(have_rows('testimonial')): ?>
                        <?php while ( have_rows('testimonial') ) : the_row(); ?>
                            <?php 
                                $title = get_sub_field('title');
                                $testimonial_button = get_sub_field('button');
                            ?>
                            <div class="testimonials">
                                <div class="comman-icon">
                                    <span class="icon-quotes"></span>
                                </div>
                                <?php if($title): ?>
                                <h1><?php echo $title; ?></h1>
                                <?php endif; ?>
                                <?php if($testimonial_button): ?>
                                <a class="btn btn-primary" href="<?php echo $testimonial_button['url']; ?>"><?php echo $testimonial_button['title']; ?></a>
                                <?php endif; ?>
                                <div class="testi-owl owl-carousel">
                                    <?php if(have_rows('item')): ?>
                                        <?php while ( have_rows('item') ) : the_row(); ?>
                                        <?php 
                                                $author = get_sub_field('author');
                                                $quote = get_sub_field('quote');
                                            ?>
                                        <div class="item">
                                            <?php if($quote): ?>
                                            <?php echo $quote; ?>
                                            <?php endif; ?>
                                            <br>
                                            <?php if($author): ?>
                                            <b>- <?php echo $author; ?></b>
                                            <?php endif; ?>
                                        </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                    <div class="col-lg-6">
                        <?php if(have_rows('blog')): ?>
                            <?php while ( have_rows('blog') ) : the_row(); ?>
                            <?php 
                                $blog_title = get_sub_field('title');
                                $blog_button = get_sub_field('button');
                                $blog_post = get_sub_field('blog_post');
                                $blog_image = get_the_post_thumbnail_url($blog_post->ID);
                                $excerpt = get_the_excerpt($blog_post->ID);         
                                $excerpt = substr( $excerpt, 0, 150 );
                                $blog_excerpt = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                            ?>
                            <div class="home-blog">
                                <div class="blog-title">
                                    <?php if($blog_title): ?>
                                        <h4 class="optinal-h4"><?php echo $blog_title; ?></h4>
                                    <?php endif; ?>
                                    <?php if($blog_button): ?>
                                    <a class="btn btn-secondary" href="<?php echo $blog_button['url']; ?>"><?php echo $blog_button['title']; ?></a>
                                    <?php endif; ?>
                                </div>
                                <?php if($blog_post): ?>
                                <div class="blog-main">
                                    <div class="blog-image">
                                        <img src="<?php echo $blog_image; ?>" alt="Blog">
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-inner">
                                            <h4><?php echo esc_html( $blog_post->post_title ); ?></h4>
                                            <p><?php echo $blog_excerpt . ' [...]'; ?></p>
                                            <div class="readmore">
                                                <a class="btn btn-primary" href="<?php echo esc_html($blog_post->guid); ?>">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>