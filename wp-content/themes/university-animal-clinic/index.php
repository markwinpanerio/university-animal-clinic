<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package University_Animal_Clinic
 */

get_header();
?>

	<!-- Header Start -->
	<div class="covid-message">
		<div class="container">
			<div class="covid-text">Covid-19 message: University Animal Clinic is always looking out for the safety of
				our clients and staff.
				Please visit our COVID-19 Updates page for more information on our curbside
				check-in process.</div>
			<div class="covid-link">
				<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
			</div>
			<a href="javascript:void(0);" class="icon-close removeit"></a>
		</div>
	</div>
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
						<div class="call-us"><span>call us today</span> <a href="tel:9413557707">941-355-7707</a></div>
						<div class="online-request">
							<a href="#" class="btn btn-secondary">Online Pharmacy</a>
							<a href="#" class="btn btn-primary">Request an Appointment</a>
						</div>
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
								<ul class="navbar-nav">
									<li class="nav-item active">
										<a class="nav-link dropdown-toggle" href="javascript:void(0);"
											data-toggle="dropdown">Services</a>
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
											<li class="nav-item"><a class="nav-link" href="#">Treating Itchy Skin & Pet
													Allergies</a>
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
								</ul>
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

	<!-- Home Slider Start -->
	<div class="home-slider owl-carousel owl-theme">
		<div class="item">
			<div class="slide-image">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-img1.jpg" alt="Slide" />
			</div>
			<div class="container">
				<div class="slide-content">
					<h4 class="optinal-h4">Top Level</h4>
					<h3>Compassionate Care that you can trust</h3>
					<a href="#" class="btn btn-primary">Meet our Team</a>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="slide-image">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-img2.jpg" alt="Slide" />
			</div>
			<div class="container">
				<div class="slide-content">
					<h4 class="optinal-h4">We are</h4>
					<h3>accepting new patients</h3>
					<a href="#" class="btn btn-primary">New Client Special</a>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="slide-image">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-img3.jpg" alt="Slide" />
			</div>
			<div class="container">
				<div class="slide-content">
					<h4 class="optinal-h4">Early detection to</h4>
					<h3>help your pet live a longer & happier life</h3>
					<a href="#" class="btn btn-primary">See Our Wellness Plans</a>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="slide-image">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-img4.jpg" alt="Slide" />
			</div>
			<div class="container">
				<div class="slide-content">
					<h4 class="optinal-h4">veterinary</h4>
					<h3>care for your exotic pet</h3>
					<a href="#" class="btn btn-primary">View Types of Animals We Treat</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Home Slider End -->

	<!-- Welcome Start -->
	<div class="welcome-block">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-4 mobile-order2">
					<div class="welcome-box team-box">
						<div class="team-image">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/welcome-img.jpg" alt="Welcome" />
						</div>
						<div class="team-title">
							highest level of care
						</div>
					</div>
				</div>
				<div class="col-lg-7 col-md-8">
					<div class="welcome-content">
						<h4 class="optinal-h4">Welcome to</h4>
						<h1>University Animal Clinic</h1>
						<p>University Animal Clinic is proud to welcome you to our animal hospital! At our
							state-of-the-art
							animal
							clinic, we???re proud to serve our local Florida community, from <a href="#">Lakewood
								Ranch,</a>
							to <a href="#">Sarasota,
								Bradenton,</a>
							and beyond!</p>
						<p>We are dedicated to providing the highest level of veterinary medicine available, along
							with
							friendly,
							compassionate service that you can trust.</p>
						<p>If you have any questions about our animal hospital, our veterinarians or our wide range
							of
							veterinary
							services, please don???t hesitate to contact us today. Thank you for your interest in
							University
							Animal
							Clinic! Our veterinarians look forward to meeting both you and your pet!</p>
						<a href="#" class="btn btn-primary">Meet our Team</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Welcome End -->

	<!-- Home Services Start -->
	<div class="home-services line-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="service-content">
						<h4 class="optinal-h4">Bradenton, FL & Sarasota, FL</h4>
						<h1>Veterinary Services</h1>
						<p>
							From dogs to rats, cats to amphibians and reptiles, University Animal Clinic serves the
							needs of
							all types of pets in Lakewood Ranch, Sarasota, Bradenton, and surrounding communities.
							Our
							animal clinics highly skilled veterinarians and trained personnel are on hand six days a
							week,
							with our animal hospital open 8:30 a.m. to 6 p.m. Monday to Friday and 8 a.m. to 1 p.m.
							on
							Saturdays. Led by a knowledgeable veterinary team, our animal hospital offers emergency
							procedures, urgent care, and a wide array of services for cats, dogs, and exotic pets.
						</p>
						<p>
							Our motto is ???Caring Only Requires Love??? and we have plenty of love as well as plenty of
							advanced resources, tools, and facilities to administer our veterinary care.
						</p>
						<p>
							Our services include check-ups, annual exams, and preventative medicine (wellness
							plans). We
							offer a full range of vaccinations that include rabies, distemper, kennel cough, and the
							newest
							rattlesnake vaccine.
						</p>
						<p>
							We have our on call, Board Certified, Ultra-sonographer specialist, available for your
							pet???s
							needs.
						</p>
						<p>
							Our surgical procedures include; spay, neuter, orthopedics, and internal procedures as
							well
							as
							other intricate surgeries such as (ie: ACL(Cruciate) repairs).
						</p>
						<p>
							We are not limited to dogs and cats, either. We also treat the exotic pets of Sarasota,
							Bradenton, and Lakewood Ranch.
						</p>
						<a href="#" class="btn btn-primary">Explore All Services</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="d-none d-lg-block">
						<div class="service-owl owl-carousel owl-theme">
							<div class="item">
								<div class="row">
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-img1.jpg" alt="Service" />
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-dental"></span>
													</div>
													<div class="service-title">Dental Cleaning</div>
													<a class="learn-more" href="#">learn more <span
															class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-img2.jpg" alt="Service" />
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-heart-paw"></span>
													</div>
													<div class="service-title">Wellness Plans</div>
													<a class="learn-more" href="#">learn more <span
															class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-img3.jpg" alt="Service" />
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-vaccines"></span>
													</div>
													<div class="service-title">Vaccinations & Immunizations</div>
													<a class="learn-more" href="#">learn more <span
															class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-img4.jpg" alt="Service" />
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-exotic-care"></span>
													</div>
													<div class="service-title">Exotic Pet Care</div>
													<a class="learn-more" href="#">learn more <span
															class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-img1.jpg" alt="Service" />
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-dental"></span>
													</div>
													<div class="service-title">Dental Cleaning</div>
													<a class="learn-more" href="#">learn more <span
															class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-img2.jpg" alt="Service" />
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-heart-paw"></span>
													</div>
													<div class="service-title">Wellness Plans</div>
													<a class="learn-more" href="#">learn more <span
															class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-img3.jpg" alt="Service" />
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-vaccines"></span>
													</div>
													<div class="service-title">Vaccinations & Immunizations</div>
													<a class="learn-more" href="#">learn more <span
															class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-img4.jpg" alt="Service" />
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-exotic-care"></span>
													</div>
													<div class="service-title">Exotic Pet Care</div>
													<a class="learn-more" href="#">learn more <span
															class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="d-lg-none">
						<div class="service-owl owl-carousel owl-theme">
							<div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-img1.jpg" alt="Service" />
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-dental"></span>
											</div>
											<div class="service-title">Dental Cleaning</div>
											<a class="learn-more" href="#">learn more <span
													class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-img2.jpg" alt="Service" />
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-heart-paw"></span>
											</div>
											<div class="service-title">Wellness Plans</div>
											<a class="learn-more" href="#">learn more <span
													class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-img3.jpg" alt="Service" />
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-vaccines"></span>
											</div>
											<div class="service-title">Vaccinations & Immunizations</div>
											<a class="learn-more" href="#">learn more <span
													class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-img4.jpg" alt="Service" />
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-exotic-care"></span>
											</div>
											<div class="service-title">Exotic Pet Care</div>
											<a class="learn-more" href="#">learn more <span
													class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-img1.jpg" alt="Service" />
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-dental"></span>
											</div>
											<div class="service-title">Dental Cleaning</div>
											<a class="learn-more" href="#">learn more <span
													class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-img2.jpg" alt="Service" />
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-heart-paw"></span>
											</div>
											<div class="service-title">Wellness Plans</div>
											<a class="learn-more" href="#">learn more <span
													class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-img3.jpg" alt="Service" />
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-vaccines"></span>
											</div>
											<div class="service-title">Vaccinations & Immunizations</div>
											<a class="learn-more" href="#">learn more <span
													class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-img4.jpg" alt="Service" />
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-exotic-care"></span>
											</div>
											<div class="service-title">Exotic Pet Care</div>
											<a class="learn-more" href="#">learn more <span
													class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Home Services End -->
	<!-- Home Team Start -->
	<div class="home-team">
		<div class="team-banner">
			<div class="banner-image">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team-banner.jpg" alt="Team" />
			</div>
		</div>
		<div class="team-content">
			<div class="container">
				<div class="team-wrap">
					<h4 class="optinal-h4">OUR TEAM</h4>
					<h1>Meet Our Friendly Doctors</h1>
					<div class="row">
						<div class="col-md-4">
							<div class="team-box">
								<div class="team-image">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team-img1.jpg" alt="Team" />
									<div class="team-hover">
										<div class="team-h-inner">
											<div class="comman-icon">
												<span class="icon-cross-paw"></span>
											</div>
											<div class="more-div">
												<a class="learn-more yellow-link" href="#">learn more <span
														class="icon-arrow-right"></span></a>
											</div>
										</div>
									</div>
								</div>
								<div class="team-title">
									Dr. Leigh Samanowitz
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="team-box">
								<div class="team-image">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team-img2.jpg" alt="Team" />
									<div class="team-hover">
										<div class="team-h-inner">
											<div class="comman-icon">
												<span class="icon-cross-paw"></span>
											</div>
											<div class="more-div">
												<a class="learn-more yellow-link" href="#">learn more <span
														class="icon-arrow-right"></span></a>
											</div>
										</div>
									</div>
								</div>
								<div class="team-title">
									Dr. Sara Simonson
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="team-box">
								<div class="team-image">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team-img3.jpg" alt="Team" />
									<div class="team-hover">
										<div class="team-h-inner">
											<div class="comman-icon">
												<span class="icon-cross-paw"></span>
											</div>
											<div class="more-div">
												<a class="learn-more yellow-link" href="#">learn more <span
														class="icon-arrow-right"></span></a>
											</div>
										</div>
									</div>
								</div>
								<div class="team-title">
									Dr. Jenny Dakin
								</div>
							</div>
						</div>
					</div>
					<div class="meet-button">
						<a href="#" class="btn btn-secondary">Meet the Whole Team</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Home Team End -->

	<!-- Exotic Care Start -->
	<div class="exotic-care">
		<div class="container">
			<div class="exotic-wrap">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<h4 class="optinal-h4">LAKE WOOD RANCH</h4>
						<h1>Exotic Pet Care</h1>
						<p>Every pet is special to us at University Animal Clinic. We also know exotic pets are
							unique
							and
							therefore require special care. Our highly qualified exotic veterinarians near you serve
							the
							needs of exotic pets in University Park, Bradenton, Sarasota and Lakewood Ranch. Whether
							a
							bird
							has a crop infection, a snake or other reptile is not eating or has a lack of appetite,
							or
							rats,
							guinea pigs, rabbits, ferrets or other rodents suffer from respiratory infections, we
							are
							here
							to serve the needs of our all exotic pets and their owners. In addition to treating
							exotic
							pet
							ailments, we offer tips and guidance on the proper diet, vitamins, lighting and housing
							for
							these unique creatures that visit our exotic pet clinic.
						</p>
						<p>
							Although all reptiles share the similar traits of being cold-blooded and covered in
							scales,
							they
							do not follow a one-size fits all outline for proper care. Some snakes and other
							reptiles
							need a
							hot, dry environment while other snakes and reptiles require a humid and mossy
							enclosure.
							They
							also vary in requirements for lighting, diet, vitamins and housing.</p>
						<a href="#" class="btn btn-primary">Learn More About Exotic Pet Care</a>
					</div>
					<div class="col-lg-5">
						<div class="exotic-images">
							<div class="exotic-image1 team-box">
								<div class="team-image">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/exotic-img1.jpg" alt="Exotic" />
								</div>
								<div class="team-title">turtle</div>
							</div>
							<div class="exotic-image2 team-box">
								<div class="team-image">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/exotic-img2.jpg" alt="Exotic" />
								</div>
								<div class="team-title">bearded dragon</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Exotic Care End -->

	<!-- Fun Fact Start -->
	<div class="fun-fact line-bg">
		<div class="container">
			<div class="fun-friday">
				FUN FACT
				<span class="friday-label">FRIDAY</span>
			</div>
			<div class="fun-fact-owl owl-carousel">
				<div class="item">
					<div class="fun-image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-image1.jpg" alt="Video">
						<a class="play-icon icon-youtube" href="javascript:void(0);"></a>
					</div>
					<div class="fun-content">
						<p>This is the first of a 2 part series on the dreaded and stinky Anal Glands! What are
							they? Why do pets have them? and what can we do to help/stop the smell? Watch this and
							our second installment to learn more!
						</p>
						<a class="btn btn-primary" href="javascript:void(0);">View Our Video Library</a>
					</div>
				</div>
				<div class="item">
					<div class="fun-image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-image2.jpg" alt="Video">
						<a class="play-icon icon-youtube" href="javascript:void(0);"></a>
					</div>
					<div class="fun-content">
						<p>This is the first of a 2 part series on the dreaded and stinky Anal Glands! What are
							they? Why do pets have them? and what can we do to help/stop the smell? Watch this and
							our second installment to learn more!
						</p>
						<a class="btn btn-primary" href="javascript:void(0);">View Our Video Library</a>
					</div>
				</div>
				<div class="item">
					<div class="fun-image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-image3.jpg" alt="Video">
						<a class="play-icon icon-youtube" href="javascript:void(0);"></a>
					</div>
					<div class="fun-content">
						<p>This is the first of a 2 part series on the dreaded and stinky Anal Glands! What are
							they? Why do pets have them? and what can we do to help/stop the smell? Watch this and
							our second installment to learn more!
						</p>
						<a class="btn btn-primary" href="javascript:void(0);">View Our Video Library</a>
					</div>
				</div>
				<div class="item">
					<div class="fun-image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-image4.jpg" alt="Video">
						<a class="play-icon icon-youtube" href="javascript:void(0);"></a>
					</div>
					<div class="fun-content">
						<p>This is the first of a 2 part series on the dreaded and stinky Anal Glands! What are
							they? Why do pets have them? and what can we do to help/stop the smell? Watch this and
							our second installment to learn more!
						</p>
						<a class="btn btn-primary" href="javascript:void(0);">View Our Video Library</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Fun Fact End -->

	<!-- Testi and Blog Start -->
	<div class="testi-blog">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="testimonials">
						<div class="comman-icon">
							<span class="icon-quotes"></span>
						</div>
						<h1>What Our Clients Have to Say</h1>
						<a class="btn btn-primary" href="javascript:void(0);">View All Testimonials</a>
						<div class="testi-owl owl-carousel">
							<div class="item">
								<p>???The entire staff was friendly and professional. Dr. Sam was extremely knowledgeable,
									kind, and eased my anxiety. Even though I was worried they comforted me, answered
									all of
									my questions, and took great care of my fur baby.??? <br />
								</p>
								<b>- Zach Gennette</b>
							</div>
							<div class="item">
								<p>???The entire staff was friendly and professional. Dr. Sam was extremely knowledgeable,
									kind, and eased my anxiety. Even though I was worried they comforted me, answered
									all of
									my questions, and took great care of my fur baby.??? <br />
								</p>
								<b>- Zach Gennette</b>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="home-blog">
						<div class="blog-title">
							<h4 class="optinal-h4">OUR BLOG</h4>
							<a class="btn btn-secondary" href="javascript:void(0);">View All Posts</a>
						</div>
						<div class="blog-main">
							<div class="blog-image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-image.jpg" alt="Blog">
							</div>
							<div class="blog-content">
								<div class="blog-inner">
									<h4>RAW PET FOODS: WHAT YOU NEED TO KNOW</h4>
									<p>One of the new trends in pet foods is feeding a raw diet. For some, this diet is
										based on
										that of wild species related to dogs. [???]</p>
									<div class="readmore">
										<a class="btn btn-primary" href="javascript:void(0);">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testi and Blog End -->

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
							<li>
								<a href="#" class="icon-facebook"></a>
							</li>
							<li>
								<a href="#" class="icon-instagram"></a>
							</li>
							<li>
								<a href="#" class="icon-youtube"></a>
							</li>
							<li>
								<a href="#" class="icon-tiktoc"></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-contact">
						<h4>CONTACT INFORMATION</h4>
						<p>
							8239 Cooper Creek Blvd <br /> Bradenton, FL34201 <br />
							<a class="learn-more" href="#">Get Directions <span class="icon-arrow-right"></span></a>
						</p>
						<p>
							Phone: <a class="color-body" href="tel:9413557707">941-355-7707</a>
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-contact">
						<h4>HOURS OF OPERATION</h4>
						<p>
							Monday - Friday: 8:30AM - 6PM <br /> Saturday: 8AM - 1PM
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-contact">
						<h4>AWARDS & ASSOCIATIONS</h4>
						<ul class="award-logos">
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/award-logo1.jpg" alt="Award" />
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/award-logo2.jpg" alt="Award" />
							</li>
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
							<li>
								<a href="#">Site Credits</a>
							</li>
							<li>
								<a href="#">Sitemap</a>
							</li>
							<li>
								<a href="#">Privacy Policy</a>
							</li>
						</ul>
						<div class="copyright">
							Copyright ?? 2020. All Rights Reserved
						</div>
					</div>
					<div class="back-top">
						<a class="learn-more yellow-link" href="#">Back to Top <span class="icon-arrow-up"></span></a>
					</div>
				</div>
			</div>
		</div>
	</footer>

<?php
get_sidebar();
get_footer();
