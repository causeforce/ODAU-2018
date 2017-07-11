<?php
$blog_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_blog_single_post",
    "name" => __("Blog & News / Single Post", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
        array(
            "name" => __("Single Post Style", "mk_framework") ,
            "desc" => __("Select the default style for single blog posts.", "mk_framework") ,
            "id" => "single_blog_style",
            "default" => 'compact',
            "options" => array(
                "compact" => __('Traditional & Compact', 'mk_framework') ,
                "bold" => __('Clear & Bold', 'mk_framework') ,
            ) ,
            "type" => "dropdown"
        ) ,
        array(
            "name" => __("Single Layout", "mk_framework") ,
            "desc" => __("Select default layout for single blog posts. It can be adjusted per post from single posts edit screen.", "mk_framework") ,
            "id" => "single_layout",
            "default" => "full",
            "options" => array(
                "left" => __("Left Sidebar", "mk_framework") ,
                "right" => __("Right Sidebar", "mk_framework") ,
                "full" => __("Full Layout", "mk_framework")
            ) ,
            "type" => "dropdown"
        ) ,

        array(
            "name" => __("Make Featured Image Full Height", "mk_framework") ,
            "desc" => __("Enable featured image full height for Clear & Bold single blog post style?", "mk_framework") ,
            "id" => "single_bold_hero_full_height",
            "default" => "true",
            "type" => "toggle",
            "dependency" => array(
                   'element' => "single_blog_style",
                   'value' => array(
                       'bold'
                   )
            ),
        ) ,

        array(
            "name" => __("Featured Image Height", "mk_framework") ,
            "desc" => __("Adjust featured image height of Clear & Bold single blog post style. It affects when <strong>Make Featured Image Full Height</strong> is disabled.", "mk_framework") ,
            "id" => "bold_single_hero_height",
            "min" => "100",
            "max" => "2000",
            "step" => "1",
            "default" => "800",
            "unit" => 'px',
            "type" => "range",
            "dependency" => array(
                   'element' => "single_blog_style",
                   'value' => array(
                       'bold'
                   )
            ),
        ) ,
        
        array(
            "name" => __("Featured Image Height", "mk_framework") ,
            "desc" => __("Adjust featured image height of Traditional & Compact single blog post style.", "mk_framework") ,
            "id" => "single_featured_image_height",
            "min" => "100",
            "max" => "1000",
            "step" => "1",
            "default" => "300",
            "unit" => 'px',
            "type" => "range",
            "dependency" => array(
                   'element' => "single_blog_style",
                   'value' => array(
                       'compact'
                   )
            ),
        ) ,
        array(
            "name" => __("Featured Image", "mk_framework") ,
            "desc" => __("Display featured image for single blog posts?", "mk_framework") ,
            "id" => "single_disable_featured_image",
            "default" => 'true',
            "type" => "toggle"
        ) ,
        array(
            "name" => __("Image Cropping", "mk_framework") ,
            "desc" => __("Enable automatic image cropping for featured image of single blog posts?", "mk_framework") ,
            "id" => "blog_single_img_crop",
            "default" => 'true',
            "type" => "toggle"
        ) ,
        array(
            "name" => __("Single Blog Post Title", "mk_framework") ,
            "desc" => __("Display page title in single blog posts?", "mk_framework") ,
            "id" => "blog_single_title",
            "default" => 'true',
            "type" => "toggle"
        ) ,
        array(
            "name" => __("Meta Section", "mk_framework") ,
            "desc" => __("Display post meta information (author, date, category, ...) in single blog posts?", "mk_framework") ,
            "id" => "single_meta_section",
            "default" => 'true',
            "type" => "toggle"
        ) ,
        array(
            "name" => __("Blog Social Share", "mk_framework") ,
            "desc" => __("Display social share icons in single blog posts and blog archive?", "mk_framework") ,
            "id" => "single_blog_social",
            "default" => 'true',
            "type" => "toggle"
        ) ,
        array(
            "name" => __("Previous & Next Arrows", "mk_framework") ,
            "desc" => __("Display blog posts navigation in single blog posts? It guides a visitor to go through previous and next posts.", "mk_framework") ,
            "id" => "blog_prev_next",
            "default" => 'true',
            "type" => "toggle"
        ) ,
        array(
            "name" => __("Show Previous & Next for Same Categories?", "mk_framework") ,
            "desc" => __("Limit the blog posts navigation to same categories of current post.", "mk_framework") ,
            "id" => "blog_prev_next_same_category",
            "default" => 'true',
            "type" => "toggle"
        ) ,
        array(
            "name" => __("About Author Box", "mk_framework") ,
            "desc" => __("Display post author information in single blog posts? Author information can be configured in profile settings.", "mk_framework") ,
            "id" => "enable_blog_author",
            "default" => 'true',
            "type" => "toggle"
        ) ,
        array(
            "name" => __("Meta Tags", "mk_framework") ,
            "desc" => __("Display posts tags in single blog posts?", "mk_framework") ,
            "id" => "diable_single_tags",
            "default" => 'true',
            "type" => "toggle"
        ) ,
        array(
            "name" => __("Recommended Posts", "mk_framework") ,
            "desc" => __("Display recommended posts in single blog posts?", "mk_framework") ,
            "id" => "enable_single_related_posts",
            "default" => 'true',
            "type" => "toggle"
        ) ,
        array(
            "name" => __("Blog Posts Comments", "mk_framework") ,
            "desc" => __("Display comments in single blog posts?", "mk_framework") ,
            "id" => "blog_single_comments",
            "default" => 'true',
            "type" => "toggle"
        ) ,
    ) ,
);
