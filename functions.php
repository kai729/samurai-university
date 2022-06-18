<?php

  function register_css()
  {
    if(!is_admin()){
        wp_enqueue_style('bootsttap', get_template_directory_uri(). '/styles/bootstrap4/bootstrap.min.css');
        wp_enqueue_style('font-awesome', get_template_directory_uri() .'/plugins/font-awesome-4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('AOS',  get_template_directory_uri() .  '/styles/aos.css');

        //追加
        wp_enqueue_style('FontAwesome', get_template_directory_uri() .'/styles/all.css');
        wp_enqueue_style('main_style', get_template_directory_uri(). '/styles/main_styles.css');
    }
   } 


  // 登録済みのjQueryを解除して、登録し直す
   function remove_default_jquery()
   {
    // 管理画面でないなら
    if (!is_admin()) {
        //この行がwpのデフォルトのjQを解除する関数です
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), 3.2, true);
        wp_enqueue_script('popper_js', get_template_directory_uri() . '/styles/bootstrap4/popper.js', array(), 4.0, true);
        wp_enqueue_script('bootstrap4_js', get_template_directory_uri() . '/styles/bootstrap4/bootstrap.min.js', array(), 4.0, true);

        wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), 4.0, true);
        wp_enqueue_script('counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), 1.0, true);

        wp_enqueue_script('AOS', get_template_directory_uri() . '/js/aos.js', array(), 1.0, true);
    }
 }

   add_action('wp_enqueue_scripts', 'register_css');

   add_action('wp_enqueue_scripts', 'remove_default_jquery');
   //アイキャッチ画像を利用
   add_theme_support('post-thumbnails');
   //メニューを管理画面に追加
   add_theme_support('menus');

   function register_my_menus(){
    register_nav_menu('footer-menu', 'Footer_menu');
   }
    //上記メニューを登録　register_my_menusは自由に作成した関数
   add_action('after_setup_theme', 'register_my_menus');

   function remove_menus()
{
  remove_menu_page('themes.php');             //外観
  remove_menu_page('plugins.php');            //プラグイン
  remove_menu_page('options-general.php');    //設定
  remove_menu_page('cptui_main_menu');        //カスタム投稿タイプ CPT UI

}
add_action('admin_menu', 'remove_menus');

add_filter('acf/settings/show_admin', '__return_false');

?>
