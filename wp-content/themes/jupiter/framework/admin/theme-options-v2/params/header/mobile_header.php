<?php
$header_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_mobile_header_section",
    "name" => __("Header / Mobile Menu", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Container", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -41px; background: #fff;',
            "fields" => array(
            	array(
		            "name" => __('Header Background Color', "mk_framework") ,
		            "id" => "header_mobile_bg",
		            "default" => '',
		            "type" => "color"
		        ) ,
		        array(
		            "name" => __('Navigation Background Color', "mk_framework"),
		            "id" => 'responsive_nav_color',
		            "default" => '#fff',
		            "type" => "color"
		        ) ,
				array(
		            "name" => __('Search Form Input Background Color', "mk_framework") ,
		            "id" => 'header_mobile_search_input_bg',
		            "default" => '',
		            "type" => "color"
		        ) ,
		        array(
		            "name" => __('Search Form Input Text Color', "mk_framework") ,
		            "id" => 'header_mobile_search_input_color',
		            "default" => '',
		            "type" => "color"
		        ) ,
            )
        ) ,
        array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Menu Text", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px;',
            "fields" => array(
            	array(
		            "name" => __('Menu Text Color', "mk_framework"),
		            "id" => 'responsive_nav_txt_color',
		            "default" => '#444444',
		            "type" => "color"
		        ),
            )
		) ,
    )
);
