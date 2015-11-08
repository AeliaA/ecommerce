<?php

define('WOOCOMMERCE_USE_CSS', false);

//Theme Support for WooCommerce//

add_theme_support( 'woocommerce' ); //avoids error messages for future users of theme//

add_filter( 'show_admin_bar', '__return_false' );





$aelsidebar_sidebar = array(
    'name'          => 'Aelsidebar',
    'id'            => 'aelsidebar',
    'description'   => 'Widgets placed here will go on the right hand side bar on frontpage',
    'class'         => '',
    'before_widget' => '<div class="mywidget">',
    'after_widget'  => "</div>\n",
    'before_title'  => '<h3 class="mywidget">',
    'after_title'   => "</h3 >\n",
);


?>