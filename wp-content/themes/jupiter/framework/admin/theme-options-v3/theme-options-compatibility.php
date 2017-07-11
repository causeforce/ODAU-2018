<?php 

/**
 * A temp solution to switch Theme options
 */

$get_mk_to_switch = ! empty( $_GET['mk_to_switch'] ) ? $_GET['mk_to_switch'] : '';
$get_mk_to_dismiss = ! empty( $_GET['mk_to_dismiss'] ) ? $_GET['mk_to_dismiss'] : '';
$get_wpnonce = ! empty( $_GET['_wpnonce'] ) ? $_GET['_wpnonce'] : '';

// Check nonce then update or delete the values
if ( isset( $get_wpnonce ) && wp_verify_nonce( $get_wpnonce ) ) {
    // Set switch to true if mk_to_switch get is set
    if ( $get_mk_to_switch == 'true' ) {
        update_option( 'mk_to_switch', 'true' );
    }

    // Delete mk_to_switch when false
    if ( $get_mk_to_switch == 'false' ) {
        delete_option( 'mk_to_switch' );
    }

    // If dissmiss, hide the notice in only new theme options
    if ( $get_mk_to_dismiss == 'true' ) {
        update_option( 'mk_to_dismiss', true );
    }

    if ( $get_mk_to_dismiss == 'false' ) {
        delete_option( 'mk_to_dismiss' );
    }
}

// Delete mk_to_switch/dismiss on theme switch
add_action('after_switch_theme', 'mk_theme_switch');

function mk_theme_switch() {
    delete_option( 'mk_to_switch' );
    delete_option( 'mk_to_dismiss' );
}

// Get option from database
$mk_to_switch = get_option( 'mk_to_switch' );

// Load old version
if ( ! empty( $mk_to_switch ) && $mk_to_switch == 'true' ) {
    
    add_action('admin_menu', 'mk_admin_menus' );
    
    function mk_admin_menus() {
        
        //$theme_options_menu_text = '<span class="menu-theme-options"><span class="dashicons-before dashicons-admin-generic"></span>' . __('Theme Options', 'mk_framework') . '</span>';
            
        add_submenu_page(THEME_NAME, __('Theme Options', 'mk_framework'), __('Theme Options', 'mk_framework'), 'edit_theme_options', 'theme_options', 'theme_options_func' );
        
        function theme_options_func()
        {
            $version = '';

            if ('' != THEME_OPTIONS_VERSION) {
                $version = '-' . THEME_OPTIONS_VERSION;
            }

            if (THEME_OPTIONS_DEV_VERSION && isset($_GET['page']) && 'theme_options_' . THEME_OPTIONS_DEV_VERSION == $_GET['page']) {
                $version = '-' . THEME_OPTIONS_DEV_VERSION;
            }

            $page = include_once THEME_ADMIN . '/theme-options'.$version.'/masterkey.php';
            new Mk_Options_Framework($page['options']);
        }
        
    }
    
    add_action( 'admin_notices', 'mk_old_to_notice' );
    
    function mk_old_to_notice() {
        $currentScreen = get_current_screen();
        if ( $currentScreen->base != 'jupiter_page_theme_options' ) {
            return;
        }
    ?>
        <div class="error notice">
            <p><strong>Theme Options older version</strong> – This version of Theme Options is not current but still usable. You may <a href="<?php echo wp_nonce_url( admin_url( 'admin.php?page=theme_options&mk_to_switch=false' ) ); ?>">switch</a> to the new version if you haven’t already. If you are switching over from the new version, you may keep using this version for now and  <a href="https://themes.artbees.net/dashboard/tickets/" target="_blank">report</a> to us the issues you experienced.</p>
        </div>
    <?php
    }
    
    return;
}

// Load new version
include_once THEME_ADMIN . '/theme-options-v3/class-init.php';