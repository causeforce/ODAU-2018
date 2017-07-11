<?php
$main_content_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_texts_section",
    "name" => __("Main Content / Text", "mk_framework") ,
    "desc" => __("These options defines your site's general colors.", "mk_framework") ,
    "fields" => array(
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Body Text", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9; margin-top:-40px; background-color: #fff;',
            "fields" => array(
            	array(
                    "name" => __('Font-Family', "mk_framework") ,
                    "id" => "font_family",
                    "desc" => __("Please choose the safe font family. This font family will be used as backup font (If the below none-safe fonts failed to load for any reason) and be applied to all site elements.", "mk_framework") ,
                    "default" => '',
                    "options" => array(
                        'HelveticaNeue-Light, Helvetica Neue Light, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif' => 'HelveticaNeue-Light, Helvetica Neue Light, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif',
                        'Arial Black, Gadget, sans-serif' => 'Arial Black, Gadget, sans-serif',
                        'Bookman Old Style, serif' => 'Bookman Old Style, serif',
                        'Comic Sans MS, cursive' => 'Comic Sans MS, cursive',
                        'Courier, monospace' => 'Courier, monospace',
                        'Courier New, Courier, monospace' => 'Courier New, Courier, monospace',
                        'Garamond, serif' => 'Garamond, serif',
                        'Georgia, serif' => 'Georgia, serif',
                        'Impact, Charcoal, sans-serif' => 'Impact, Charcoal, sans-serif',
                        'Lucida Console, Monaco, monospace' => 'Lucida Console, Monaco, monospace',
                        'Lucida Sans, Lucida Grande, Lucida Sans Unicode, sans-serif' => 'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif',
                        'HelveticaNeue-Light, Helvetica Neue Light, Helvetica Neue, sans-serif' => 'HelveticaNeue-Light, Helvetica Neue Light, Helvetica Neue, sans-serif',
                        'MS Sans Serif, Geneva, sans-serif' => 'MS Sans Serif, Geneva, sans-serif',
                        'MS Serif, New York, sans-serif' => 'MS Serif, New York, sans-serif',
                        'Palatino Linotype, Book Antiqua, Palatino, serif' => 'Palatino Linotype, Book Antiqua, Palatino, serif',
                        'Tahoma, Geneva, sans-serif' => 'Tahoma, Geneva, sans-serif',
                        'Times New Roman, Times, serif' => 'Times New Roman, Times, serif',
                        'Trebuchet MS, Helvetica, sans-serif' => 'Trebuchet MS, Helvetica, sans-serif',
                        'Verdana, Geneva, sans-serif' => 'Verdana, Geneva, sans-serif'
                    ) ,
                    "type" => "dropdown"
                ) ,
				array(
			        "name" => __('Text Weight', "mk_framework"),
			        "id" => "body_weight",
			        "default" => 400,
			        "type" => "font_weight"
			    ),
            	array(
			        "name" => __('Text Size', "mk_framework"),
			        "desc" => __("", "mk_framework"),
			        "id" => "body_font_size",
			        "min" => "10",
			        "max" => "50",
			        "step" => "1",
			        "unit" => 'px',
			        "default" => "14",
			        "type" => "range"
			    ),
			    array(
			        "name" => __('Line Height', "mk_framework"),
			        "desc" => __("This option will let you change the line height of texts in site. Please note that some elements has their own direct line height property, so you can not change them from here. The unit is in 'em'", "mk_framework"),
			        "id" => "body_line_height",
			        "min" => "1",
			        "max" => "4",
			        "step" => "0.01",
			        "unit" => 'em',
			        "default" => "1.66",
			        "type" => "range"
			    ),
			    array(
                    "name" => __('Text Color', "mk_framework") ,
                    "id" => "body_text_color",
                    "default" => "#777777",
                    "type" => "color"
                ) ,
                array(
                    "name" => __('Content Links Color', "mk_framework") ,
                    "id" => "a_color",
                    "default" => "#2e2e2e",
                    "type" => "color"
                ) ,
                array(
                    "name" => __('Content Links Hover Color', "mk_framework") ,
                    "id" => "a_color_hover",
                    "default" => "#f97352",
                    "type" => "color"
                ) ,
                array(
                    "name" => __('Content Strong Tag Color', "mk_framework") ,
                    "id" => "strong_color",
                    "default" => "#f97352",
                    "type" => "color"
                ) ,
            )
        ) ,
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Paragraph", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'margin-top:-31px;border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9;',
            "fields" => array(
            	array(
			        "name" => __('Text Size', "mk_framework"),
			        "id" => "p_size",
			        "min" => "10",
			        "max" => "50",
			        "step" => "1",
			        "unit" => 'px',
			        "default" => "16",
			        "type" => "range"
			    ),
			    array(
			        "name" => __('Line Height', "mk_framework"),
			        "desc" => __("This option will let you change the line height of paragraphs. The unit is in 'em'", "mk_framework"),
			        "id" => "p_line_height",
			        "min" => "1",
			        "max" => "4",
			        "step" => "0.01",
			        "unit" => 'em',
			        "default" => "1.66",
			        "type" => "range"
			    ),
				array(
                    "name" => __('Text Color', "mk_framework") ,
                    "id" => "p_color",
                    "default" => "#777777",
                    "type" => "color"
                ) ,
            )
        ) ,
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Headings", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'margin-top:-31px;border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; background-color: #fff;',
            "fields" => array(
			    array(
			        "name" => __('H1 Text Weight', "mk_framework"),
			        "id" => "h1_weight",
			        "default" => 600,
			        "type" => "font_weight"
			    ),
			    array(
			        "name" => __('H1 Text Case', "mk_framework"),
			        "id" => "h1_transform",
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
			        "name" => __('H1 Text Size', "mk_framework"),
			        "id" => "h1_size",
			        "min" => "10",
			        "max" => "50",
			        "step" => "1",
			        "unit" => 'px',
			        "default" => "36",
			        "type" => "range"
			    ),
				array(
                    "name" => __('H1 Text Color', "mk_framework") ,
                    "id" => "h1_color",
                    "default" => "#404040",
                    "type" => "color"
                ) ,
			    array(
			        "name" => __('H2 Text Weight', "mk_framework"),
			        "id" => "h2_weight",
			        "default" => 600,
			        "type" => "font_weight"
			    ),
			    array(
			        "name" => __('H2 Text Case', "mk_framework"),
			        "id" => "h2_transform",
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
			        "name" => __('H2 Text Size', "mk_framework"),
			        "id" => "h2_size",
			        "min" => "10",
			        "max" => "50",
			        "step" => "1",
			        "unit" => 'px',
			        "default" => "30",
			        "type" => "range"
			    ),
				array(
                    "name" => __('H2 Text Color', "mk_framework") ,
                    "id" => "h2_color",
                    "default" => "#404040",
                    "type" => "color"
                ) ,
			    array(
			        "name" => __('H3 Text Weight', "mk_framework"),
			        "id" => "h3_weight",
			        "default" => 600,
			        "type" => "font_weight"
			    ),
			    array(
			        "name" => __('H3 Text Case', "mk_framework"),
			        "id" => "h3_transform",
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
			        "name" => __('H3 Text Size', "mk_framework"),
			        "id" => "h3_size",
			        "min" => "10",
			        "max" => "50",
			        "step" => "1",
			        "unit" => 'px',
			        "default" => "24",
			        "type" => "range"
			    ),
				array(
                    "name" => __('H3 Text Color', "mk_framework") ,
                    "id" => "h3_color",
                    "default" => "#404040",
                    "type" => "color"
                ) ,
			    array(
			        "name" => __('H4 Text Weight', "mk_framework"),
			        "id" => "h4_weight",
			        "default" => 600,
			        "type" => "font_weight"
			    ),
			    array(
			        "name" => __('H4 Text Case', "mk_framework"),
			        "id" => "h4_transform",
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
			        "name" => __('H4 Text Size', "mk_framework"),
			        "id" => "h4_size",
			        "min" => "10",
			        "max" => "50",
			        "step" => "1",
			        "unit" => 'px',
			        "default" => "18",
			        "type" => "range"
			    ),
			    array(
                    "name" => __('H4 Text Color', "mk_framework") ,
                    "id" => "h4_color",
                    "default" => "#404040",
                    "type" => "color"
                ) ,
			    array(
			        "name" => __('H5 Text Weight', "mk_framework"),
			        "id" => "h5_weight",
			        "default" => 600,
			        "type" => "font_weight"
			    ),
			    array(
			        "name" => __('H5 Text Case', "mk_framework"),
			        "id" => "h5_transform",
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
			        "name" => __('H5 Text Size', "mk_framework"),
			        "id" => "h5_size",
			        "min" => "10",
			        "max" => "50",
			        "step" => "1",
			        "unit" => 'px',
			        "default" => "16",
			        "type" => "range"
			    ),
			    array(
                    "name" => __('H5 Text Color', "mk_framework") ,
                    "id" => "h5_color",
                    "default" => "#404040",
                    "type" => "color"
                ) ,
			    array(
			        "name" => __('H6 Text Weight', "mk_framework"),
			        "id" => "h6_weight",
			        "default" => 600,
			       "type" => "font_weight"
			    ),
			    array(
			        "name" => __('H6 Text Case', "mk_framework"),
			        "id" => "h6_transform",
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
			        "name" => __('H6 Text Size', "mk_framework"),
			        "id" => "h6_size",
			        "min" => "10",
			        "max" => "50",
			        "step" => "1",
			        "unit" => 'px',
			        "default" => "14",
			        "type" => "range"
			    ),
			    array(
                    "name" => __('H6 Text Color', "mk_framework") ,
                    "id" => "h6_color",
                    "default" => "#404040",
                    "type" => "color"
                ) ,
            )
		) ,
    ) ,
);
