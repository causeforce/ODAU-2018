<?php
$advanced_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_speed_optimizations_section",
    "name" => __("Advanced / Speed Optimizations", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
        array(
            "name" => __("Google PageSpeed Optimization (Beta feature)", "mk_framework") ,
            "desc" => __("Optimizes your web-site assets for Google in order to get higher points and rankings.
            Before enabling this option make sure that you have : <br />
            1- Properly formatted coding tags. <br />
            2- Powerful hosting. This option consumes server resources greedily.  <br />
            3- Proper Caching and Minifying plug-ins. We also recommend Super Cache and Super Minify plug-ins, which is free.<br />
            This feature is yet in beta stage. Do not use this in a production website.
            ", "mk_framework") ,
            "id" => "pagespeed-optimization",
            "default" => "false",
            "type" => "toggle"
        ),
        array(
            "name" => __("Google PageSpeed Defer Optimization (Beta feature)", "mk_framework") ,
            "desc" => __("Defers web-site assets for testmysite.thinkwithgoogle.com in order to get higher points and rankings. <br /> 
            This option defers blocking javascript and style loadings.<br />
            Warning : This option is not fully compatible with <strong>Master Slider Plugin</strong>
            ", "mk_framework") ,
            "id" => "pagespeed-defer-optimization",
            "default" => "false",
            "type" => "toggle"
        ),
        array(
            "name" => __("Intelligent Components Technology", "mk_framework") ,
            "desc" => __("If you disable this option your web site will serve all component assets even it's not needed. In some exceptional cases Intelligent Components Technology can cause problems with your hosting such as:  <br />
            1- Unproperly customised asset files. <br />
            2- Unsufficient shared hosting resources.  <br />
            3- Weird caching settings by hosting environment. (e.g. Godaddy Managed Wordpress hosting)", "mk_framework") ,
            "id" => "dynamic-assets",
            "default" => "true",
            "type" => "toggle"
        ),
        array(
            "name" => __("Minify Theme Javascript File", "mk_framework") ,
            "desc" => __("If you enable this option pre-minified theme Java Script files will be renderred in front-end. Minified JS is 30%-40% smaller in file size which will improve page speed.", "mk_framework") ,
            "id" => "minify-js",
            "default" => "false",
            "type" => "toggle"
        ) ,
        array(
            "name" => __("Minify Theme Styles Files", "mk_framework") ,
            "desc" => __("If you enable this option pre-minified theme CSS files will be renderred in front-end. Minified CSS is 30%-40% smaller in file size which will improve page speed.", "mk_framework") ,
            "id" => "minify-css",
            "default" => "true",
            "type" => "toggle"
        ) ,
        array(
            "name" => __("Query String From Static Flies", "mk_framework") ,
            "desc" => __("Disabling this option will remove \"ver\" query string from JS and CSS files. For More info Please <a target=\"_blank\" href=\"https://developers.google.com/speed/docs/best-practices/caching#LeverageProxyCaching\">Read Here</a>. Disabling this option may cause issues with some hosting providers internal caching tools.", "mk_framework") ,
            "id" => "remove-js-css-ver",
            "default" => "true",
            "type" => "toggle"
        ) ,
    ) ,
);
