<?php
if (!defined('THEME_FRAMEWORK')) exit('No direct script access allowed');

/**
 * This class will constrcut the theme options.
 *
 * @author      Bob Ulusoy
 * @copyright   Artbees LTD (c)
 * @link        http://artbees.net
 * @since       Version 5.0
 * @package     artbees
 */

class Mk_Options_Framework
{
    
    var $options;
    var $saved_options;
    var $_renderState;
    
    function __construct($options) {
        $this->options = $options;
        $this->render();    

        
    }
    
    function render() {
        
        $saved_options = get_option(THEME_OPTIONS);
        $compatibility = new Compatibility();
        $compatibility->setSchedule('off');
        $compatibility_response = $compatibility->compatibilityCheck();
        echo $compatibility_response;
        ?>
        <div class="mk-options-container mk-options-v2-container">
        <form action="" type="post" name="masterkey_settings" id="masterkey_settings">

        <div id="mk-are-u-sure" class="mk-message-box ">
        <img src="<?php echo THEME_ADMIN_ASSETS_URI; ?>/images/warning-icon.png" />
        <span class="mk-message-text"><?php _e( 'Are you sure you want to reset to default?', 'mk_framework' ); ?></span>
        <a href="#" style="padding: 11px 35px;" class="primary-button blue-button mk_reset_ok" id="mk_reset_ok"><?php _e( 'OK', 'mk_framework' ); ?></a>
        <a href="#" class="secondary-button full-rounded popup-toggle-close"><?php _e( 'Cancel', 'mk_framework' ); ?></a>
        </div>

        <div id="mk-success-reset" class="mk-message-box">
        <img src="<?php echo THEME_ADMIN_ASSETS_URI; ?>/images/success-icon.png" />
        <span class="mk-message-text"><?php _e( 'All options restored to defaults', 'mk_framework' ); ?></span>
        <a href="#" class="primary-button blue-button popup-toggle-close"><?php _e( 'Got it!', 'mk_framework' ); ?></a>
        </div>

        <div id="mk-success-import" class="mk-message-box">
        <img src="<?php echo THEME_ADMIN_ASSETS_URI; ?>/images/success-icon.png" />
        <span class="mk-message-text"><?php _e( 'All options have been imported successfully', 'mk_framework' ); ?></span>
        </div>

        <div id="mk-fail-import" class="mk-message-box">
        <img src="<?php echo THEME_ADMIN_ASSETS_URI; ?>/images/warning-icon.png" />
        <span class="mk-message-text"><?php _e( 'Nothing has been imported...', 'mk_framework' ); ?></span>
        </div>

        <div class="mk-main-sidebar-navigator">
            <ul class="mk-main-sidebar-navigator-ul">
                <?php
                    if(is_array($this->options) && !empty($this->options)) {
                        foreach ($this->options as $option) {
                            echo $this->build_menus($option, $saved_options = false);
                        }
                        unset($option);
                    }
                ?>
            </ul>
        </div>

        <div class="mk-main-panes hidden-view">
        <?php 
        if(is_array($this->options) && !empty($this->options)) {
            foreach ($this->options as $option) {
                echo $this->build_fields($option, $saved_options = false);
            }
            unset($option);
        }
        ?>
        
        </div>

        <div id="save_theme_options_top" style="top: 14px;">

              <figure class="progress-circle">
                <div class="progress-msg"></div>
                <svg width="46" height="46">
                  <circle class="progress-circle__line inner" cx="23" cy="23" r="20" />
                  <circle class="progress-circle__line outer" cx="23" cy="23" r="20" />
                </svg>
                <svg class="success-icon" width="30" height="30">
                    <path d="M13.786,19.144l5.464-8.286"/>
                    <path d="M13.786,19.144l-4.313-3.812"/>
                </svg>
                <svg class="error-icon" width="30" height="30">
                    <path d="M15,15L9.433,9.434"/>
                    <path d="M15,15l5.567,5.566"/>
                    <path d="M15,15l-5.566,5.566"/>
                    <path d="M15,15l5.567-5.566"/>
                </svg>
              </figure>

            <button type="submit" name="save_theme_options_top" class="primary-button blue-button"><span><?php echo _e('Save Settings', 'mk_framework'); ?></span></button>
        </div>

        <div class="mk-footer-buttons">
            <a type="submit" id="mk_reset_confirm" href="#" class="primary-button outline-button">
                <span><?php echo _e('Restore Defaults', 'mk_framework'); ?></span>
            </a>
            <button type="submit" id="reset_theme_options" name="reset_theme_options" class="visuallyhidden"></button>

              <figure class="progress-circle">
                <div class="progress-msg"></div>
                <svg width="46" height="46">
                  <circle class="progress-circle__line inner" cx="23" cy="23" r="20" />
                  <circle class="progress-circle__line outer" cx="23" cy="23" r="20" />
                </svg>
                <svg class="success-icon" width="30" height="30">
                    <path d="M13.786,19.144l5.464-8.286"/>
                    <path d="M13.786,19.144l-4.313-3.812"/>
                </svg>
                <svg class="error-icon" width="30" height="30">
                    <path d="M15,15L9.433,9.434"/>
                    <path d="M15,15l5.567,5.566"/>
                    <path d="M15,15l-5.566,5.566"/>
                    <path d="M15,15l5.567-5.566"/>
                </svg>
              </figure>

            <button type="submit" id="save_theme_options_bottom" name="save_theme_options_bottom" class="primary-button blue-button"><span><?php echo _e('Save Settings', 'mk_framework'); ?></span></button>
        </div>
        
        <div class="clearboth"></div>
        <?php wp_nonce_field('mk-ajax-theme-options', 'security'); ?>
        <input type="hidden" name="action" value="mk_theme_save" />
        </form>
        </div>
      <?php   

      $this->_renderState = true;
    }

    public function build_menus($option, $saved_options = false) {
        $field_type = $option['type'];
        $field_class = "Mk_Options_Framework_fields_$field_type";
        $class_file = THEME_ADMIN . "/theme-options-v2/builder/fields/field_$field_type.php";

        if (!class_exists($field_class)) {
            if (!file_exists($class_file)) {
                $class_file = THEME_ADMIN . "/theme-options/builder/fields/field_$field_type.php";
            }

            if (file_exists($class_file)) {
                require_once ($class_file);
            }
        }

        $field = new $field_class($option, $saved_options);

        return $field->render_menus();

        unset($field);
    }
    
    public function build_fields($option, $saved_options = false) {
        
        //if(!isset($option['type'])) return false;
        
        $field_type = $option['type'];
        
        //echo $field_type ."\n";
        
        // Getting Field type class name
        $field_class = "Mk_Options_Framework_fields_$field_type";
        
        // getting the field file directory
        $class_file = THEME_ADMIN . "/theme-options-v2/builder/fields/field_$field_type.php";
        
        // run the requested field from the fields directory
        if (!class_exists($field_class)) {
            if (!file_exists($class_file)) {
                $class_file = THEME_ADMIN . "/theme-options/builder/fields/field_$field_type.php";
            }

            if (file_exists($class_file)) {
                require_once ($class_file);
            }
        }
        
        // Instantiate the field class and pass $option array.
        $field = new $field_class($option, $saved_options);
        
        // Render and output the field data
        return $field->render();
        
        // Enqueue scripts or styles if there are any to print.
        /*if (method_exists($field_class, 'enqueue')) {
            $field->enqueue();
        }*/
        
        unset($field);
    }
    
    // Return saved option if any otherwise it will return default value set for specific option.
    public function saved_default_value($id, $default) {
        $saved_options = get_option(THEME_OPTIONS);
        if (isset($saved_options[$id])) {
            return $saved_options[$id];
        } 
        else {
            return $default;
        }
    }
    
    public function field_wrapper($id, $name, $desc, $option_output, $dependency = false) {
        $output = '<div class="mk-single-option" id="' . $id . '_wrapper"'.$dependency.'>';
        
        $output.= '<label for="' . $id . '"><span>' . $name . '</label>';
        
        if (isset($desc)) {
            $output.= '<span class="option-desc">' . $desc . '</span>';
        }
        
        $output.= $option_output;
        
        $output.= '</div>';
        
        return $output;
    }


    public function dependency_builder($val) 
    {
        if(!isset($val) && empty($val)) return false;


        $output  = isset($val['element']) ? ' data-dependency-mother="'.$val['element'].'" ' : '';
        $output .= isset($val['value']) ? ' data-dependency-value=\''.json_encode($val['value']).'\' ' : '';


        return $output;
    }


    public static function get_post_types() {
        $post_type = get_post_types();

        unset(
            $post_type['post'],
            $post_type['page'],
            $post_type['attachment'],
            $post_type['nav_menu_item'],
            $post_type['revision'],
            $post_type['clients'],
            $post_type['animated-columns'],
            $post_type['edge'],
            $post_type['portfolio'],
            $post_type['shop_order'],
            $post_type['shop_order_refund'],
            $post_type['shop_coupon'],
            $post_type['shop_webhook'],
            $post_type['banner_builder'],
            $post_type['banner_builder']
            );
        return $post_type;
    }

}

