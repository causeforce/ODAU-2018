<?php

require_once THEME_ADMIN . '/theme-options-v2/builder/framework.php';

$general_section = $main_content_section = $header_section = $header_toolbar_section = $page_title_section = $elements_section = $footer_section = $sidebar_section = $search_section = $blog_section = $portfolio_section = $shop_section = $advanced_section = $options = array();

require_once THEME_ADMIN . '/theme-options-v2/params/general_settings/global.php';
require_once THEME_ADMIN . '/theme-options-v2/params/general_settings/logos.php';
require_once THEME_ADMIN . '/theme-options-v2/params/general_settings/preloader.php';
require_once THEME_ADMIN . '/theme-options-v2/params/general_settings/quick_contact.php';
require_once THEME_ADMIN . '/theme-options-v2/params/general_settings/api-integrations.php';

$options[] = array(
    "type" => "group",
    "id" => "mk_options_general",
    "heading" => __("General", "mk_framework"),
    "default_field" => "mk_options_site_settings_section",
    "menu" => array(
        "mk_options_site_settings_section" => __("Site Settings", "mk_framework") ,
        "mk_options_logo_and_title_section" => __("Logo &amp; Title", "mk_framework") ,
        "mk_options_preloader_section" => __("Pre-loader", "mk_framework") ,
        "mk_options_quick_contact_section" => __("Quick Contact", "mk_framework") ,
        "mk_options_api_integrations_section" => __("API Integrations", "mk_framework") ,
    ) ,
    "fields" => $general_section
);

require_once THEME_ADMIN . '/theme-options-v2/params/main_content/layout_and_background.php';
require_once THEME_ADMIN . '/theme-options-v2/params/main_content/texts.php';

$options[] = array(
    "type" => "group",
    "id" => "mk_options_main_content",
    "heading" => __("Main Content", "mk_framework"),
    "default_field" => "mk_options_layout_and_backgrounds_section",
    "menu" => array(
        "mk_options_layout_and_backgrounds_section" => __("Layout &amp; Backgrounds", "mk_framework") ,
        "mk_options_texts_section" => __("Texts", "mk_framework") ,
    ) ,
    "fields" => $main_content_section
);

require_once THEME_ADMIN . '/theme-options-v2/params/header/header.php';
require_once THEME_ADMIN . '/theme-options-v2/params/header/mobile_header.php';
require_once THEME_ADMIN . '/theme-options-v2/params/header/sticky_header.php';
require_once THEME_ADMIN . '/theme-options-v2/params/header/full_screen_menu.php';
require_once THEME_ADMIN . '/theme-options-v2/params/header/side_dashboard.php';

$options[] = array(
    "type" => "group",
    "id" => "mk_options_header",
    "heading" => __("Header", "mk_framework"),
    "default_field" => "mk_options_header_section",
    "menu" => array(
        "mk_options_header_section" => __("Header", "mk_framework") ,
        "mk_options_mobile_header_section" => __("Mobile Header", "mk_framework") ,
        "mk_options_sticky_header_section" => __("Sticky Header", "mk_framework") ,
        "mk_options_side_dashboard_section" => __("Side Dashboard", "mk_framework") ,
        "mk_options_full_screen_menu_section" => __("Full Screen Menu", "mk_framework") ,
    ) ,
    "fields" => $header_section
);

require_once THEME_ADMIN . '/theme-options-v2/params/header_toolbar/header_toolbar.php';

$options[] = array(
    "type" => "group",
    "id" => "mk_options_header_toolbar",
    "heading" => __("Header Toolbar", "mk_framework"),
    "default_field" => "mk_options_header_toolbar_section",
    "menu" => array(
        "mk_options_header_toolbar_section" => __("Header Toolbar", "mk_framework") ,
    ) ,
    "fields" => $header_toolbar_section
);

require_once THEME_ADMIN . '/theme-options-v2/params/page_title/page_title.php';
require_once THEME_ADMIN . '/theme-options-v2/params/page_title/breadcrumbs.php';

$options[] = array(
    "type" => "group",
    "id" => "mk_options_page_title",
    "heading" => __("Page Title", "mk_framework"),
    "default_field" => "mk_options_page_title_section",
    "menu" => array(
        "mk_options_page_title_section" => __("Page Title", "mk_framework") ,
        "mk_options_breadcrumbs_section" => __("Breadcrumbs", "mk_framework") ,
    ) ,
    "fields" => $page_title_section
);

require_once THEME_ADMIN . '/theme-options-v2/params/elements/typography.php';

$options[] = array(
    "type" => "group",
    "id" => "mk_options_elements",
    "heading" => __("Elements", "mk_framework"),
    "default_field" => "mk_options_typography_section",
    "menu" => array(
        "mk_options_typography_section" => __("Typography", "mk_framework") ,
    ) ,
    "fields" => $elements_section
);

require_once THEME_ADMIN . '/theme-options-v2/params/footer/footer.php';
require_once THEME_ADMIN . '/theme-options-v2/params/footer/sub_footer.php';

$options[] = array(
    "type" => "group",
    "id" => "mk_options_footer",
    "heading" => __("Footer", "mk_framework"),
    "default_field" => "mk_options_footer_section",
    "menu" => array(
        "mk_options_footer_section" => __("Footer", "mk_framework") ,
        "mk_options_sub_footer_section" => __("Sub Footer", "mk_framework") ,
    ) ,
    "fields" => $footer_section
);

require_once THEME_ADMIN . '/theme-options-v2/params/sidebar/sidebar.php';

$options[] = array(
    "type" => "group",
    "id" => "mk_options_sidebar",
    "heading" => __("Sidebar", "mk_framework"),
    "default_field" => "mk_options_sidebar_section",
    "menu" => array(
        "mk_options_sidebar_section" => __("Sidebar", "mk_framework") ,
    ) ,
    "fields" => $sidebar_section
);

require_once THEME_ADMIN . '/theme-options-v2/params/search/search.php';

$options[] = array(
    "type" => "group",
    "id" => "mk_options_search",
    "heading" => __("Search", "mk_framework"),
    "default_field" => "mk_options_search_section",
    "menu" => array(
        "mk_options_search_section" => __("Search", "mk_framework") ,
    ) ,
    "fields" => $search_section
);

require_once THEME_ADMIN . '/theme-options-v2/params/blog/single.php';
require_once THEME_ADMIN . '/theme-options-v2/params/blog/meta.php';
require_once THEME_ADMIN . '/theme-options-v2/params/blog/archive.php';
require_once THEME_ADMIN . '/theme-options-v2/params/blog/news.php';

$options[] = array(
    "type" => "group",
    "id" => "mk_options_blog",
    "heading" => __("Blog", "mk_framework"),
    "default_field" => "mk_options_blog_single_post_section",
    "menu" => array(
        "mk_options_blog_single_post_section" => __("Blog Single Post", "mk_framework") ,
        "mk_options_blog_meta_section" => __("Blog Meta", "mk_framework") ,
        "mk_options_blog_archive_section" => __("Blog Archive", "mk_framework") ,
        "mk_options_news_section" => __("News", "mk_framework") ,
    ) ,
    "fields" => $blog_section
);

require_once THEME_ADMIN . '/theme-options-v2/params/portfolio/single.php';
require_once THEME_ADMIN . '/theme-options-v2/params/portfolio/archive.php';

$options[] = array(
    "type" => "group",
    "id" => "mk_options_portfolio",
    "heading" => __("Portfolio", "mk_framework"),
    "default_field" => "mk_options_portfolio_single_post_section",
    "menu" => array(
        "mk_options_portfolio_single_post_section" => __("Portfolio Single Post", "mk_framework") ,
        "mk_options_portfolio_archive_section" => __("Portfolio Archive", "mk_framework") ,
    ) ,
    "fields" => $portfolio_section
);

require_once THEME_ADMIN . '/theme-options-v2/params/ecommerce/general.php';
require_once THEME_ADMIN . '/theme-options-v2/params/ecommerce/single.php';

$options[] = array(
    "type" => "group",
    "id" => "mk_options_shop",
    "heading" => __("Shop", "mk_framework"),
    "default_field" => "mk_options_woo_general_section",
    "menu" => array(
        "mk_options_woo_general_section" => __("General", "mk_framework") ,
        "mk_options_woo_single_product_section" => __("E-commerce Single Product", "mk_framework") ,
    ) ,
    "fields" => $shop_section
);

require_once THEME_ADMIN . '/theme-options-v2/params/advanced/speed_optimizations.php';
require_once THEME_ADMIN . '/theme-options-v2/params/advanced/post_types.php';
require_once THEME_ADMIN . '/theme-options-v2/params/advanced/custom_css.php';
require_once THEME_ADMIN . '/theme-options-v2/params/advanced/custom_js.php';
require_once THEME_ADMIN . '/theme-options-v2/params/advanced/export.php';
require_once THEME_ADMIN . '/theme-options-v2/params/advanced/import.php';

$options[] = array(
    "type" => "group",
    "id" => "mk_options_advanced",
    "heading" => __("Advanced", "mk_framework"),
    "default_field" => "mk_options_speed_optimizations_section",
    "menu" => array(
        "mk_options_speed_optimizations_section" => __("Speed Optimizations", "mk_framework") ,
        "mk_options_post_types_section" => __("Post Types", "mk_framework") ,
        "mk_options_custom_css_section" => __("Custom CSS", "mk_framework") ,
        "mk_options_custom_js_section" => __("Custom JS", "mk_framework") ,
        "mk_options_export_options_section" => __("Export Theme Options", "mk_framework") ,
        "mk_options_import_options_section" => __("Import Theme Options", "mk_framework") ,
    ) ,
    "fields" => $advanced_section
);

/**
 * Filters settings in Theme Options.
 *
 * @since 5.5
 *
 * @param array $options
 */
$options = apply_filters( 'mk_jupiter_theme_options_settings', $options );

return array(
    'name' => THEME_OPTIONS,
    'options' => $options
);
