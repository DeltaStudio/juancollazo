<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
?>

<?php
add_action('wp_footer', 'add_googleanalytics');
function add_googleanalytics() {
?>
// Paste your Google Analytics code from Step 4 here
<?php 
} 
?>

