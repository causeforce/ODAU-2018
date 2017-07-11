<?php
$footer_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_footer_section",
    "name" => __("Footer", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
		array(
            "name" => __("Display Footer", "mk_framework") ,
            "desc" => __("You can enable or disable footer section using this option.", "mk_framework") ,
            "id" => "disable_footer",
            "default" => 'true',
            "type" => "toggle",
        ) ,
		array(
            "name" => __("Show on Mobile", "mk_framework") ,
            "desc" => __("", "mk_framework") ,
            "id" => "footer_disable_mobile",
            "default" => 'false',
            "type" => "toggle",
        ) ,
		array(
            "name" => __("Boxed", "mk_framework") ,
            "desc" => __("If this option is enabled, the footer content will be in main grid (the width is defined in theme general settings), else it will be fullwdith screen wide.", "mk_framework") ,
            "id" => "boxed_footer",
            "default" => 'true',
            "type" => "toggle",
        ) ,
        array(
            "name" => __("Footer Type", "mk_framework") ,
            "desc" => __("You can choose footer type. Fixed footer should not be used in boxed layout.", "mk_framework") ,
            "id" => "footer_type",
            "default" => '1',
            "options" => array(
                "1" => __('Regular', "mk_framework") ,
                "2" => __('Fixed', "mk_framework") ,
            ) ,
            "type" => "radio",
        ) ,
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Container", "mk_framework") ,
            "type" => "groupset",
			'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px;',
            "fields" => array(
				array(
		            "name" => __("Column Layout", "mk_framework") ,
		            "id" => "footer_columns",
		            "default" => "4",
		            "item_padding" => "30px 30px 0 0",
		            "options" => array(
		                "1" => 'column_1.png',
		                "2" => 'column_2.png',
		                "3" => 'column_3.png',
		                "4" => 'column_4.png',
		                "5" => 'column_5.png',
		                "6" => 'column_6.png',
		                "half_sub_half" => 'column_half_sub_half.png',
		                "half_sub_third" => 'column_half_sub_third.png',
		                "third_sub_third" => 'column_third_sub_third.png',
		                "third_sub_fourth" => 'column_third_sub_fourth.png',
		                "sub_half_half" => 'column_sub_half_half.png',
		                "sub_third_half" => 'column_sub_third_half.png',
		                "sub_third_third" => 'column_sub_third_third.png',
		                "sub_fourth_third" => 'column_sub_fourth_third.png',
		            ) ,
		            "type" => "visual_selector",
		        ) ,
		        array(
			        "name" => __('Top Border Thickness', "mk_framework"),
			        "id" => "footer_top_thickness",
			        "min" => "0",
			        "max" => "50",
			        "step" => "1",
			        "unit" => 'px',
			        "default" => "0",
			        "type" => "range"
			    ),
			    array(
			        "name" => __('Top Border Color', "mk_framework"),
			        "id" => "footer_top_border_color",
			        "default" => "",
			        "type" => "color"
			    ),
				array(
		            "name" => __("Column Gutter Space", "mk_framework") ,
		            "desc" => __("Padding Between column in percent.", "mk_framework") ,
		            "id" => "footer_gutter",
		            "default" => "2",
		            "min" => "0",
		            "max" => "15",
		            "step" => "1",
		            "unit" => '%',
		            "type" => "range",
		        ) ,
		        array(
		            "name" => __("Padding Bottom/Top", "mk_framework") ,
		            "desc" => __("", "mk_framework") ,
		            "id" => "footer_wrapper_padding",
		            "default" => "30",
		            "min" => "0",
		            "max" => "250",
		            "step" => "1",
		            "unit" => 'px',
		            "type" => "range",
		        ) ,
		        array(
		            "name" => __("Widget Margin Bottom", "mk_framework") ,
		            "desc" => __("", "mk_framework") ,
		            "id" => "footer_widget_margin_bottom",
		            "default" => "40",
		            "min" => "0",
		            "max" => "200",
		            "step" => "1",
		            "unit" => 'px',
		            "type" => "range",
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
		            "name" => __('Title Text Weight', "mk_framework") ,
		            "id" => "footer_title_weight",
		            "default" => 'bolder',
		            "type" => "font_weight"
		        ) ,
				array(
		            "name" => __('Title Text Case', "mk_framework") ,
		            "id" => "footer_title_transform",
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
		            "name" => __('Title Text Size', "mk_framework") ,
		            "id" => "footer_title_size",
		            "min" => "10",
		            "max" => "50",
		            "step" => "1",
		            "unit" => 'px',
		            "default" => "14",
		            "type" => "range"
		        ) ,
				array(
			        "name" => __('Title Text Color', "mk_framework"),
			        "id" => "footer_title_color",
			        "default" => "#fff",
			        "type" => "color"
			    ),
		        array(
		            "name" => __('Text Weight', "mk_framework") ,
		            "id" => "footer_text_weight",
		            "default" => 400,
		            "type" => "font_weight"
		        ) ,
				array(
		            "name" => __('Text Size', "mk_framework") ,
		            "id" => "footer_text_size",
		            "min" => "10",
		            "max" => "50",
		            "step" => "1",
		            "unit" => 'px',
		            "default" => "14",
		            "type" => "range"
		        ) ,
			    array(
			        "name" => __('Text Color', "mk_framework"),
			        "id" => "footer_text_color",
			        "default" => "#808080",
			        "type" => "color"
			    ),
			    array(
			        "name" => __('Footer Links Color', "mk_framework"),
			        "id" => "footer_links_color",
			        "default" => "#999999",
			        "type" => "color"
			    ),
			    array(
			        "name" => __('Footer Links Hover Color', "mk_framework"),
			        "id" => "footer_links_hover_color",
			        "default" => "",
			        "type" => "color"
			    ),
            )
		) ,
    )
);
