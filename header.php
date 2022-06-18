<!DOCTYPE html>

<head>
  <title>samurai university</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="samurai university" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
 
  <?php wp_head(); ?>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo_big.png" />
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