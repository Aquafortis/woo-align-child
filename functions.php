<?php
// Copy and paste into your own theme if required
function wooalign_enqueue_scripts() {
    // Enqueue a style sheet
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Enqueue the wooalign-public.js for Woo Align Buttons
    wp_enqueue_script( 'woo-align-buttons', get_stylesheet_directory_uri() . '/js/wooalign-public.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'wooalign_enqueue_scripts' );

// Add wrapper for Woo Align Buttons
add_action( 'woocommerce_before_shop_loop_item', 'wooalign_product_link_open', 8 );
function wooalign_product_link_open() {
    echo '<div class="woo-height">';
}

add_action( 'woocommerce_after_shop_loop_item', 'wooalign_product_link_close', 4 );
function wooalign_product_link_close() {
    echo '</div>';
}
