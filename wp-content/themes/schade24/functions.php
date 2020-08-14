<?php

function load_stylesheets()
{
wp_register_style ("custom",get_template_directory_uri()."/css/custom.css?<?=date('y-m-d-H:i:s')?>",array(),1,"all");
wp_enqueue_style ("custom");



wp_register_style ("slick",get_template_directory_uri()."/css/slick.css",array(),1,"all");
wp_enqueue_style ("slick");

wp_register_style ("owl",get_template_directory_uri()."/css/owl.theme.css",array(),1,"all");
wp_enqueue_style ("owl");


wp_register_style ("mdb",get_template_directory_uri()."/css/mdb.min.css",array(),1,"all");
wp_enqueue_style ("mdb");

wp_register_style ("popup",get_template_directory_uri()."/css/magnific-popup.css",array(),1,"all");
wp_enqueue_style ("popup");


wp_register_style ("mycustom",get_template_directory_uri()."/custom.css",array(),1,"all");
wp_enqueue_style ("mycustom");


wp_register_style ("blog",get_template_directory_uri()."/css/blog.css",array(),1,"all");
wp_enqueue_style ("blog");


wp_register_style ("Fontawsome",get_template_directory_uri()."/css/font-awesome.min.css",array(),1,"all");
wp_enqueue_style ("Fontawsome");


wp_register_style ("bootstrap",get_template_directory_uri()."/css/bootstrap.css",array(),1,"all");
wp_enqueue_style ("bootstrap");


wp_register_style ("animate",get_template_directory_uri()."/css/animate.css",array(),1,"all");
wp_enqueue_style ("animate");

wp_register_style ("default",get_template_directory_uri()."/css/default.css",array(),1,"all");
wp_enqueue_style ("default");

wp_register_style ("schadeform",get_template_directory_uri()."/css/schadeform.css",array(),1,"all");
wp_enqueue_style ("schadeform");

wp_register_style ("colorbox",get_template_directory_uri()."/css/colorbox.css",array(),1,"all");
wp_enqueue_style ("colorbox");


}

add_action("wp_enqueue_scripts","load_stylesheets");









//Load Scripts
function addJs() 
{

    wp_deregister_script("jquery");

    wp_register_script("jquery",get_template_directory_uri() ."/js/jquery-1.10.1.min.js",1,1,1);
    wp_enqueue_script ("jquery");

    wp_register_script("slick",get_template_directory_uri() ."/js/slick.min.js",1,1,1);
    wp_enqueue_script ("slick");

    wp_register_script("popper",get_template_directory_uri() ."/js/popper.min.js",1,1,1);
    wp_enqueue_script ("popper");

    wp_register_script("mdb",get_template_directory_uri() ."/js/mdb.min.js",1,1,1);
    wp_enqueue_script ("mdb");

    wp_register_script("tilt",get_template_directory_uri() ."/js/jquery-tilt.js",1,1,1);
    wp_enqueue_script ("tilt");

    wp_register_script("popup",get_template_directory_uri() ."/js/jquery.magnific-popup.min.js",1,1,1);
    wp_enqueue_script ("popup");

    wp_register_script("trustpilot",get_template_directory_uri() ."/js/trustpilot.js",1,1,1);
    wp_enqueue_script("trustpilot");


    wp_register_script("form",get_template_directory_uri() ."/js/jquery.form.js",1,1,1);
    wp_enqueue_script ("form");
    
    wp_register_script("circleprogress",get_template_directory_uri() ."/js/circle-progress.min.js",1,1,1);
    wp_enqueue_script("circleprogress");
    
    wp_register_script("tilt",get_template_directory_uri() ."/js/jquery-tilt.js",1,1,1);
    wp_enqueue_script("tilt");
    
    wp_register_script("datetimepicker",get_template_directory_uri() ."/js/bootstrap-datetimepicker.min.js",1,1,1);
    wp_enqueue_script("datetimepicker");
    
    wp_register_script("colorbox",get_template_directory_uri() ."/js/jquery.colorbox.js",1,1,1);
    wp_enqueue_script("colorbox");
   
}

add_action("wp_enqueue_scripts","addJs");


//Add theme supports
add_theme_support("menus");
add_theme_support("post-thumbnails");
add_theme_support( 'widgets');



//REgister Menus
register_nav_menus(
        array(
                "top-left-menu" => __("Top Left Menu","theme"),
               
                 "mobile-logged-out-menu" => __("Mobile Logged Out Menu","theme"),
                  "mobile-partner-menu" => __("Mobile Partner Menu","theme"),
                   "mobile-costumer-menu" => __("Mobile Costumer Menu","theme"),
                 "top-right-menu-partner" =>__("Top Right Menu Partner","theme"),
                 "top-right-menu-customer" =>__("Top Right Menu Customer","theme"),
                 "top-right-menu-logged-out" =>__("Top Right Menu Logged-Out","theme"),
                 "top-right-menu-commun" =>__("Top Right Menu Commun","theme"),
                "left-footer-menu" => __("Left Footer Menu","theme"),
                "middle-footer-menu" =>__("Middle Footer Menu","theme"),
                "right-footer-menu" =>__("Right Footer Menu","theme"),
               
            )
    );
    
    


    
    //Post Excerpt
    function custom_excerpt_length($length){
        return 20;
    }
    
    
    
    add_filter("excerpt_length","custom_excerpt_length");

        
    
    function themify_custom_excerpt_more($more) {
   
   return '...';
}
add_filter('excerpt_more', 'themify_custom_excerpt_more');
    
    
    
//Recent Posts 


function latest_post() {

    $args = array(
        'posts_per_page' => 3, /* how many post you need to display */
        'offset' => 0,
       
        'orderby' => 'rand',
        'post_type' => 'post', /* your post type name */
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
           <div class="col-sm-6 col-md-4">
                                <div class="blog-box text-center" style="min-height:220px">
                                    <div class="blog-box-image">
                                        <a href="<?the_permalink();?>">
                                            <img src="<?echo get_the_post_thumbnail_url();?>" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                    <div class="blog-box-content">
                                        <h4><a href="<?the_permalink();?>"><?the_title();?></a></h4>
                                        
                                    </div>
                                </div>
                            </div>
           
            <?php
        endwhile;
    endif;
}

add_shortcode('lastest-post', 'latest_post');

/**
 * Register all footer widgets.
 *
 */
function footers_widget() {
    
    register_sidebar( array(
		'name'          => 'Pre footer',
		'id'            => 'pre_footer',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Footer 1',
		'id'            => 'footer_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Footer 2',
		'id'            => 'footer_2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Footer 3',
		'id'            => 'footer_3',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	
		register_sidebar( array(
		'name'          => 'Footer 4',
		'id'            => 'footer_4',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	
		register_sidebar( array(
		'name'          => 'Footer copyright',
		'id'            => 'footer_copyright'
	) );

}
add_action( 'widgets_init', 'footers_widget' );

/** 
* Add class to left footer menu
*/
add_action( 'wp_footer', 'add_class_left_footer_menu' );

function add_class_left_footer_menu() {
    ?>
    <script type="text/javascript">
    
        document.getElementById("menu-left-footer-menu").className =
        document.getElementById("menu-left-footer-menu").className.replace
      ( /(?:^|\s)menu(?!\S)/g , 'footerlinks' )
    </script>
        <?php
}

/** 
* Add class to middle footer menu
*/
add_action( 'wp_footer', 'add_class_middle_footer_menu' );

function add_class_middle_footer_menu() {
    ?>
    <script type="text/javascript">
    
        document.getElementById("menu-middle-footer-menu").className =
        document.getElementById("menu-middle-footer-menu").className.replace
      ( /(?:^|\s)menu(?!\S)/g , 'footerlinks' )
    </script>
        <?php
}
/** 
* Add class to right footer menu
*/
add_action( 'wp_footer', 'add_class_right_footer_menu' );

function add_class_right_footer_menu() {
    ?>
    <script type="text/javascript">
    
        document.getElementById("menu-right-footer-menu").className =
        document.getElementById("menu-right-footer-menu").className.replace
      ( /(?:^|\s)menu(?!\S)/g , 'footerlinks' )
    </script>
        <?php
}





