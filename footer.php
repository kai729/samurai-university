 <!-- footer.php ここから -->
 <footer class="footer">
      <div class="row footer_row">
        <div class="col">
          <div class="footer_content">
            <div class="row">
              <div class="col-lg-4 footer_col">
                <!-- Footer About -->
                <div class="footer_section footer_about">
                  <div class="footer_logo_container">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo_big.png" alt="" />
                    <a href="#">
                      <div class="footer_logo_text">Samurai University</div>
                    </a>
                  </div>
                  <div class="footer_contact_info">
                    <div>〒XXX-XXXX</div>
                    <div>東京都渋谷区道玄坂2丁目11-1 Gスクエア渋谷道玄坂4F</div>
                    <ul>
                      <li><span>TEL: </span>03-XXXX-XXXX</li>
                      <li><span>MAIL: </span>: xxxx.xxxx@gmail.com</li>
                    </ul>
                  </div>
                  <div class="footer_social">
                    <ul>
                      <li>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 footer_col">
                <!-- Footer links -->
                <div class="footer_section footer_links">
                  <div class="footer_links_container">
                   <!--wp関数に置き換える-->
                   <?php
                   $args = array(
                     'menu' => 'Footer_menu',
                     'menu_class' => '',
                     'container' => 'false',
                   );
                   wp_nav_menu($args);
                   ?>
                  </div>
                </div>
              </div>

              <div class="col-lg-5 footer_col clearfix">

               <a class="twitter-timeline" data-height="265" href="https://twitter.com/samuraijuku?ref_src=twsrc%5Etfw">Tweets by samuraijuku</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row copyright_row">
        <div class="col">
          <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
            <div class="cr_text">
              Copyright &copy; Samurai University All Rights Reserved.
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>


<?php wp_footer(); ?>
  <script type="text/javascript">
    $(".carousel").carousel();
  </script>

<script type="text/javascript">
         //WordPressにおけるjQueryの書き方
         jQuery(function($){
             $('.count_num').counterUp({
             delay: 10,
             time: 1000
             });
         });
     </script>
     <script>
       AOS.init();
     </script>
</body>

</html>