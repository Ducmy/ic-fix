<?php

define("CACHE_CLEAR", "?".rand(1, 1000));

function loadUniqueFile($uniqueLoad)
{
	$files = "";
	if (!is_array($uniqueLoad) || empty($uniqueLoad)) {
		return $files;
	}
 
	foreach ($uniqueLoad as $file) {
		if ($file["type"] == "css") {
			$files .= "<link rel='stylesheet' href='" . $file["src"] . CACHE_CLEAR . "' type='text/css'>\n";
		} else if ($file["type"] == "js") {
			$files .= "<script type='text/javascript' src='" . $file["src"] . CACHE_CLEAR . "'></script>\n";
		}
	}
 
	return $files;
}


function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Cột thứ nhất', 'your-theme-domain' ),
            'id' => 'custom-side-bar-cot-1',
            'description' => __( 'Thêm thành viên vào cột 1', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );

    register_sidebar(
        array (
            'name' => __( 'Cột thứ hai', 'your-theme-domain' ),
            'id' => 'custom-side-bar-cot-2',
            'description' => __( 'Thêm thành viên vào cột 2', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );

    register_sidebar(
        array (
            'name' => __( 'Cột thứ ba', 'your-theme-domain' ),
            'id' => 'custom-side-bar-cot-3',
            'description' => __( 'Thêm thành viên vào cột 3', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );