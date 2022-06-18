

    <?php get_header(); ?>

    <?php if (have_posts()):  ?>
     <?php while (have_posts()): the_post(); ?>
    <!-- Home -->

    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
            <div>
              <?php
              //この記事に設定されたカテゴリーをすべて取得する

              // $post->IDで投稿記事のIDを取得できる
              $category_detail = get_the_category($post->ID);
              //取得した配列をループさせる（ループの中の各要素は$cdに代入する）
              foreach ($category_detail as $cd) {
                // $cd->slugでスラッグ名（newsなど）を取得できる
                echo $cd->slug;
                //カテゴリー名を取得して下部で利用する$category_nameに代入する

                // $cd->cat_nameでカテゴリー名を取得できる
                // $category_nameに代入する
                $category_name = $cd->cat_name;
              }
              ?>
            </div>
            <div><?php echo $category_name; ?></div>
          </div>
        </div>
      </div>
    </div>


    <!-- Post 部分 -->
    <div class="course">
      <div class="row content-body">
        <!-- Course -->
        <div class="col-lg-8">
          <!-- Course Tabs -->
          <div class="course_tabs_container">
            <div class="tab_panels">
              <!-- Description -->
              <div class="tab_panel">
                <div class="tab_panel_title"><?php echo $category_name; ?></div>
                <div class="tab_panel_content">
                  <div class="tab_panel_text">
                    <div class="news_posts_small">
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sx-12">
                          <div class="calendar_news_border">
                            <div class="calendar_news_border_1">
                              <div class="calendar_month"><?php echo get_post_time('F'); ?></div>
                              <div class="calendar_day">
                                <span><?php echo get_the_date('d'); ?></span><span>日</span>
                              </div>
                            </div>
                          </div>
                          <div class="calender_hour"><?php echo get_field('time'); ?></div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sx-12">
                          <div class="news_post_small_header">
                            <img src="<?php echo get_template_directory_uri(); ?> /images/tags-solid.png" alt="" /> <?php echo $category_name; ?>
                          </div>
                          <div class="news_detail_title">
                           <?php the_title(); ?>
                          </div>
                         
                          <div class="news_post_meta">
                           <?php the_content(); ?>
                          </div>

                          <hr />
                          <div class="soical_share">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-square-brands.png" alt="" />
                            <img src="<?php echo get_template_directory_uri(); ?>/images/twitter-square-brands.png" alt="" />
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

        <?php endwhile; ?>
        <?php endif; ?>

        <!--  Sidebar -->
        <div class="col-lg-4" style="background-color: #2b7b8e33">
          <div class="sidebar">
            <?php get_sidebar('main'); ?>
          </div>
        </div>
      </div>
    </div>

   <?php get_footer(); ?>
