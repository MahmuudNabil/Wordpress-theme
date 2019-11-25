<?php


/* 
    **fuction to Add custome Style
    ** wp_enqueue_style();---->

function mahmoud_add_styles(){
    
 wp_enqueue_style('main', get_template_directory_uri(). '/css/main.css',false,'1.1','all' ) ;
//    wp_enqueue_style('style',get_stylesheet_uri('/public_html/wp-content/themes/Mahmoud/style.css' , false,'','all' ));
}
*/
/* 
    ** function to add my custome Script
    ** wp_enqueue_script()


function mahmoud_add_scripts(){
   // wp_enqueue_script('jquery-js' , get_template_directory_uri() . '/public_html/wp-content/themes/Mahmoud/jquery-3.3.1.min.js' , array() , false ,true);
    
  //  wp_enqueue_script('jquery');
    
    wp_deregister_script('jquery'); //Remove Registration for old jquery
    wp_register_script('jquery' , include_url('/js/jquery/jquery.js') , false,'',true);//Register A New JQuery in footer
    wp_enqueue_script('jquery'); //Enqueue the New Register
    wp_enqueue_script('main-js' , get_template_directory_uri() . '/public_html/wp-content/themes/Mahmoud/js/main.js' , array('jquery') , '' , true);
}
*/
//include NavWalker class for Bootstrap Navigation Menu
require_once('wp-bootstrap-navwalker.php');

// Add featured image support
add_theme_support('post-thumbnails');

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), false, 'all');
  wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.min.css');
  wp_enqueue_style('fontawesome-css',get_template_directory_uri().'/css/all.min.css');
  //wp_enqueue_style('fontawesom-css',get_template_directory_uri().'/css/fontawesome.min.css');
    
 
  wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/js/bootstrap.min.js');
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), false, true);
   wp_enqueue_script('jquery');
    wp_enqueue_script('html5shiv',get_template_directory_uri().'/js/html5shiv.js');
    wp_script_add_data('html5shiv' , 'conditional', 'lt IE 9 ');
    wp_enqueue_script('respond',get_template_directory_uri().'/js/respond.js');
     wp_script_add_data('respond' , 'conditional', 'lt IE 9 ');
    
   // wp_enqueue_script('jquery' ,get_template_directory_uri() . '/js/jquery-3.3.1.min.js' ,array() ,false,true); //Enqueue the New Register
}

/*
    **Add custome menu support
    **Add by Mahmoud
*/
function mahmoud_register_custome_menu()
{
  // register_nav_menu('mah_menu' , __('Navigation Bar'));
       register_nav_menus(array(
        'mah-menu'      => 'Navigation Bar' ,
        'mahmoud-menu'  => 'Footer Menu'
     ));
}
function mahmoud_menu()
{
    wp_nav_menu(array(
        'theme_location'  =>'mah-menu',
        'menu_class'      => 'nav navbar-nav navbar-right',
        'item_spacing'    => 'discard' ,
        'container'       => false ,
        'depth'           => 2 ,
        'walker'          => new wp_bootstrap_navwalker()
    ));
}
function gt_search_filter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}

add_filter('pre_get_posts','gt_search_filter');

//function to determine number of words show in post before read more
/*
function mahmoud_extend_excerpt_length($length)
{
    return 55;
}
add_filter('excerpt_length' , 'mahmoud_extend_excerpt_length');
// function to determine apperance of readmore
function mahmoud_extend_excerpt_more($more)
{
    return ' read more ';
}
add_filter('excerpt_more' , 'mahmoud_extend_excerpt_more');
*/

/* 
    ** add action
 */
//add css file and script file 
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
//add custome menu
add_action('init' , 'mahmoud_register_custome_menu');

//   Register Sidebar 
function mahmoud_main_sidebar(){
    //register main sidebar
    register_sidebar(array(
        'name'          =>  'Main Sidebar',
        'id'            =>  'main-sidebar',
        'description'   =>  'this is main sidebar',
        'class'         =>  'main-sidebar',
        'before_widget' =>   '<div class="widget-content">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h3 class="widget-title">',
        'after_title'   =>  '</h3>'
    ));
}
// Add Action of sidebar
add_action('widgets_init' , 'mahmoud_main_sidebar');
// front-page



