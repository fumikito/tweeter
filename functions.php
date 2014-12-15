<?php

/**
 * 親テーマのCSSを読み込む
 */
add_action('wp_enqueue_scripts', function(){
	wp_enqueue_style('twenty-fifteen', get_template_directory_uri().'/style.css', array(), '1.0');
});
