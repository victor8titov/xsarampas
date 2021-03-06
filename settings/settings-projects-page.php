<?php 
add_action( 'wp_print_scripts', 'deregister_javascript_nextgen_gallery_plugin', 100 );

function deregister_javascript_nextgen_gallery_plugin() 
 { 
    if ( is_page_template('projects.php') ) 
      {
        wp_deregister_script('fancybox'); 
        wp_deregister_style('fancybox');
        wp_deregister_script('ngg_lightbox_context');
      } 
 } 

 