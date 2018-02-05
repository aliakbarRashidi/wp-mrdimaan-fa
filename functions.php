<?php

require get_template_directory() . '/inc/enqueue-scripts.php';
require get_template_directory() . '/inc/function-admin.php';
require get_template_directory() . '/inc/theme-support.php';
require get_template_directory() . '/inc/translate.php';
require get_template_directory() . '/inc/metabox.php';
require get_template_directory() . '/inc/walker.php';


//Removes adminbar in frontend
add_filter('show_admin_bar', '__return_false');

//Removes wordpress version in head
function dimaan_remove_version() { return ''; }
add_filter('the_generator', 'dimaan_remove_version');

// Archive correction
add_filter ('get_archives_link',
function ($link_html, $url, $text, $format, $before, $after) {
	$text = dimaan_to_farsi($text);
	$after = dimaan_to_farsi($after);

    if ('smh' == $format) {
        $link_html = '<a class="collection-item" href="' .$url. '">'
                   . "$text<span>$after</span>"
                   . '</a>';
    }
    return $link_html;
}, 10, 6);

// More caracters in excerpt
function wpdocs_excerpt_more( $more ) {
    return ' ...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// Activate HTML5 feathures
add_theme_support( 'html5', array('comment-list', 'comment-form', 'search-form','gallery', 'caption'));
add_theme_support('title-tag');

// Excerpt length
function wpdocs_custom_excerpt_length( $length )
{
    return 100;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}