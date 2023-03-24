<?php 

function myspace_theme() {
  wp_enqueue_script('font_awsome', '//kit.fontawesome.com/52989f7b96.js');
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery'], false, true);
  wp_enqueue_script('aosjs', '//unpkg.com/aos@2.3.1/dist/aos.js');
  wp_enqueue_script('script1', '//code.jquery.com/jquery-1.11.0.min.js');
  wp_enqueue_script('script2', '//code.jquery.com/jquery-migrate-1.2.1.min.js');
  wp_enqueue_script('script3', get_theme_file_uri('/js/form.js'), array('jquery'), '1.0', true);
  wp_enqueue_script('script4', get_theme_file_uri('/js/about.js'), array('jquery'), '1.0', true);


    wp_enqueue_style('fonts1', '//fonts.googleapis.com');
    wp_enqueue_style('boostrap', '//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('fonts2', '//fonts.gstatic.com');
    wp_enqueue_style('aos', '//unpkg.com/aos@2.3.1/dist/aos.css');
    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400;700&family=Poppins:wght@400;700&display=swap');
    wp_enqueue_style('main_style', get_theme_file_uri('/css/main.css'));
}

add_action('wp_enqueue_scripts', 'myspace_theme');


function myspace_features() {
    add_theme_support('title-tag');
  }
  
  add_action('after_setup_theme', 'myspace_features');


?>
