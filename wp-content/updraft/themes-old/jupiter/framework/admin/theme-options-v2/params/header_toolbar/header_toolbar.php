<?php
$header_toolbar_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_header_toolbar_section",
    "name" => __("Header Toolbar", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
        array(
            "name" => __("Date", "mk_framework") ,
            "desc" => __("If you enable this option today's date will be displayed on header toolbar. make sure your hosting server date configurations works as expected otherwise you might need to fix in hosting settings.", "mk_framework") ,
            "id" => "enable_header_date",
            "default" => 'false',
            "type" => "toggle",
        ) ,
        array(
            "name" => __("Tagline", "mk_framework") ,
            "desc" => __("Fill this area which represents your site slogan or an important message.", "mk_framework") ,
            "id" => "header_toolbar_tagline",
            "default" => "",
            "type" => "text",
        ) ,
        array(
            "name" => __("Login Form", "mk_framework") ,
            "desc" => __("", "mk_framework") ,
            "id" => "header_toolbar_login",
            "default" => "true",
            "type" => "toggle",
        ) ,
        array(
            "name" => __("Mailchimp Subscribe Form", "mk_framework") ,
            "desc" => __("", "mk_framework") ,
            "id" => "header_toolbar_subscribe",
            "default" => "false",
            "type" => "toggle",
        ) ,
        array(
            "name" => __("Email Address", "mk_framework") ,
            "desc" => __("", "mk_framework") ,
            "id" => "header_toolbar_email",
            "default" => "",
            "type" => "text",
        ) ,
        array(
            "name" => __("Phone Number", "mk_framework") ,
            "desc" => __("", "mk_framework") ,
            "id" => "header_toolbar_phone",
            "default" => "",
            "type" => "text",
        ) ,
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Container", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px;',
            "fields" => array(
            	array(
		            "name" => __('Toolbar Background Color', "mk_framework") ,
		            "id" => "header_toolbar_bg",
		            "default" => "#ffffff",
		            "type" => "color"
		        ) ,
                array(
                    "name" => __('Toolbar Mobile Background Color', "mk_framework") ,
                    "id" => 'header_mobile_toolbar_bg',
                    "default" => '',
                    "type" => "color"
                ) ,
		        array(
		            "name" => __('Border Bottom Color', "mk_framework") ,
		            "id" => "header_toolbar_border_color",
		            "default" => "",
		            "type" => "color"
		        ) ,
				array(
		            "name" => __('Search Form Input Background Color', "mk_framework") ,
		            "id" => "header_toolbar_search_input_bg",
		            "default" => "",
		            "type" => "color"
		        ) ,
            )
        ) ,
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Text", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px; background: #fff;',
            "fields" => array(
				array(
		            "name" => __('Toolbar Text Color', "mk_framework") ,
		            "id" => "header_toolbar_txt_color",
		            "default" => "#999999",
		            "type" => "color"
		        ) ,
		        array(
		            "name" => __('Toolbar Link Color', "mk_framework") ,
		            "id" => "header_toolbar_link_color",
		            "default" => "#999999",
		            "type" => "color"
		        ) ,
				array(
		            "name" => __('Search Form Input Text Color', "mk_framework") ,
		            "id" => "header_toolbar_search_input_txt",
		            "default" => "#c7c7c7",
		            "type" => "color"
		        ) ,
                array(
                    "name" => __('Toolbar Mobile Text Color', "mk_framework") ,
                    "id" => 'header_mobile_toolbar_color',
                    "default" => '',
                    "type" => "color"
                ) ,
                array(
                    "name" => __('Toolbar Mobile Link Color', "mk_framework") ,
                    "id" => 'header_mobile_toolbar_link_color',
                    "default" => '',
                    "type" => "color"
                ) ,
            )
        ) ,
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Social Networks", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px;',
            "fields" => array(
            	array(
		            "name" => __('Icon Color', "mk_framework") ,
		            "id" => "header_toolbar_social_network_color",
		            "default" => "#999999",
		            "type" => "color"
		        ) ,
                array(
                    "name" => __('Toolbar Social Icon Color', "mk_framework") ,
                    "id" => 'header_mobile_toolbar_social_color',
                    "default" => '',
                    "type" => "color"
                ) ,
            )
        ) ,
    )
);
