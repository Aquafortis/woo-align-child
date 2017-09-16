This is an example of a child theme with Woo Align Buttons included.

** It is not recommended to use Woo Align Buttons in a child theme. **

You can use this example child theme for testing purposes.

Use the Official "Woo Align Buttons" Plugin if using a child theme.

Download it here:

https://wordpress.org/plugins/woo-align-buttons/

If using this child theme for testing, make sure you change the Template and Text Domain "parent_theme_name" to the name of your Parent Theme.

====================

How to use Woo Align Buttons in your own theme:

1. Copy the wooalign-public.js file to your theme's js folder.

2. Enqueue the wooalign-public.js file in your functions.php file. (See example functions.php file)

wp_enqueue_script( 'woo-align-buttons', get_stylesheet_directory_uri() . '/js/wooalign-public.js', array( 'jquery' ), '3.1.1', true );

3. Add these hooks to your functions.php file. (See example functions.php file)

add_action( 'woocommerce_before_shop_loop_item', 'wooalign_product_link_open', 8 );
function wooalign_product_link_open() {
  echo '<div id="woo-height">';
}

add_action( 'woocommerce_after_shop_loop_item', 'wooalign_product_link_close', 4 );
function wooalign_product_link_close() {
  echo '</div>';
}

4. Deactivate the Woo Align Buttons plugin. (if activated)

That's it. All Done.
