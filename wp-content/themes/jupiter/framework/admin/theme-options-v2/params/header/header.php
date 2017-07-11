<?php
$header_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_header_section",
    "name" => __("Header", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
    	array(
            "id" => "theme_header_align",
            "default" => "left",
            "type" => 'hidden_input',
        ) ,
		array(
            "id" => "theme_toolbar_toggle",
            "default" => "true",
            "type" => 'hidden_input',
        ) ,
		array(
            "name" => __("Header Styles", "mk_framework") ,
            "desc" => __("using this option you can choose your header style, elements align and toggle off/on header toolbar.", "mk_framework") ,
            "id" => "theme_header_style",
            "default" => '1',
            "type" => 'header_styles',
        ) ,
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Secondary Menu Settings", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'margin-top:-21px;border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9;',
            "dependency" => array(
                   'element' => "theme_header_style",
                   'value' => array(
                       '1',
                       '2',
                       '3'
                   )
            ),
            "fields" => array(
                array(
                    "name" => __("Style", "mk_framework") ,
                    "desc" => __("Side Dashboard Style is managed from Widgets and you should add your content into Side Dashboard widget area. However the Fullscreen Menu feeds from appearance > Menus. You need build a menu and assign it to fullscreen location. All nested menu items will not be displayed in Fullscreen navigation for header style 3. Be noted that you can not completely disable secondary navigation in header style 3!", "mk_framework") ,
                    "id" => "secondary_menu",
                    "default" => 'fullscreen',
                    "options" => array(
                        "fullscreen" => __('Full Screen Navigation', "mk_framework") ,
                        "dashboard" => __('Side Dashboard', "mk_framework") ,
                    ) ,
                    "type" => "dropdown",
                ) ,

                 array(
                    "name" => __("Burger Icon Size", "mk_framework") ,
                    "desc" => __("", "mk_framework") ,
                    "id" => "header_burger_size",
                    "default" => 'small',
                    "options" => array(
                        "small" => __('Small', "mk_framework") ,
                        "big" => __('Big', "mk_framework") ,
                    ) ,
                    "type" => "dropdown",
                ) ,
                 array(
                    "name" => __("Show Secondary Menu for Header Style 1 & 2", "mk_framework") ,
                    "desc" => __("Enable this option if you would like to have secondary menu in both header style 1 & 2.", "mk_framework") ,
                    "id" => "seondary_header_for_all",
                    "default" => 'false',
                    "type" => "toggle",
                ) ,
            )
        ) ,
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Vertical Header Settings", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; background-color: #fff; margin-top: -31px;',
			"fields" => array(
				array(
                    "name" => __("Navigation Animation", "mk_framework") ,
                    "desc" => __("Animation to show sub menu items.", "mk_framework") ,
                    "id" => "vertical_menu_anim",
                    "default" => '1',
                    "options" => array(
                        "1" => __('Style 1', "mk_framework") ,
                        "2" => __('Style 2', "mk_framework") ,
                    ) ,
                    "type" => "dropdown",
                ) ,
                array(
                    "name" => __("Logo Align", "mk_framework") ,
                    "desc" => __("", "mk_framework") ,
                    "id" => "vertical_header_logo_align",
                    "default" => 'center',
                    "options" => array(
                        "left" => __('Left', "mk_framework") ,
                        "center" => __('Center', "mk_framework") ,
                        "right" => __('Right', "mk_framework") ,
                    ) ,
                    "type" => "dropdown",
                ) ,
                array(
                    "name" => __("Logo Top & Bottom padding", "mk_framework") ,
                    "desc" => __("", "mk_framework") ,
                    "id" => "vertical_header_logo_padding",
                    "default" => "10",
                    "min" => "0",
                    "max" => "400",
                    "step" => "1",
                    "unit" => 'px',
                    "type" => "range",
                ) ,
                array(
                    "name" => __("Text Align", "mk_framework") ,
                    "desc" => __("", "mk_framework") ,
                    "id" => "vertical_header_align",
                    "default" => 'left',
                    "options" => array(
                        "left" => __('Left', "mk_framework") ,
                        "center" => __('Center', "mk_framework") ,
                        "right" => __('Right', "mk_framework") ,
                    ) ,
                    "type" => "dropdown",
                ) ,
                array(
                    "name" => __("Copyright Text", "mk_framework") ,
                    "desc" => __("", "mk_framework") ,
                    "rows" => 2,
                    "id" => "vertical_menu_copyright",
                    "default" => 'Copyright All Rights Reserved &copy; 2017',
                    "type" => "textarea",
                ) ,
			)
		) ,
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px;',
			"fields" => array(
				array(
		            "name" => __("Boxed Header", "mk_framework") ,
		            "desc" => __("This option will fit the header and header toolbar into main grid container which you define in global settings.", "mk_framework") ,
		            "id" => "header_grid",
		            "default" => 'true',
		            "type" => "toggle",
		        ) ,
				array(
		            "name" => __("Display Logo", "mk_framework") ,
		            "desc" => __("Using this option you can hide logo for header.", "mk_framework") ,
		            "id" => "hide_header_logo",
		            "default" => 'true',
		            "type" => "toggle",
		        ) ,
				array(
		            "name" => __("Logo in the Middle", "mk_framework") ,
		            "desc" => __("If enabled logo will be in the middle of the navigation. make sure you have \"even\" main menu items for correct alignment. This option will be only working with header style 1", "mk_framework") ,
		            "id" => "logo_in_middle",
		            "default" => 'false',
		            "type" => "toggle",
		        ) ,
				array(
		            "name" => __("Show Main Navigation", "mk_framework") ,
		            "desc" => __("You may need to hide Main Navigation and this option will give you this power.", "mk_framework") ,
		            "id" => "hide_header_nav",
		            "default" => 'true',
		            "type" => "toggle",
		        ) ,
				array(
		            "name" => __("Search Form in Header", "mk_framework") ,
		            "desc" => __("Please choose the header search form location/style.", "mk_framework") ,
		            "id" => "header_search_location",
		            "default" => 'fullscreen_search',
		            "options" => array(
		                "disable" => __('No Thanks!', "mk_framework") ,
		                "toolbar" => __('Header Toolbar (toolbar must be enabled)', "mk_framework") ,
		                "header" => __('Header Main Area (only in header style 1)', "mk_framework") ,
		                "beside_nav" => __('Inside Main Navigation with Tooltip', "mk_framework") ,
		                "fullscreen_search" => __('Inside Main Navigation With Fullscreen layer', "mk_framework") ,
		            ) ,
		            "type" => "dropdown",
		        ) ,
				array(
		            "name" => __("Header Start Tour Text", "mk_framework") ,
		            "desc" => __("If you dont want to show sart a tour link leave this field blank. This link will be added to the header right section in header style 1", "mk_framework") ,
		            "id" => "header_start_tour_text",
		            "default" => __("", "mk_framework"),
		            "type" => "text",
		        ) ,
		        array(
		            "name" => __("Header Start Tour URL", "mk_framework") ,
		            "desc" => __("The URL where this will be linked with. inluding http://", "mk_framework") ,
		            "id" => "header_start_tour_page",
		            "default" => '',
		            "type" => "text",
		        ) ,
				array(
			        "name" => __('Header Start Tour Link Font Size', "mk_framework"),
			        "id" => "start_tour_size",
			        "min" => "10",
			        "max" => "50",
			        "step" => "1",
			        "unit" => 'px',
			        "default" => "14",
			        "type" => "range"
			    ),
				array(
		            "name" => __("Main Navigation for Logged In User", "mk_framework") ,
		            "desc" => sprintf(__("Please choose the menu location that you would like to show as global main navigation for logged in users. You should first <a target='_blank' href='%s'>create menu</a> and then <a target='_blank' href='%s'>assign to menu locations.</a>", "mk_framework"), admin_url('nav-menus.php'), admin_url('nav-menus.php') . "?action=locations" ) ,
		            "id" => "loggedin_menu",
		            "default" => '',
		            "options" => array(
		                "primary-menu" => __('Primary Navigation', "mk_framework") ,
		                "second-menu" => __('Second Navigation', "mk_framework") ,
		                "third-menu" => __('Third Navigation', "mk_framework") ,
		                "fourth-menu" => __('Fourth Navigation', "mk_framework") ,
		                "fifth-menu" => __('Fifth Navigation', "mk_framework") ,
		                "sixth-menu" => __('Sixth Navigation', "mk_framework") ,
		                "seventh-menu" => __('Seventh Navigation', "mk_framework") ,
		                "eighth-menu" => __('Eighth Navigation', "mk_framework") ,
		                "ninth-menu" => __('Ninth Navigation', "mk_framework") ,
		                "tenth-menu" => __('Tenth Navigation', "mk_framework") ,
		            ) ,
		            "type" => "dropdown",
		        ) ,
			)
		) ,
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Container", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'margin-top:-31px;border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; background-color: #fff;',
			"fields" => array(
				array(
		            "name" => __("Header Height", "mk_framework") ,
		            "desc" => __("You can change header height using this option. (default:100px).", "mk_framework") ,
		            "id" => "header_height",
		            "default" => "90",
		            "min" => "50",
		            "max" => "800",
		            "step" => "1",
		            "unit" => 'px',
		            "type" => "range",
		        ) ,
				array(
		            "name" => __("Responsive Header Height", "mk_framework") ,
		            "desc" => __("You can change responsive header height using this option (default:90px). This option will only change the header height on screen width you define in Theme Settings => Global Settings => Main Navigation Threshold Width.", "mk_framework") ,
		            "id" => "res_header_height",
		            "default" => "90",
		            "min" => "50",
		            "max" => "200",
		            "step" => "1",
		            "unit" => 'px',
		            "type" => "range",
		        ) ,
				array(
		            "name" => __("Header Background Opacity", "mk_framework") ,
		            "desc" => __("You can change the opacity of your header section.", "mk_framework") ,
		            "id" => "header_opacity",
		            "min" => "0",
		            "max" => "1",
		            "step" => "0.1",
		            "unit" => 'opacity',
		            "default" => "1",
		            "type" => "range"
		        ) ,
				array(
		            "name" => __("Header Bottom Border Thickness", "mk_framework") ,
		            "desc" => __("This option will set the header bottom border thickness.", "mk_framework") ,
		            "id" => "header_btn_border_thickness",
		            "min" => "0",
		            "max" => "10",
		            "step" => "1",
		            "unit" => 'px',
		            "default" => "1",
		            "type" => "range"
		        ) ,
				array(
		            "name" => __('Header Bottom Border Color', "mk_framework") ,
		            "desc" => __("In all header styles this option will add/remove border bottom color to header section. This option will also add Main Navigation wrapper top border in header style 2.", "mk_framework") ,
		            "id" => "header_border_color",
		            "default" => "#ededed",
		            "type" => "color"
		        ) ,
				array(
		            "name" => __('Header Start Tour Link Color', "mk_framework") ,
		            "id" => "start_tour_color",
		            "default" => "#333",
		            "type" => "color"
		        ) ,
				array(
		            "name" => __('Header Burger Icon Color', "mk_framework") ,
		            "id" => "header_burger_color",
		            "default" => "",
		            "type" => "color"
		        ) ,
				array(
			        "name" => __('Container Background Color', "mk_framework"),
			        "desc" => __("This option will put your main navigation in a colored container. Use this option in header style #2", "mk_framework"),
			        "id" => "main_nav_bg_color",
			        "default" => "",
			        "type" => "color"
			    ),
			)
		) ,
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Background", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px;',
			"fields" => array()
		) ,
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Menu", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; background-color: #fff; margin-top: -31px;',
			"fields" => array(
				array(
			        "name" => __("Header Main Navigation Hover Style", "mk_framework"),
			        "desc" => __("Please note that hover style 5 does not work in header style 4.", "mk_framework"),
			        "id" => "main_nav_hover",
			        "default" => "5",
			        "options" => array(
			            "1" => 'header-hover-1.jpg',
			            "2" => 'header-hover-2.jpg',
			            "3" => 'header-hover-3.jpg',
			            "4" => 'header-hover-4.jpg',
			            "5" => 'header-hover-5.jpg',
			        ),
			        "type" => "visual_selector"
			    ),
			)
		) ,
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Top Level Menu", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px;',
			"fields" => array(
				array(
		            "name" => __('Top Level Text Weight', "mk_framework") ,
		            "id" => "main_nav_top_weight",
		            "default" => 600,
		            "type" => "font_weight"
		        ) ,
		        array(
		            "name" => __('Top Level Text Case', "mk_framework") ,
		            "id" => "main_menu_transform",
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
		            "name" => __('Top Level Text Size', "mk_framework") ,
		            "id" => "main_nav_top_size",
		            "min" => "10",
		            "max" => "50",
		            "step" => "1",
		            "unit" => 'px',
		            "default" => "13",
		            "type" => "range"
		        ) ,
		        array(
		            "name" => __('Top Level Text Letter Spacing', "mk_framework") ,
		            "id" => "main_nav_top_letter_spacing",
		            "min" => "0",
		            "max" => "5",
		            "step" => "1",
		            "unit" => 'px',
		            "default" => "0",
		            "type" => "range"
		        ) ,
				array(
		            "name" => __('Top Level Text Gutter Space', "mk_framework") ,
		            "desc" => __("This Value will be applied as padding to left and right of the item.", "mk_framework") ,
		            "id" => "main_nav_item_space",
		            "min" => "0",
		            "max" => "100",
		            "step" => "1",
		            "unit" => 'px',
		            "default" => "20",
		            "type" => "range"
		        ) ,
				array(
			        "name" => __('Top Level Text Color', "mk_framework"),
			        "id" => "main_nav_top_text_color",
			        "default" => "#444444",
			        "type" => "color"
			    ),
			    array(
			        "name" => __('Top Level Hover & Current Skin Color', "mk_framework"),
			        "desc" => __("The Main Menu hover & current menu item hover skin color. This color will be applied to the hover style you have chosen in above option (Header Main Navigation Hover Style).", "mk_framework"),
			        "id" => "main_nav_top_hover_skin",
			        "default" => "#f97352",
			        "type" => "color"
			    ),
			    array(
			        "name" => __('Top Level Hover & Current Text Color (Hover Style 3 & 4 Only)', "mk_framework"),
			        "desc" => __("This option will only work for main navigation hover style 3 current item text color and style 4 current & hover text color.", "mk_framework"),
			        "id" => "main_nav_top_hover_txt_color",
			        "default" => "#fff",
			        "type" => "color"
			    ),
			)
		) ,
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Sub Level Menu", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; background-color: #fff; margin-top: -31px;',
			"fields" => array(
		        array(
		            "name" => __('Sub Level Text Weight', "mk_framework") ,
		            "id" => "main_nav_sub_weight",
		            "default" => 400,
		            "type" => "font_weight"
		        ) ,
		        array(
		            "name" => __('Sub Level Text Case', "mk_framework") ,
		            "id" => "main_nav_sub_transform",
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
		            "name" => __('Sub Level Text Size', "mk_framework") ,
		            "id" => "main_nav_sub_size",
		            "min" => "10",
		            "max" => "50",
		            "step" => "1",
		            "unit" => 'px',
		            "default" => "12",
		            "type" => "range"
		        ) ,
		        array(
		            "name" => __('Sub Level Text Letter Spacing', "mk_framework") ,
		            "id" => "main_nav_sub_letter_spacing",
		            "min" => "0",
		            "max" => "5",
		            "step" => "1",
		            "unit" => 'px',
		            "default" => "1",
		            "type" => "range"
		        ) ,
				array(
			        "name" => __('Sub Level Text Color', "mk_framework"),
			        "id" => "main_nav_sub_text_color",
			        "default" => "#b3b3b3",
			        "type" => "color"
			    ),
			    array(
			        "name" => __('Sub Level Text Hover & Current Menu Item Color', "mk_framework"),
			        "id" => "main_nav_sub_text_color_hover",
			        "default" => "#ffffff",
			        "type" => "color"
			    ),
				array(
			        "name" => __('Sub Level Hover & Current Menu Item Background Color', "mk_framework"),
			        "id" => "main_nav_sub_hover_bg_color",
			        "default" => "",
			        "type" => "color"
			    ),
			    array(
			        "name" => __('Sub Level Box Border Top Color', "mk_framework"),
			        "desc" => __("If you want to remove this border leave this option empty.", "mk_framework"),
			        "id" => "main_nav_sub_border_top_color",
			        "default" => "#f97352",
			        "type" => "color"
			    ),
			    array(
			        "name" => __('Sub Level Background Color', "mk_framework"),
			        "id" => "main_nav_sub_bg_color",
			        "default" => "#333333",
			        "type" => "color"
			    ),
			    array(
			        "name" => __('Sub Level Icon Color', "mk_framework"),
			        "id" => "main_nav_sub_icon_color",
			        "default" => "#e0e0e0",
			        "type" => "color"
			    ),

			     array(
			        "name" => __("Sub Level Box Shadow", "mk_framework"),
			        "desc" => __("This option will add shadow to menu sub level boxes.", "mk_framework"),
			        "id" => "nav_sub_shadow",
			        "default" => 'false',
			        "type" => "toggle"
			    ),
			     array(
			        "name" => __('Sub Level Box Border Color', "mk_framework"),
			        "id" => "sub_level_box_border_color",
			        "default" => "",
			        "type" => "color"
			    ),
				array(
			        "name" => __('Sub Level Box Width', "mk_framework"),
			        "desc" => __("", "mk_framework"),
			        "id" => "main_nav_sub_width",
			        "min" => "100",
			        "max" => "500",
			        "step" => "1",
			        "unit" => 'px',
			        "default" => "230",
			        "type" => "range"
			    ),
				array(
			        "name" => __('Mega Menu title color ', "mk_framework"),
			        "id" => "main_nav_mega_title_color",
			        "default" => "#ffffff",
			        "type" => "color"
			    ),
			    array(
			        "name" => __("Mega Menu column Vertical Divders Color", "mk_framework"),
			        "desc" => __("Using this option you can change mega menu vertical dividers color. If you dont want those dividers simply clear the option value.", "mk_framework"),
			        "id" => "mega_menu_divider_color",
			        "default" => '',
			        "type" => "color"
			    ),
			)
		) ,
		array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Social Network", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9;border-top:1px solid #d9d9d9; margin-top: -31px;',
			"fields" => array(
				array(
		            "name" => __("Header Social Networks Location", "mk_framework") ,
		            "desc" => __("Using this option you can set the social network icons location in header or simply disable them.", "mk_framework") ,
		            "id" => "header_social_location",
		            "default" => 'toolbar',
		            "options" => array(
		                "toolbar" => __('Header Toolbar', "mk_framework") ,
		                "header" => __('Header Section', "mk_framework") ,
		                "disable" => __('Disable', "mk_framework") ,
		            ) ,
		            "type" => "dropdown",

		        ) ,
		        array(
		            "name" => __("Add New Social Media Link", "mk_framework") ,
		            "desc" => __("Select your social website and enter the full URL to your profile on the site, then click on add new button. then hit save settings.", "mk_framework") ,
		            "id" => "header_social_networks_site",
		            "default" => '',
		            "type" => 'social_share',
		            "dependency" => array(
		                   'element' => "header_social_location",
		                   'value' => array(
		                       'header',
		                       'toolbar'
		                   )
		            ),
		        ) ,
				array(
		            "id" => "header_social_networks_url",
		            "default" => "",
		            "type" => 'hidden_input',
		        ) ,
		        array(
		            "name" => __("Header Social Media Icons Style", "mk_framework") ,
		            "desc" => __("Don't use Simple Rounded, Square Pointed & Square Rounded styles within Header Toolbar", "mk_framework") ,
		            "id" => "header_social_networks_style",
		            "default" => 'circle',
		            "options" => array(
		                "circle" => __('Circled', "mk_framework") ,
		                "rounded" => __('Rounded', "mk_framework") ,
		                "simple" => __('Simple', "mk_framework") ,
		                "simple-rounded" => __('Simple Rounded', "mk_framework") ,
		                "square-pointed" => __('Square Pointed', "mk_framework") ,
		                "square-rounded" => __('Square Rounded', "mk_framework") ,
		            ) ,
		            "type" => "dropdown",
		            "dependency" => array(
		                   'element' => "header_social_location",
		                   'value' => array(
		                       'header',
		                       'toolbar'
		                   )
		            ),
		        ) ,
		        array(
		            "name" => __("Social Media Icon Size", "mk_framework") ,
		            "desc" => __("Icon size will be used for outline styles: Simple Rounded, Square Pointed & Square Rounded.", "mk_framework") ,
		            "type" => "dropdown",
		            "id" => "header_icon_size",
		            "default" => "small",
		            "options" => array(
		                "small" => "Small",
		                "medium" => "Medium",
		                "large" => "Large",
		            ) ,
		            "dependency" => array(
		                   'element' => "header_social_location",
		                   'value' => array(
		                       'header'
		                   )
		            ),
		        ) ,
				array(
                    "name" => __('Icon Color', "mk_framework") ,
                    "id" => "header_social_color",
                    "default" => "#999999",
                    "type" => "color"
                ) ,
                array(
                    "name" => __('Icon Hover Color', "mk_framework") ,
                    "id" => "header_social_hover_color",
                    "default" => "#ccc",
                    "type" => "color"
                ) ,
                array(
                    "name" => __('Background Color', "mk_framework") ,
                    "id" => "header_social_bg_main_color",
                    "default" => "#232323",
                    "type" => "color"
                ) ,
                array(
                    "name" => __('Background Hover Color', "mk_framework") ,
                    "id" => "header_social_bg_color",
                    "default" => "#232323",
                    "type" => "color"
                ) ,
				array(
                    "name" => __('Border Color', "mk_framework") ,
                    "id" => "header_social_border_color",
                    "default" => "#999999",
                    "type" => "color"
                ) ,
			)
		) ,
    )
);
