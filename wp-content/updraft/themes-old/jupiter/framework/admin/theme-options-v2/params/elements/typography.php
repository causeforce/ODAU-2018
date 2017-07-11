<?php
$elements_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_typography_section",
    "name" => __("Elements / Typography", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
    	array(
            "heading" => '<img src="' . THEME_ADMIN_ASSETS_URI . '/images/typography-google-fonts.png" />',
            "title" => __("SET 1", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -41px; background-color: #fff;',
            "fields" => array(
                array(
                    "name" => __("", "mk_framework") ,
                    "desc" => __("Please choose elements that you would to set for the above font family. setting it to Body will affect all elements.", "mk_framework") ,
                    "id" => "special_elements_1",
                    "default" => array(
                        'body'
                    ) ,
                    "type" => "css_class_selector"
                ) ,
                array(
                    "name" => __("Font Family", "mk_framework") ,
                    "id" => "special_fonts_list_1",
                    "desc" => __("Choose your font family name.", "mk_framework") ,
                    "default" => 'Open+Sans',
                    "type" => "font_family"
                ) ,
                array(
                    "id" => __("special_fonts_type_1", "mk_framework") ,
                    "default" => 'google',
                    "type" => "hidden_input"
                ) ,
                array(
                    "name" => __("Google Font Character Sets", "mk_framework") ,
                    "desc" => __("Please choose your desired character sets hers as a comma separated list. This option is going to work if you choose Google Fonts and need to have glyphs other than English.", "mk_framework") ,
                    "id" => "google_font_subset_1",
                    "default" => '',
                    "options" => array(
                        'latin' => 'latin',
                        'latin-ext' => 'latin-ext',
                        'cyrillic-ext' => 'cyrillic-ext',
                        'greek-ext' => 'greek-ext',
                        'greek' => 'greek',
                        'vietnamese' => 'vietnamese',
                        'cyrillic' => 'cyrillic',
                    ) ,
                    "type" => "dropdown"
                ) ,
            )
        ) ,
        array(
            "heading" => '<img src="' . THEME_ADMIN_ASSETS_URI . '/images/typography-google-fonts.png" />',
            "title" => __("SET 2", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px;',
            "fields" => array(
                array(
                    "name" => __("", "mk_framework") ,
                    "desc" => __("Please choose elements that you would to set for the above font family. setting it to Body will affect all elements.", "mk_framework") ,
                    "id" => "special_elements_2",
                    "default" => array() ,
                    "type" => "css_class_selector"
                ) ,
                array(
                    "name" => __("Font Family", "mk_framework") ,
                    "id" => "special_fonts_list_2",
                    "desc" => __("Choose your font family name.", "mk_framework") ,
                    "default" => '',
                    "type" => "font_family"
                ) ,
                array(
                    "id" => "special_fonts_type_2",
                    "default" => 'google',
                    "type" => "hidden_input"
                ) ,
                array(
                    "name" => __("Google Font Character Sets", "mk_framework") ,
                    "desc" => __("Please choose your desired character sets hers as a comma separated list. This option is going to work if you choose Google Fonts and need to have glyphs other than English.", "mk_framework") ,
                    "id" => "google_font_subset_2",
                    "default" => '',
                    "options" => array(
                        'latin' => 'latin',
                        'latin-ext' => 'latin-ext',
                        'cyrillic-ext' => 'cyrillic-ext',
                        'greek-ext' => 'greek-ext',
                        'greek' => 'greek',
                        'vietnamese' => 'vietnamese',
                        'cyrillic' => 'cyrillic',
                    ) ,
                    "type" => "dropdown"
                ) ,
            )
        ) ,
        array(
            "heading" => '<img src="' . THEME_ADMIN_ASSETS_URI . '/images/typekit.png" />',
            "title" => __("SET 3", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px; background-color: #fff;',
            "fields" => array(
                array(
                    "name" => __("", "mk_framework") ,
                    "desc" => __("Please choose elements that you would to set for the above font family. setting it to Body will set it all elements.", "mk_framework") ,
                    "id" => "typekit_elements_1",
                    "default" => array() ,
                    "type" => "css_class_selector"
                ) ,
                array(
                    "name" => __("Font Family", "mk_framework") ,
                    "desc" => __("Type the name of the font family you have picked from typekit library.", "mk_framework") ,
                    "id" => "typekit_font_family_1",
                    "default" => "",
                    "type" => "text"
                ) ,
            )
        ) ,
        array(
            "title" => __("SET 4", "mk_framework") ,
            "heading" => '<img src="' . THEME_ADMIN_ASSETS_URI . '/images/typekit.png" /><span class="mk-groupset-desc">',
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px;',
            "fields" => array(
	            array(
                    "name" => __("", "mk_framework") ,
                    "desc" => __("Please choose elements that you would to set for the above font family. setting it to Body will set it all elements.", "mk_framework") ,
                    "id" => "typekit_elements_2",
                    "default" => array() ,
                    "type" => "css_class_selector"
                ) ,
                array(
	                "name" => __("Font Family", "mk_framework") ,
	                "desc" => __("Type the name of the font family you have picked from typekit library.", "mk_framework") ,
	                "id" => "typekit_font_family_2",
	                "default" => "",
	                "type" => "text"
	            ) ,
	        )
        ) ,
    )
);
