<?php
$page_title_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_breadcrumbs_section",
    "name" => __("Page Title / Breadcrumbs", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
		array(
            "name" => __("Display Breadcrumbs", "mk_framework") ,
            "desc" => __("You can disable breadcrumb navigation globally using this option, or you may need to disable it in a page locally.", "mk_framework") ,
            "id" => "disable_breadcrumb",
            "default" => 'true',
            "type" => "toggle",
        ) ,
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Text", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px;',
            "fields" => array(
            	array(
		            "name" => __("Text Skin", "mk_framework") ,
		            "id" => "breadcrumb_skin",
		            "default" => 'dark',
		            "options" => array(
		                "light" => __('For Light Background', "mk_framework") ,
		                "dark" => __('For Dark Background', "mk_framework")
		            ) ,
		            "type" => "radio"
		        ) ,
            ),
        )
    )
);
