   <?php get_header(); ?>
	<!-- Home -->

		<div class="home">
			<div class="breadcrumbs_container">
				<div class="image_header">
					<div class="header_info">
						<div>Courses</div>
						<div>コース</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Course -->
		<?php if(have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
		<div class="course">
			<div class="row content-body">
				<!-- Course -->
				<div class="col-lg-8">
					<!-- Course Tabs -->
					<div class="course_tabs_container">
						<div class="tab_panels">
							<!-- Description -->
							<div class="tab_panel">
								<div class="tab_panel_title"><?php the_title(); ?></div>
								<div class="tab_panel_header">
									<div class="tab_panel_header_title"><?php echo get_field('subtitle'); ?></div>
									<div class="campas_footer_content d-flex flex-row align-items-center justify-content-start">
										<img src="<?php get_template_directory_uri(); ?>/images/clock.png"><span><?php the_time('Y年n月j日'); ?></span>
									</div>
								</div>
								<div class="tab_panel_content">
									<div class="course_image">
										<?php
										$image = get_field('sub_image');
										$image_url = $image['sizes']['large'];
										?>
										<img src="<?php echo $image_url ?>" alt="">
									</div>
									<div class="tab_panel_text">
										<p>
											<?php the_content(); ?>
									   </p>
									</div>
									<hr>
									<div class="soical_share">
										<img src="<?php get_template_directory_uri(); ?>/images/facebook-square-brands.png" alt="">
										<img src="<?php get_template_directory_uri(); ?>/images/twitter-square-brands.png" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>

				<!-- Course Sidebar -->
				<div class="col-lg-4" style="background-color: #2B7B8E33">
					<div class="sidebar">
							<?php get_sidebar('main'); ?>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
   <?php get_footer(); ?>