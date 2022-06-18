<!DOCTYPE html>

<head>
  <title>samurai university</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="samurai university" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css" />
  <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="styles/main_styles.css" />
</head>

<body>
  <div class="super_container">
    <!-- Header -->
    <header class="header">
      <!-- Header Content -->
      <div class="header_container">
        <div class="">
          <nav class="navbar navbar-expand-lg">
            <div class="logo_container">
              <a href="index.php">
                <div class="logo_text">
                  <a href="<?php echo home_url();?>">
                    <img src="images/logo_big.png" />
                    <span>Samurai University</span>
                  </a>
                </div>
              </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars toggle-menu" aria-hidden="true"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav flex-row ml-md-auto d-md-flex main_nav">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo home_url();?>/category/news/">NEWS
                    <p>ニュース</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo home_url();?>/category/event/">EVENT
                    <p>イベント</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo home_url();?>/course/">COURSES
                    <p>コース</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo home_url();?>/category/campuslife/">
                    CAMPUSLIFE
                    <p>侍の学生</p>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    ABOUT US
                    <p>侍Univaについて</p>
                  </a>
                  <div class="dropdown-menu sub-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo home_url();?>/about-us/">ABOUT US
                      <p>侍Univaについて</p>
                    </a>
                    <a class="dropdown-item" href="<?php echo home_url();?>/contact/">CONTACT
                      <p>お問い合わせ</p>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- header.php ここまで -->

    <!-- Home -->
    <div class="home">
      <div class="home_slider_container">
        <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/top1_1200_630.jpg" class="d-block w-100" style="background-color: #2b7b8e26" />
                <div class="carousel-caption d-none d-md-block">
                  <img src="images/logo_big_slide.png" />
                  <div class="title-slide">
                    <p>Samurai University</p>
                  </div>
                  <div class="content-slide">
                    <p>
                      SAMURAI大学の理念には「プログラミングを通して、
                      国際社会に貢献する豊かな教養を備えた人材の育成」と
                      「公正な世界観に基づき、
                      時代と社会の要請に応えていく実学」の思いが込められています
                    </p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/top2_1200_630.jpg" class="d-block w-100" />
                <div class="carousel-caption d-none d-md-block">
                  <img src="images/logo_big_slide.png" />
                  <div class="title-slide">
                    <p>Samurai University</p>
                  </div>
                  <div class="content-slide">
                    <p>
                      SAMURAI大学の理念には「プログラミングを通して、
                      国際社会に貢献する豊かな教養を備えた人材の育成」と
                      「公正な世界観に基づき、
                      時代と社会の要請に応えていく実学」の思いが込められています
                    </p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/top3_1200_630.jpg" class="d-block w-100" />
                <div class="carousel-caption d-none d-md-block">
                  <img src="images/logo_big_slide.png" />
                  <div class="title-slide">
                    <p>Samurai University</p>
                  </div>
                  <div class="content-slide">
                    <p>
                      SAMURAI大学の理念には「プログラミングを通して、
                      国際社会に貢献する豊かな教養を備えた人材の育成」と
                      「公正な世界観に基づき、
                      時代と社会の要請に応えていく実学」の思いが込められています
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Home Slider Nav -->
    </div>

    <!-- news -->
    <div class="news">
      <div class="footer_row">
        <div class="row news_row">
          <div class="col-lg-6 col-md-6 col-sx-12 news_col">
            <div class="home_title">News</div>
            <div class="home_title_sub">ニュース</div>

            <!-- News Posts Small -->
            <div class="news_post_small">
              <div class="news_post_meta">
                <ul>
                  <li><a href="#">2019/05/02</a></li>
                </ul>
              </div>
              <div class="news_post_small_title">
                <a href="">公開講座「UnityでつくるiOSアプリ」受講生募集</a>
              </div>
            </div>
            <!-- News Posts Small ここまで -->

            <div class="news_post_small">
              <div class="news_post_meta">
                <ul>
                  <li><a href="#">2019/05/02</a></li>
                </ul>
              </div>
              <div class="news_post_small_title">
                <a href="">新規カリキュラム「Pythonコース」登場!</a>
              </div>
            </div>
            <div class="news_post_small">
              <div class="news_post_meta">
                <ul>
                  <li><a href="#">2019/05/02</a></li>
                </ul>
              </div>
              <div class="news_post_small_title">
                <a href="">新規カリキュラム「Pythonコース」登場!</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sx-12 news_col">
            <div class="home_title">Events</div>
            <div class="home_title_sub">イベント</div>

            <!-- Event Posts Small loop start-->
            <div class="news_post_small">
              <div class="row news_post_row">
                <div class="col-lg-3 col-md-4 col-sx-12">
                  <div class="calendar_border">
                    <div class="calendar_border_1">
                      <div class="calendar_month">OCT</div>
                      <div class="calendar_day">
                        <span>8</span><span>日</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sx-12">
                  <div class="news_post_small_title">
                    <a href="">AWSハンズオンセミナー</a>
                  </div>
                  <div class="news_post_content">
                    10月8日　新宿〇〇ビル8Fにて、AWSハンズオンセミナーを開催します。AWSを実際に構築してみます。参加希望者は...
                  </div>
                </div>
              </div>
            </div>
            <!-- Event Posts Small loop end-->

            <div class="news_post_small">
              <div class="row news_post_row">
                <div class="col-lg-3 col-md-4 col-sx-12">
                  <div class="calendar_border">
                    <div class="calendar_border_1">
                      <div class="calendar_month">OCT</div>
                      <div class="calendar_day">
                        <span>15</span><span>日</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sx-12">
                  <div class="news_post_small_title">
                    <a href="">Raspberry Piハンズオンセミナー</a>
                  </div>
                  <div class="news_post_content">
                    11月15日　新宿〇〇ビル8Fにて、Paspberry
                    Piｗ使った、センサーを利用した自動走行ハンズオンセミナーを開催し...
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- end news -->
    <!-- Popular Courses -->

    <div class="courses">
      <div class="footer_row">
        <div class="row">
          <div class="col">
            <div class="section_title_container text-center">
              <h2 class="home_title">COURSES</h2>
              <div class="section_subtitle">コース</div>
            </div>
          </div>
        </div>
        <div class="row courses_row">
          <!-- Course -->
          <div class="col-lg-4 course_col">
            <div class="course">
              <div class="course_image">
                <img src="images/pic5-3.png" alt="" />
              </div>
              <div class="course_body">
                <h3 class="course_title">
                  <a href="course.html">教育学部</a>
                </h3>
                <div class="course_text">
                  <p>
                    広い視野と総合力を持つ世界に通用する、教育者・指導者を育成
                  </p>
                </div>
              </div>
              <div class="course_footer">
                <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                  <div class="course_price ml-auto">詳細を見る</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 course_col">
            <div class="course">
              <div class="course_image">
                <img src="images/pic5-2.jpg" alt="" />
              </div>
              <div class="course_body">
                <h3 class="course_title">
                  <a href="course.html">理工学部</a>
                </h3>
                <div class="course_text">
                  <p>
                    未知なる科学技術の扉を開く。 「次世代」を見据えた専門教育
                  </p>
                </div>
              </div>
              <div class="course_footer">
                <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                  <div class="course_price ml-auto">詳細を見る</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 course_col">
            <div class="course">
              <div class="course_image">
                <img src="images/pic5-4.png" alt="" />
              </div>
              <div class="course_body">
                <h3 class="course_title"><a href="course.html">法学部</a></h3>
                <div class="course_text">
                  <p>複雑な社会現象を考察する、法律学科と政治学科</p>
                </div>
              </div>
              <div class="course_footer">
                <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                  <div class="course_price ml-auto">詳細を見る</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Counter -->

    <div class="counter">
      <div class="counter_background" style="background-image: url(images/pic_chart.png)"></div>
      <div class="footer_row">
        <div class="">
          <div class="">
            <div class="counter_content">
              <!-- Milestones -->
              <div class="milestones row">
                <!-- Milestone -->
                <div class="milestone col-md-3 col-lg-3 col-sx-12">
                  <div class="milestone_counter">
                    <p>教授数</p>
                    <img src="images/icon4.png" alt="" />
                    <span class="milestone_number">335</span><span class="milestone_count">名</span>
                  </div>
                </div>

                <!-- Milestone -->
                <div class="milestone col-md-3 col-lg-3 col-sx-12">
                  <div class="milestone_counter">
                    <p>卒業生徒</p>
                    <img src="images/icon3.png" alt="" />
                    <span class="milestone_number">4526</span><span class="milestone_count">名</span>
                  </div>
                </div>

                <!-- Milestone -->
                <div class="milestone col-md-3 col-lg-3 col-sx-12">
                  <div class="milestone_counter">
                    <p>学習コース</p>
                    <img src="images/icon2.png" alt="" />
                    <span class="milestone_number">12</span><span class="milestone_count">コース</span>
                  </div>
                </div>

                <!-- Milestone -->
                <div class="milestone col-md-3 col-lg-3 col-sx-12">
                  <div class="milestone_counter">
                    <p>受賞</p>
                    <img src="images/icon1.png" alt="" />
                    <span class="milestone_number">35</span><span class="milestone_count">回</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Campus Life -->

    <div class="courses">
      <div class="footer_row">
        <div class="row">
          <div class="col">
            <div class="section_title_container text-center">
              <h2 class="home_title">Campus Life</h2>
              <div class="section_subtitle">侍の学生</div>
            </div>
          </div>
        </div>
        <div class="row courses_row">
          <!-- Course -->
          <div class="col-lg-4 course_col">
            <div class="course">
              <div class="course_image">
                <img src="images/pic4-1.jpg" alt="" />
              </div>
              <div class="course_body">
                <h3 class="campas_title">
                  <a href="course.html">サマーセミナー</a>
                </h3>
              </div>
              <div class="campas_footer">
                <div class="campas_footer_content d-flex flex-row align-items-center justify-content-start">
                  <img src="images/clock.png" /><span>2019/4/23</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 course_col">
            <div class="course">
              <div class="course_image">
                <img src="images/pic4-4.png" alt="" />
              </div>
              <div class="course_body">
                <h3 class="campas_title">
                  <a href="course.html">フィールドワーク行ってきました</a>
                </h3>
              </div>
              <div class="campas_footer">
                <div class="campas_footer_content d-flex flex-row align-items-center justify-content-start">
                  <img src="images/clock.png" /><span>2019/4/23</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 course_col">
            <div class="course">
              <div class="course_image">
                <img src="images/pic4-5.jpg" alt="" />
              </div>
              <div class="course_body">
                <h3 class="campas_title"><a href="course.html">卒業式</a></h3>
              </div>
              <div class="campas_footer">
                <div class="campas_footer_content d-flex flex-row align-items-center justify-content-start">
                  <img src="images/clock.png" /><span>2019/4/23</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row courses_row">
          <!-- Course -->
          <div class="col-lg-4 course_col">
            <div class="course">
              <div class="course_image">
                <img src="images/pic4-2.jpg" alt="" />
              </div>
              <div class="course_body">
                <h3 class="campas_title">
                  <a href="course.html">サマーセミナー</a>
                </h3>
              </div>
              <div class="campas_footer">
                <div class="campas_footer_content d-flex flex-row align-items-center justify-content-start">
                  <img src="images/clock.png" /><span>2019/4/23</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 course_col">
            <div class="course">
              <div class="course_image">
                <img src="images/pic4-4.png" alt="" />
              </div>
              <div class="course_body">
                <h3 class="campas_title">
                  <a href="course.html">フィールドワーク行ってきました</a>
                </h3>
              </div>
              <div class="campas_footer">
                <div class="campas_footer_content d-flex flex-row align-items-center justify-content-start">
                  <img src="images/clock.png" /><span>2019/4/23</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 course_col">
            <div class="course">
              <div class="course_image">
                <img src="images/pic4-5.jpg" alt="" />
              </div>
              <div class="course_body">
                <h3 class="campas_title"><a href="course.html">卒業式</a></h3>
              </div>
              <div class="campas_footer">
                <div class="campas_footer_content d-flex flex-row align-items-center justify-content-start">
                  <img src="images/clock.png" /><span>2019/4/23</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
                    <img src="images/logo_big.png" alt="" />
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
                    <ul>
                      <li><a href="category/news/">ニュース</a></li>
                      <li><a href="category/event/">イベント</a></li>
                      <li><a href="course/">コース</a></li>
                      <li><a href="category/campuslife/">侍の学生</a></li>
                      <li><a href="about-us/">侍Univaについて</a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-lg-5 footer_col clearfix">
                <a class="twitter-timeline" data-height="260"
                  href="https://twitter.com/samuraijuku?ref_src=twsrc%5Etfw">Tweets by samuraijuku</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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



  <script type="text/javascript">
    $(".carousel").carousel();
  </script>
</body>

</html>
