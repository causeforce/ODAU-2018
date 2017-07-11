<?php
$header_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_sticky_header_section",
    "name" => __("Header / Sticky Header", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
		array(
            "name" => __("Sticky header behavior", "mk_framework") ,
            "desc" => __("Using this option you can define how you would like the header transform from normal to sticky state. If 'Slide Down' is selected, then you can choose the offset location where the sticky header will be revealed while scrolling down (Check option below).", "mk_framework") ,
            "id" => "header_sticky_style",
            "default" => 'fixed',
            "options" => array(
                "false" => __('Disable Sticky Header', "mk_framework") ,
                "fixed" => __('Fixed Sticky', "mk_framework") ,
                "slide" => __('Slide Down', "mk_framework") ,
                "lazy" => __('Lazy', "mk_framework") ,
            ) ,
            "type" => "dropdown",
        ) ,
		array(
            "name" => __("Offset", "mk_framework") ,
            "desc" => __("Set this option to decide when the sticky state of header will trigger. This option does not apply to header style No2.", "mk_framework") ,
            "id" => "sticky_header_offset",
            "default" => 'header',
            "options" => array(
                "header" => __('Header height', "mk_framework") ,
                "25%" => __('25% Of Viewport', "mk_framework") ,
                "30%" => __('30% Of Viewport', "mk_framework") ,
                "40%" => __('40% Of Viewport', "mk_framework") ,
                "50%" => __('50% Of Viewport', "mk_framework") ,
                "60%" => __('60% Of Viewport', "mk_framework") ,
                "70%" => __('70% Of Viewport', "mk_framework") ,
                "80%" => __('80% Of Viewport', "mk_framework") ,
                "90%" => __('90% Of Viewport', "mk_framework") ,
                "100%" => __('100% Of Viewport', "mk_framework") ,
            ) ,
            "type" => "dropdown",
        ) ,
        array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Container", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px;',
            "fields" => array(
                array(
                    "name" => __("Height", "mk_framework") ,
                    "desc" => __("Using this option you can decide how long header should be on sticky state. (default:50px).", "mk_framework") ,
                    "id" => "header_scroll_height",
                    "default" => "55",
                    "min" => "20",
                    "max" => "400",
                    "step" => "1",
                    "unit" => 'px',
                    "type" => "range",
                ) ,
                array(
                    "name" => __("Background Opacity", "mk_framework") ,
                    "desc" => __("The opacity of the sticky header section (after scroll header will be fixed to the top of window).", "mk_framework") ,
                    "id" => "header_sticky_opacity",
                    "min" => "0",
                    "max" => "1",
                    "step" => "0.1",
                    "unit" => 'opacity',
                    "default" => "1",
                    "type" => "range"
                ) ,
                array(
                    "name" => __('Bottom Border Color', "mk_framework") ,
                    "desc" => __("This border color will be used for sticky header border color. If left blank above option will used instead.", "mk_framework") ,
                    "id" => "sticky_header_border_color",
                    "default" => "",
                    "type" => "color"
                ) ,
            )
        ),
    )
);
