<?php
$general_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_site_settings_section",
    "name" => __("General / Site Settings", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
        array(
            "name" => __('Theme Accent Color', "mk_framework") ,
            "desc" => __("The theme main color that will be applied to some elements.", "mk_framework") ,
            "id" => "skin_color",
            "default" => "#f97352",
            "type" => "color"
        ) ,
        array(
            "name" => __("Smooth Scroll", "mk_framework") ,
            "desc" => __("If you enable this option page scrolling will have smooth with easing effect.", "mk_framework") ,
            "id" => "smoothscroll",
            "default" => 'true',
            "type" => "toggle",
        ) ,
        array(
            "name" => __("Comments on Pages", "mk_framework") ,
            "desc" => __("Using this option you can enable comments for pages.", "mk_framework") ,
            "id" => "pages_comments",
            "default" => 'false',
            "type" => "toggle",
        ) ,
        array(
            "name" => __("Go to Top", "mk_framework") ,
            "desc" => __("Using this option you can enable or disable go to top button.", "mk_framework") ,
            "id" => "go_to_top",
            "default" => 'true',
            "type" => "toggle",
        ) ,
        // Commented out for now. This will later hold fields.
        /*array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Fonts", "mk_framework") ,
            "type" => "groupset",
            "styles" => "margin-top:-21px;border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9;",
            "fields" => array(
            )
        ) ,*/
        array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Images Settings", "mk_framework") ,
            "type" => "groupset",
            "styles" => "margin-top:-31px;border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9;",
            "fields" => array(
                 array(
                    "name" => __("Retina Images", "mk_framework") ,
                    "desc" => __("All images are by default retina compatible. Turn off this option if you don't wish to support retina displays.", "mk_framework") ,
                    "id" => "retina_images",
                    "default" => 'true',
                    "type" => "toggle",
                ) ,
                array(
                    "name" => __("Responsive Images", "mk_framework") ,
                    "desc" => __("All images are by default responsive. Turn off this option if you don't wish to support responsive images.", "mk_framework") ,
                    "id" => "responsive_images",
                    "default" => 'true',
                    "type" => "toggle",
                ) ,
                array(
                    "name" => __("Image Resize Quality", "mk_framework") ,
                    "desc" => __("Using this option you can modify the quaity of the built-in image cropper script theme uses.", "mk_framework") ,
                    "id" => "image_resize_quality",
                    "default" => "100",
                    "min" => "10",
                    "max" => "100",
                    "step" => "1",
                    "unit" => '%',
                    "type" => "range",
                ) ,
            )
        ) ,
    ) ,
);
