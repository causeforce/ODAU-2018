<?php
$footer_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_sub_footer_section",
    "name" => __("Footer / Sub Footer", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
    	array(
            "name" => __("Display Sub Footer", "mk_framework") ,
            "desc" => __("Use this option to enable or disable the sub-footer.", "mk_framework") ,
            "id" => "disable_sub_footer",
            "default" => 'true',
            "type" => "toggle",
        ) ,
        array(
            "name" => __("Sub Footer Navigation", "mk_framework"),
            "desc" => __("This option allows you to enable a custom navigation on the left section of custom footer.", "mk_framework") ,
            "id" => "enable_footer_nav",
            "default" => 'true',
            "type" => "toggle",
        ) ,
        array(
            "name" => __("Sub Footer Copyright Text", "mk_framework") ,
            "desc" => "",
            "id" => "copyright",
            "default" => 'Copyright All Rights Reserved &copy; 2017',
            "type" => "textarea",
        ) ,
        array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Container", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px;',
            "fields" => array(
                array(
                    "name" => __('Background Color', "mk_framework"),
                    "id" => "sub_footer_bg_color",
                    "default" => "#43474d",
                    "type" => "color"
                ),
            )
        ) ,
        array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Text", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px; background-color: #fff;',
            "fields" => array(
                array(
                    "name" => __('Copyright Font Size', "mk_framework") ,
                    "id" => "copyright_size",
                    "min" => "10",
                    "max" => "50",
                    "step" => "1",
                    "unit" => 'px',
                    "default" => "11",
                    "type" => "range"
                ) ,
                array(
                    "name" => __('Copyright Letter Spacing', "mk_framework") ,
                    "id" => "copyright_letter_spacing",
                    "min" => "0",
                    "max" => "10",
                    "step" => "1",
                    "unit" => 'px',
                    "default" => "1",
                    "type" => "range"
                ) ,
                array(
                    "name" => __('Copyright Text Color', "mk_framework"),
                    "id" => "sub_footer_nav_copy_color",
                    "default" => "#8c8e91",
                    "type" => "color"
                ),
            )
        ) ,
    )
);
