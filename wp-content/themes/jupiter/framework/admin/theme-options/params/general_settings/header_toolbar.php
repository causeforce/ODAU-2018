<?php

$general_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_header_toolbar_section",
    "name" => __("General / Header Toolbar", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
        array(
            "name" => __("Toolbar Date", "mk_framework") ,
            "desc" => __("Display today's date in header toolbar section. Make sure your hosting server date configurations works as expected otherwise you might need to fix in hosting settings.", "mk_framework") ,
            "id" => "enable_header_date",
            "default" => 'false',
            "type" => "toggle",
        ) ,
        
        array(
            "name" => __("Toolbar Tagline", "mk_framework") ,
            "desc" => __("Enter your site slogan or an important message.", "mk_framework") ,
            "id" => "header_toolbar_tagline",
            "default" => "",
            "type" => "text",
        ) ,
        array(
            "name" => __("Phone Number", "mk_framework") ,
            "desc" => __("", "mk_framework") ,
            "id" => "header_toolbar_phone",
            "default" => "",
            "type" => "text",
        ) ,
        array(
            "name" => __("Email Address", "mk_framework") ,
            "desc" => __("", "mk_framework") ,
            "id" => "header_toolbar_email",
            "default" => "",
            "type" => "text",
        ) ,
        array(
            "name" => __("Show Login Form?", "mk_framework") ,
            "desc" => __("", "mk_framework") ,
            "id" => "header_toolbar_login",
            "default" => "true",
            "type" => "toggle",
        ) ,
        array(
            "name" => __("Show Mailchimp Subscribe Form?", "mk_framework") ,
            "desc" => __("", "mk_framework") ,
            "id" => "header_toolbar_subscribe",
            "default" => "false",
            "type" => "toggle",
        ) ,
        array(
            "name"    => __( 'Mailchimp List ID', 'mk_framework' ) ,
            "desc"    => sprintf( __( 'Enter your MailChimp List ID here. For more information, read <a href="%s" target="_blank">Find Your List ID</a> article.', 'mk_framework' ), 'http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id') ,
            "id"      => "mailchimp_list_id",
            "default" => "",
            "type"    => "text"
        ) ,
        array(
            "name"    => __( 'Mailchimp Opt-In Email', 'mk_framework' ) ,
            "desc"    => __( 'Subscribers must receive a <strong>Please Confirm Subscription</strong> email?', 'mk_framework' ) ,
            "id"      => "mailchimp_optin",
            "default" => 'false',
            "type"    => "toggle"
        ) ,
    ) ,
);