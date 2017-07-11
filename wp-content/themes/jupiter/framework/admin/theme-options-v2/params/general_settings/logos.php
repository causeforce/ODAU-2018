<?php
$general_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_logo_and_title_section",
    "name" => __("General / Logo &amp; Title", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
        array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Logo", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -41px; background-color: #fff;',
            "fields" => array(
                array(
                    "name" => __('Logo Margin', "mk_framework") ,
                    "desc" => __("This value will be applied as margin-bottom to logo.", "mk_framework") ,
                    "id" => "fullscreen_nav_logo_margin",
                    "min" => "0",
                    "max" => "250",
                    "step" => "1",
                    "unit" => 'px',
                    "default" => "125",
                    "type" => "range"
                ) ,
                array(
                    "name" => __("Default & Dark Logo ", "mk_framework") ,
                    "desc" => __("This logo will be used as your default logo, and if the transparent header is enabled and your header skin is dark.", "mk_framework") ,
                    "id" => "logo",
                    "default" => "",
                    "type" => "upload",
                ) ,
                array(
                    "name" => __("Light Logo", "mk_framework") ,
                    "desc" => __("This logo will be used when the transparent header is enabled and your header skin is light.", "mk_framework") ,
                    "id" => "light_header_logo",
                    "default" => "",
                    "type" => "upload",
                ) ,
                array(
                    "name" => __("Sticky Header Logo", "mk_framework") ,
                    "desc" => __("Use this option to upload the logo which will be used when the header is on sticky state.", "mk_framework") ,
                    "id" => "sticky_header_logo",
                    "default" => "",
                    "type" => "upload",
                ) ,
                array(
                    "name" => __("Mobile Logo", "mk_framework") ,
                    "desc" => __("Use this option to change your logo for mobile devices if your logo width is quite long to fit in mobile device screen.", "mk_framework") ,
                    "id" => "responsive_logo",
                    "default" => "",
                    "type" => "upload",
                ) ,
                array(
                    "name" => __("Sub Footer Logo", "mk_framework") ,
                    "desc" => __("This will appear in the sub-footer section. Your image should not exceed 150 * 60 pixels.", "mk_framework") ,
                    "id" => "footer_logo",
                    "default" => "",
                    "type" => "upload",
                ) ,
            )
        ) ,
        array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Favicon", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px;',
            "fields" => array(
                array(
                    "name" => __("Custom Favicon", "mk_framework") ,
                    "desc" => __("Using this option, You can upload your own custom favicon. <a target=\"_blank\" href=\"http://favicon.cc\">Generate Favicon</a>", "mk_framework") ,
                    "id" => "custom_favicon",
                    "default" => '',
                    "type" => 'upload',
                ) ,
            )
        ) ,
        array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Touch Device Icons", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px; background-color: #fff;',
            "fields" => array(
                array(
                    "name" => __("Apple iPhone Icon", "mk_framework") ,
                    "desc" => __("Icon for Apple iPhone (57px x 57px)", "mk_framework") ,
                    "id" => "iphone_icon",
                    "default" => '',
                    "type" => 'upload',
                ) ,
                array(
                    "name" => __("Apple iPhone Retina Icon", "mk_framework") ,
                    "desc" => __("Icon for Apple iPhone Retina Version (114px x 114px)", "mk_framework") ,
                    "id" => "iphone_icon_retina",
                    "default" => '',
                    "type" => 'upload',
                ) ,
                array(
                    "name" => __("Apple iPad Icon Upload", "mk_framework") ,
                    "desc" => __("Icon for Apple iPhone (72px x 72px)", "mk_framework") ,
                    "id" => "ipad_icon",
                    "default" => '',
                    "type" => 'upload',
                ) ,
                array(
                    "name" => __("Apple iPad Retina Icon Upload", "mk_framework") ,
                    "desc" => __("Icon for Apple iPad Retina Version (144px x 144px)", "mk_framework") ,
                    "id" => "ipad_icon_retina",
                    "default" => '',
                    "type" => 'upload',
                ) ,
            )
        ) ,
    ) ,
);