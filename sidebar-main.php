  <!-- sidebar-main に切り出す -->
  <div class="sidebar">
            <div class="form-search">
              <form action="<?php echo home_url(); ?>" method = "get" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-atart">
                <input type="search" name="s" value="<?php the_search_query(); ?>"class="courses_search_input" required="required" placeholder="検索文字を入力">
                <button action="submit" class="courses_search_button">
                 
                <i class="fa-solid fa-magnifying-glass-plus fa-lg"></i>
                </button>
              </form>
            </div>
            <div class="category">
              <div class="section_title_container category_title">
                <h2>CATEGORY</h2>
                <div class="section_subtitle">カテゴリー</div>
              </div>
              <div class="sidebar_categories">
                <ul>
                 <?php
                 $args = array(
                     'title_li' => '',
                 );
                 wp_list_categories($args);
                 ?>
                </ul>
              </div>
            </div>
            <div class="category">
              <div class="section_title_container category_title">
                <h2>Latest Post</h2>
                <div class="section_subtitle">最新記事</div>
              </div>
              <div class="sidebar_categories">
                <ul>
                 <?php
                 $args = array(
                     'posts_per_page' => 3     //表示件数の指定
                 );
                 $posts =get_posts($args);
                 foreach($posts as $post):   //ループの開始
                setup_postdata($pst); //記事データのセット
                ?>
                 <li>
                     <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                 </li>
                 <?php
                 endforeach;
                 wp_reset_postdata();  //今回作成したクエリをリセットする
                 ?>
                </ul>
              </div>
            </div>
          </div>
          <!-- sidebar-main ここまで -->
          <div class="col-lg-4" style="background-color: #2b7b8e33"></div>