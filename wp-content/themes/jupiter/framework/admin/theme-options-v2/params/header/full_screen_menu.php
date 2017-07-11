<?php
$header_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_full_screen_menu_section",
    "name" => __("Header / Full Screen Navigation", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Container", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -41px; background-color: #fff;',
            "fields" => array(
            	array(
		            "name" => __('Logo', "mk_framework") ,
		            "id" => "fullscreen_nav_logo",
		            "default" => 'dark',
		            "options" => array(
		                "none" => __('None', "mk_framework"),
		                "light" => __('Light', "mk_framework"),
		                "dark" => __('Dark', "mk_framework"),
		            ) ,
		            "type" => "dropdown"
		        ) ,
		        array(
		            "name" => __('Mobile Logo', "mk_framework") ,
		            "id" => "fullscreen_nav_mobile_logo",
		            "default" => 'dark',
		            "options" => array(
		                "dark" => __('Dark', "mk_framework"),
		                "light" => __('Light', "mk_framework"),
		                "custom" => __( 'Custom', 'mk_framework' ),
		            ) ,
		            "type" => "dropdown"
		        ) ,
		        array(
		            "name" => __("Custom logo for Full screen menu on mobile screens ", "mk_framework") ,
		            "desc" => __("Upload a custom logo for full screen menu only when it is opened on Mobile devices (small screens). Notice that this responsive logo is different from site's general 'Mobile version logo' which affect the site's header logo.", "mk_framework") ,
		            "id" => "fullscreen_nav_mobile_logo_custom",
		            "default" => "",
		            "type" => "upload",
		            "dependency" => array(
		                   "element" => "fullscreen_nav_mobile_logo",
		                   "value" => array(
		                       "custom"
		                   )
		            ),
		        ) ,
		        array(
		            "name" => __('Background Color', "mk_framework") ,
		            "id" => "fullscreen_nav_bg_color",
		            "default" => "#444",
		            "type" => "color"
		        ) ,
		        array(
		            "name" => __('Close Button Color', "mk_framework") ,
		            "id" => "fullscreen_close_btn_skin",
		            "default" => 'light',
		            "options" => array(
		                "light" => __('Light', "mk_framework"),
		                "dark" => __('Dark', "mk_framework"),
		            ) ,
		            "type" => "dropdown"
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
		            "name" => __('Text Weight', "mk_framework") ,
		            "id" => "fullscreen_nav_menu_font_weight",
		            "default" => 'bolder',
		            "type" => "font_weight"
		        ) ,
				array(
		            "name" => __('Text Case', "mk_framework") ,
		            "id" => "fullscreen_nav_menu_text_transform",
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
		            "name" => __('Text Size', "mk_framework") ,
		            "id" => "fullscreen_nav_menu_font_size",
		            "min" => "10",
		            "max" => "50",
		            "step" => "1",
		            "unit" => 'px',
		            "default" => "16",
		            "type" => "range"
		        ) ,
		        array(
		            "name" => __('Letter Spacing', "mk_framework") ,
		            "id" => "fullscreen_nav_menu_letter_spacing",
		            "min" => "0",
		            "max" => "10",
		            "step" => "1",
		            "unit" => 'px',
		            "default" => "0",
		            "type" => "range"
		        ) ,
				array(
		            "name" => __('Item Gutter Spacing', "mk_framework") ,
		            "desc" => __("This value will be applied as padding to top and bottom of the item.", "mk_framework") ,
		            "id" => "fullscreen_nav_menu_gutter",
		            "min" => "0",
		            "max" => "100",
		            "step" => "1",
		            "unit" => 'px',
		            "default" => "25",
		            "type" => "range"
		        ) ,
		        array(
		            "name" => __('Text Color', "mk_framework") ,
		            "id" => "fullscreen_nav_link_color",
		            "default" => "#fff",
		            "type" => "color"
		        ) ,
		        array(
		            "name" => __('Text Hover Color', "mk_framework") ,
		            "id" => "fullscreen_nav_link_hov_color",
		            "default" => "#444",
		            "type" => "color"
		        ) ,
		        array(
		            "name" => __('Text Hover Background Color', "mk_framework") ,
		            "id" => "fullscreen_nav_link_hov_bg_color",
		            "default" => "#fff",
		            "type" => "color"
		        ) ,
            ),
        ) ,
    )
);
