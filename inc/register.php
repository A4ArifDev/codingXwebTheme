<?php
    function codingX_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Sidebar', 'theme-domain' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets here to appear in the sidebar.', 'theme-domain' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'codingX_widgets_init' );
?>