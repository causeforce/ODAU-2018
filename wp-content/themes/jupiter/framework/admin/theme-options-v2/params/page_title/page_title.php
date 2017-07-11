<?php
$page_title_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_page_title_section",
    "name" => __("Page Title / Page Title", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
    	 array(
            "name" => __("Display Page Title", "mk_framework") ,
            "desc" => __("Using this option you can turn on/off page title throughout the site.", "mk_framework") ,
            "id" => "page_title_global",
            "default" => 'true',
            "type" => "toggle",
        ) ,
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Container", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px;',
            "fields" => array(
            	array(
		            "name" => __('Border Bottom Color', 'mk_framework') ,
		            "desc" => __("", "mk_framework") ,
		            "id" => "banner_border_color",
		            "default" => "#ededed",
		            "type" => "color"
		        ) ,
            )
        ) ,
    	array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Text", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px; background-color: #fff;',
            "fields" => array(
				array(
		            "name" => __('Page Title Text Weight', 'mk_framework') ,
		            "id" => "page_introduce_weight",
		            "default" => 400,
		            "type" => "font_weight"
		        ) ,
				array(
		            "name" => __('Page Title Text Case', "mk_framework") ,
		            "id" => "page_title_transform",
		            "default" => 'uppercase',
		            "options" => array(
		                "none" => __('None', "mk_framework"),
		                "uppercase" => __('Uppercase', "mk_framework"),
		                "capitalize" => __('Capitalize', "mk_framework"),
		                "lowercase" => __('Lower case', "mk_framework")
		            ) ,
		            "type" => "dropdown"
		        ) ,
            	array(
		            "name" => __('Page Title Text Size', 'mk_framework') ,
		            "id" => "page_introduce_title_size",
		            "min" => "10",
		            "max" => "120",
		            "step" => "1",
		            "unit" => 'px',
		            "default" => "20",
		            "type" => "range"
		        ) ,
		        array(
		            "name" => __('Page Title Letter Spacing', 'mk_framework') ,
		            "id" => "page_introduce_title_letter_spacing",
		            "min" => "0",
		            "max" => "10",
		            "step" => "1",
		            "unit" => 'px',
		            "default" => "2",
		            "type" => "range"
		        ) ,
				array(
		            "name" => __('Page Title Text Color', 'mk_framework') ,
		            "desc" => __("", "mk_framework") ,
		            "id" => "page_title_color",
		            "default" => "#4d4d4d",
		            "type" => "color"
		        ) ,
				array(
		            "name" => __("Text Shadow for Title", "mk_framework") ,
		            "desc" => __("If you enable this option 1px gray shadow will appear in page title.", "mk_framework") ,
		            "id" => "page_title_shadow",
		            "default" => 'false',
		            "type" => "toggle"
		        ) ,
            )
		) ,
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Page Subtitle", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px;',
            "fields" => array(
				array(
		            "name" => __('Page Subtitle Text Size', 'mk_framework') ,
		            "id" => "page_introduce_subtitle_size",
		            "min" => "10",
		            "max" => "50",
		            "step" => "1",
		            "unit" => 'px',
		            "default" => "14",
		            "type" => "range"
		        ) ,
		        array(
		            "name" => __('Page Subtitle Text Case', "mk_framework") ,
		            "id" => "page_introduce_subtitle_transform",
		            "default" => 'none',
		            "options" => array(
		                "none" => __('None', "mk_framework"),
		                "uppercase" => __('Uppercase', "mk_framework"),
		                "capitalize" => __('Capitalize', "mk_framework"),
		                "lowercase" => __('Lower case', "mk_framework")
		            ) ,
		            "type" => "dropdown"
		        ) ,
				array(
		            "name" => __('Page Subtitle Text Color', 'mk_framework') ,
		            "desc" => __("", "mk_framework") ,
		            "id" => "page_subtitle_color",
		            "default" => "#a3a3a3",
		            "type" => "color"
		        ) ,
            )
		) ,
    )
);
