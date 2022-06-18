    <?php get_header(); ?>
		<!-- Home -->

		<div class="home">
			<div class="breadcrumbs_container">
				<div class="image_header">
					<div class="header_info">
						<div>Contact</div>
						<div>お問い合わせ</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Course -->

		<div class="course">
			<div class="row content-body">
				<!-- Course -->
				<div class="col-lg-8">
					<!-- Course Tabs -->
					<div class="course_tabs_container">
						<div class="tab_panels">
							<!-- Description -->
							<div class="tab_panel">
								<div class="tab_panel_title">お問い合わせ</div>
								<div class="tab_panel_content">
									<div class="">
										<div class="container contact_form">
											
											<!--wordpressループ-->
											<?php if(have_posts()) : ?>
												<?php while (have_posts()) : the_post(); ?>
												<!--以下の関数で管理画面から入力した内容を表示できる-->
												<?php the_content(); ?>
												<?php endwhile; ?>
												<?php endif; ?>
											
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Course Sidebar -->
				<div class="col-lg-4" style="background-color: #2B7B8E33">
				<?php get_sidebar('main'); ?>
				</div>
			</div>
		</div>

		<!-- Footer -->

		<?php get_footer(); ?>