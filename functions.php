<?php
    function add_custom_menu_li_class($classes, $item, $args) {
        if (isset($args->theme_location) && $args->theme_location === 'header-menu') {
            $classes[] = 'l-header__list';
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'add_custom_menu_li_class', 10, 3);
    
?>