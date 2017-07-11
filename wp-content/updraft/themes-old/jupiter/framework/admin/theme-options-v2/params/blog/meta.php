<?php
$blog_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_blog_meta_section",
    "name" => __("Blog / Blog Meta", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
		array(
            "name" => __("Display Meta Options", "mk_framework") ,
            "desc" => __("Using this option you can show/hide extra information about the blog or post, such as Author, Date Created, etc...", "mk_framework") ,
            "id" => "single_meta_section",
            "default" => 'true',
            "type" => "toggle"
        ) ,
        array(
            "name" => __("Meta Tags", "mk_framework") ,
            "desc" => __("Using this option you can Show/Hide meta tags that you have set in Tags meta box inside each post.", "mk_framework") ,
            "id" => "diable_single_tags",
            "default" => 'true',
            "type" => "toggle"
        ) ,
    )
);
