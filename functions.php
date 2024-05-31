<?php

// Added files
function agape_files() {
    wp_enqueue_style('agape_main_styles', get_theme_file_uri('/styles/index.css'));
    wp_enqueue_style('agape_main_extra_styles', get_theme_file_uri('/styles/vendor.css'));
}
add_action('wp_enqueue_scripts', 'agape_files');

// Templates
function agape_custom_single($single) {
    if (is_single()) {
        $agape_custom_single = locate_template('templates/single.php');
        if ($agape_custom_single) {
            return $agape_custom_single;
        }
    }
    return $single;
}
add_filter('single_template', 'agape_custom_single');

function agape_custom_page($page) {
    if (is_page()) {
        $agape_custom_page = locate_template('templates/page.php');
        if ($agape_custom_page) {
            return $agape_custom_page;
        }
    }
    return $page;
}
add_filter('page_template', 'agape_custom_page');

// Parts
function custom_get_header() {
    locate_template('parts/header.php', true);
}

function custom_get_footer() {
    locate_template('parts/footer.php', true);
}