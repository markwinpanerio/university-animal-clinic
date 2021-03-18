<!-- Header Start -->
<?php if(have_rows('header', 'theme_options')): ?>
    <?php while ( have_rows('header', 'theme_options') ) : the_row(); ?>
        <?php if(have_rows('popup_banner', 'theme_options')): ?>
            <?php while ( have_rows('popup_banner', 'theme_options') ) : the_row(); ?>
                <?php
                    $popup_banner_activate = get_sub_field('activate');
                    $popup_banner_description = get_sub_field('description');
                    $popup_banner_button = get_sub_field('button');
                ?>
                <?php if($popup_banner_activate): ?>
                <div class="covid-message">
                    <div class="container">
                        <div class="covid-text">
                            <?php echo $popup_banner_description; ?>
                        </div>
                        <div class="covid-link">
                            <a class="learn-more" href="<?php echo $popup_banner_button['url']; ?>" target="<?php echo $popup_banner_button['target']; ?>"><?php echo $popup_banner_button['title']; ?> <span class="icon-arrow-right"></span></a>
                        </div>
                        <a href="javascript:void(0);" class="icon-close removeit"></a>
                    </div>
                </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
<header class="header">
    <div class="container">
        <div class="header-wrap">
            <div class="header-logo">
                <a href="<?php echo site_url(); ?>">
                    <?php if ( function_exists( 'the_custom_logo' ) ): ?>
                        <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );	
                        ?>
                        <img src="<?php echo esc_url( $logo[0] ); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
                    <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="University Animal Clinic" />
                    <?php endif; ?>
                </a>
            </div>
            <div class="header-right">
                <div class="header-content">
                    <?php if(get_field('contact_number', 'theme_options')): ?>
                        <div class="call-us"><span>call us today</span> <a href="tel:<?php echo the_field('contact_number', 'theme_options'); ?>"><?php echo the_field('contact_number', 'theme_options'); ?></a></div>
                    <?php endif; ?>
                    <?php if(have_rows('header', 'theme_options')): ?>
                        <?php while ( have_rows('header', 'theme_options') ) : the_row(); ?>
                            <div class="online-request">
                                <?php if(have_rows('upper_header', 'theme_options')): ?>
                                    <?php while ( have_rows('upper_header', 'theme_options') ) : the_row(); ?>
                                    <?php
                                        $upper_header_button = get_sub_field('button');
                                        $upper_header_button_type = get_sub_field('button_type');
                                    ?>
                                    <a href="<?php echo $upper_header_button['url']; ?>" class="btn btn-<?php echo $upper_header_button_type; ?>" target="<?php echo $upper_header_button['target']; ?>"><?php echo $upper_header_button['title']; ?></a>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="header-bottom">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="menu-text">Menu</span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <?php
                                wp_nav_menu( array(
                                	'theme_location' => 'menu-1',
                                	'menu-id' => 'primary-menu',
                                	'menu_class' => 'navbar-nav',
                                	'container'	=>	'ul',
                                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'          => new WP_Bootstrap_Navwalker(),
                                	'depth' => 3
                                ) );
                            ?>

                            <!-- <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown">Services</a>
                                    <ul class="submenu dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="#">Telemedicine/Virtual
                                                Veterinary Services</a>
                                            <ul class="submenu dropdown-menu">
                                                <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 1
                                                    </a></li>
                                                <li class="nav-item"><a class="nav-link" href="#"> Dropdown item
                                                        2</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#"> Dropdown item
                                                        3</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#">Wellness Plans</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Vaccinations</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Exotic Pet Care</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Laser Therapy</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Dental Cleaning</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Elderly Pet Care
                                                Services</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Pet Microchipping</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Dog Grooming Services</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#">How to Treat
                                                Heartworms</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Flea & Tick Prevention</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#">Surgery and Specialty
                                                Services for Pets</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Treating Itchy Skin & Pet Allergies</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0);"
                                        data-toggle="dropdown">Types of
                                        Animals</a>
                                    <ul class="submenu dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 1 </a></li>
                                        <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 2</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 3</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 4</a>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0);"
                                        data-toggle="dropdown">Resources</a>
                                    <ul class="submenu dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 1 </a></li>
                                        <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 2</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 3</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 4</a>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Testimonials</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0);"
                                        data-toggle="dropdown">Service
                                        Area</a>
                                    <ul class="submenu dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 1 </a></li>
                                        <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 2</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 3</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 4</a>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0);"
                                        data-toggle="dropdown">About Us</a>
                                    <ul class="submenu dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 1 </a></li>
                                        <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 2</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 3</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 4</a>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact Us</a>
                                </li>
                            </ul> -->
                        </div>
                    </nav>
                    <div class="header-search">
                        <a href="javascript:void(0);" class="icon-search"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="searchbar">
        <div class="container">
            <div class="searchbar-inner">
                <input type="text" class="form-control" placeholder="Search here..." />
                <button type="submit" class="btn search-btn icon-search"></button>
            </div>
        </div>
    </div>

    <div class="mobile-bottom-header">
        <div class="call-us">
            <span>call us </span>
            <a href="tel:9413557707">941-355-7707</a>
        </div>
    </div>
</header>
<!-- Header End -->