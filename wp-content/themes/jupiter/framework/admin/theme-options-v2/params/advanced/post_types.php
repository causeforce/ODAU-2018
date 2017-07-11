<?php
$advanced_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_post_types_section",
    "name" => __("Advanced / Post Types", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
		array(
            "name" => __("Portfolio Post Type", "mk_framework") ,
            "desc" => __("If you will not use Portfolio post type feature simply disable this option.", "mk_framework") ,
            "id" => "portfolio-post-type",
            "default" => "true",
            "type" => "toggle"
        ) ,
		array(
            "name" => __("News Post Type", "mk_framework") ,
            "desc" => __("If you will not use News post type feature simply disable this option.", "mk_framework") ,
            "id" => "news-post-type",
            "default" => "true",
            "type" => "toggle"
        ) ,
		array(
            "name" => __("FAQ Post Type", "mk_framework") ,
            "desc" => __("If you will not use faq post type feature simply disable this option.", "mk_framework") ,
            "id" => "faq-post-type",
            "default" => "true",
            "type" => "toggle"
        ) ,
		array(
            "name" => __("Photo Album Post Type", "mk_framework") ,
            "desc" => __("If you will not use Photo Album post type feature simply disable this option.", "mk_framework") ,
            "id" => "photo_album-post-type",
            "default" => "true",
            "type" => "toggle"
        ) ,
		array(
            "name" => __("Pricing Tables Post Type", "mk_framework") ,
            "desc" => __("If you will not use Pricing Tables post type feature simply disable this option.", "mk_framework") ,
            "id" => "pricing-post-type",
            "default" => "true",
            "type" => "toggle"
        ) ,
        array(
            "name" => __("Clients Post Type", "mk_framework") ,
            "desc" => __("If you will not use Clients post type feature simply disable this option.", "mk_framework") ,
            "id" => "clients-post-type",
            "default" => "true",
            "type" => "toggle"
        ) ,
		array(
            "name" => __("Employees Post Type", "mk_framework") ,
            "desc" => __("If you will not use Employees post type feature simply disable this option.", "mk_framework") ,
            "id" => "employees-post-type",
            "default" => "true",
            "type" => "toggle"
        ) ,
        array(
            "name" => __("Testimonial Post Type", "mk_framework") ,
            "desc" => __("If you will not use Testimonial post type feature simply disable this option.", "mk_framework") ,
            "id" => "testimonial-post-type",
            "default" => "true",
            "type" => "toggle"
        ) ,
		array(
            "name" => __("Animated Columns Post Type", "mk_framework") ,
            "desc" => __("If you will not use Animated Columns post type feature simply disable this option.", "mk_framework") ,
            "id" => "animated-columns-post-type",
            "default" => "true",
            "type" => "toggle"
        ),
		array(
            "name" => __("Edge Slider Post Type", "mk_framework") ,
            "desc" => __("If you will not use Edge Slider post type feature simply disable this option.", "mk_framework") ,
            "id" => "edge-post-type",
            "default" => "true",
            "type" => "toggle"
        ) ,
		array(
            "name" => __("Tab Slider Post Type", "mk_framework") ,
            "desc" => __("If you will not use Tab Slider post type feature simply disable this option.", "mk_framework") ,
            "id" => "tab_slider-post-type",
            "default" => "true",
            "type" => "toggle"
        ),
		array(
            "name" => __("FlexSlider Post Type", "mk_framework") ,
            "desc" => __("If you will not use FlexSlider post type feature simply disable this option.", "mk_framework") ,
            "id" => "slideshow-post-type",
            "default" => "false",
            "type" => "toggle"
        ) ,
		array(
            "name" => __("Banner Builder Post Type", "mk_framework") ,
            "desc" => __("If you will not use Banner Builder post type feature simply disable this option.", "mk_framework") ,
            "id" => "banner_builder-post-type",
            "default" => "false",
            "type" => "toggle"
        ) ,
    ) ,
);
