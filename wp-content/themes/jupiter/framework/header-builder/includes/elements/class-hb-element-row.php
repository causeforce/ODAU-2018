<?php
/**
 * Render 'Row' element to the front end
 *
 * @package Header_Builder
 * @subpackage Elements_Generator
 * @since 0.1.0
 */

/**
 * Main class used for rendering 'Button' element to the front end.
 *
 * @since 0.1.0
 */
class HB_Element_Row extends HB_Element {
    /**
     * Constructor.
     *
     * @since 0.1.0
     *
     * @param array $element {
     *     The data to transform into HTML/CSS.
     *
     *     @type string $type
     *     @type string $caption
     *     @type string $id
     *     @type string $category
     *     @type array $options {
     *           Array of element CSS properties and other settings.
     *
     *           @type string $padding The padding of the row. Default is ''.
     *           @type string $margin  The margin of the row. Default is ''.
     *     }
     * }
     * @param int   $row_index     Numeric index for the row.
     */
    public function __construct( array $element, $row_index, $content ) {
        parent::__construct( $element, $row_index, false, false );

        $this->padding = $this->get_option( 'padding', '' );
        $this->margin  = $this->get_option( 'margin', '' );
        $this->content = $content;
        $this->class   = 'row-' . $row_index;
    }

    /**
     * Generate the element's markup and style for use on the front-end.
     *
     * @since 0.1.0
     *
     * @return array {
     *      HTML and CSS for the element, based on all its given properties and settings.
     *
     *      @type string $markup Element HTML code.
     *      @type string $style Element CSS code.
     * }
     */
    public function get_src() {
        $markup = sprintf('<div class="row %s">%s</a>',
            esc_attr( $this->class_name ),
            $this->content
        );

        $padding = $this->get_directions_style( 'padding', $this->padding );
        $margin  = $this->get_directions_style( 'margin', $this->margin );

        $style = "
            .{$this->class} {
                {$padding}
                {$margin}
            }";

        return compact( 'markup', 'style' );
    }

    public function get_directions_style( $property, $data ) {
        $style = '';
        if ( ! empty( $data ) ) {
            foreach ( $data as $key => $value ) {
                $property_name = strtolower( str_replace( $property, $property . '-', $key ) );
                $style .= $property_name . ': ' . $value . 'px;';
            }
        }
        return $style;
    }
}
