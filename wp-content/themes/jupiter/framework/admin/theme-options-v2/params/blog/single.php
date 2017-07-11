<?php
$blog_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_blog_single_post_section",
    "name" => __("Blog / Blog Single Post", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
		array(
            "name" => __("Single Layout", "mk_framework") ,
            "desc" => __("This option allows you to define the page layout of Blog Single page as full width without sidebar, left sidebar or right sidebar.", "mk_framework") ,
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
            "name" => __("Post Style", "mk_framework") ,
            "desc" => __("", "mk_framework") ,
            "id" => "single_blog_style",
            "default" => 'compact',
            "options" => array(
                "compact" => __('Traditional & Compact', 'mk_framework') ,
                "bold" => __('Clear & Bold', 'mk_framework') ,
            ) ,
            "type" => "dropdown"
        ) ,
		array(
            "name" => __("Make Featured Image Full Height", "mk_framework") ,
            "desc" => __("If disabled you may set a custom height from below option.", "mk_framework") ,
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
            "name" => __("Featured Image", "mk_framework") ,
            "desc" => __("If you do not want to set a featured image (in case of sound post type : Audio player, in case of video post type : Video Player) kindly disable it here.", "mk_framework") ,
            "id" => "single_disable_featured_image",
            "default" => 'true',
            "type" => "toggle"
        ) ,
		array(
            "name" => __("Blog Featured Image Height", "mk_framework") ,
            "desc" => __("Clear & Bold style hero image height.", "mk_framework") ,
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
            "desc" => __("Traditional & Compact style featured image height.", "mk_framework") ,
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
            "name" => __("Image Cropping", "mk_framework") ,
            "desc" => __("If you do not want automatic image cropping disable this option.", "mk_framework") ,
            "id" => "blog_single_img_crop",
            "default" => 'true',
            "type" => "toggle"
        ) ,
		array(
            "name" => __("Post Title", "mk_framework") ,
            "desc" => __("", "mk_framework") ,
            "id" => "blog_single_title",
            "default" => 'true',
            "type" => "toggle"
        ) ,

        array(
            "name" => __("Previous & Next Arrows", "mk_framework") ,
            "desc" => __("Using this option you can turn on/off the navigation arrows when viewing the blog single page.", "mk_framework") ,
            "id" => "blog_prev_next",
            "default" => 'true',
            "type" => "toggle"
        ) ,
        array(
            "name" => __("Show Previous & Next for Same Categories?", "mk_framework") ,
            "desc" => __("If enabled, the same categories in adjacent posts will be shown.", "mk_framework") ,
            "id" => "blog_prev_next_same_category",
            "default" => 'true',
            "type" => "toggle"
        ) ,
        array(
            "name" => __("Recommended Posts", "mk_framework") ,
            "desc" => __("Using this option you can Show/Hide Recommended Posts section inside your single post item.", "mk_framework") ,
            "id" => "enable_single_related_posts",
            "default" => 'true',
            "type" => "toggle"
        ) ,
        array(
            "name" => __("Comments on Blog Posts", "mk_framework") ,
            "desc" => __("You can Turn On/Off the comments section for blogs here.", "mk_framework") ,
            "id" => "blog_single_comments",
            "default" => 'true',
            "type" => "toggle"
        ) ,
        array(
            "name" => __("About Author Box", "mk_framework") ,
            "desc" => __("You can enable or disable the about author box from here. You can modify about author information from your profile settings. Besides, if you add your website URL, your email address and twitter account from extra profile information they will be displayed as an icon link.", "mk_framework") ,
            "id" => "enable_blog_author",
            "default" => 'true',
            "type" => "toggle"
        ) ,
        array(
            "name" => __("Social Share", "mk_framework") ,
            "desc" => __("Using this option you can Enable/Disable social share section from blog archive and single pages.", "mk_framework") ,
            "id" => "single_blog_social",
            "default" => 'true',
            "type" => "toggle"
        ) ,
        array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Heading", "mk_framework") ,
            "type" => "groupset",
            "styles" => "border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px;",
            "fields" => array(
                array(
                    "name" => __('Heading Text Weight', "mk_framework"),
                    "id" => "blog_heading_weight",
                    "default" => 600,
                    "type" => "font_weight"
                ),
                array(
                    "name" => __('Heading Text Case', "mk_framework"),
                    "id" => "blog_heading_transform",
                    "default" => '',
                    "options" => array(
                        "none" => __('None', "mk_framework"),
                        "uppercase" => __('Uppercase', "mk_framework"),
                        "capitalize" => __('Capitalize', "mk_framework"),
                        "lowercase" => __('Lower case', "mk_framework")
                    ),
                    "type" => "dropdown"
                ),
                array(
                    "name" => __('Heading Text Size', "mk_framework"),
                    "id" => "blog_heading_size",
                    "desc" => __("If zero chosen the default body text size will be used.", "mk_framework"),
                    "min" => "0",
                    "max" => "50",
                    "step" => "1",
                    "unit" => 'px',
                    "default" => "0",
                    "type" => "range"
                ),
                array(
                    "name" => __('Heading Color', "mk_framework") ,
                    "id" => "blog_heading_color",
                    "default" => "",
                    "type" => "color"
                ) ,
                array(
                    "name" => __('Heading 1 Color', "mk_framework") ,
                    "id" => "blog_body_h1_color",
                    "default" => "",
                    "type" => "color"
                ) ,
                array(
                    "name" => __('Heading 2 Color', "mk_framework") ,
                    "id" => "blog_body_h2_color",
                    "default" => "",
                    "type" => "color"
                ) ,
                array(
                    "name" => __('Heading 3 Color', "mk_framework") ,
                    "id" => "blog_body_h3_color",
                    "default" => "",
                    "type" => "color"
                ) ,
                array(
                    "name" => __('Heading 4 Color', "mk_framework") ,
                    "id" => "blog_body_h4_color",
                    "default" => "",
                    "type" => "color"
                ) ,
                array(
                    "name" => __('Heading 5 Color', "mk_framework") ,
                    "id" => "blog_body_h5_color",
                    "default" => "",
                    "type" => "color"
                ) ,
                array(
                    "name" => __('Heading 6 Color', "mk_framework") ,
                    "id" => "blog_body_h6_color",
                    "default" => "",
                    "type" => "color"
                ) ,
            )
        ) ,
        array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Body", "mk_framework") ,
            "type" => "groupset",
            "styles" => "border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px; background-color: #fff;",
            "fields" => array(
                array(
                    "name" => __('Body Text Weight', "mk_framework"),
                    "id" => "blog_body_weight",
                    "default" => 400,
                    "type" => "font_weight"
                ),
                array(
                    "name" => __('Body Text Size', "mk_framework"),
                    "desc" => __("If zero chosen the default body text size will be used.", "mk_framework"),
                    "id" => "blog_body_font_size",
                    "min" => "0",
                    "max" => "50",
                    "step" => "1",
                    "unit" => 'px',
                    "default" => "0",
                    "type" => "range"
                ),
                array(
                    "name" => __('Body Text Line Height', "mk_framework"),
                    "desc" => __("This option will let you change the line height of texts in site. Please note that some elements has their own direct line height property, so you can not change them from here. The unit is in 'em'.<br />If zero chosen the default body line height size will be used. ", "mk_framework"),
                    "id" => "blog_body_line_height",
                    "min" => "0",
                    "max" => "4",
                    "step" => "0.01",
                    "unit" => 'em',
                    "default" => "0",
                    "type" => "range"
                ),
                array(
                    "name" => __('Body Text Color', "mk_framework") ,
                    "desc" => __("", "mk_framework") ,
                    "id" => "blog_body_color",
                    "default" => "",
                    "type" => "color"
                ) ,
                array(
                    "name" => __('Body Text Links Color', "mk_framework") ,
                    "id" => "blog_body_a_color",
                    "default" => "",
                    "type" => "color"
                ) ,
                array(
                    "name" => __('Body Text Links Hover Color', "mk_framework") ,
                    "id" => "blog_body_a_color_hover",
                    "default" => "",
                    "type" => "color"
                ) ,
                array(
                    "name" => __('Body Strong Tag Color', "mk_framework") ,
                    "id" => "blog_body_strong_tag_color",
                    "default" => "",
                    "type" => "color"
                ) ,
            )
        ) ,
    ) ,
);
