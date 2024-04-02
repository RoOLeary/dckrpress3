<?php
/**
* Plugin Name: Nuacht
* Description: Add custom blocks using Advanced Custom Fields (ACF)
* Version: 1.0.0
*/

add_action( 'init', function() {
    $args = array(
        'public' => true,
        'label' => 'News',
        'show_in_rest' => true,
        'has_archive' => true,
        'hierarchical' => true,
        'rewrite'     => array( 'slug' => 'news' ), // my custom slug
        'publicly_queryable'    => true,
		'template' => array(
            array( 'core/paragraph', array(
                'placeholder' => 'Breaking News',
            ) ),
            array( 'core/image', array(
                'align' => 'right',
                ) ),
            ),
    );
    register_post_type( 'news', $args );
} );