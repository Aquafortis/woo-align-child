# Woo Align Child

Example of a child theme with Woo Align Buttons.

Official "Woo Align Buttons" Plugin can be downloaded here:

https://wordpress.org/plugins/woo-align-buttons/

If using this child theme for testing, make sure you **change** the Template and Text Domain **"parent_theme_name"** in the `style.css` to the name of your Parent Theme.

### Important

Woo Align Buttons may **not** work on many custom themes.

It is designed to work on **unmodified** WooCommerce files. If your theme has modified any WooCommerce product templates or added hooks that affect those templates or files, this plugin may **not** work.

It is assumed that if the theme developer has hacked, hooked, or modified any WooCommerce files, they should have already fixed the problem with aligning the buttons.

If it is not working on your theme chances are your theme has been modified or hacked, and this plugin will NOT work.

You can either choose another theme, or contact your theme developer and ask them to fix their theme.

### How to use Woo Align Buttons in your own theme:

**1**. Copy the `wooalign-public.js` file to your theme's js folder.

**2**. Enqueue the `wooalign-public.js` file in your `functions.php` file. (See example `functions.php` file)

```php
wp_enqueue_script( 'woo-align-buttons', get_stylesheet_directory_uri() . '/js/wooalign-public.js', array( 'jquery' ), '1.0', true );
```

**3**. Add these hooks to your `functions.php` file. (See example `functions.php` file)

```php
add_action( 'woocommerce_before_shop_loop_item', 'wooalign_product_link_open', 8 );
function wooalign_product_link_open() {
    echo '<div class="woo-height">';
}
```

```php
add_action( 'woocommerce_after_shop_loop_item', 'wooalign_product_link_close', 4 );
function wooalign_product_link_close() {
    echo '</div>';
}
```

**4**. Deactivate the Woo Align Buttons plugin. (If activated.)

That's it. All Done.
