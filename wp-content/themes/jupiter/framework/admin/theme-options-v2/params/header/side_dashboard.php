<?php
$header_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_side_dashboard_section",
    "name" => __("Header / Side Dashboard", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Container", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -41px; background-color: #fff;',
            "fields" => array(
				array(
		            "name" => __('Background Color', "mk_framework") ,
		            "id" => "dash_bg_color",
		            "default" => "#444",
		            "type" => "color"
		        ) ,
            )
        ) ,
        array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Text", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px;',
            "fields" => array(
				array(
		            "name"    => __( 'Top Menu Text Weight', 'mk_framework' ),
		            "id"      => "dash_top_menu_text_weight",
		            "default" => 600,
		            "type"    => "font_weight"
		        ),
				array(
		            "name"    => __( 'Top Menu Text Case', 'mk_framework' ),
		            "id"      => "dash_top_menu_transform",
		            "default" => 'uppercase',
		            "options" => array(
		                "none"       => __( 'None',       'mk_framework' ),
		                "uppercase"  => __( 'Uppercase',  'mk_framework' ),
		                "capitalize" => __( 'Capitalize', 'mk_framework' ),
		                "lowercase"  => __( 'Lower case', 'mk_framework' )
		            ),
		            "type"    => "dropdown"
		        ),
				array(
		            "name"    => __( 'Top Menu Text Size', 'mk_framework' ),
		            "id"      => "dash_top_menu_text_size",
		            "min"     => "10",
		            "max"     => "50",
		            "step"    => "1",
		            "unit"    => 'px',
		            "default" => "13",
		            "type"    => "range"
		        ),
		        array(
		            "name" => __('Navigation Links Color', "mk_framework") ,
		            "id" => "dash_nav_link_color",
		            "default" => "#fff",
		            "type" => "color"
		        ) ,
		        array(
		            "name" => __('Navigation Hover Color', "mk_framework") ,
		            "id" => "dash_nav_link_hover_color",
		            "default" => "#fff",
		            "type" => "color"
		        ) ,
		        array(
		            "name" => __('Navigation Hover Background Color', "mk_framework") ,
		            "id" => "dash_nav_bg_hover_color",
		            "default" => "",
		            "type" => "color"
		        ) ,
		        array(
		            "name"    => __( 'Sub Menu Items Text Weight', 'mk_framework' ),
		            "id"      => "dash_sub_menu_text_weight",
		            "default" => 400,
		            "type"    => "font_weight"
		        ),
		        array(
		            "name"    => __( 'Sub Menu Items Text Case', 'mk_framework' ),
		            "id"      => "dash_sub_menu_transform",
		            "default" => 'uppercase',
		            "options" => array(
		                "none"       => __( 'None',       'mk_framework' ),
		                "uppercase"  => __( 'Uppercase',  'mk_framework' ),
		                "capitalize" => __( 'Capitalize', 'mk_framework' ),
		                "lowercase"  => __( 'Lower case', 'mk_framework' )
		            ),
		            "type"    => "dropdown"
		        ),
				array(
		            "name"    => __( 'Sub Menu Texts Size', 'mk_framework' ),
		            "id"      => "dash_sub_menu_text_size",
		            "min"     => "10",
		            "max"     => "50",
		            "step"    => "1",
		            "unit"    => 'px',
		            "default" => "12",
		            "type"    => "range"
		        ),
			    array(
			        "name" => __('Title Weight', "mk_framework"),
			        "id" => "dash_title_weight",
			        "default" => 'bolder',
			        "type" => "font_weight"
			    ),
			    array(
			        "name" => __('Title Text Case', "mk_framework"),
			        "id" => "dash_title_transform",
			        "default" => 'uppercase',
			        "options" => array(
			            "none" => __('None', "mk_framework"),
			            "uppercase" => __('Uppercase', "mk_framework"),
			            "capitalize" => __('Capitalize', "mk_framework"),
			            "lowercase" => __('Lower case', "mk_framework")
			        ),
			        "type" => "dropdown"
			    ),
				array(
			        "name" => __('Title Text Size', "mk_framework"),
			        "id" => "dash_title_size",
			        "min" => "10",
			        "max" => "50",
			        "step" => "1",
			        "unit" => 'px',
			        "default" => "14",
			        "type" => "range"
			    ),
				array(
		            "name" => __('Widget Title Color', "mk_framework") ,
		            "id" => "dash_title_color",
		            "default" => "#fff",
		            "type" => "color"
		        ) ,

				array(
			        "name" => __('Text Weight', "mk_framework"),
			        "id" => "dash_text_weight",
			        "default" => 400,
			        "type" => "font_weight"
			    ),
				array(
			        "name" => __('Text Size', "mk_framework"),
			        "id" => "dash_text_size",
			        "min" => "10",
			        "max" => "50",
			        "step" => "1",
			        "unit" => 'px',
			        "default" => "12",
			        "type" => "range"
			    ),
		        array(
		            "name" => __('Widget Text Color', "mk_framework") ,
		            "id" => "dash_text_color",
		            "default" => "#eee",
		            "type" => "color"
		        ) ,
		        array(
		            "name" => __('Widget Links Color', "mk_framework") ,
		            "id" => "dash_links_color",
		            "default" => "#fafafa",
		            "type" => "color"
		        ) ,
		        array(
		            "name" => __('Widget Links Hover Color', "mk_framework") ,
		            "id" => "dash_links_hover_color",
		            "default" => "",
		            "type" => "color"
		        ) ,
            )
        ) ,
    )
);
