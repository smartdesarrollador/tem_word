<?php
/* registro de sidebars */

if (function_exists('register_sidebar')) {
       

       
    register_sidebar(array(
          'name' => 'left_sidebar',
           'before_widget' => "<div class='panel panel-primary'>",
            'after_widget' => "</div></div>",
          'before_title' => "<div class='panel-heading titulo_widget'><strong><i class='fa fa-chevron-right' ></i>
",
          'after_title' => "</strong></div><div class='panel-body'>",
     ));

    register_sidebar(array(
          'name' => 'right_sidebar',
           'before_widget' => "<div class='panel panel-primary'>",
            'after_widget' => "</div></div>",
          'before_title' => "<div class='panel-heading titulo_widget'><strong><i class='fa fa-chevron-right' ></i>
",
          'after_title' => "</strong></div><div class='panel-body'>",
     ));


/* <div class="container">
  <h2>Panel Heading</h2>
  <div class="panel panel-default">
    <div class="panel-heading">Panel Heading</div>
    <div class="panel-body">Panel Content</div>
  </div>
</div> */

    register_sidebar(array(
          'name' => 'footer1',
           'before_widget' => "<div >",
            'after_widget' => '</div>',
          'before_title' => "<h3 class='titulo_widget'><strong>",
          'after_title' => '</strong></h3>',
     ));

     register_sidebar(array(
          'name' => 'footer2',
           'before_widget' => "<div >",
            'after_widget' => '</div>',
          'before_title' => "<h3 class='titulo_widget'><strong>",
          'after_title' => '</strong></h3>',
     ));

      register_sidebar(array(
          'name' => 'footer3',
           'before_widget' => "<div >",
            'after_widget' => '</div>',
          'before_title' => "<h3 class='titulo_widget'><strong>",
          'after_title' => '</strong></h3>',
     ));

       register_sidebar(array(
          'name' => 'footer4',
           'before_widget' => "<div >",
            'after_widget' => '</div>',
          'before_title' => "<h3 class='titulo_widget'><strong>",
          'after_title' => '</strong></h3>',
     ));


}
/* /registro de sidebars */



if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );

    set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 374, 260, true );
    add_image_size( 'category-full', 783, 290, true );
}



   add_theme_support( 'nav-menus' );

if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
          'main' => 'principal'
        )
    );
}

/* fin Registro del menú de WordPress     */


register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );



     function misRecursos() {
     	 wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', '3.3.6', true);
       wp_enqueue_style( 'bootstrap-theme-cosmo', get_template_directory_uri() . '/bootstrap/css/bootstrap-theme-cosmo.css', '3.3.6', true);
       wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css', '4.6.3', true);
       
        wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true);

        wp_enqueue_style("style",get_stylesheet_uri());
       
    }

    add_action( 'wp_enqueue_scripts', 'misRecursos' );


        ?>

        