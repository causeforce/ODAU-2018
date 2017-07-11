<?php

/**
 *
 * @author      Bob Ulusoy
 * @copyright   Artbees LTD (c)
 * @link        http://artbees.net
 * @since       Version 5.0
 * @package     artbees
 */

// Exit if accessed directly
if (!defined('THEME_FRAMEWORK')) exit('No direct script access allowed');

// Don't duplicate me!
if (!class_exists('Mk_Options_Framework_Fields_Group')) {
    
    class Mk_Options_Framework_Fields_Group extends Mk_Options_Framework
    {
        
        /**
         * Field Constructor.
         *
         * @since       1.0.0
         * @access      public
         * @return      void
         */
        function __construct($value) {
            
            $this->id = $value['id'];
            $this->menu = $value['menu'];
            $this->fields = $value['fields'];
            $this->heading = array_key_exists('heading', $value) ? $value['heading'] : '';

            /**
             * Treat this as optional in render_sub_menus(). If 'default_field' is not provided,
             * we'll use  the first menu key as pointer. If we happen to have an empty menu,
             * we'll use the ID as the pointer.
             */
            $this->default_field = array_key_exists('default_field', $value) ? $value['default_field'] : '';
        }

        /**
         * Return top level menus and its submenus.
         *
         * @since 5.6 Removed sub-navigation and container ".mk-main-pane".
         */
        public function render() {
            $output = '';

            foreach ($this->fields as $field) {
                $output .= parent::build_fields($field);
            }

            return $output;
        }

        /**
         * Return top level menus and its sub-menus.
         *
         * @since 5.6 Introduced
         */
        public function render_menus() {
            $output = '';

            if ('' === $this->default_field) {
                if (!empty($this->menu)) {
                    $keys = array_keys($this->menu);
                    $key  = $keys[0];

                    // Get the first submenu item and make the parent item point to it.
                    $output .= '<li class="menu '.esc_attr($this->id).'">';
                    $output .= '<a href="#'.esc_attr($key).'"><span>'.esc_html($this->heading).'</span></a>';
                    $output .= '</li>';

                    unset($keys, $key);
                } else {
                    $output .= '<li class="menu '.esc_attr($this->id).'">';
                    $output .= '<a href="#'.esc_attr($this->id).'"><span>'.esc_html($this->heading).'</span></a>';
                    $output .= '</li>';
                }

            } else {
                $output .= '<li class="menu '.esc_attr($this->id).'">';
                $output .= '<a href="#'.esc_attr($this->default_field).'"><span>'.esc_html($this->heading).'</span></a>';
                $output .= '</li>';
            }

            if (empty($this->menu)) {
                return $output;
            }

            foreach ( $this->menu as $key => $option ) {
                $output .= '<li class="sub-menu '.esc_attr($key).'" data-parent="'.esc_attr($this->id).'">';
                $output .= '<a href="#'.$key.'">'.$option.'</a>';
                $output .= '</li>';
            }

            return $output;
        }

        /**
         * Enqueue Function.
         * If this field requires any scripts, or css define this function and register/enqueue the scripts/css
         *
         * @since       1.0.0
         * @access      public
         * @return      void
         */
        public function enqueue() {
        }
    }
}
