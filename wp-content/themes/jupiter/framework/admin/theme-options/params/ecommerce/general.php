<?php
$ecommerce_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_woo_general",
    "name" => __("Woocommerce / General Settings", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
        array(
            "name" => __("Shop Catalog Mode", "mk_framework") ,
            "desc" => __("Enable Catalog Mode for the shop? It switches the shop to an online catalogue.", "mk_framework") ,
            "id" => "woocommerce_catalog",
            "default" => 'false',
            "type" => "toggle"
        ) ,
        array(
            "name" => __("Shop Loop columns?", "mk_framework") ,
            "desc" => __("Select number of products column for shop page.", "mk_framework") ,
            "id" => "shop_archive_columns",
            "default" => "default",
            "options" => array(
                "default" => __("Default (4 Columns full layout, 3 columns with sidebar)", "mk_framework") ,
                "1" => __("1", "mk_framework") ,
                "2" => __("2", "mk_framework") ,
                "3" => __("3", "mk_framework") ,
                "4" => __("4", "mk_framework") ,
            ) ,
            "type" => "dropdown"
        ) ,
        array(
            "name" => __("Product Loop Image Height", "mk_framework") ,
            "desc" => __("Adjust product posts image height.", "mk_framework") ,
            "id" => "woo_loop_img_height",
            "default" => "300",
            "min" => "100",
            "max" => "1000",
            "step" => "1",
            "unit" => 'px',
            "type" => "range"
        ) ,
        array(
            "name" => __("Shop Loop Image Size", "mk_framework") ,
            "desc" => wp_kses( __("Select product posts image size. Define custom image sizes in <strong>Jupiter > Image Sizes</strong>.", "mk_framework"), array( 'strong' => array() ) ) ,
            "id" => "woo_loop_image_size",
            "default" => "crop",
            "options" => mk_get_image_sizes(true),
            "type" => "dropdown"
        ) ,

        array(
            "name" => __("Product Category Loop Image Size", "mk_framework") ,
            "desc" => wp_kses( __("Select product posts image size for category pages. Define custom image sizes in <strong>Jupiter > Image Size</strong>.", "mk_framework"), array( 'strong' => array() ) ) ,
            "id" => "woo_category_image_size",
            "default" => "crop",
            "options" => mk_get_image_sizes(true),
            "type" => "dropdown"
        ) ,

        array(
            "name" => __("Product Category Archive Loop Title", "mk_framework") ,
            "desc" => __("Enter product category page title.", "mk_framework") ,
            "id" => "woocommerce_category_page_title",
            "default" => 'Shop',
            "type" => "text"
        ) ,
        array(
            "name" => __("Show Shopping Cart", "mk_framework") ,
            "desc" => __("Display header shopping cart icon?", "mk_framework") ,
            "id" => "shopping_cart",
            "default" => 'true',
            "type" => "toggle"
        ) ,

        array(
            "name" => __("Use Product Category/Tag Name as Page Title", "mk_framework") ,
            "desc" => __("Display product category/tag name as page title on product category/tag page?", "mk_framework") ,
            "id" => "woocommerce_use_category_title",
            "default" => 'false',
            "type" => "toggle"
        ) ,

        array(
            "name" => __("Use Product Category/Tag Name as Product Filter Title", "mk_framework") ,
            "desc" => __("Display product category/tag as filter label for products on product category/tag page?", "mk_framework") ,
            "id" => "woocommerce_use_category_filter_title",
            "default" => 'false',
            "type" => "toggle"
        ) ,

        array(
            "name" => __("Use Product Name as Page Title", "mk_framework") ,
            "desc" => __("Display product name as page title in single product page?", "mk_framework") ,
            "id" => "woocommerce_use_product_title",
            "default" => 'false',
            "type" => "toggle"
        ) ,

        array(
            "name" => __("Show Shopping Cart For Mobile devices", "mk_framework") ,
            "desc" => __("Enable floating shopping cart link for small devices? The visibility is determined based on Main Navigation Threshold Width value.", "mk_framework") ,
            "id" => "add_cart_responsive",
            "default" => 'true',
            "type" => "toggle"
        ) ,
        
        array(
            "name" => __("Excerpt For Products Loop", "mk_framework") ,
            "desc" => __("Enable excerpt in product posts?", "mk_framework") ,
            "id" => "woocommerce_loop_show_desc",
            "default" => 'false',
            "type" => "toggle"
        ) ,
        array(
            "name" => __("Enable Products Loop Love Button", "mk_framework") ,
            "desc" => __("Enable love button in product posts?", "mk_framework") ,
            "id" => "woocommerce_loop_enable_love_button",
            "default" => 'true',
            "type" => "toggle"
        ) ,
    ) ,
);
