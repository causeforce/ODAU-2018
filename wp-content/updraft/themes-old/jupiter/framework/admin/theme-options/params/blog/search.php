<?php
$blog_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_search_posts",
    "name" => __("Blog & News / Search", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
        array(
            "name" => __("Search Layout", "mk_framework") ,
            "desc" => __("Select default layout of search page.", "mk_framework") ,
            "id" => "search_page_layout",
            "default" => "right",
            "item_padding" => "20px 30px 0 0",
            "options" => array(
                "left" => __("Left Sidebar", "mk_framework") ,
                "right" => __("Right Sidebar", "mk_framework") ,
                "full" => __("Full Layout", "mk_framework")
            ) ,
            "type" => "dropdown"
        ) ,
        array(
            "name" => __("Search Page Title", "mk_framework") ,
            "desc" => __("Enter the page title for search page.", "mk_framework") ,
            "id" => "search_page_title",
            "default" => __("Search", "mk_framework") ,
            "type" => "text"
        ) ,
        array(
            "name" => __("Search Page subtitle", "mk_framework") ,
            "desc" => __("Display page subtitle in search page?", "mk_framework") ,
            "id" => "search_disable_subtitle",
            "default" => 'true',
            "type" => "toggle"
        ) ,
    ) ,
);
