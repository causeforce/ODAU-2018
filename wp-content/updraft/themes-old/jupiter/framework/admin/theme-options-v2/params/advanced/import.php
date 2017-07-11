<?php
$advanced_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_import_options_section",
    "name" => __("Advanced / Import Theme Options", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
        array(
            "name" => __("Import Theme Options", "mk_framework") ,
            "desc" => __("", "mk_framework") ,
            "id" => "theme_import_options",
            "default" => '',
            "type" => "import"
        ) ,
    ) ,
);
