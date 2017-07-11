<?php

$general_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_api_integrations_section",
    "name" => __("General / API Integrations", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
    	array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Twitter Settings", "mk_framework") ,
            "type" => "groupset",
            "styles" => "border-bottom:1px solid #d9d9d9; margin-top:-40px; background: #fff;",
            "fields" => array(
            	array(
		            "name" => __("Consumer Key", 'mk_framework') ,
		            "desc" => __("", "mk_framework") ,
		            "id" => "twitter_consumer_key",
		            "default" => "",
		            "type" => "text"
		        ) ,
		        array(
		            "name" => __("Consumer Secret", 'mk_framework') ,
		            "desc" => __("", "mk_framework") ,
		            "id" => "twitter_consumer_secret",
		            "default" => "",
		            "type" => "text"
		        ) ,
		        array(
		            "name" => __("Access Token", 'mk_framework') ,
		            "desc" => __("", "mk_framework") ,
		            "id" => "twitter_access_token",
		            "default" => "",
		            "type" => "text"
		        ) ,
		        array(
		            "name" => __("Access Token Secret", 'mk_framework') ,
		            "desc" => __("", "mk_framework") ,
		            "id" => "twitter_access_token_secret",
		            "default" => "",
		            "type" => "text"
		        ) ,
            )
        ) ,
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("MailChimp Settings", "mk_framework") ,
            "type" => "groupset",
            "styles" => "margin-top:-31px;border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9;",
            "fields" => array(
				array(
		            "name"    => __( 'Mailchimp List ID', 'mk_framework' ) ,
		            "desc"    => sprintf( __( 'Add your MailChimp List ID here. For more information, please read <a href="%s" target="_blank">Find Your List ID</a> article.', 'mk_framework' ), 'http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id') ,
		            "id"      => "mailchimp_list_id",
		            "default" => "",
		            "type"    => "text"
		        ) ,
		        array(
		            "name"    => __( 'Mailchimp Opt-In Email', 'mk_framework' ) ,
		            "desc"    => __( 'Enable this option if you want your subscribers receive a <strong>Please Confirm Subscription</strong> email.', 'mk_framework' ) ,
		            "id"      => "mailchimp_optin",
		            "default" => 'false',
		            "type"    => "toggle"
		        ) ,
            )
        ) ,
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Other Integrations", "mk_framework") ,
            "type" => "groupset",
            "styles" => "margin-top:-31px;border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; background-color: #fff;",
            "fields" => array(
            	 array(
		            "name" => __("Google Analytics ID", "mk_framework") ,
		            "desc" => __("Enter your Google Analytics ID here to track your site with Google Analytics. Jupiter does not support Event Tracking. To use this feature, a 3rd-party plugin is required.", "mk_framework") ,
		            "id" => "analytics",
		            "default" => "",
		            "type" => "text",
		        ) ,
				array(
					"name" => __('Typekit Kit ID', "mk_framework") ,
					"desc" => __("If you want to use typekit in your site simply enter The Type Kit ID you get from Typekit site. <a target='_blank' href='http://help.typekit.com/customer/portal/articles/6840-using-typekit-with-wordpress-com'>Read More</a>", "mk_framework") ,
					"id" => "typekit_id",
					"default" => "",
					"type" => "text",
				) ,
				array(
		            "name" => __('MailChimp API Key', "mk_framework") ,
		            "desc" => __('Enter your MailChimp API Key to get subscribers.', "mk_framework") ,
		            "id" => "mailchimp_api_key",
		            "default" => "",
		            "type" => "text",
		        ) ,
		        array(
		            "name" => __('Google Maps API Key', "mk_framework") ,
		            "desc" => sprintf(__('You will need to <a target="_blank" href="%s">get an API key</a> for Google Maps. <br>
		                1. Go to the <a target="_blank" href="%s">Google Developers Console</a>. <br>
		                2. Create or select a project. <br>
		                3. Click Continue to enable the API and any related services.<br>
		                4. On the Credentials page, get a Browser key (and set the API Credentials).', "mk_framework"), "https://console.developers.google.com/flows/enableapi?apiid=maps_backend,geocoding_backend,directions_backend,distance_matrix_backend,elevation_backend&keyType=CLIENT_SIDE&reusekey=true", "https://console.developers.google.com/flows/enableapi?apiid=maps_backend,geocoding_backend,directions_backend,distance_matrix_backend,elevation_backend&keyType=CLIENT_SIDE&reusekey=true" ) ,
		            "id" => "google_maps_api_key",
		            "default" => "",
		            "type" => "text",
		        ) ,
            )
        ) ,
    ) ,
);