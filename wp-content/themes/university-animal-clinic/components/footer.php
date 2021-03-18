<!-- Footer Start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-logo">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="University Animal Clinic" />
                    </a>
                </div>
                <div class="footer-social">
                    <ul>
                        <?php if(have_rows('social_media', 'theme_options')): ?>
                            <?php while ( have_rows('social_media', 'theme_options') ) : the_row(); ?>
                            <li>
                                <a href="<?php echo the_sub_field('facebook', 'theme_options'); ?>" class="icon-facebook"></a>
                            </li>
                            <li>
                                <a href="<?php echo the_sub_field('instagram', 'theme_options'); ?>" class="icon-instagram"></a>
                            </li>
                            <li>
                                <a href="<?php echo the_sub_field('youtube', 'theme_options'); ?>" class="icon-youtube"></a>
                            </li>
                            <li>
                                <a href="<?php echo the_sub_field('tiktok', 'theme_options'); ?>" class="icon-tiktoc"></a>
                            </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-contact">
                    <h4>CONTACT INFORMATION</h4>
                    <?php if(get_field('contact_information', 'theme_options')): ?>
                        <?php echo the_field('contact_information', 'theme_options'); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-contact">
                    <h4>HOURS OF OPERATION</h4>
                    <?php if(get_field('house_operation', 'theme_options')): ?>
                        <?php echo the_field('house_operation', 'theme_options'); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-contact">
                    <h4>AWARDS & ASSOCIATIONS</h4>
                    <ul class="award-logos">
                        <?php if(have_rows('awards_and_association', 'theme_options')): ?>
                            <?php while ( have_rows('awards_and_association', 'theme_options') ) : the_row(); ?>
                            <?php
                                $award_logo = get_sub_field('image');
                            ?>
                            <li>
                                <img src="<?php echo $award_logo; ?>" alt="Award" />
                            </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="bottom-wrap">
                <div class="footer-left">
                    <ul class="footer-menu">
                    <?php if(have_rows('lower_links', 'theme_options')): ?>
                        <?php while ( have_rows('lower_links', 'theme_options') ) : the_row(); ?>
                        <?php
                            $lower_links_item = get_sub_field('link');
                        ?>
                        <li>
                            <a href="<?php echo $lower_links_item['url']; ?>"><?php echo $lower_links_item['title']; ?></a>
                        </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </ul>
                    <div class="copyright">
                        Copyright © 2020. All Rights Reserved
                    </div>
                </div>
                <div class="back-top">
                    <a class="learn-more yellow-link" href="#">Back to Top <span class="icon-arrow-up"></span></a>
                </div>
            </div>
        </div>
    </div>
</footer>