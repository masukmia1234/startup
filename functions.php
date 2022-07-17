<?php 


function startup_setup() {

   load_theme_textdomain('startup', get_template_directory() . '/languages');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails', array('post','sliders','team','testimonials','services','portfolio','blog','clients','contact'));

   register_nav_menus(array(
       'primary-menu' => __('Primary Menu', 'startup')      
      //  'footer1-menu' => __('Footer 1 Menu', 'startup'),
      //  'footer2-menu' => __('Footer 2 Menu', 'startup')
   ));

}
add_action('after_setup_theme', 'startup_setup');


function startup_agency() { 
   
    // Load All CSS
    wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'startup-style', get_stylesheet_uri() );

    // Load All JS
    wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/counterup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );


}
add_action( 'wp_enqueue_scripts', 'startup_agency' );


function startup_cpt(){
    $labels = array(
        'name'                  => _x( 'Sliders', 'Post type general name', 'startup' ),
        'singular_name'         => _x( 'Slider', 'Post type singular name', 'startup' ),
        'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'startup' ),
        'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'startup' ),
        'add_new'               => __( 'Add New', 'slider' ),
        'add_new_item'          => __( 'Add New sliders', 'startup' ),
        'new_item'              => __( 'New slider', 'startup' ),
        'edit_item'             => __( 'Edit slider', 'startup' ),
        'view_item'             => __( 'View slider', 'startup' ),
        'all_items'             => __( 'All Sliders', 'startup' ),
        'search_items'          => __( 'Search sliders', 'startup' ),
        'parent_item_colon'     => __( 'Parent sliders:', 'startup' ),
        'not_found'             => __( 'No sliders found.', 'startup' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'startup' ),
        'featured_image'        => _x( 'Sliders Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'startup' ),
        'set_featured_image'    => _x( 'Slider image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'startup' ),
        'remove_featured_image' => _x( 'Sliders image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'startup' ),

        
    );    
    $args=array(
        'public'=>true,
        'labels'=>$labels,
        'menu_icon'=>'dashicons-book',
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'sliders' ),
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title','thumbnail','custom-fields', 'thumbnail' )

    );

    register_post_type('sliders', $args);
    //start services area
    $labels = array(
        'name'                  => _x( 'Services', 'Post type general name', 'startup' ),
        'singular_name'         => _x( 'Service', 'Post type singular name', 'startup' ),
        'menu_name'             => _x( 'Services', 'Admin Menu text', 'startup' ),
        'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'startup' ),
        'add_new'               => __( 'Add New', 'Service' ),
        'add_new_item'          => __( 'Add New Services', 'startup' ),
        'new_item'              => __( 'New Service', 'startup' ),
        'edit_item'             => __( 'Edit Service', 'startup' ),
        'view_item'             => __( 'View Service', 'startup' ),
        'all_items'             => __( 'All Services', 'startup' ),
        'search_items'          => __( 'Search Services', 'startup' ),
        'parent_item_colon'     => __( 'Parent Services:', 'startup' ),
        'not_found'             => __( 'No Services found.', 'startup' ),
        'not_found_in_trash'    => __( 'No Services found in Trash.', 'startup' )

        
    );    
    $args=array(
        'public'=>true,
        'labels'=>$labels,
        'menu_icon'=>'dashicons-book',
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'services' ),
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title','editor','custom-fields', 'editor' )

    );

    register_post_type('services', $args);
     //price custom post
     $labels = array(
        'name'                  => _x( 'Prices', 'Post type general name', 'startup' ),
        'singular_name'         => _x( 'Price', 'Post type singular name', 'startup' ),
        'menu_name'             => _x( 'Price', 'Admin Menu text', 'startup' ),
        'name_admin_bar'        => _x( 'Price', 'Add New on Toolbar', 'startup' ),
        'add_new'               => __( 'Add New', 'Price' ),
        'add_new_item'          => __( 'Add New Prices', 'startup' ),
        'new_item'              => __( 'New Prices', 'startup' ),
        'edit_item'             => __( 'Edit Prices', 'startup' ),
        'view_item'             => __( 'View Price', 'startup' ),
        'all_items'             => __( 'All Prices', 'startup' ),
        'search_items'          => __( 'Search Price', 'startup' ),
        'parent_item_colon'     => __( 'Parent Prices', 'startup' ),
        'not_found'             => __( 'No Services found.', 'startup' ),
        'not_found_in_trash'    => __( 'No Services found in Trash.', 'startup' )

        
    );    
    $args=array(
        'public'=>true,
        'labels'=>$labels,
        'menu_icon'=>'dashicons-book',
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'price' ),
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title','custom-fields' )

    );

    register_post_type('price', $args);
    //start testimonial area
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'startup' ),
        'singular_name'         => _x( 'testimonial', 'Post type singular name', 'startup' ),
        'menu_name'             => _x( 'Testimonial', 'Admin Menu text', 'startup' ),
        'name_admin_bar'        => _x( 'testimonial', 'Add New on Toolbar', 'startup' ),
        'add_new'               => __( 'Add New', 'testimonial' ),
        'add_new_item'          => __( 'Add New Testimonials', 'startup' ),
        'new_item'              => __( 'New Testimonials', 'startup' ),
        'edit_item'             => __( 'Edit Testimonials', 'startup' ),
        'view_item'             => __( 'View testimonial', 'startup' ),
        'all_items'             => __( 'All Testimonials', 'startup' ),
        'search_items'          => __( 'Search testimonial', 'startup' ),
        'parent_item_colon'     => __( 'Parent testimonial', 'startup' ),
        'not_found'             => __( 'No testimonial found.', 'startup' ),
        'not_found_in_trash'    => __( 'No testimonial found in Trash.', 'startup' )

        
    );    
    $args=array(
        'public'=>true,
        'labels'=>$labels,
        'menu_icon'=>'dashicons-book',
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Testimonial' ),
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title','custom-fields' )

    );

    register_post_type('testimonial', $args);

    //start team area
    $labels = array(
        'name'                  => _x( 'Teams', 'Post type general name', 'startup' ),
        'singular_name'         => _x( 'Team', 'Post type singular name', 'startup' ),
        'menu_name'             => _x( 'Teams', 'Admin Menu text', 'startup' ),
        'name_admin_bar'        => _x( 'Team', 'Add New on Toolbar', 'startup' ),
        'add_new'               => __( 'Add New', 'Team' ),
        'add_new_item'          => __( 'Add New Teams', 'startup' ),
        'new_item'              => __( 'New Teams', 'startup' ),
        'edit_item'             => __( 'Edit Teams', 'startup' ),
        'view_item'             => __( 'View Team', 'startup' ),
        'all_items'             => __( 'All Teams', 'startup' ),
        'search_items'          => __( 'Search Team', 'startup' ),
        'parent_item_colon'     => __( 'Parent Team', 'startup' ),
        'not_found'             => __( 'No Teams found.', 'startup' ),
        'not_found_in_trash'    => __( 'No Teams found in Trash.', 'startup' )

        
    );    
    $args=array(
        'public'=>true,
        'labels'=>$labels,
        'menu_icon'=>'dashicons-book',
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'team' ),
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title','custom-fields','thumbnail' )

    );

    register_post_type('team', $args);
}
add_action('init', 'startup_cpt');



 
function startup_acf_json( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    
    
    // return
    return $path;
    
}

add_filter('acf/settings/save_json', 'startup_acf_json');

//pagination for custom post type
function statup_numeric_posts_nav() {
  
    if( is_singular() )
        return;
  
    global $wp_query;
  
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
  
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
  
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
  
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
  
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
  
    echo '<div class="navigation"><ul>' . "\n";
  
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
  
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
  
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
  
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
  
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
  
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
  
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
  
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
  
    echo '</ul></div>' . "\n";
}


//sidebar register
function wp_sidebar_register(){
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'startup' ),
        'id'            => 'main-sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'startup' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wp_sidebar_register');


