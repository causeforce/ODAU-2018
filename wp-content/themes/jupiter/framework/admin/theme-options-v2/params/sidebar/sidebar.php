<?php
$sidebar_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_sidebar_section",
    "name" => __("Sidebar", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
    	array(
            "name" => __("Create a new sidebar", "mk_framework") ,
            "desc" => __("Enter a name for new sidebar. It must be a valid name which starts with a letter, followed by letters, numbers, spaces, or underscores", "mk_framework") ,
            "id" => "sidebars",
            "default" => '',
            "type" => 'custom_sidebar',
        ) ,
        array(
            "name" => __("Activate Sidebars For Custom Post Types", "mk_framework") ,
            "desc" => __("Select post types you would like assigning custom sidebars for their single page. You can use this option to choose a custom sidebar for your third party plugin post types.", "mk_framework") ,
            "id" => "custom_sidebars",
            "default" => '',
            "options" => Mk_Options_Framework::get_post_types(),
            "type" => 'multiselect',
        ) ,
        // Commented out for now. This will later hold fields.
        /*array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Container", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px;',
            "fields" => array()
        ) ,*/
        array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Text", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px;',
            "fields" => array(
                array(
                    "name" => __('Title Text Weight', "mk_framework") ,
                    "id" => "sidebar_title_weight",
                    "default" => 'bolder',
                    "type" => "font_weight"
                ) ,
                array(
                    "name" => __('Title Text Case', "mk_framework") ,
                    "id" => "sidebar_title_transform",
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
                    "id" => "sidebar_title_size",
                    "min" => "10",
                    "max" => "50",
                    "step" => "1",
                    "unit" => 'px',
                    "default" => "14",
                    "type" => "range"
                ) ,
                array(
                    "name" => __('Title Text Color', "mk_framework"),
                    "id" => "sidebar_title_color",
                    "default" => "#333333",
                    "type" => "color"
                ),
                array(
                    "name" => __('Text Weight', "mk_framework") ,
                    "id" => "sidebar_text_weight",
                    "default" => 400,
                    "type" => "font_weight"
                ) ,
                array(
                    "name" => __('Text Size', "mk_framework") ,
                    "id" => "sidebar_text_size",
                    "min" => "10",
                    "max" => "50",
                    "step" => "1",
                    "unit" => 'px',
                    "default" => "14",
                    "type" => "range"
                ) ,
                array(
                    "name" => __('Text Color', "mk_framework"),
                    "id" => "sidebar_text_color",
                    "default" => "#999999",
                    "type" => "color"
                ),
                array(
                    "name" => __('Sidebar Links Color', "mk_framework"),
                    "id" => "sidebar_links_color",
                    "default" => "#999999",
                    "type" => "color"
                ),
                array(
                    "name" => __('Sidebar Links Hover Color', "mk_framework"),
                    "id" => "sidebar_links_hover_color",
                    "default" => "",
                    "type" => "color"
                ),
            )
        ) ,
    )
);
