<?php
// Bài 3: Thực hành PHP - Viết hàm hiển thị dòng chữ và hook vào wp_footer
function my_training_message() {
    echo '<p style="text-align:center;">Xin chào, đây là bài tập thực hành WordPress.</p>';
}
add_action('wp_footer', 'my_training_message');

// Bài 4: Enqueue CSS - Nạp file style theme cha và custom.css của child theme
function my_child_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-custom-style', get_stylesheet_directory_uri() . '/custom.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'my_child_theme_enqueue_styles', 20);
