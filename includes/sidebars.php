<?php

add_action( 'widgets_init', 'make_sidebars' );
function make_sidebars() {
    register_sidebar( array(
        'name' => __( 'Custom Sidebar', 'sqe-custom' ),
        'id' => 'custom-sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'sqe-custom' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
    ) );
}